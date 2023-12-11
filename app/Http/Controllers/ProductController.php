<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    // ...

    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validateWithBag('createProduct',[
            'title' => 'required|max:255',
            'description' => 'required',
            // 'image' => 'nullable|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('images', 'public');
        //     $validated['image'] = $path;
        // }

        $product = Product::create($validated);
        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }
    
    public function update(Request $request, Product $product)
    {
        $validated = $request->validateWithBag('updateProduct', [
            'title' => 'required|max:255',
            'description' => 'required',
            // 'image' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public');
            $validated['image'] = $imagePath;
        }

        $product->update($validated);
        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }

    // ...
}