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
        $cart = session()->get('cart', []);
        $cartItems = collect($cart)->map(function ($item) {
            $product = Product::find($item['product_id']);
            return (object) array_merge($item, ['product' => $product]);
        });

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
        ]);

        $cart = session()->get('cart', []);
        $cartItems = collect($cart)->map(function ($item) {
            $product = Product::find($item['product_id']);
            return (object) array_merge($item, ['product' => $product]);
        });

        $subtotal = $this->calculateSubtotal($cartItems);
        $shippingCost = $this->calculateShippingCost();
        $total = $subtotal + $shippingCost;

        // Buat pesanan
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
            'payment_method' => 'qris', // Set langsung ke 'qris'
            'shipping_cost' => $shippingCost,
        ]);

        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'quantity' => $item->quantity,
                'price' => $item->product->price,
            ]);
        }

        // Hapus item dari keranjang setelah pesanan dibuat
        session()->forget('cart');

        // Redirect ke halaman QRIS payment
        return redirect()->route('qris.payment', ['order' => $order->id]);
    }

    protected function calculateSubtotal($cartItems)
    {
        $subtotal = 0;
        foreach ($cartItems as $item) {
            $subtotal += $item->product->price * $item->quantity;
        }
        return $subtotal;
    }

    protected function calculateShippingCost()
    {
        return 5000; // Contoh biaya statis
    }
}
