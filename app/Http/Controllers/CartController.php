<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request, Product $product)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        // Ambil harga produk dari tabel Product
        $price = $product->price;

        // Periksa apakah item sudah ada di keranjang
        $cartItem = Cart::where('user_id', Auth::id())
                        ->where('product_id', $product->id)
                        ->first();

        if ($cartItem) {
            // Jika item sudah ada, update quantity dan price
            $cartItem->update([
                'quantity' => $request->quantity,
                'price' => $price, // Pastikan untuk menyertakan harga jika perlu
            ]);
        } else {
            // Jika item belum ada, tambahkan ke keranjang
            Cart::create([
                'user_id' => Auth::id(),
                'product_id' => $product->id,
                'quantity' => $request->quantity,
                'price' => $price, // Pastikan untuk menyertakan harga jika perlu
            ]);
        }

        // Redirect berdasarkan aksi yang dipilih
        if ($request->action === 'add') {
            return redirect()->back()->with('success', 'Product added to cart successfully.');
        } elseif ($request->action === 'checkout') {
            return redirect()->route('checkout.create');
        }
    }
}
