<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function collections()
    {
        $categories = Category::all();
        return view('frontend.products.collections', compact('categories'));
    }

    public function index($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->get();
        return view('frontend.products.index', compact('products','category'));
    }


    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        $products = $product->category->products()->take(4)->get();
        return view('frontend.products.product', compact('product', 'products'));
    }

}
