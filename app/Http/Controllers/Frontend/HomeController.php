<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::important()->get();
        return view('frontend.index', compact('products'));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function crash()
    {
        return view('frontend.404');
    }

    public function search(Request $request)
    {
        $query = Product::query();

        if ($request->search_query) {
            $query->where('title', 'LIKE', '%' . $request->search_query . '%');
        }

        $products = $query->latest();

        return view('frontend.products.searched', compact('products'));
    }
}
