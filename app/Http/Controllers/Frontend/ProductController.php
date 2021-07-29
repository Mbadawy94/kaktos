<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function collections()
    {
        return view('frontend.products.collections');
    }

    public function index()
    {
        return view('frontend.products.products');
    }


    public function show()
    {

        return view('frontend.products.product');
    }

}
