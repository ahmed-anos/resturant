  <!-- Banner Area Starts -->
  @php
    $bannerImg=\App\Models\MainImage::first()->banner_image;
    $setting = \App\Models\Setting::first();
  @endphp
  <section id="home" class="w-full h-screen flex flex-col justify-center items-center bg-cover bg-center bg-no-repeat" style="background-image: url({{asset('storage/main_images/' . $bannerImg) }})">
    {{-- <h6 class="font-sans-lato text-lime-600 font-bold capitalize text-base leading-loose">the most interesting food in the world</h6> --}}
    <h1 class="font-cursive-merie text-white text-center leading-normal text-6xl">
      Discover the <span class="text-amber-400">flavors</span><br />
      of <span class="text-amber-400">{{ $setting->name }}
    </h1>
  </section>
  <!-- Banner Area End -->
