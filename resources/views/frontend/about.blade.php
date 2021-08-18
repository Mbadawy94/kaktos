@extends('frontend.layouts.master')
@section('content')
    <div class="top-slider type-2">
        <div class="asseccories-baner">
            <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(img/about.jpg)"></div>
            <div class="balck-layer"></div>
            <div class="container">
                <div class="title vertical-align about-banner">
                    <h2 class="h1 style-3 font-fam-2">about us</h2>

                    <div class="simple-text font-fam-1">
                        <p>One of these looks might be your new look.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-lg skew-block about-block">
        <div class="skew-wrap">
            <div class="container">
                <div class="row first-about-row">
                    <div class="col-sm-6 about-info-img">
                        <img src="img/about_image_1.jpg" alt="" class="resp-img">
                    </div>
                    <div class="col-sm-6 about-info">
                        <h3 class="about-title">look inside our store</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor imperdiet
                            porttitor. Pellentesque id consectetur massa. Nam vitae sem convallis, interdum magna nec,
                            sollicitudin tortor. Nulla vitae nisl consequat, vestibulum nulla eget, consectetur dolor.
                            Mauris id erat ac neque condimentum viverra a vitae nisi. Mauris ornare cursus nisl.</p>

                        <p>Mauris sit amet velit vulputate, euismod dolor sed, rutrum dolor. Integer placerat egestas
                            varius ultrices interdum at a nunc. Pellentesque finibus vitae ligula at scelerisque.
                            Praesent elementum in felis at vestibulum. Sed porttitor risus at gravida iaculis.</p>
                    </div>
                </div>
                <div class="row about-images-row">
                    <div class="col-sm-4">
                        <img class="resp-img" src="img/about_image_2.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img class="resp-img" src="img/about_image_3.jpg" alt="">
                    </div>
                    <div class="col-sm-4">
                        <img class="resp-img" src="img/about_image_4.jpg" alt="">
                    </div>
                </div>
                <div class="row last-about-row">
                    <div class="col-sm-6 about-info about-info2">
                        <h3 class="about-title">look inside our store</h3>

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor imperdiet
                            porttitor. Pellentesque id consectetur massa. Nam vitae sem convallis, interdum magna nec,
                            sollicitudin tortor. Nulla vitae nisl consequat, vestibulum nulla eget, consectetur dolor.
                            Mauris id erat ac neque condimentum viverra a vitae nisi. Mauris ornare cursus nisl.</p>

                        <p>Mauris sit amet velit vulputate, euismod dolor sed, rutrum dolor. Integer placerat egestas
                            varius ultrices interdum at a nunc. Pellentesque finibus vitae ligula at scelerisque.
                            Praesent elementum in felis at vestibulum. Sed porttitor risus at gravida iaculis.</p>
                    </div>
                    <div class="col-sm-6 about-info-img-right">
                        <img src="img/about_image_5.jpg" alt="" class="resp-img">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section skew-block pattern pattern-about">
        <div class="skew-wrap">
            <div class="container">
                <div class="second-caption style-2">
                    <h3 class="h5 md title font-fam-2">our team</h3>
                </div>
                <div class="row team-row">
                    <div class="col-sm-4 team-box">
                        <div class="team-img">
                            <img class="resp-img" src="img/team_1.jpg"  alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="" class="icon-facebook"></a></li>
                                    <li><a href="" class="icon-twitter"></a></li>
                                    <li><a href="" class="icon-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="position">sales manager</span>
                        <h3 class="team-name">chloe amore</h3>
                    </div>
                    <div class="col-sm-4 team-box">
                        <div class="team-img">
                            <img class="resp-img" src="img/team_2.jpg"  alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="#" class="icon-facebook"></a></li>
                                    <li><a href="#" class="icon-twitter"></a></li>
                                    <li><a href="#" class="icon-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="position">sales manager</span>
                        <h3 class="team-name">amanda amore</h3>
                    </div>
                    <div class="col-sm-4 team-box">
                        <div class="team-img">
                            <img class="resp-img" src="img/team_3.jpg"  alt="">
                            <div class="team-social">
                                <ul>
                                    <li><a href="" class="icon-facebook"></a></li>
                                    <li><a href="" class="icon-twitter"></a></li>
                                    <li><a href="" class="icon-instagram"></a></li>
                                </ul>
                            </div>
                        </div>
                        <span class="position">sales manager</span>
                        <h3 class="team-name">chloe amore</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
