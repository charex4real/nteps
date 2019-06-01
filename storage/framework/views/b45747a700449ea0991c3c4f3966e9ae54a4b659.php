<nav id="categories" class="navbar navbar-expand-lg p-0 categories">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-categories" aria-controls="navbar-categories" aria-expanded="false" aria-label="Toggle navigation">
		<?php echo app('translator')->getFromJson('website.All Categories'); ?>
  </button>
  
  <div class="collapse navbar-collapse" id="navbar-categories">

    <ul class="navbar-nav flex-column">
    
     
      <li class="nav-item dropdown">
        <a href="#" class="nav-link dropdown-toggle">
          Shoe  <i class="fa fa-angle-right " aria-hidden="true"></i> 
        </a>
        
        <ul class="dropdown-menu multi-level">
                
            <li class="dropdown-submenu">
              <a  class="dropdown-item" tabindex="-1" href="#">
                
               Men's Shoe
               <i class="fa fa-angle-right " aria-hidden="true"></i>
              </a> 
                <ul class="dropdown-menu multi-level">
                  <li class="dropdown-submenu">
                    <a  class="dropdown-item" tabindex="-1" href="#">
                      
                     Men's Shoe Child1
                     <i class="fa fa-angle-right " aria-hidden="true"></i>
                    </a>              
                  </li> 
                  <li class="dropdown-submenu">
                    <a  class="dropdown-item" tabindex="-1" href="#">
                      
                    Men's Shoe Child2
                    </a>              
                  </li>            
                </ul>             
            </li> 
            <li class="dropdown-submenu">
              <a  class="dropdown-item" tabindex="-1" href="#">
                
              Women's Shoe
              </a>              
            </li> 
                       
          
          </ul>
        
        </li>
       
    </ul>
  </div>
</nav>


