@extends('frontend.layouts.master')
@section('content')
        <section class="info-section blog-section">
        <div class="container">
            <div class="second-caption style-2">
                <span class="single-post-data">{{ $blog->created_at->diffForHumans() }}</span>
                <h3 class="h5 md title font-fam-2">{{ $blog->title }}</h3>
            </div>
        </div>
        <div class="container blog-container blog-sidebar">
            <div class="blog-box single-box">
                <img src="{{ $blog->image_url }}" class="resp-img" alt="">
                {{ $blog->body }}
                <div class="info-part">
                    <div class="info-post-col">
                        <h4>tags:</h4>
                        <ul class="tag-list">
                            <li><a href="#">fashion</a></li>
                            <li><a href="#">jewelry</a></li>
                            <li><a href="#">bag</a></li>
                        </ul>
                    </div>
                    <div class="info-post-col">
                        <h4>share:</h4>
                        <ul class="single-share">
                            <li><a href="" class="icon-facebook"></a></li>
                            <li><a href="" class="icon-twitter"></a></li>
                            <li><a href="" class="icon-gplus"></a></li>
                            <li><a href="" class="icon-pinterest"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="sidebar-box">
                <div class="widget">
                   <div class="widget-search">
                       <form action="#">
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
                         <li><a href="/blogs/{{ $category->name }}">{{ $category->name }} <span>{{ $category->blogs()->count() }}</span></a></li>
                         @endforeach
                     </ul>
                 </div>
                <div class="widget">
                    <h3>popular posts</h3>
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
        <div class="related-block">
            <div class="container related-container">
                <div class="second-caption style-2">
                    <h3 class="h5 md title font-fam-2">RELATED posts</h3>
                </div>
                <div class="row">
                   @foreach($blogs as $blog)
                       <div class="col-sm-4 related-box">
                           <a href="/blog/{{ $blog->slug }}">
                                <img src="{{ $blog->image_url }}" alt="">
                           </a>
                           <span>{{ $blog->created_at->diffForHumans() }}</span>
                           <h3><a href="/blog/{{ $blog->slug }}">{{ $blog->title }}</a></h3>
                       </div>
                   @endforeach
            </div>
        </div>
    </section>

@endsection
