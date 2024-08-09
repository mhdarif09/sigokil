<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Transaction;
use App\Models\BankAccount;

class PenghasilanController extends Controller
{
    public function index()
    {
        // Fetch all paid orders
        $orders = Order::where('status', 'paid')->get();

        // Calculate total earnings
        $totalEarnings = $orders->sum(function ($order) {
            return $order->total + 5000; // Fixed shipping cost
        });

        // Fetch all withdrawal transactions for the authenticated user
        $withdrawals = Transaction::where('user_id', auth()->id())
            ->where('type', 'withdrawal')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('seller.penghasilan.penghasilansaya', compact('orders', 'totalEarnings', 'withdrawals'));
    }

    public function saldoSaya()
    {
        // Fetch all paid orders
        $orders = Order::where('status', 'paid')->get();

        // Calculate total earnings minus accepted withdrawals
        $totalEarnings = $orders->sum(function ($order) {
            return $order->total + 5000; // Fixed shipping cost
        });

        $acceptedWithdrawals = Transaction::where('user_id', auth()->id())
            ->where('type', 'withdrawal')
            ->where('status', 'accepted')
            ->sum('amount');

        // Calculate saldo
        $saldo = $totalEarnings - $acceptedWithdrawals;

        // Fetch all withdrawal transactions for the authenticated user
        $withdrawals = Transaction::where('user_id', auth()->id())
            ->where('type', 'withdrawal')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('seller.penghasilan.saldosaya', compact('orders', 'saldo', 'withdrawals'));
    }

    public function tarikDanaView()
{
    // Fetch the authenticated user's bank accounts
    $bankAccount = BankAccount::where('user_id', auth()->id())->first();

    // Fetch all paid orders
    $orders = Order::where('status', 'paid')->get();

    // Calculate total earnings minus accepted withdrawals
    $totalEarnings = $orders->sum(function ($order) {
        return $order->total + 5000; // Fixed shipping cost
    });

    $acceptedWithdrawals = Transaction::where('user_id', auth()->id())
        ->where('type', 'withdrawal')
        ->where('status', 'accepted')
        ->sum('amount');

    // Calculate current balance
    $currentBalance = $totalEarnings - $acceptedWithdrawals;

    // Fetch all withdrawal transactions for the authenticated user
    $transactions = Transaction::where('user_id', auth()->id())
        ->where('type', 'withdrawal')
        ->orderBy('created_at', 'desc')
        ->get();

    // Pass the bank account, current balance, and transactions to the view
    return view('seller.penghasilan.tarikdana', compact('bankAccount', 'currentBalance', 'transactions'));
}



    // Method to handle the withdrawal request
    public function tarikDana(Request $request)
    {
        // Validate the request
        $request->validate([
            'amount' => 'required|numeric|min:0',
            'bank_account_id' => 'required|exists:bank_accounts,id',
        ]);

        // Fetch all paid orders
        $orders = Order::where('status', 'paid')->get();

        // Calculate total earnings minus accepted withdrawals
        $totalEarnings = $orders->sum(function ($order) {
            return $order->total + 5000; // Fixed shipping cost
        });

        $acceptedWithdrawals = Transaction::where('user_id', auth()->id())
            ->where('type', 'withdrawal')
            ->where('status', 'accepted')
            ->sum('amount');

        // Calculate saldo
        $saldo = $totalEarnings - $acceptedWithdrawals;

        // Check if the requested amount is available
        if ($request->amount > $saldo) {
            return redirect()->back()->withErrors(['Insufficient funds']);
        }

        // Record the transaction with pending status
        Transaction::create([
            'user_id' => auth()->id(),
            'amount' => $request->amount,
            'bank_account_id' => $request->bank_account_id,
            'type' => 'withdrawal',
            'status' => 'pending',
        ]);

        return redirect()->route('seller.penghasilan.tarikdana')->with('success', 'Withdrawal request submitted and is pending admin approval');
    }

    public function tambahRekening(Request $request)
    {
        // Validate request
        $request->validate([
            'bank_name' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'account_holder' => 'required|string|max:255',
        ]);

        // Add new bank account
        BankAccount::create([
            'user_id' => auth()->id(),
            'bank_name' => $request->bank_name,
            'account_number' => $request->account_number,
            'account_holder' => $request->account_holder,
        ]);

        return redirect()->route('seller.penghasilan.penghasilansaya')->with('success', 'Bank account added successfully');
    }


    public function tambahRekeningView()
    {
        return view('seller.penghasilan.tambahrekening');
    }

    // Method for admin to accept withdrawal
    public function acceptWithdrawal($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->update(['status' => 'accepted']);

        return redirect()->route('admin.transactions')->with('success', 'Withdrawal accepted');
    }

    // Method for admin to reject withdrawal
    public function rejectWithdrawal($transactionId)
    {
        $transaction = Transaction::findOrFail($transactionId);
        $transaction->update(['status' => 'rejected']);

        return redirect()->route('admin.transactions')->with('success', 'Withdrawal rejected');
    }

    public function adminTransactions()
    {
        // Fetch pending transactions
        $transactions = Transaction::where('status', 'pending')->get();

        return view('admin.transactions.index', compact('transactions'));
    }
}
