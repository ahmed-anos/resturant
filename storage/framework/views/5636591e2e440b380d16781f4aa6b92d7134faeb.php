  <!-- Banner Area Starts -->
  <?php
    $bannerImg=\App\Models\MainImage::first()->banner_image;
    $setting = \App\Models\Setting::first();
  ?>
  <section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat" style="background-image: url(<?php echo e(asset('storage/main_images/' . $bannerImg)); ?>)">
    
    <h1 class="font-cursive-merie text-white text-center leading-normal text-6xl">
      Discover the <span class="text-amber-400">flavors</span><br />
      of <span class="text-amber-400"><?php echo e($setting->name); ?>

    </h1>
  </section>
  <!-- Banner Area End -->
<?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/home/partials/banner.blade.php ENDPATH**/ ?>