@extends('frontend.layouts.master')
@section('content')

<div class="content">

     <div class="product-top border-b">
     	<div class="sale-slider two-slider">
     	     <div class="gallery-top">
     	     	<div class="swiper-wrapper">
			      <div class="swiper-slide">
			        <div class="sale-item">
			        	<img src="img/sale_1.jpg" alt="" class="resp-img">
			        </div>
				  </div>
				  <div class="swiper-slide">
			        <div class="sale-item">
			        	<img src="img/sale_3.jpg" alt="" class="resp-img">
			        </div>
				  </div>
				  <div class="swiper-slide">
			        <div class="sale-item">
			        	<img src="img/sale_2.jpg" alt="" class="resp-img">
			        </div>
				  </div>
				</div>
     	     </div>
     		 <div class="gallery-thumbs">
     			<div class="swiper-wrapper">
			      <div class="swiper-slide">
			         <div class="thumbs-item active">
			         	<img src="img/sale_prev_1.jpg" alt="">
			         </div>
				  </div>
				  <div class="swiper-slide">
			         <div class="thumbs-item">
			         	<img src="img/sale_prev_2.jpg" alt="">
			         </div>
				  </div>
				  <div class="swiper-slide">
			         <div class="thumbs-item">
			         	<img src="img/sale_prev_3.jpg" alt="">
			         </div>
				  </div>
				</div>
     		</div>
     	</div>
     	<div class="sale-desc">
         <div class="desc">
     		<h2 class="h2 style-1 title">Anglo American</h2>
     		  <h4 class="h4 style-1">Airlite 406</h4>
     		    <div class="prod-price font-fam-2">€260 <b>€340</b></div>
     		    <div class="desc-button">
					<div class="counter font-fam-2">
					   <span>Quantity</span>
					   <input type="number" min="1" max="50" value="1" class="fl">
					</div>
     		    	<a href="#" class="button-style braun"><span><img src="img/link_icon_2.png" alt="">add to bag</span></a>
     		    </div>
     		      <div class="simple-text font-fam-1">
     		      	<p>As seen on James Dean and a whole slew of other super stylin' celebs, the 406 is the Anglo American signature. Contrary to its namesake, Anglo American has its roots in Great Britain, and these head-turning, utterly classic, round spectacles don't let us forget it</p>
     		      	<p>Contrary to its namesake, Anglo American has its roots in Great Britain, and these head-turning, utterly classic, round spectacles don't let us forget it.</p>
     		      </div>
     		      <ul class="list-style font-fam-1">
     		      	<li>As seen on James Dean and a whole slew of other super</li>
     		      	<li>stylin' celebs, the 406 is the Anglo American signature.</li>
     		      	<li>Contrary to its namesake, Anglo American has its roots</li>
     		      	<li>in Great Britain, and these head-turning, utterly classic, </li>
     		      </ul>
     		      <div class="menu-folow share-link">
     		        <span class="font-fam-1">SHARE:</span>
					<a href="#"><i class="icon-facebook"></i></a>
					<a href="#"><i class="icon-twitter"></i></a>
					<a href="#"><i class="icon-gplus"></i></a>
					<a href="#"><i class="icon-pinterest"></i></a>
					<a href="#"><i class="icon-tumbler"></i></a>
				 </div>
		    </div>
     	</div>
     </div>

     <section class="section border-b">
        <div class="second-caption style-2">
		  <h3 class="h5 md title font-fam-2">RELATED ITEMS</h3>
	    </div>
        <div class="container-fluid">
        	<div class="row">
        		<div class="col-md-3 col-sm-6 col-xs-12">
        			<div class="category-item type-2">
					  <div class="new">new</div>
						<div class="image">
						   <img src="img/popuplar_2.jpg" alt="">
						</div>
						<div class="item-title">
						  <h4 class="h4 style-2"><a href="#">OLIVE LEAF EARRINGS</a></h4>
							<p class="sub-title"><span> $45.00</span></p>
						</div>
					</div>
        		</div>
        		<div class="col-md-3 col-sm-6 col-xs-12">
        			<div class="category-item type-2">
						<div class="image">
						   <img src="img/popuplar_1.jpg" alt="">
						</div>
						<div class="item-title">
						  <h4 class="h4 style-2"><a href="#">basis of everything</a></h4>
							<p class="sub-title"><span> $45.00</span></p>
						</div>
					</div>
        		</div>
        		<div class="col-md-3 col-sm-6 col-xs-12">
        			<div class="category-item type-2">
					  <div class="new braun sale">sale</div>
						<div class="image">
						   <img src="img/popuplar_3.jpg" alt="">
						</div>
						<div class="item-title">
						  <h4 class="h4 style-2"><a href="#">the quin is dead</a></h4>
							<p class="sub-title"><span> $45.00</span></p>
						</div>
					</div>
        		</div>
        		<div class="col-md-3 col-sm-6 col-xs-12">
        			<div class="category-item type-2">
						<div class="image">
						   <img src="img/popuplar_4.jpg" alt="">
						</div>
						<div class="item-title">
						  <h4 class="h4 style-2"><a href="#">above it all</a></h4>
							<p class="sub-title"><span> $45.00</span></p>
						</div>
					</div>
        		</div>
        	</div>
        </div>

	  </section>

@endsection
