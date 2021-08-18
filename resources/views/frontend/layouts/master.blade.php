<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no" />
            <link rel="shortcut icon" href="favicon.ico"/>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
            <link href="{{asset('css/fontello.css')}}" rel="stylesheet" type="text/css"/>
            <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css"/>
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
            <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

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
