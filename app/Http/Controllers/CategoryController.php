<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function store(Request $request)
    {
        $validated = $request->validateWithBag('createCategory',[
            'name' => 'required|max:255',
        ]);

        $category = Category::create($validated);
        return redirect()->route('categories.index');
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validateWithBag('updateCategory',[
            'name' => 'required|max:255',
        ]);

        $category->update($validated);
        return redirect()->route('categories.index');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
