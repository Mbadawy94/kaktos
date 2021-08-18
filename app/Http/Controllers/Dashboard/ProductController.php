<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Cviebrock\EloquentSluggable\Services\SlugService;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(15);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|unique:products,title',
            'price' => 'required|numeric',
            'oldPrice' => 'numeric',
            'description' => 'required|string',
            'quantity' => 'string',
            'important' => 'nullable|boolean',
            'new' => 'nullable|boolean',
            'sale' => 'nullable|boolean',
            'category_id' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(storage_path('app/public/images'), $imageName);
        $imageName = 'storage/images/' . $imageName;
        Product::create([
            'image' => $imageName,
            'title' => $request->title,
            'important' => $request->important,
            'new' => $request->new,
            'sale' => $request->sale,
            'price' => $request->price,
            'oldPrice' => $request->oldPrice,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->first();
        return view('admin.products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(product $product)
    {
        $categories = Category::all();
        return view('admin.products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'oldPrice' => 'numeric',
            'important' => 'nullable|boolean',
            'new' => 'nullable|boolean',
            'sale' => 'nullable|boolean',
            'category_id' => 'required',
            'image' => 'nullable',
        ]);
        if ($request->hasFile('image')){
            Storage::delete('app/public/images/' . $product->image);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('app/public/images'), $imageName);
            $request->image = $imageName;
        };

        $product->update([
            'image' => $imageName ?? $product->image,
            'title' => $request->title,
            'description' => $request->description,
            'price' => $request->price,
            'oldPrice' => $request->oldPrice,
            'important' => $request->important,
            'new' => $request->new,
            'sale' => $request->sale,
        ]);
        return redirect()->route('admin.products.show', $product->slug)->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->back()->with('success','Product deleted success');
    }
}
