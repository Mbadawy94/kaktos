@extends('frontend.layouts.master')
@section('content')
        <section class="info-section blog-section">
        <div class="container">
            <div class="second-caption style-2">
                <span class="single-post-data">October 13, 2015</span>
                <h3 class="h5 md title font-fam-2">some post title here</h3>
            </div>
        </div>
        <div class="container blog-container blog-sidebar">
            <div class="blog-box single-box">
                <img src="img/single_image.jpg" class="resp-img" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut lobortis orci non magna imperdiet egestas. Donec nec placerat nulla, ut cursus purus. Vestibulum vel lorem varius, pretium sapien sed, feugiat ante. Quisque eu commodo purus. Proin rhoncus magna iaculis eleifend volutpat. Fusce mattis ullamcorper augue, nec sodales odio feugiat sit amet.</p>
                <div class="special-style">
                    Nulla a lectus eu purus vehicula vulputate vel ut
                    urna rutrum lectus lectus
                </div>
                <p>Integer dignissim, nisl id congue tincidunt, lectus diam bibendum eros, nec faucibus leo odio sit amet risus. Maecenas id commodo enim. Sed eget nunc facilisis, porttitor.</p>
                <ul>
                    <li>As seen on James Dean and a whole slew of other super stylin' </li>
                    <li>celebs, the 406 is the Anglo American signature. Contrary to its </li>
                    <li>namesake, Anglo American has its roots in Great Britain, and these </li>
                    <li>head-turning, utterly classic, round spectacles don't let us forget</li>
                </ul>
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
                <div class="comment-block">
                    <h3 class="h5 md title font-fam-2">Comments</h3>
                    <div class="comment-box">
                        <img src="img/avatar_1.jpg" alt="" class="ava">
                        <span class="comment-date">October 13, 2015</span>
                        <h3 class="comment-title">annita smith</h3>
                        <p>Ut lobortis orci non magna imperdiet egestas. Donec nec placerat nulla, ut cursus purus. Vestibulum vel lorem varius, pretium sapien sed, feugiat ante. Quisque eu commodo purus.</p>
                    </div>
                    <div class="comment-box comment-box-reply">
                        <img src="img/avatar_2.jpg" alt="" class="ava">
                        <span class="comment-date">October 13, 2015</span>
                        <h3 class="comment-title">rebecca john</h3>
                        <p>Ut lobortis orci non magna imperdiet egestas. Donec nec placerat nulla, ut cursus purus. Vestibulum vel lorem varius, pretium sapien sed, feugiat ante. Quisque eu commodo purus.</p>
                    </div>
                    <div class="comment-box">
                        <img src="img/avatar_3.jpg" alt="" class="ava">
                        <span class="comment-date">October 13, 2015</span>
                        <h3 class="comment-title">amanda black</h3>
                        <p>Ut lobortis orci non magna imperdiet egestas. Donec nec placerat nulla, ut cursus purus. Vestibulum vel lorem varius, pretium sapien sed, feugiat ante. Quisque eu commodo purus.</p>
                    </div>
                    <div class="row form-row">
                        <form action="#">
                            <div class="col-sm-12 col-md-6">
                                <input class="form-box-input"  type="text" placeholder="Enter you name"/>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <input class="form-box-input" type="text" placeholder="Enter you email"/>
                            </div>
                            <div class="col-sm-12">
                                <textarea class="form-box-textarea" placeholder="Message"></textarea>
                            </div>
                            <div class="send-button-wrapp clearfix">
                                <div class="send-button">
                                    <input type="submit" class="submit" value="submit">
                                    <span class="icon-ok"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="sidebar-box">
                <div class="widget">
                   <div class="widget-search">
                       <form action="#">
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
        <div class="related-block">
            <div class="container related-container">
                <div class="second-caption style-2">
                    <h3 class="h5 md title font-fam-2">RELATED posts</h3>
                </div>
                <div class="row">
                   <div class="col-sm-4 related-box">
                       <a href="#">
                            <img src="img/related_1.jpg" alt="">
                       </a>
                       <span>October 13, 2015</span>
                       <h3><a href="#">Aliquam vel ante sed
                           ante laoreet semper</a></h3>
                   </div>
                    <div class="col-sm-4 related-box">
                        <a href="#">
                             <img src="img/related_2.jpg" alt="">
                        </a>
                        <span>October 13, 2015</span>
                        <h3><a href="#">Aliquam vel ante sed
                            ante laoreet semper</a></h3>
                    </div>
                    <div class="col-sm-4 related-box">
                        <a href="#">
                            <img src="img/related_3.jpg" alt="">
                        </a>
                        <span>October 13, 2015</span>
                        <h3><a href="#">Aliquam vel ante sed
                            ante laoreet semper</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
