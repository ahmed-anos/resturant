<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body food_body">
                    <h4 class="card-title"> {{ __('admin.main_images_table') }} </h4>
                    <p class="card-description"> {{ __('admin.main_images_table_desc') }} </p>

                        <table style="width: 100%; border-collapse: collapse; border: 1px solid #ccc; " class="table table-hover overflow-auto block">
                        <thead>
                            <tr style="color: #ccc" class="bg-slate-800">
                                <th style="width: 25%;  padding: 14px; border: 1px solid #ccc;" class="font-bold text-white ">{{ __('admin.Image') }}</th>
                                <th style="width: 75%;  padding: 14px; border: 1px solid #ccc;" class="font-bold text-white "> {{ __('admin.Image_position') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="background-color: #ffffff;" 
                                onmouseover="this.style.backgroundColor='#e9f5ff'" 
                                onmouseout="this.style.backgroundColor='#ffffff'">
                                <td style="padding: 14px; border: 1px solid #ccc;">{{ __('admin.banner_image') }}</td>
                                <td style="padding: 14px; border: 1px solid #ccc;">
                                    <img src="{{ asset('storage/main_images/' . $mainImages->banner_image) }}" alt="banner image" style="max-width: 150px; max-height:200px">
                                </td>
                            </tr>

                            <tr style="background-color: #ffffff;" 
                                onmouseover="this.style.backgroundColor='#e9f5ff'" 
                                onmouseout="this.style.backgroundColor='#ffffff'">
                                <td style="padding: 14px; border: 1px solid #ccc;">{{ __('admin.about_image') }}</td>
                                <td style="padding: 14px; border: 1px solid #ccc;">
                                    <img src="{{ asset('storage/main_images/' . $mainImages->about_image) }}" alt="about image" style="max-width: 150px; max-height:200px">
                                </td>
                            </tr>

                            <tr style="background-color: #ffffff;" 
                                onmouseover="this.style.backgroundColor='#e9f5ff'" 
                                onmouseout="this.style.backgroundColor='#ffffff'">
                                <td style="padding: 14px; border: 1px solid #ccc;">{{ __('admin.menu_image') }}</td>
                                <td style="padding: 14px; border: 1px solid #ccc;">
                                    <img src="{{ asset('storage/main_images/' . $mainImages->menu_image) }}" alt="menu image" style="max-width: 150px; max-height:200px">
                                </td>
                            </tr>

                            <tr style="background-color: #ffffff;" 
                                onmouseover="this.style.backgroundColor='#e9f5ff'" 
                                onmouseout="this.style.backgroundColor='#ffffff'">
                                <td style="padding: 14px; border: 1px solid #ccc;">{{ __('admin.reservation_image') }}</td>
                                <td style="padding: 14px; border: 1px solid #ccc;">
                                    <img src="{{ asset('storage/main_images/' . $mainImages->reservation_image) }}" alt="reservation image" style="max-width: 150px; max-height:200px">
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    @if ($isAdmin === true)
                        <a href="{{ route('main-images.edit') }}" class="btn btn-primary mr-2 mt-3"> {{ __('admin.edit') }} </a>
                    @else
                        <button onclick="alert('فقط المسؤول يمكنه تعديل ساعات العمل')" type="button"
                            class="btn btn-primary mr-2 mt-3">تعديل ساعات العمل</button>
                    @endif

                    <a href="{{ route('admin.index') }}" class="btn btn-light mt-3">{{ __('admin.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>
