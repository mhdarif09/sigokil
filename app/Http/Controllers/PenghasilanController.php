<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class PenghasilanController extends Controller
{
    public function index()
    {
        // Fetch all paid orders
        $orders = Order::where('status', 'paid')->get();

        // Calculate total earnings
        $totalEarnings = $orders->sum(function ($order) {
            // Use the total field from the Order model
            return $order->total + 5000; // Fixed shipping cost
        });

        return view('seller.penghasilan.penghasilansaya', compact('orders', 'totalEarnings'));
    }

    public function saldoSaya()
    {
        // Fetch all paid orders
        $orders = Order::where('status', 'paid')->get();

        // Calculate total earnings
        $totalEarnings = $orders->sum(function ($order) {
            // Use the total field from the Order model
            return $order->total + 5000; // Fixed shipping cost
        });

        // Calculate saldo
        $saldo = $totalEarnings; // Assuming saldo is equivalent to total earnings

        return view('seller.penghasilan.saldosaya', compact('orders', 'saldo'));
    }
}
