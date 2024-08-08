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

        return view('seller.penghasilan.penghasilansaya', compact('orders', 'totalEarnings'));
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

        return view('seller.penghasilan.saldosaya', compact('orders', 'saldo'));
    }

    public function tarikDana(Request $request)
    {
        // Validate request
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

        return redirect()->route('seller.penghasilan.penghasilansaya')->with('success', 'Withdrawal request submitted');
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

    public function tarikDanaView()
    {
        $bankAccounts = BankAccount::where('user_id', auth()->id())->get();
        return view('seller.penghasilan.tarikdana', compact('bankAccounts'));
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

        return redirect()->back()->with('success', 'Withdrawal accepted');
    }
}
