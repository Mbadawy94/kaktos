@extends('frontend.layouts.master')
@section('content')
    <section class="info-section blog-section">
        <div class="second-caption style-2">
            <h3 class="h5 md title font-fam-2">{{ $category->name }}</h3>
            <div class="simple-text">
                <p>{{ $category->description }}</p>
            </div>
        </div>
        <div class="container blog-container">
            @foreach($blogs as $blog)
            <div class="blog-item blog-type-1 left">
                <div class="image">
                    <div class="bg" style="background-image:url({{ $blog->image_url }})"></div>
                </div>
                <div class="title vertical-align">
                    <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                    <a href="/blog/{{ $blog->slug }}" class="font-fam-2">{{ $blog->title }}</a>
                    <div class="post-info">
                        <a href="/blogs/{{ $category->slug }}">{{ $blog->category->name }}</a>
                        <a href="#">by j. smith</a>
                    </div>
                    <div class="simple-text">
                        <p>{{ $blog->excerpt }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </section>

@endsection
