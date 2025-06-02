    <!-- Welcome Area Starts -->
  <?php
    $mainImg=\App\Models\MainImage::first()->about_image;
    $setting = \App\Models\Setting::first();
  ?>
    <section id="about" class="flex flex-wrap item-center justify-center lg-p-0 lg:justify-between lg:p-0 lg:pt-28 max-w-[960px] mx-auto p-5">
      <div class="basis-[500px] grow-0 pr-5">
        <img class="h-auto w-full" src="<?php echo e(asset('storage/main_images/' . $mainImg )); ?>" alt="welcome food image" />
      </div>

      <div class="basis-[400px] grow max-w-[650px] p-5">
        <h3 class="font-bold font-cursive-merie text-4xl">
          <span class="text-amber-400 leading-snug"><?php echo e(__('home.welcome')); ?></span> <br /><span class=" leading-normal"><?php echo e($setting->name); ?></span>
        </h3>
        
        <p class="welcome_p">
          <?php echo e(__('home.about_desc')); ?>

          <span class="block mt-3"></span>
          <?php echo e(__('home.about_desc2')); ?>

        </p>
        <a href="#book" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase font-sans-monts text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400"><?php echo e(__('home.book_table')); ?></a>
      </div>
    </section>
    <!-- Welcome Area End -->
<?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/home/partials/welcome.blade.php ENDPATH**/ ?>