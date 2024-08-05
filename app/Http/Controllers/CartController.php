<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
{
    $request->validate([
        'quantity' => 'required|integer|min:1',
    ]);

    // Retrieve product details
    $price = $product->price;
    $mainPhoto = $product->main_photo;

    // Retrieve cart items from session or initialize if not present
    $cart = session()->get('cart', []);

    // Check if the product is already in the cart
    if (isset($cart[$product->id])) {
        // Update the quantity and price if the product already exists in the cart
        $cart[$product->id]['quantity'] += $request->quantity;
    } else {
        // Add the product to the cart if it doesn't exist
        $cart[$product->id] = [
            'product_id' => $product->id,
            'name' => $product->name,
            'quantity' => $request->quantity,
            'price' => $price,
            'main_photo' => $mainPhoto, // Include main_photo
        ];
    }

    // Update the session with the new cart data
    session()->put('cart', $cart);

    // Redirect based on the selected action
    if ($request->action === 'add') {
        return redirect()->route('keranjang.cart')->with('success', 'Product added to cart successfully.');
    } elseif ($request->action === 'checkout') {
        return redirect()->route('checkout.create');
    } else {
        return redirect()->back()->with('error', 'Invalid action.');
    }
}


    public function index()
    {
        $cart = session()->get('cart', []);
        $total = array_sum(array_map(function($item) {
            return $item['price'] * $item['quantity'];
        }, $cart));

        // Retrieve product details including the main photo for each item in the cart
        $productIds = array_column($cart, 'product_id');
        $productDetails = Product::whereIn('id', $productIds)->get()->keyBy('id');

        return view('keranjang.cart', compact('cart', 'total', 'productDetails'));
    }

    public function remove($id)
{
    // Retrieve cart items from session
    $cart = session()->get('cart', []);

    // Check if the item exists in the cart
    if (isset($cart[$id])) {
        // Remove the item from the cart
        unset($cart[$id]);

        // Update the session with the new cart data
        session()->put('cart', $cart);

        return redirect()->route('keranjang.cart')->with('success', 'Product removed from cart successfully.');
    }

    return redirect()->route('keranjang.cart')->with('error', 'Product not found in cart.');
}

}
