<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a class="nav-link" href="<?php echo e(route('admin.index')); ?>">
        <?php if($user !== null): ?>
        <div class="profile-image">
          <?php if($user->img): ?>
          <img
            class="img-xs rounded-circle ml-2 cursor-pointer"
            src="<?php echo e($user->img); ?>"
            alt="Profile image"
          />
          <?php else: ?>
          <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
          <?php endif; ?>
        </div>
        <div class="text-wrapper">
          <p class="profile-name"><?php echo e($user->name); ?></p>
          <?php if($isAdmin === true): ?>
            <p class="designation">Administrator</p>
          <?php else: ?>
            <p class="designation">General User</p>
          <?php endif; ?>
        </div>
        <?php else: ?>
        <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
        <div class="text-wrapper">
          <p class="profile-name">Guest User</p>
          <p class="designation">Guest</p>
        </div>
        <?php endif; ?>
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link"><?php echo e(__('admin.tables')); ?></span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('user.index')); ?>">
        <span class="menu-title"><?php echo e(__('admin.users')); ?></span>
        <i class="side_icon fa-solid fa-users menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('foodmenu.index')); ?>">
        <span class="menu-title"><?php echo e(__('admin.food_menu')); ?></span>        
        <i class="side_icon fa-solid fa-bowl-rice menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('reservation.index')); ?>">
        <span class="menu-title"><?php echo e(__('admin.reservations')); ?></span>
        <i class="side_icon fa-solid fa-table menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('specialdishes.index')); ?>">
        <span class="menu-title"><?php echo e(__('admin.special_dishes')); ?></span>
        <i class="side_icon fa-solid fa-bell-concierge menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo e(route('testimonial.index')); ?>">
        <span class="menu-title"><?php echo e(__('admin.testimonials')); ?></span>
        <i class="side_icon fa-solid fa-star-half-stroke menu-icon"></i>
      </a>
    </li>


<li x-data="{ open: <?php echo e(request()->routeIs('setting') ? 'true' : 'false'); ?> }" class="nav-item list-none">

  <a @click.prevent="open = !open" href="#" class="nav-link ">
    <span class="menu-title"><?php echo e(__('admin.settings')); ?></span>
    <i class="side_icon fa-solid fa-gear menu-icon text-gray-700"></i>
  </a>

  <div 
    x-show="open" 
    x-transition:enter="transition ease-out duration-300" 
    x-transition:enter-start="opacity-0 max-h-0" 
    x-transition:enter-end="opacity-100 max-h-screen" 
    x-transition:leave="transition ease-in duration-200" 
    x-transition:leave-start="opacity-100 max-h-screen" 
    x-transition:leave-end="opacity-0 max-h-0" 
    class="overflow-hidden pl-6 mt-2 text-sm text-gray-600">


     <ul class="flex flex-col space-y-1">
      <li>
        <a href="<?php echo e(route('working.hours')); ?>" 
        style="text-decoration: none ; color:#fff"
           class="flex items-center px-3  py-2 rounded hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200 <?php echo e(request()->routeIs('working.hours') ? 'bg-gray-300 font-semibold text-gray-900' : 'text-gray-700'); ?>">
           <i class="setting_icon fa-solid fa-clock mr-2 text-gray-600"></i> 
           <?php echo e(__('admin.working_hours')); ?>

        </a>
      </li>
      <li>
        <a href="<?php echo e(route('main.images')); ?>" 
        style="text-decoration: none ; color:#fff"
           class="flex items-center px-3 py-2 rounded hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200 <?php echo e(request()->routeIs('main.images') ? 'bg-gray-300 font-semibold text-gray-900' : 'text-gray-700'); ?>">
          <i class="setting_icon fa-solid fa-image mr-2 text-gray-600"></i>
          <?php echo e(__('admin.main_images')); ?>

        </a>
      </li>
      <li>
        <a href="<?php echo e(route('general.settings')); ?>" 
        style="text-decoration: none ; color:#fff"
           class="flex items-center px-3 py-2 rounded hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200 <?php echo e(request()->routeIs('general.settings') ? 'bg-gray-300 font-semibold text-gray-900' : 'text-gray-700'); ?>">
          <i class="setting_icon fa-solid fa-sliders mr-2 text-gray-600"></i>
          <?php echo e(__('admin.general_settings')); ?>

        </a>
      </li>
    </ul>


  </div>
</li>

  </ul>
</nav>
<?php /**PATH C:\laragon\www\RESTURANT\restaurant-site-laravel-master\resources\views/admin/partials/sidebar.blade.php ENDPATH**/ ?>