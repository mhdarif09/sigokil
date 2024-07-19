<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity', 1);

        // Add to cart logic
        $cart = session()->get('cart', []);
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => $quantity,
            "price" => $product->price,
            "photo" => $product->photo
        ];
        session()->put('cart', $cart);

        if ($request->input('action') === 'checkout') {
            return redirect()->route('checkout');
        } else {
            return redirect()->route('cart');
        }
    }

    public function show()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function checkout()
    {
        $cart = session()->get('cart', []);
        return view('checkout', compact('cart'));
    }

    public function processCheckout(Request $request)
    {
        // Process the checkout
        // This could involve saving the order to the database, sending an email, etc.
        
        // Clear the cart
        session()->forget('cart');

        return redirect()->route('home')->with('success', 'Your order has been processed successfully!');
    }
}