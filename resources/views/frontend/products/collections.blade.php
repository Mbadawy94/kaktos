@extends('frontend.layouts.master')
@section('content')
<div class="filter-list">
      <div class="list-open">
      	<span>filter <b class="drop-arrow"><img src="img/drop_arrow.png" alt=""></b></span>
      </div>
     	<ul class="list-slide">
     		<li><a href="/products/hair">Hair</a></li>
     		<li><a href="/products/face">Face</a></li>
     		<li><a href="/products/skin">Skin</a></li>
     	</ul>
     </div>

     <div class="content no-bg" id="eye">
         @foreach($categories as $category)
             <div class="top-slider sm">
                 <div class="category-baner">
                     @if($category->name == "Hair")
                        <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(img/catalog_bg_1.jpg)"></div>
                     @elseif($category->name == "Face")
                        <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(img/catalog_bg_5.jpg)"></div>
                     @else
                        <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(img/catalog_bg_6.jpg)"></div>
                     @endif
                      <div class="balck-layer"></div>
                      <div class="title vertical-align col-white">
                        <h1 class="h1 style-1">{{ $category->name }}</h1>
                         <div class="simple-text font-fam-3">
                            <p>{{ $category->description }}</p>
                         </div>
                      </div>
                 </div>
             </div>

             <section class="section">
                 <div class="container">
                    <div class="product-item-wrap">
                        @php $count = 1;@endphp
            @foreach($category->products()->take(5)->get() as $product)
                @if($count%2)
                <div class="product-item right item-animation">
                    <div class="image">
                        <a href="/product/{{ $product->slug }}"><img src={{ $product->image_url }} alt="" style="max-height: 482px; max-width: 412px;"></a>
                        <div class="title item-title">
                          <h4 class="h4"><a href="/product/{{ $product->slug }}">{{$product->title}}</a></h4>
                            <p class="sub-title"><span>{{ $product->price }}</span></p>
                        </div>
                    </div>
                </div>
                @else
                <div class="product-item left item-animation sm">
                    <div class="image">
                        <a href="/product/{{ $product->slug }}"><img src={{ $product->image_url }} alt="" style="max-height: 305px; max-width: 261px;"></a>
                        <div class="title item-title">
                          <h4 class="h4"><a href="/product/{{ $product->slug }}">{{$product->title}}</a></h4>
                            <p class="sub-title"><span>{{ $product->price }}</span></p>
                        </div>
                    </div>
                </div>
                @endif
                @php $count++;@endphp
            @endforeach
                    </div>
                 </div>
             </section>
         @endforeach

     </div>
@endsection
