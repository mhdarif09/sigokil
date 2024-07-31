<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function create()
    {
        $cartItems = Cart::where('user_id', Auth::id())->get();
        foreach ($cartItems as $item) {
            $item->product = Product::find($item->product_id);
        }

        $subtotal = $this->calculateSubtotal($cartItems);
        $shippingCost = $this->calculateShippingCost();
        $total = $subtotal + $shippingCost;

        return view('checkout.create', compact('cartItems', 'subtotal', 'shippingCost', 'total'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'postal_code' => 'required|string|max:10',
            'payment_method' => 'required|string|max:255',
        ]);

        $cartItems = Cart::where('user_id', Auth::id())->get();
        $subtotal = $this->calculateSubtotal($cartItems);
        $shippingCost = $this->calculateShippingCost();
        $total = $subtotal + $shippingCost;

        $order = Order::create([
            'user_id' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'state' => $request->state,
            'address' => $request->address,
            'postal_code' => $request->postal_code,
            'total' => $total,
            'payment_method' => $request->payment_method,
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'price' => $item->price,
            ]);
        }

        Cart::where('user_id', Auth::id())->delete();

        return redirect()->route('orders.show', $order->id)->with('success', 'Order placed successfully.');
    }

    protected function calculateSubtotal($cartItems)
    {
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item->price * $item->quantity;
        }
        return $subtotal;
    }

    protected function calculateShippingCost()
    {
        return 5000; // Example static cost
    }
}
