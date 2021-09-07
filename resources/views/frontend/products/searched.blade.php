@extends('frontend.layouts.master')
@section('content')

    <div class="top-slider sm type-2">
     	 <div class="category-baner">
            <div class="bg fix" style="background-image:url(/img/searched.jpg)"></div>
     	 	  <div class="title vertical-align">
     	 	  	<h1 class="h1 style-1 text-white">Searched Products</h1>
     	 	  </div>
     	 </div>
      </div>

      <section class="section-md border-b">
         <div class="container-fluid">
             @forelse($products as $product)
               <div class="col-25">
                  <div class="category-item">
                    <div class="image">
                      @if($product->new == true)<div class="new">new</div>
                      @elseif($product->sale == true)<div class="new braun sale">sale</div>@endif
                       <a href="#" class="popup-open" data-popup="popup-1"><img src="{{ $product->image_url }}" alt=""></a>
                    </div>
                    <div class="item-title">
                      <h4 class="h4"><a href="/product/{{ $product->slug }}" class="popup-open" data-popup="popup-1">{{ $product->title }}</a></h4>
                        <p class="sub-title"><span> {{ $product->price }}</span></p>
                    </div>
                  </div>
               </div>
             @empty
                 <div class="sm type-2">
                     <div class="category-baner">
                          <div class="title">
                            <h2 class="h2 style-1">No Products Found</h2>
                          </div>
                     </div>
                 </div>
             @endforelse
         </div>
	  </section>
@endsection
