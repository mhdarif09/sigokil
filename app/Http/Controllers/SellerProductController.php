<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
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
            'main_photo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_photo_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_photo_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'product_photo_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'video' => 'nullable|image|mimes:jpg,png|max:10000',
        ]);

        $product = new Product();
        $product->user_id = Auth::id();
        $product->name = $request->input('name');
        $product->category = $request->input('category');
        $product->description = $request->input('description');
        $product->weight = $request->input('weight');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->condition = $request->input('condition');
        $product->preorder = $request->input('preorder');

        // Handle main photo upload
        if ($request->hasFile('main_photo')) {
            $product->main_photo = $request->file('main_photo')->store('photos', 'public');
        }

        // Handle product photo uploads
        $photoFields = ['product_photo_1', 'product_photo_2', 'product_photo_3'];
        foreach ($photoFields as $photoField) {
            if ($request->hasFile($photoField)) {
                $product->{$photoField} = $request->file($photoField)->store('photos', 'public');
            }
        }

        // Handle file upload for video
        if ($request->hasFile('video')) {
            $product->video = $request->file('video')->store('videos', 'public');
        }

        $product->save();

        return redirect()->route('seller.products.index')->with('success', 'Product added successfully');
    }
}
