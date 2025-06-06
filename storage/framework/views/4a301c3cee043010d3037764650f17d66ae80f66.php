<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>" dir="<?php echo e(app()->getLocale() == 'ar' ? 'rtl' : 'ltr'); ?>">
  <head>
    <base href="/public">
    <?php echo $__env->make("admin.partials.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>
    <div class="container-scroller">
      <?php echo $__env->make("admin.partials.navbar", ['user' => $user, 'isAdmin' => $isAdmin], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <div class="container-fluid page-body-wrapper">
        <?php echo $__env->make("admin.partials.sidebar", ['user' => $user, 'isAdmin' => $isAdmin], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="main-panel">
            <?php echo e($slot); ?>

        </div>
      </div>
    </div>
    
    <?php echo $__env->make("admin.partials.script", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>        
  </body>
</html><?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/components/admin/index.blade.php ENDPATH**/ ?>