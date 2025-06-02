<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a class="nav-link" href="{{ route('admin.index') }}">
        @if ($user !== null)
        <div class="profile-image">
          @if ($user->img)
          <img
            class="img-xs rounded-circle ml-2 cursor-pointer"
            src="{{ $user->img }}"
            alt="Profile image"
          />
          @else
          <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
          @endif
        </div>
        <div class="text-wrapper">
          <p class="profile-name">{{ $user->name }}</p>
          @if ($isAdmin === true)
            <p class="designation">Administrator</p>
          @else
            <p class="designation">General User</p>
          @endif
        </div>
        @else
        <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
        <div class="text-wrapper">
          <p class="profile-name">Guest User</p>
          <p class="designation">Guest</p>
        </div>
        @endif
      </a>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">{{ __('admin.tables') }}</span>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}">
        <span class="menu-title">{{ __('admin.users') }}</span>
        <i class="side_icon fa-solid fa-users menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('foodmenu.index')}}">
        <span class="menu-title">{{ __('admin.food_menu') }}</span>        
        <i class="side_icon fa-solid fa-bowl-rice menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('reservation.index')}}">
        <span class="menu-title">{{ __('admin.reservations') }}</span>
        <i class="side_icon fa-solid fa-table menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('specialdishes.index')}}">
        <span class="menu-title">{{ __('admin.special_dishes') }}</span>
        <i class="side_icon fa-solid fa-bell-concierge menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('testimonial.index')}}">
        <span class="menu-title">{{ __('admin.testimonials') }}</span>
        <i class="side_icon fa-solid fa-star-half-stroke menu-icon"></i>
      </a>
    </li>


<li x-data="{ open: {{ request()->routeIs('setting') ? 'true' : 'false' }} }" class="nav-item list-none">

  <a @click.prevent="open = !open" href="#" class="nav-link ">
    <span class="menu-title">{{ __('admin.settings') }}</span>
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
        <a href="{{ route('working.hours') }}" 
        style="text-decoration: none ; color:#fff"
           class="flex items-center px-3  py-2 rounded hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200 {{ request()->routeIs('working.hours') ? 'bg-gray-300 font-semibold text-gray-900' : 'text-gray-700' }}">
           <i class="setting_icon fa-solid fa-clock mr-2 text-gray-600"></i> 
           {{ __('admin.working_hours') }}
        </a>
      </li>
      <li>
        <a href="{{ route('main.images') }}" 
        style="text-decoration: none ; color:#fff"
           class="flex items-center px-3 py-2 rounded hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200 {{ request()->routeIs('main.images') ? 'bg-gray-300 font-semibold text-gray-900' : 'text-gray-700' }}">
          <i class="setting_icon fa-solid fa-image mr-2 text-gray-600"></i>
          {{ __('admin.main_images') }}
        </a>
      </li>
      <li>
        <a href="{{ route('general.settings') }}" 
        style="text-decoration: none ; color:#fff"
           class="flex items-center px-3 py-2 rounded hover:bg-gray-200 hover:text-gray-900 transition-colors duration-200 {{ request()->routeIs('general.settings') ? 'bg-gray-300 font-semibold text-gray-900' : 'text-gray-700' }}">
          <i class="setting_icon fa-solid fa-sliders mr-2 text-gray-600"></i>
          {{ __('admin.general_settings') }}
        </a>
      </li>
    </ul>


  </div>
</li>

  </ul>
</nav>
