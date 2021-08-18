@extends('frontend.layouts.master')
@section('content')

<div class="content">

     <div class="product-top border-b">
     	<div class="sale-slider two-slider">
     	     <div class="gallery-top">
     	     	<div class="swiper-wrapper">
			      <div class="swiper-slide">
			        <div class="sale-item">
			        	<img src="{{ $product->image_url }}" alt="" class="resp-img">
			        </div>
				  </div>
				  <div class="swiper-slide">
			        <div class="sale-item" >
			        	<img src="img/sale_2.jpg" alt="" class="resp-img">
			        </div>
				  </div>
				</div>
     	     </div>
     	</div>
     	<div class="sale-desc">
         <div class="desc">
     		<h2 class="h2 style-1 title">{{ $product->title }}</h2>
     		  <h4 class="h4 style-1">{{ $product->category->name }}</h4>
     		    <div class="prod-price font-fam-2">{{ $product->price }} @if($product->oldPrice != '0')<b>{{ $product->oldPrice }}</b>@endif</div>
     		      <div class="simple-text font-fam-1">
     		      	<p> {{ $product->description }}</p>
     		      </div>
     		      <div class="menu-folow share-link">
     		        <span class="font-fam-1">SHARE:</span>
					<a href="#"><i class="icon-facebook"></i></a>
					<a href="#"><i class="icon-instagram"></i></a>
					<a href="#"><i class="icon-twitter"></i></a>
				 </div>
		    </div>
     	</div>
     </div>

     <section class="section border-b">
        <div class="second-caption style-2">
		  <h3 class="h5 md title font-fam-2>RELATED ITEMS</h3>
	    </div>

                <div class="container-fluid">
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <div class="category-item type-2">
                              @if($product->new == true)<div class="new">new</div>
                              @elseif($product->sale == true)<div class="new braun sale">sale</div>@endif
                                <div class="image" style="height: 263px">
                                   <img src="{{ $product->image_url }}" alt="">
                                </div>
                                <div class="item-title">
                                  <h4 class="h4 style-2"><a href="/products/{{ $product->slug }}">{{ $product->title }}</a></h4>
                                    <p class="sub-title"><span> {{ $product->price }}</span></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
	  </section>

@endsection
