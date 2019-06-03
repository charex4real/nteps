<nav id="categories" class="navbar navbar-expand-lg p-0 categories">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-categories" aria-controls="navbar-categories" aria-expanded="false" aria-label="Toggle navigation">
		<?php echo app('translator')->getFromJson('website.All Categories'); ?>
  </button>
  

  <div class="collapse navbar-collapse" id="navbar-categories">

    <ul class="navbar-nav flex-column">
    
    <?php $__currentLoopData = $CatsAndSubCats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category_0): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li class="nav-item dropdown">
        <a href="<?php echo e(URL::to('/shop')); ?>?category=<?php echo e($Category_0->categories_slug); ?>" class="nav-link dropdown-toggle">
        <img class="img-fuild" src="<?php echo e(asset('').$Category_0->categories_icon); ?>">
          <?php echo e($Category_0->Categories_Description->categories_name); ?>  

          <?php if(count($Category_0->Category_1) > 0 ): ?>
          <i class="fa fa-angle-right " aria-hidden="true"></i>
          <?php endif; ?> 
        </a>

        <?php if(count($Category_0->Category_1) > 0 ): ?>
           <ul class="dropdown-menu multi-level">
        <?php endif; ?>

        
        <?php $__currentLoopData = $Category_0->Category_1; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category_1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         
            <li class="dropdown-submenu">
              <a href="<?php echo e(URL::to('/shop')); ?>?category=<?php echo e($Category_1->categories_slug); ?>" class="nav-link dropdown-toggle">
              <img class="img-fuild" src="<?php echo e(asset('').$Category_1->categories_icon); ?>">
                
               <?php echo e($Category_1->Categories_Description->categories_name); ?>


                <?php if(count($Category_1->Category_2) > 0 ): ?>
                  <i class="fa fa-angle-right " aria-hidden="true"></i>
                <?php endif; ?> 
              </a>


              <?php if(count($Category_1->Category_2) > 0 ): ?>
                 <ul class="dropdown-menu multi-level">
              <?php endif; ?>
              
              <?php $__currentLoopData = $Category_1->Category_2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Category_2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               
                  <li class="dropdown-submenu">
                    <a href="<?php echo e(URL::to('/shop')); ?>?category=<?php echo e($Category_2->categories_slug); ?>" class="nav-link dropdown-toggle">
                    <img class="img-fuild" src="<?php echo e(asset('').$Category_2->categories_icon); ?>">
                      
                     <?php echo e($Category_2->Categories_Description->categories_name); ?>


                       
                    </a>
                  </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              <?php if(count($Category_1->Category_2) > 0 ): ?>
                 </ul>
              <?php endif; ?>

            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if(count($Category_0->Category_1) > 0 ): ?>
           </ul>
        <?php endif; ?>
      </li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
       
    </ul>
  </div>
</nav>


