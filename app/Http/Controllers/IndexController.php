<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard with all products.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('index', compact('products'));
    }

    /**
     * Show the detail of a specific product.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    /**
     * Handle the order process for a specific product.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function order(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $quantity = $request->input('quantity');
        $totalPrice = $product->price * $quantity;

        return view('product.checkout', compact('product', 'quantity', 'totalPrice'));
    }
    public function help()
    {
        $products = Product::all();
        return view('help', compact('products'));
    }
    public function formbantuan()
    {
        $products = Product::all();
        return view('form-bantuan', compact('products'));
    }
    public function riwayatlaporan()
    {
        $products = Product::all();
        return view('riwayat-laporan', compact('products'));
    }
}
