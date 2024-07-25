<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    /**
<<<<<<< HEAD
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard with all products.
=======
     * Show the application dashboard.
>>>>>>> 0caf3644662b89ca4e7d102a37cf8e379de4a351
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        $products = Product::all();
        return view('home', compact('products'));
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

        return view('checkout', compact('product', 'quantity', 'totalPrice'));
=======
        // Fetch all products
        $products = Product::all();
        return view('index', compact('products'));
>>>>>>> 0caf3644662b89ca4e7d102a37cf8e379de4a351
    }
}