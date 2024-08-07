<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class QRISController extends Controller
{
    public function show($orderId)
    {
        $order = Order::with('items')->findOrFail($orderId);

        // Calculate subtotal
        $subtotal = $order->items->sum(function($item) {
            return $item->price * $item->quantity;
        });

        // Set fixed shipping cost
        $shippingCost = 5000; // Biaya pengiriman tetap

        // Calculate total
        $total = $subtotal + $shippingCost;

        return view('qris.payment', compact('order', 'subtotal', 'shippingCost', 'total'));
    }

    public function accept($orderId)
    {
        $order = Order::with('items')->findOrFail($orderId);
    
        // Calculate subtotal
        $subtotal = $order->items->sum(function($item) {
            return $item->price * $item->quantity;
        });
    
        // Set fixed shipping cost
        $shippingCost = 5000; // Biaya pengiriman tetap
    
        // Calculate total
        $total = $subtotal + $shippingCost;
        
        // Update order status to paid
        $order->update(['status' => 'paid']);
        
        // Redirect to the QRIS success page with the total amount
        return redirect()->route('qris.pembayaranberhasil')->with([
            'success' => 'Payment accepted and order processed.',
            'total' => $total,
            'orderId' => $order->id,
        ]);
    }

    public function reject($orderId)
    {
        $order = Order::findOrFail($orderId);
        
        // Update order status to rejected
        $order->update(['status' => 'rejected']);
        
        // Redirect to the seller's earnings page
        return redirect()->route('penghasilan.saya')->with('error', 'Payment rejected.');
    }
}
