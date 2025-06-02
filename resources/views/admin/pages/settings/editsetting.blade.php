<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body food_body mange_links">
                        {{-- <h4 class="card-title">Testimonial Form</h4>
                        <p class="card-description">Edit testimonial info</p> --}}
                        <form action="{{ route('setting.update') }}" method="post"
                            enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="form-group">
                                <label for="reviewname">{{ __('admin.web_name') }}</label>
                                <input type="text" class="form-control" id="reviewname" name="name"
                                    value="{{  $data->name  }}" placeholder="Input Client name" required />
                            </div>

                            <div class="form-group">
                                <label>{{ __('admin.logo') }}</label>
                                <div class="input-group col-xs-12">
                                    <input type="file" class="form-control file-upload-info"
                                        placeholder="Upload review image" id="reviewimageupdate" name="logo"
                                        value="{{ $data->logo }}" />
                                </div>
                            </div>

                             <div class="form-group">
                                <img id="tempreviewimageedit" src="{{ asset('storage/' .$data->logo ) }}" alt="{{ $data->name }}"
                                    class="h-auto shadow-sm w-1/2" />
                            </div>
                            
                            <div class="form-group">
                                <label for="reviewbio">{{ (__('admin.location')) }}</label>
                                <input type="text" class="form-control" id="reviewbio" name="location"
                                    value="{{ $data->location }}" placeholder="Input Client Bio" required />
                            </div>

                            <div class="form-group">
                                <label for="reviewrating">{{ __('admin.email') }}</label>
                                <input type="email" class="form-control" id="reviewbio" name="email"
                                    value="{{ $data->email }}" placeholder="Input Client Bio" required />
                            </div>
                            @php
                                $phones = is_array($data->phone) ? $data->phone : json_decode($data->phone, true);
                            @endphp

                        <div class="form-group">
                            <label for="reviewbio_0">{{ __('admin.phone') }}</label>
                            <input type="text" class="form-control" id="reviewbio_0" name="phone[]"
                                value="{{ $phones[0] ?? '' }}" placeholder="Input Phone" required />
                        </div>
                        <div class="form-group">
                            <label for="reviewbio_1">{{ __('admin.phone') }}</label>
                            <input type="text" class="form-control" id="reviewbio_1" name="phone[]"
                                value="{{ $phones[1] ?? '' }}" placeholder="Input Mobile" required />
                        </div>

                           <div class="form-group">
                                <label for="reviewbio"> {{ __('admin.Description') }}</label>
                                <input type="text" class="form-control" id="reviewbio" name="description"
                                    value="{{ $data->about_desc_first }}" placeholder="Input Client Bio" required />
                            </div>
                           <div class="form-group">
                                <label for="reviewbio"> {{ __('admin.who_us1') }}  </label>
                                <input type="text" class="form-control" id="reviewbio" name="about_desc_first"
                                    value="{{ $data->about_desc_first }}" placeholder="Input Client Bio" required />
                            </div>
                            <div class="form-group">
                                <label for="reviewbio">{{ __('admin.who_us2') }}   </label>
                                <input type="text" class="form-control" id="reviewbio" name="about_desc_second"
                                    value="{{ $data->about_desc_second   }}" placeholder="Input Client Bio" required />
                            </div>
                        
                            @php
                                $socialLinks = is_string($data->social_links) 
                                    ? json_decode($data->social_links, true) 
                                    : $data->social_links;

                                $links = ['facebook', 'tiktok', 'instagram', 'twitter'];
                            @endphp

                            @foreach ($socialLinks as $key => $link)
                                <div class="form-group">
                                    <label for="reviewbio_{{ $key }}">{{ __('admin.' . $links[$loop->index]) ?? ucfirst($key) }}</label>
                                    <input type="text" class="form-control" id="reviewbio_{{ $key }}" 
                                        name="social_links[{{ $key }}]"
                                        value="{{ $link }}" placeholder="Input {{ ucfirst($key) }} link" required />
                                </div>
                            @endforeach



                            @if ($isAdmin === true)
                                <button type="submit" class="btn btn-primary mr-2">{{ __('admin.edit') }}</button>
                            @else
                                <button onclick="alert('Only admin can edit food menu')" type="button"
                                    class="btn btn-primary mr-2">Edit</button>
                            @endif
                            <a href="{{ route('testimonial.index') }}" class="btn btn-light">{{ __('admin.cancel') }}</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        reviewimageupdate.onchange = evt => {
            const [file] = reviewimageupdate.files
            if (file) {
                tempreviewimageedit.src = URL.createObjectURL(file)
            }
        }
    </script>
</x-admin.index>
