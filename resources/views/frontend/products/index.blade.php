@extends('frontend.layouts.master')
@section('content')

    <div class="top-slider sm type-2">
      <div class="category-baner">
        @if($category->name == "Hair")
           <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(/img/category_grid_1.jpg)"></div>
        @elseif($category->name == "Face")
           <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(/img/category_grid_2.jpg)"></div>
        @else
           <div class="bg ready data-jarallax" data-jarallax="5" style="background-image:url(/img/category_grid_3.jpg)"></div>
        @endif
         <div class="title vertical-align col-white">
           <h1 class="h1 style-1">{{ $category->name }}</h1>
            <div class="simple-text font-fam-3">
               <p>{{ $category->description }}</p>
            </div>
         </div>
    </div>
    </div>

      <section class="section-md border-b">
        <div class="container-fluid">
            @foreach($products as $product)
              <div class="col-25">
                  <div class="category-item">
                    <div class="image">
                      @if($product->new == true)<div class="new">new</div>
                        @elseif($product->sale == true)<div class="new braun sale">sale</div>
                        @endif
                      <a href="/product/{{ $product->slug }}"><img src={{ $product->image_url }} alt=""></a>
                      <div class="title item-title">
                        <h4 class="h4"><a href="/product/{{ $product->slug }}">{{$product->title}}</a></h4>
                          <p class="sub-title"><span>{{ $product->price }}</span></p>
                      </div>
                    </div>
                  </div>
              </div>
            @endforeach
        </div>
      </section>
@endsection
