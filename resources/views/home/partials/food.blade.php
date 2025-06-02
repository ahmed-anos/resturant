    <!-- Food Area starts -->
  @php
    $foodBg=\App\Models\MainImage::first()->menu_image;
  @endphp
    <section id="menu" class="bg-no-repeat bg-[right_top_15rem] md:bg-right-top pt-8 md:pt-32 w-full" style="background-image: url({{ asset('storage/main_images/' . $foodBg )}})">
      <div class="flex flex-col justify-around items-center food-sm:items-start max-w-[980px] mx-auto">
        <div class="food-sm:text-left m-4 max-w-sm mt-5 p-4 text-center">
          <h3 class="font-bold font-cursive-merie text-4xl leading-normal capitalize">
            <span class="text-amber-400 leading-snug">{{ __('home.menu_desc') }}</span> <br /><span class="leading-normal">{{ __('home.menu_desc2') }}</span>
          </h3>
          <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
            {{ __('home.menu_desc3') }}
          </p>
        </div>
        {{-- <div class="flex flex-wrap justify-center lg:justify-between  mt-5">
          @foreach ($fooddata as $data)
          <div class="max-w-[290px] m-4 shadow-md group transition">
            <img class="w-full h-auto" src={{ $data['img'] }} alt={{$data['name']."-image"}}>
            <div class="p-7 bg-slate-100 group-hover:bg-amber-400 transition duration-300 min-h-[170px] test">
              <div class="flex flex-wrap justify-between font-bold font-cursive-merie text-lg">
                <h5 class='p-1 leading-normal capitalize'>{{ $data['name'] }}</h5>
                <span class="text-amber-400 group-hover:text-slate-600 p-1 text-right">${{ $data['price'] }}</span>
              </div>
              <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">{{ $data['desc'] }}</p>
            </div>
          </div>
          @endforeach
        </div> --}}

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
  @foreach ($fooddata as $data)
    <div class="max-w-[290px] m-4 shadow-md transition duration-300">
      <img class="w-full h-auto" src="{{ $data['img'] }}" alt="{{ $data['name'] }}-image">

      <div class="p-7 bg-slate-100 hover-card transition duration-300 min-h-[170px]">
        <div class="flex flex-wrap justify-between font-bold font-cursive-merie text-lg">
          <h5 class="p-1 leading-normal capitalize text-[#ff7e7e]">{{ $data['name'] }}</h5>
          <span class="text-[#ff7e7e] p-1 text-right">${{ $data['price'] }}</span>
        </div>
        <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
          {{ $data['desc'] }}
        </p>
      </div>
    </div>
  @endforeach
</div>


      </div>
    </section>
    <!-- Food Area End -->
