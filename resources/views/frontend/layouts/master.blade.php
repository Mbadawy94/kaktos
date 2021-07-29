<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
            <link rel="shortcut icon" href="favicon.ico"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
            <link href="{{asset('css/fontello.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
      <title>Floris</title>
  </head>
<body>

     <div class="loader">
         <span></span>
     </div>

     <div class="border-top"></div>
     <div class="border-bottom"></div>

     <!--==========HEADER============-->

    @include('frontend.layouts.header')
     <div class="content">

         @yield('content')

    @include('frontend.layouts.news-letter')

    @include('frontend.layouts.footer')
     </div>

     <!--==========CHECKOUT============-->

     <div class="check-out popup mark-popup-2">
     	<div class="close-popup"><img src="img/close_sm.png" alt=""></div>
     	   <div class="check-content">
    	   	  <div class="check-wrap">
     	   	   <h5 class="h5 title">Your basket <span class="font-fam-1">(2 ITEMS)</span></h5>
     	   	    <div class="check-item-wrap">
    	   	    <div class="check-item">
    	   	    	<div class="image">
    	   	    		<img src="img/check_image_1.jpg" alt="" class="resp-img">
    	   	    	</div>
    	   	    	<div class="text">
    	   	    		<h5 class="h5 sm">OLIVE LEAF EARRINGS</h5>
    	   	    		 <div class="sub-title font-fam-1">PALOMA PICASSO</div>
    	   	    		   <div class="price font-fam-2">
    	   	    		   	 €260<span>€340</span>
    	   	    		   </div>
    	   	    	</div>
    	   	    	<div class="delete-item">
    	   	    		<img src="img/close_md.png" alt="" class="resp-img">
    	   	    	</div>
    	   	    </div>
    	   	    <div class="check-item">
    	   	    	<div class="image">
    	   	    		<img src="img/check_image_2.jpg" alt="" class="resp-img">
    	   	    	</div>
    	   	    	<div class="text">
    	   	    		<h5 class="h5 sm">OLIVE LEAF EARRINGS</h5>
    	   	    		 <div class="sub-title font-fam-1">PALOMA PICASSO</div>
    	   	    		   <div class="price font-fam-2">
    	   	    		   	 €260<span>€340</span>
    	   	    		   </div>
    	   	    	</div>
    	   	    	<div class="delete-item">
    	   	    		<img src="img/close_md.png" alt="" class="resp-img">
    	   	    	</div>
    	   	    </div>
    	   	    </div>
     	   	  </div>
     	   	  <div class="check-pay-wrap">
				  <div class="check-pay">
					<div class="price-total font-fam-2">Subtotal:<span>€520</span></div>
					<a href="#" class="button-style braun"><span>checkout</span></a>
				  </div>
			  </div>
     	  </div>
     </div>

<script>
	function submitForm() {
		$.ajax({type:'POST', url:'email-action.php', data:$('#contact-form').serialize(), success: function(response) {
		   $('.submit').html('send');
		   $('.contact-form').addClass('active');
		   document.contactform.reset();
		}});
		return false;
	}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset('js/SmoothScroll.js')}}"></script>
<script src="{{asset('js/all.js')}}"></script>
</body>
</html>
