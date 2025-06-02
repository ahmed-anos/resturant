	<!-- Footer Area Starts -->
<?php
    $setting = \App\Models\Setting::first();
  ?>
	<footer id="contact" class="footer-area bg-slate-800 text-white font-sans-lato">
	  <div class="flex footer-widget justify-between p-3 py-14 max-w-[960px] mx-auto section-padding">
	    <div class="basis-[300px] grow shrink p-5 pr-9 single-widget single-widget1">
	      <a href="/"><img class="w-36 h-auto" src="<?php echo e(asset('storage/' . $setting->logo)); ?>" alt="<?php echo e($setting->name); ?>" /></a>
	      <p class="mt-3 leading-normal">
	       <?php if($setting->description): ?>
			<?php echo e($setting->description); ?>

			<?php else: ?>
			<?php echo e(__('home.footer_desc')); ?>

			<?php endif; ?>
	      </p>
	    </div>
	    <div class="single-widget single-widget2 leading-loose p-5 pr-7">
	      <h5 class="contact mb-2 font-bold font-cursive-merie text-lg capitalize text-amber-400"><?php echo e(__('home.contact_us')); ?></h5>
	      <div class="flex items-start">
	        <i class="footer_icon fa fa-map-marker pr-3 pl-1 pt-2.5"></i>
	        <p>
				<?php echo e($setting->location); ?>

	        </p>
	      </div>
			<?php if(!empty($setting->phone) && is_string($setting->phone)): ?>
				<?php $__currentLoopData = json_decode($setting->phone); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="flex">
						<i class="footer_icon fa fa-phone pr-3 pl-1 pt-2.5"></i>
						<?php echo e($mobile); ?>

					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php elseif(is_array($setting->phone)): ?>
				<?php $__currentLoopData = $setting->phone; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mobile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="flex">
						<i class="footer_icon fa fa-phone pr-3 pl-1 pt-2.5"></i>
						<?php echo e($mobile); ?>

					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?>

	      <div class="flex">
	        <i class="footer_icon fa fa-envelope-o pr-3 pl-1 pt-2.5"></i>
	        <p><?php echo e($setting->email); ?></p>
	      </div>
	    </div>
			<?php
					$workHours = DB::table('working_hours')->get();

			$grouped = [];

			foreach ($workHours as $item) {
				if ($item->is_open) {
					$key = $item->open_at . '-' . $item->close_at;
				} else {
					$key = 'Closed';
				}

				$grouped[$key][] = $item->day;
			}

				?>

			<div class="single-widget single-widget3 leading-loose p-5 justify-self-end">
			<h5 class="mb-2 font-bold font-cursive-merie text-lg capitalize text-amber-400">
				<?php echo e(__('home.opening_hours')); ?>

			</h5>

			<?php $__currentLoopData = $grouped; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time => $days): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p>
				<?php echo e(collect($days)->map(fn($day) => __('days.' . $day))->implode(', ')); ?>

				............
				<?php if($time == 'Closed'): ?>
					<?php echo e(__('admin.close')); ?>

				<?php else: ?>
					<?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', explode('-', $time)[0])->format('g a')); ?>

					-
					<?php echo e(\Carbon\Carbon::createFromFormat('H:i:s', explode('-', $time)[1])->format('g a')); ?>

				<?php endif; ?>
			</p>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		</div>


	  </div>
	  <div class="footer-copyright py-3 text-white bg-slate-900">
	    <div class="flex flex-wrap items-center max-w-[960px] mx-auto px-3 justify-between">
	      <span class="my-3 mx-5 leading-normal">
	        Copyright &copy;
	        <script>
	          document.write(new Date().getFullYear());
	        </script>
	        <a class="text-cyan-400" href="https://danaa.site" target="_blank">El Danaa</a> | Design by
	        <a class="text-cyan-400" href="https://danaa.site" target="_blank">El Danaa For Programing</a>
	      </span>
	      <ul class="social-icons flex flex-wrap my-3 mx-5 transition ease-in-out duration-300">
	        <li class="mr-4 my-1"><?php echo e(__('home.follow_us')); ?>:</li>
	        <li class="mr-3 my-1 cursor-pointer border border-transparent hover:border-white hover:rounded-[50%] px-1">
	          <a href="#" class="cursor-pointer"><i class="fa-brands fa-facebook"></i></a>
	        </li>
	        <li class="mr-3 my-1 cursor-pointer border border-transparent hover:border-white hover:rounded-[50%] px-1">
	          <a href="#" class="cursor-pointer"><i class="fa fa-twitter"></i></a>
	        </li>
	        <li class="mr-3 my-1 cursor-pointer border border-transparent hover:border-white hover:rounded-[50%] px-1">
	          <a href="#" class="cursor-pointer"><i class="fa-brands fa-google-plus"></i></a>
	        </li>
	        <li class="mr-3 my-1 cursor-pointer border border-transparent hover:border-white hover:rounded-[50%] px-1">
	          <a href="#" class="cursor-pointer"><i class="fa-brands fa-pinterest"></i></a>
	        </li>
	        <li class="my-1 cursor-pointer border border-transparent hover:border-white hover:rounded-[50%] px-1">
	          <a href="#" class="cursor-pointer"><i class="fa fa-instagram"></i></a>
	        </li>
	      </ul>
	    </div>
	  </div>
	</footer>
	<!-- Footer Area End -->
<?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/home/partials/footer.blade.php ENDPATH**/ ?>