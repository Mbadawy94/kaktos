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
                <div class="blog-item left">
                    <div class="image">
                        <div class="bg" style="background-image:url(img/blog_img_6.jpg)"></div>
                    </div>
                    <div class="vertical-align">
                        <span class="date">October 13, 2015</span>
                        <a href="#" class="font-fam-2">CHLOE NORGAARD CASTAWAY IN NICARAGUA</a>
                        <div class="post-info">
                            <a href="#">fashion</a>
                            <a href="#">by j. smith</a>
                             <a href="#"><span><i class="icon-comment-empty"></i>10</span></a>
                        <a href="#"><span><i class="icon-heart-empty"></i>28</span></a>
                        </div>
                        <div class="simple-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item left">
                    <div class="image">
                        <div class="bg" style="background-image:url(img/blog_img_7.jpg)"></div>
                    </div>
                    <div class="vertical-align">
                        <span class="date">October 13, 2015</span>
                        <a href="#" class="font-fam-2">CHLOE NORGAARD CASTAWAY IN NICARAGUA</a>
                        <div class="post-info">
                            <a href="#">fashion</a>
                            <a href="#">by j. smith</a>
                             <a href="#"><span><i class="icon-comment-empty"></i>10</span></a>
                        <a href="#"><span><i class="icon-heart-empty"></i>28</span></a>
                        </div>
                        <div class="simple-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
                        </div>
                    </div>
                </div>
                <div class="blog-item left">
                    <div class="image">
                        <div class="bg" style="background-image:url(img/blog_img_3.jpg)"></div>
                    </div>
                    <div class="vertical-align">
                        <span class="date">October 13, 2015</span>
                        <a href="#" class="font-fam-2">CHLOE NORGAARD CASTAWAY IN NICARAGUA</a>
                        <div class="post-info">
                            <a href="#">fashion</a>
                            <a href="#">by j. smith</a>
                             <a href="#"><span><i class="icon-comment-empty"></i>10</span></a>
                        <a href="#"><span><i class="icon-heart-empty"></i>28</span></a>
                        </div>
                        <div class="simple-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesettin</p>
                        </div>
                    </div>
                </div>
                <div class="pagination-box">
                    <a href="" class="prev-page">prev page</a>
                    <div class="pages">
                        <a href="" class="active">1</a>
                        <a href="">2</a>
                        <a href="">3</a>
                        <span>...</span>
                        <a href="">10</a>
                    </div>
                    <a href="" class="next-page">next page</a>
                </div>
            </div>
            <div class="sidebar-box">
                <div class="widget">
                   <div class="widget-search">
                       <form action="">
                           <input type="search" class="search-widget" placeholder="Enter you name"/>
                           <input type="submit" class="search-go" value=""/>
                           <i class="icon-search"></i>
                       </form>
                   </div>
                </div>
                 <div class="widget">
                     <h3>categories</h3>
                     <ul class="cat-list">
                         <li><a href="">Fashion wear <span>14</span></a></li>
                         <li><a href="">Jewelry accessories <span>28</span></a></li>
                         <li><a href="">Fashion world <span>9</span></a></li>
                         <li><a href="">New collections <span>11</span></a></li>
                     </ul>
                 </div>
                <div class="widget">
                    <h3>popular posts</h3>
                    <div class="popular-post">
                        <a href="#">
                            <img src="img/popular_img_1.jpg" alt="">
                        </a>
                        <span class="popular-post-date">October 13, 2015</span>
                        <h4 class="popular-post-title"><a href="#">CHLOE NORGAARD CASTAWAY IN
                            NICARAGUA</a></h4>
                    </div>
                    <div class="popular-post">
                        <a href="#">
                            <img src="img/popular_img_2.jpg" alt="">
                        </a>
                        <span class="popular-post-date">October 13, 2015</span>
                        <h4 class="popular-post-title"><a href="#">CHLOE NORGAARD CASTAWAY IN
                            NICARAGUA</a></h4>
                    </div>
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
