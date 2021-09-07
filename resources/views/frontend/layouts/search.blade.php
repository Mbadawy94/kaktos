<div class="menu-icon dark-layer">
    <a href="#" class="search-menu hover-icon"><img src="{{asset('img/search_icon.png')}}" alt=""></a>
</div>
<div class="search-block">
     <div class="close-popup"><img src="img/close_sm.png" alt=""></div>
     <div class="table-align">
       <div class="cell-view">
         <form type="get" action="{{ route('search') }}">
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
