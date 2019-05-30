<nav id="categories" class="navbar navbar-expand-lg p-0 categories">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-categories" aria-controls="navbar-categories" aria-expanded="false" aria-label="Toggle navigation">
		@lang('website.All Categories')
  </button>
  
  <div class="collapse navbar-collapse" id="navbar-categories">

    <ul class="navbar-nav flex-column">
     @foreach($result['pcommonContent']['pcategories'] as $pcategories_data)
        <li class="nav-item dropdown">
          <a href="{{ URL::to('/shop')}}?category={{$pcategories_data->pslug}}" class="nav-link dropdown-toggle">
            <img class="img-fuild" src="{{asset('').$pcategories_data->picon}}">{{$pcategories_data->pname}} @if(count($pcategories_data->categories_data)>0) <i class="fa fa-angle-right " aria-hidden="true"></i> @endif
          </a>
          
            @if(count($pcategories_data->categories)>0)
              <ul class="dropdown-menu multi-level">
              	@foreach($pcategories_data->categories as $categories_data)            
                  <li class="dropdown-submenu">
                    <a  class="dropdown-item" tabindex="-1" href="{{ URL::to('/shop')}}?category={{$categories_data->slug}}">
                      <img class="img-fuild" src="{{asset('').$categories_data->icon}}">
                      {{$categories_data->sub_name}}
                    </a>              
                  </li>            
                @endforeach 
              </ul>
            @endif
        </li>
     @endforeach
    </ul>
  </div>
</nav>


