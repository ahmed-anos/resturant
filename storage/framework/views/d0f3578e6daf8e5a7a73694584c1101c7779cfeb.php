    <!-- Food Area starts -->
  <?php
    $foodBg=\App\Models\MainImage::first()->menu_image;
  ?>
    <section id="menu" class="bg-no-repeat bg-[right_top_15rem] md:bg-right-top pt-8 md:pt-32 w-full" style="background-image: url(<?php echo e(asset('storage/main_images/' . $foodBg )); ?>)">
      <div class="flex flex-col justify-around items-center food-sm:items-start max-w-[980px] mx-auto">
        <div class="food-sm:text-left m-4 max-w-sm mt-5 p-4 text-center">
          <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">
            <span class="text-amber-400 leading-snug"><?php echo e(__('home.menu_desc')); ?></span> <br /><span class="leading-normal"><?php echo e(__('home.menu_desc2')); ?></span>
          </h3>
          <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
            <?php echo e(__('home.menu_desc3')); ?>

          </p>
        </div>
        

<style>
  .hover-card:hover {
    background-color: #ff7e7e;
  }
  .hover-card:hover h5,
  .hover-card:hover span,
  .hover-card:hover p {
    color: white !important;
  }
</style>
  
<div class="flex flex-wrap justify-center lg:justify-between mt-5">
  <?php $__currentLoopData = $fooddata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="max-w-[290px] m-4 shadow-md transition duration-300">
      <img class="w-full h-auto" src="<?php echo e($data['img']); ?>" alt="<?php echo e($data['name']); ?>-image">

      <div class="p-7 bg-slate-100 hover-card transition duration-300 min-h-[170px]">
        <div class="flex flex-wrap justify-between font-bold font-cursive-merie text-lg">
          <h5 class="p-1 leading-normal capitalize text-[#ff7e7e]"><?php echo e($data['name']); ?></h5>
          <span class="text-[#ff7e7e] p-1 text-right">$<?php echo e($data['price']); ?></span>
        </div>
        <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
          <?php echo e($data['desc']); ?>

        </p>
      </div>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>


      </div>
    </section>
    <!-- Food Area End -->
<?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/home/partials/food.blade.php ENDPATH**/ ?>