	<!-- Footer Area Starts -->
@php
    $setting = \App\Models\Setting::first();
  @endphp
	<footer id="contact" class="footer-area bg-slate-800 text-white font-sans-lato">
	  <div class="flex footer-widget justify-between p-3 py-14 max-w-[960px] mx-auto section-padding">
	    <div class="basis-[300px] grow shrink p-5 pr-9 single-widget single-widget1">
	      <a href="/"><img class="w-36 h-auto" src="{{ asset('storage/' . $setting->logo) }}" alt="{{ $setting->name }}" /></a>
	      <p class="mt-3 leading-normal">
	       @if($setting->description)
			{{ $setting->description }}
			@else
			{{ __('home.footer_desc') }}
			@endif
	      </p>
	    </div>
	    <div class="single-widget single-widget2 leading-loose p-5 pr-7">
	      <h5 class="contact mb-2 font-bold font-cursive-merie text-lg capitalize text-amber-400">{{ __('home.contact_us') }}</h5>
	      <div class="flex items-start">
	        <i class="footer_icon fa fa-map-marker pr-3 pl-1 pt-2.5"></i>
	        <p>
				{{ $setting->location }}
	        </p>
	      </div>
			@if(!empty($setting->phone) && is_string($setting->phone))
				@foreach(json_decode($setting->phone) as $mobile)
					<div class="flex">
						<i class="footer_icon fa fa-phone pr-3 pl-1 pt-2.5"></i>
						{{ $mobile }}
					</div>
				@endforeach
			@elseif(is_array($setting->phone))
				@foreach($setting->phone as $mobile)
					<div class="flex">
						<i class="footer_icon fa fa-phone pr-3 pl-1 pt-2.5"></i>
						{{ $mobile }}
					</div>
				@endforeach
			@endif

	      <div class="flex">
	        <i class="footer_icon fa fa-envelope-o pr-3 pl-1 pt-2.5"></i>
	        <p>{{ $setting->email }}</p>
	      </div>
	    </div>
			@php
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

				@endphp

			<div class="single-widget single-widget3 leading-loose p-5 justify-self-end">
			<h5 class="mb-2 font-bold font-cursive-merie text-lg capitalize text-amber-400">
				{{ __('home.opening_hours') }}
			</h5>

			@foreach ($grouped as $time => $days)
			<p>
				{{ collect($days)->map(fn($day) => __('days.' . $day))->implode(', ') }}
				............
				@if ($time == 'Closed')
					{{ __('admin.close') }}
				@else
					{{ \Carbon\Carbon::createFromFormat('H:i:s', explode('-', $time)[0])->format('g a') }}
					-
					{{ \Carbon\Carbon::createFromFormat('H:i:s', explode('-', $time)[1])->format('g a') }}
				@endif
			</p>
		@endforeach

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
	        <li class="mr-4 my-1">{{ __('home.follow_us') }}:</li>
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
