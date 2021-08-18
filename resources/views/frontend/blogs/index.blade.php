@extends('frontend.layouts.master')
@section('content')
    <section class="info-section blog-section">
        <div class="second-caption style-2">
            <h3 class="h5 md title font-fam-2">our blog</h3>
            <div class="simple-text">
                <p>Only Actual Information</p>
            </div>
        </div>
        <div class="container blog-container blog-sidebar">
            <div class="blog-box">
                @forelse($blogs as $blog)
                <div class="blog-item left">
                    <div class="image">
                        <div class="bg" style="background-image:url({{ $blog->image_url }})"></div>
                    </div>
                    <div class="vertical-align">
                        <span class="date">{{ $blog->created_at->diffForHumans() }}</span>
                        <a href="/blog/{{ $blog->slug }}" class="font-fam-2">{{ $blog->title }}</a>
                        <div class="post-info">
                            <a href="#">{{ $blog->category->name }}</a>
                            <a href="#">by j. smith</a>
                        </div>
                        <div class="simple-text">
                            <p>{{ $blog->excerpt }}</p>
                        </div>
                    </div>
                </div>
                @empty
                    <h2>No Blogs Found</h2>
                @endforelse
                    {{ $blogs->links('vendor.pagination.frontend') }}
            </div>
            <div class="sidebar-box">
                <div class="widget">
                   <div class="widget-search">
                       <form action="">
                           <input type="search" class="search-widget" placeholder="Blog Search"/>
                           <input type="submit" class="search-go" value=""/>
                           <i class="icon-search"></i>
                       </form>
                   </div>
                </div>
                 <div class="widget">
                     <h3>categories</h3>
                     <ul class="cat-list">
                         @foreach($categories as $category)
                         <li><a href="/blogs/{{ $category->slug }}">{{ $category->name }} <span>{{ $category->blogs()->count() }}</span></a></li>
                         @endforeach
                     </ul>
                 </div>
                <div class="widget">
                    <h3>popular blogs</h3>
                    @foreach($popular as $blog)
                    <div class="popular-post">
                        <a href="/blog/{{ $blog->slug }}">
                            <img src="{{ $blog->image_url }}" alt="">
                        </a>
                        <span class="popular-post-date">{{ $blog->created_at->diffForHumans() }}</span>
                        <h4 class="popular-post-title"><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h4>
                    </div>
                    @endforeach
                </div>
                <div class="widget">
                    <h3>popular tags</h3>
                    <ul class="tag-list">
                        <li><a href="#">fashion</a></li>
                        <li><a href="#">jewelry</a></li>
                        <li><a href="#">bag</a></li>
                        <li><a href="#">style</a></li>
                        <li><a href="#">trends</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

@endsection
