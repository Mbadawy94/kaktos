<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\blog;
use App\Models\category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(15);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blogs.create', compact('categories', 'tags'));
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
            'title' => 'required|string',
            'excerpt' => 'required|string',
            'body' => 'required|string',
            'popular' => 'nullable|boolean',
            'category_id' => 'required',
            'tag_id',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $imageName = time().'.'.$request->image->extension();
        $request->image->move(storage_path('app/public/images'), $imageName);
        $imageName = 'storage/images/' . $imageName;
        Blog::create([
            'image' => $imageName,
            'title' => $request->title,
            'excerpt' => $request->excerpt,
            'body' => $request->body,
            'popular' => $request->popular,
            'category_id' => $request->category_id,
        ]);

        return redirect('/admin/blogs');
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
        return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(blog $blog)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('admin.blogs.edit', compact('blog', 'categories', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blog $blog)
    {
        $request->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'popular' => 'nullable|boolean',
            'category_id' => 'required',
            'image' => 'nullable',
        ]);
        if ($request->hasFile('image')){
            Storage::delete('app/public/images/' . $blog->image);
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(storage_path('app/public/images'), $imageName);
            $imageName = 'storage/images/' . $imageName;
            $request->image = $imageName;
        };

        $blog->update([
            'image' => $imageName ?? $blog->image,
            'title' => $request->title,
            'body' => $request->body,
            'popular' => $request->popular,
            'excerpt' => $request->excerpt,
        ]);

        return redirect()->route('admin.blogs.show', $blog->slug)->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::find($id)->delete();
        return redirect()->route('admin.blogs.index')->with('success','Blog deleted success');
    }
}
