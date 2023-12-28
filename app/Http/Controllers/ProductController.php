<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::latest()->paginate(10);
        return view('pages/products/products', ['products' => $products]);
    }

    public function create()
    {
        return view('pages/products/create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'required',
            'status' => 'required',
        ]);

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages/products/detail', ['product' => $product]);
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages/products/edit', ['product' => $product]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        // return redirect()->route('pages/products/products')->with('success', 'Product deleted successfully.');
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
