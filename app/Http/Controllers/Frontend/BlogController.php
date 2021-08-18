<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\category;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(3);
        $categories = Category::all();
        $popular = Blog::popular()->get();
        return view('frontend.blogs.index',compact('blogs', 'categories','popular'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->first();
        $blogs = $blog->category->blogs()->take(3)->get();
        $popular = Blog::popular()->get();
        $categories = Category::all();
        return view('frontend.blogs.show',compact('blog', 'blogs', 'categories', 'popular'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $blogs = $category->blogs()->get();
        return view('frontend.blogs.category-blog', compact('category', 'blogs'));
    }
}
