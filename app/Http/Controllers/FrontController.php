<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Product;

class FrontController extends Controller
{
    //
    public function index()
    {
        return view('frontoffice.index');
    }

    public function products()
    {
        $products = Product::all();
        // query fakestoreapi.com for random products images
        $randomProducts = Http::get('https://fakestoreapi.com/products')->json();

        return view('frontoffice.products', compact('products', 'randomProducts'));
    }
}
