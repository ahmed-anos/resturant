<div class="row quick-action-toolbar">
  <div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-header d-block d-md-flex">
        <h5 class="mb-0 quick_action">{{ __('admin.quick_action') }}</h5>
      </div>
      <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
          <a class="btn px-0" href="{{ route('foodmenu.create')}}"> <i class="fa-solid fa-bowl-rice mr-2"></i> {{ __('admin.add_food') }}</a>
        </div>
        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
          <a class="btn px-0" href="{{ route('reservation.index')}}"><i class="fa-solid fa-table mr-2"></i> {{ __('admin.reservations') }}</a>
        </div>
        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
          <a class="btn px-0" href="{{ route('specialdishes.create')}}"><i class="fa-solid fa-bell-concierge mr-2"></i> {{ __('admin.add_special_dish') }}</a>
        </div>
        <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
          <a class="btn px-0" href="{{ route('testimonial.create')}}"><i class="fa-solid fa-star-half-stroke mr-2"></i> {{ __('admin.add_testimonial') }}</a>
        </div>
      </div>
    </div>
  </div>
</div>