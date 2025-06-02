    <!-- Welcome Area Starts -->
  @php
    $mainImg=\App\Models\MainImage::first()->about_image;
    $setting = \App\Models\Setting::first();
  @endphp
    <section id="about" class="flex flex-wrap item-center justify-center lg-p-0 lg:justify-between lg:p-0 lg:pt-28 max-w-[960px] mx-auto p-5">
      <div class="basis-[500px] grow-0 pr-5">
        <img class="h-auto w-full" src="{{ asset('storage/main_images/' . $mainImg ) }}" alt="welcome food image" />
      </div>

      <div class="basis-[400px] grow max-w-[650px] p-5">
        <h3 class="font-bold font-cursive-merie text-4xl">
          <span class="text-amber-400 leading-snug">{{ __('home.welcome') }}</span> <br /><span class=" leading-normal">{{ $setting->name }}</span>
        </h3>
        {{-- <p class="pt-4 text-[14px] font-sans-lato text-slate-600 leading-relaxed">
          Created god gathered don't you yielding herb you had. And isn't, god was
          saw. Dominion. Great sixth for in unto was. Open can't tree am waters
          brought. Divide after there. Was.
          <span class="block mt-3"></span>
          God gathered don't you yielding herb you had. And isn't, god was
          saw. Dominion. Great sixth for in unto was. Open can't tree waters
          brought. Divide after there. Was. Created god gathered don't you yielding
          herb you had. And isn't god.
        </p> --}}
        <p class="welcome_p">
          {{ __('home.about_desc') }}
          <span class="block mt-3"></span>
          {{ __('home.about_desc2') }}
        </p>
        <a href="#book" class="inline-block rounded-sm shadow-md mt-7 px-5 py-3 bg-lime-400 uppercase font-sans-monts text-xs font-bold text-slate-900 border border-transparent transition ease-in-out duration-300 hover:-translate-y-1 hover:scale-110 hover:bg-transparent hover:border-lime-400">{{ __('home.book_table') }}</a>
      </div>
    </section>
    <!-- Welcome Area End -->
