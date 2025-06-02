
	<!-- Header Area Starts -->
	<?php
      $setting = \App\Models\Setting::first();
    ?>
	<header class="bg-slate-300/[.5] fixed font-cursive-merie left-0 lg:-translate-x-1/2 lg:left-1/2 lg:mx-auto lg:transform lg:translate-y-0 lg:w-4/5 ml-4 px-0 py-1 rounded shadow-sm top-0 w-56 xl:w-11/12 z-[20]">
	  <div class="mx-4 lg:flex lg:items-center">
	    <div class="flex items-center justify-between">
	      <div class="lg:shrink-0">
	        <a href="<?php echo e(route('index')); ?>"><img src="<?php echo e(asset('storage /' . $setting->logo)); ?>" alt="<?php echo e($setting->name); ?>" class="h-auto lg:m-0 lg:p-2 m-auto max-w-[100px] min-w-[90px] px-2 py-2" /></a>
	      </div>
	      <div class="nav-ham p-4 lg:hidden cursor-pointer transition ease-in-out duration-75 open">
	      	<?php $__currentLoopData = [1, 2, 3]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			    		<span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0"></span>
			    	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	      </div>
	      <div class="nav-ham p-4 lg:hidden cursor-pointer relative transition ease-in-out duration-75 close hidden">
	        <span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0 absolute top-3.5 right-4 transform rotate-45"></span>
	        <span class="bg-gray-600 block w-5 h-[3px] my-1 mx-0  absolute top-3.5 right-4 transform -rotate-45"></span>
	      </div>
	    </div>

	    <div class="lg:flex-1 nav-collapse hidden lg:block">
	      <ul class="pb-2 lg:pb-0 lg:flex lg:flex-wrap lg:items-center lg:justify-end">
	      	<?php $__currentLoopData = $navdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					     <li class="font-bold lg:px-4 lg:py-2 lg:text-left p-2.5 text-[12.5px] text-right uppercase transition ease-in-out duration-300 hover:scale-105">
							<a href="<?php echo e($data['href']); ?>"><?php echo e(__('home.' . $data['text'])); ?></a>
					     </li> 
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						 <a href="<?php echo e(route('lang.switch', 'en')); ?>">English</a> |
						<a href="<?php echo e(route('lang.switch', 'ar')); ?>">العربية</a>

					

	      </ul>
	    </div>
	  </div>
	</header>
	<!-- Header Area End -->

				<?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/home/partials/header.blade.php ENDPATH**/ ?>