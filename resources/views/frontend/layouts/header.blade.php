<header class="header-style-1">
    <div class="burger-menu"><span></span></div>
    <a href="/" class="logo align-scroll"><img src="{{asset('img/logo.png')}}" alt=""></a>
    <nav class="slide-menu">
        <div class="table-align">
           <div class="cell-view">
            <div class="container-menu">
              <ul class="list-menu">
                <li><a href="/"><span>Home</span></a></li>
                <li><a href="{{ route('collections') }}"><span>Collections</span></a>
                   <ul class="drop-menu">
                       <li><a href="/products/hair"><span>Hair</span></a></li>
                       <li><a href="/products/face"><span>Face</span></a></li>
                       <li><a href="/products/skin"><span>Skin</span></a></li>
                   </ul>
                </li>
                <li><a href="{{ route('blogs') }}"><span>Blogs</span></a></li>
                <li><a href="{{ route('contact') }}"><span>Contacts</span></a></li>
                <li><a href="{{ route('about') }}"><span>About</span></a></li>
              </ul>
             </div>
           </div>
           <div class="menu-copy"><span>Copyright Kaktos &copy; 2021</span></div>
             <div class="menu-folow share-link">
                <a href="https://www.facebook.com/kaktosnp" target="_blank"><i class="icon-facebook"></i></a>
                <a href="https://twitter.com/kaktosnp" target="_blank"><i class="icon-twitter"></i></a>
                <a href="https://www.instagram.com/kaktosnp/" target="_blank"><i class="icon-instagram"></i></a>
                <a href="#"><i class="icon-tumbler"></i></a>
                <a href="#"><i class="icon-pinterest-circled"></i></a>
             </div>
         </div>
    </nav>
    <div class="menu-icon dark-layer">
          <a href="#" class="search-menu hover-icon"><img src="{{asset('img/search_icon.png')}}" alt=""></a>
       </div>
    <div class="search-block">
         <div class="close-popup"><img src="img/close_sm.png" alt=""></div>
         <div class="table-align">
           <div class="cell-view">
             <form action="#">
              <div class="container-menu">
               <div class="input-field">
                 <input type="text" placeholder="SEARCH">
                 <span class="clear-input"><img src="img/close.png" alt=""></span>
               </div>
              </div>
             </form>
           </div>
         </div>
       </div>
</header>
