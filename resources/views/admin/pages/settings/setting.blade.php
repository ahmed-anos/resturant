<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body food_body">
                    <h4 class="card-title">{{ __('admin.setting_table') }}</h4>
                    <p class="card-description">
                        {{ __('admin.setting_table_desc') }}
                    </p>


                    <table style="width: 100%; border-collapse: collapse; font-family: Arial, sans-serif;" class="table table-hover overflow-auto block">
                        <thead>
                            <tr style="color: #ccc" class="bg-slate-800">
                                <th  class="font-bold text-white ">
                                    {{ __('admin.key') }}</th>
                                <th  class="font-bold text-white">
                                    {{ __('admin.value') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                                @php
                                    $socialLinks = is_array($setting->social_links) ? $setting->social_links : json_decode($setting->social_links, true);
                                    $phones = is_array($setting->phone) ? $setting->phone : json_decode($setting->phone, true);

                                    $rows = [
                                        __('admin.web_name') => $setting->name,
                                        __('admin.logo') => "<img src='" . asset('storage/' . $setting->logo) . "' alt='logo' style='max-height: 50px;'>",
                                        __('admin.location') => $setting->location,
                                        __('admin.email') => $setting->email,
                                        __('admin.phone') => is_array($phones) ? implode(', ', $phones) : $phones,
                                        __('admin.who_us1') => $setting->about_desc_first,
                                        __('admin.who_us2') => $setting->about_desc_second,
                                    ];
                                @endphp

                            @foreach ($rows as $key => $value)
                                <tr onmouseover="this.style.backgroundColor='#e2f0ff'"
                                    onmouseout="this.style.backgroundColor='{{ $loop->even ? '#f9f9f9' : '#ffffff' }}'"
                                    style="background-color: {{ $loop->even ? '#f9f9f9' : '#ffffff' }};">
                                    <td style="padding: 14px; border: 1px solid #dee2e6;">{{ $key }}</td>
                                    <td style="padding: 14px; border: 1px solid #dee2e6;">{!! $value !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($isAdmin === true)
                        <a href="{{ route('setting.edit') }}" class="btn btn-primary mr-2 mt-2">{{ __('admin.edit') }}</a>
                    @else
                        <button onclick="alert('Only admin can edit food menu')" type="button"
                            class="btn btn-primary mr-2 mt-2">Edit</button>
                    @endif
                    <a href="{{ route('admin.index') }}" class="btn btn-light mt-2">{{ __('admin.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>
