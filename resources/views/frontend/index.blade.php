@extends('frontend.layouts.master')
@section('content')

<div class="top-slider">
    <div class="swiper-container animation-slider">
        <div class="swiper-wrapper">
           <div class="swiper-slide">
              <div class="top-slide">
                <div class="left-side">
                    <div class="bg" style="background-image:url(img/main_slide_img_1.jpg)"></div>
                </div>
                <div class="right-side">
                   <div class="main-caption vertical-align">
                      <div class="image">
                        <img src="img/title_img_1.png" alt="">
                      </div>
                      <h1 class="h2">basis of everything</h1>
                      <p>adherent resinous base coat</p>
                   </div>
                </div>
              </div>
           </div>
           <div class="swiper-slide">
              <div class="top-slide">
                <div class="left-side">
                    <div class="bg" style="background-image:url(img/main_slide_img_2.jpg)"></div>
                </div>
                <div class="right-side">
                   <div class="main-caption vertical-align">
                      <div class="image">
                        <img src="img/title_img_2.png" alt="">
                      </div>
                      <h2 class="h2">the quin is dead</h2>
                      <p>adherent resinous base coat</p>
                   </div>
                </div>
              </div>
           </div>
           <div class="swiper-slide">
              <div class="top-slide">
                <div class="left-side">
                    <div class="bg" style="background-image:url(img/main_slide_img_3.jpg)"></div>
                </div>
                <div class="right-side">
                   <div class="main-caption vertical-align">
                      <div class="image">
                        <img src="img/title_img_3.png" alt="">
                      </div>
                      <h2 class="h2">opaque popy red</h2>
                      <p>adherent resinous base coat</p>
                   </div>
                </div>
              </div>
           </div>
        </div>
        <div class="pagination"></div>
        <div class="swiper-arrow-left slider-arrow"><img src="img/arrow_left.png" alt=""></div>
        <div class="swiper-arrow-right slider-arrow"><img src="img/arrow_right.png" alt=""></div>
    </div>
</div>

<section class="section">
     <div class="container">
        <div class="second-caption">
            <h3 class="h3 title">Beauty in real life</h3>
             <div class="simple-text">
               <p>We’re Glossier, a beauty company inspired by what girls need in real life. </p>
             </div>
        </div>
        <div class="product-item-wrap">
            <div class="product-item right item-animation">
                <div class="image">
                    <a href="#"><img src="img/item_img_1.jpg" alt=""></a>
                    <div class="title item-title">
                      <h4 class="h4"><a href="#">above it all</a></h4>
                        <p class="sub-title"><b>9ML –</b><span> $45.00</span></p>
                    </div>
                </div>
            </div>
            <div class="product-item left item-animation sm">
                <div class="image">
                    <a href="#"><img src="img/item_img_2.jpg" alt=""></a>
                    <div class="title item-title">
                      <h4 class="h4"><a href="#">Opaque<br> Popy Red</a></h4>
                        <p class="sub-title"><b>9ML –</b><span> $45.00</span></p>
                    </div>
                </div>
            </div>
            <div class="product-item right item-animation">
                <div class="image">
                    <a href="#"><img src="img/item_img_3.jpg" alt=""></a>
                    <div class="title item-title">
                      <h4 class="h4"><a href="#">the quin<br> is dead</a></h4>
                        <p class="sub-title"><b>9ML –</b><span> $45.00</span></p>
                    </div>
                </div>
            </div>
            <div class="product-item left item-animation">
                <div class="image">
                    <a href="#"><img src="img/item_img_4.jpg" alt=""></a>
                    <div class="title item-title">
                      <h4 class="h4"><a href="#">basis of<br> everything</a></h4>
                        <p class="sub-title"><b>9ML –</b><span> $45.00</span></p>
                    </div>
                </div>
            </div>
            <div class="product-item right item-animation">
                <div class="image">
                    <a href="#"><img src="img/item_img_1.jpg" alt=""></a>
                    <div class="title item-title">
                      <h4 class="h4"><a href="#">above it all</a></h4>
                        <p class="sub-title"><b>9ML –</b><span> $45.00</span></p>
                    </div>
                </div>
            </div>
            <div class="product-item left item-animation sm">
                <div class="image">
                    <a href="#"><img src="img/item_img_2.jpg" alt=""></a>
                    <div class="title item-title">
                      <h4 class="h4"><a href="#">Opaque<br> Popy Red</a></h4>
                        <p class="sub-title"><b>9ML –</b><span> $45.00</span></p>
                    </div>
                </div>
            </div>
            <div class="more-insert"></div>
        </div>
        <div class="center-align">
           <a href="#" class="button-style more" data-more='<div class="product-item right item-animation"><div class="image"><a href="#"><img src="img/item_img_1.jpg" alt=""></a><div class="title"><h4 class="h4"><a href="#">above it all</a></h4><p class="sub-title"><b>9ML –</b><span> $45.00</span></p></div></div></div><div class="product-item left item-animation sm"><div class="image"><a href="#"><img src="img/item_img_2.jpg" alt=""></a><div class="title"><h4 class="h4"><a href="#">Opaque Popy Red</a></h4><p class="sub-title"><b>9ML –</b><span> $45.00</span></p></div></div></div><div class="product-item right item-animation"><div class="image"><a href="#"><img src="img/item_img_3.jpg" alt=""></a><div class="title"><h4 class="h4"><a href="#">the quin is dead</a></h4><p class="sub-title"><b>9ML –</b><span> $45.00</span></p></div></div></div><div class="product-item left item-animation"><div class="image"><a href="#"><img src="img/item_img_4.jpg" alt=""></a><div class="title"><h4 class="h4"><a href="#">basis of everything</a></h4><p class="sub-title"><b>9ML –</b><span> $45.00</span></p></div></div></div><div class="product-item right item-animation"><div class="image"><a href="#"><img src="img/item_img_1.jpg" alt=""></a><div class="title"><h4 class="h4"><a href="#">above it all</a></h4><p class="sub-title"><b>9ML –</b><span> $45.00</span></p></div></div></div><div class="product-item left item-animation sm"><div class="image"><a href="#"><img src="img/item_img_2.jpg" alt=""></a><div class="title"><h4 class="h4"><a href="#">Opaque Popy Red</a></h4><p class="sub-title"><b>9ML –</b><span> $45.00</span></p></div></div></div>'><span>more products</span></a>
        </div>
     </div>
</section>

<section class="section-sm bg-grey">
    <div class="container">
     <div class="animation-img">
      <div class="images-block">
        <div class="images-block-title">
            <h3 class="title">#Floris</h3>
              <p>Beauty in real life (on Instagram).</p>
        </div>
        <div class="top-img">
            <a href="#" class="image"><img src="img/block_img_1.jpg" alt=""></a>
            <a href="#" class="image"><img src="img/block_img_2.jpg" alt=""></a>
            <a href="#" class="image"><img src="img/block_img_3.jpg" alt=""></a>
        </div>
      </div>
       <div class="bottom-img">
         <a href="#" class="image"><img src="img/block_img_4.jpg" alt=""></a>
         <a href="#" class="image"><img src="img/block_img_7.jpg" alt=""></a>
         <a href="#" class="image"><img src="img/block_img_5.jpg" alt=""></a>
         <a href="#" class="image"><img src="img/block_img_6.jpg" alt=""></a>
       </div>
     </div>
    </div>
</section>
@endsection
