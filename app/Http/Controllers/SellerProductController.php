<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // Ensure you have a Product model
use Illuminate\Support\Facades\Auth;

class SellerProductController extends Controller
{
    public function index()
    {
        // Fetch products for the authenticated seller
        $products = Auth::user()->products;
        return view('seller.products.index', compact('products'));
    }

    public function create()
    {
        return view('seller.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'description' => 'required|string',
            'weight' => 'required|numeric',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'condition' => 'required|in:new,used',
            'preorder' => 'required|boolean',
            // Add other validations as necessary
        ]);

        $product = new Product();
        $product->user_id = Auth::id(); // Assuming the Product model has a user_id field
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->weight = $request->input('weight');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->condition = $request->input('condition');
        $product->preorder = $request->input('preorder');
        // Handle file uploads for photos and videos
        if ($request->hasFile('photo')) {
            $product->photo = $request->file('photo')->store('photos', 'public');
        }
        if ($request->hasFile('video')) {
            $product->video = $request->file('video')->store('videos', 'public');
        }

        $product->save();

        return redirect()->route('seller.products.index')->with('success', 'Product added successfully');
    }
}