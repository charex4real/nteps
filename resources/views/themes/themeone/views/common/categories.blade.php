<nav id="categories" class="navbar navbar-expand-lg p-0 categories">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-categories" aria-controls="navbar-categories" aria-expanded="false" aria-label="Toggle navigation">
		@lang('website.All Categories')
  </button>
  

  <div class="collapse navbar-collapse" id="navbar-categories">

    <ul class="navbar-nav flex-column">
    {{-- //Comment:  Here we loop through the topmost parent category --}}
    @foreach($CatsAndSubCats as $Category_0)
      <li class="nav-item dropdown">
        <a href="{{URL::to('/shop')}}?category={{$Category_0->categories_slug}}" class="nav-link dropdown-toggle">
        <img class="img-fuild" src="{{asset('').$Category_0->categories_icon}}">
          {{$Category_0->Categories_Description->categories_name}}  

          @if(count($Category_0->Category_1) > 0 )
          <i class="fa fa-angle-right " aria-hidden="true"></i>
          @endif 
        </a>

        @if(count($Category_0->Category_1) > 0 )
           <ul class="dropdown-menu multi-level">
        @endif

        {{-- //Comment:  Here we loop through the category_1 which is the second parent category --}}
        @foreach($Category_0->Category_1 as $Category_1)
         
            <li class="dropdown-submenu">
              <a href="{{URL::to('/shop')}}?category={{$Category_1->categories_slug}}" class="nav-link dropdown-toggle">
              <img class="img-fuild" src="{{asset('').$Category_1->categories_icon}}">
                
               {{$Category_1->Categories_Description->categories_name}}

                @if(count($Category_1->Category_2) > 0 )
                  <i class="fa fa-angle-right " aria-hidden="true"></i>
                @endif 
              </a>


              @if(count($Category_1->Category_2) > 0 )
                 <ul class="dropdown-menu multi-level">
              @endif
              {{-- //Comment:  Here we loop through the category_2 which is the last child category --}}
              @foreach($Category_1->Category_2 as $Category_2)
               
                  <li class="dropdown-submenu">
                    <a href="{{URL::to('/shop')}}?category={{$Category_2->categories_slug}}" class="nav-link dropdown-toggle">
                    <img class="img-fuild" src="{{asset('').$Category_2->categories_icon}}">
                      
                     {{$Category_2->Categories_Description->categories_name}}

                       
                    </a>
                  </li>
              @endforeach

              @if(count($Category_1->Category_2) > 0 )
                 </ul>
              @endif

            </li>
        @endforeach

        @if(count($Category_0->Category_1) > 0 )
           </ul>
        @endif
      </li>
    @endforeach
  
       
    </ul>
  </div>
</nav>


