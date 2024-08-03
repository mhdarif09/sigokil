<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class QRISController extends Controller
{
    public function show($orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('qris.payment', compact('order'));
    }
}
