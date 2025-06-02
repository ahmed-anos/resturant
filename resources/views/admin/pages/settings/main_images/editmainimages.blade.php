<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-12 grid-margin stretch-card">
				<div class="card">
					<div class="card-body food_body mange_links">
						<h4 class="card-title">{{ __('admin.main_images_table_edit') }}</h4>
						<p class="card-description">{{ __('admin.main_images_table_desc_edit') }}</p>

						<form action="{{ route('main-images.update') }}" method="POST" enctype="multipart/form-data">
							@csrf
							@method('PUT')

							{{-- Banner Image --}}
							<div class="form-group">
								<label for="banner_image">{{ __('admin.banner_image') }}</label>
								<input type="file" class="form-control" id="banner_image" name="banner_image"  accept="image/*"/>
							</div>
							<div class="form-group">
								<img id="preview_banner_image" src="{{ asset('storage/main_images/' . $mainImage->banner_image) }}" alt="Banner Image" style="max-width: 200px; max-height:200px" class="shadow rounded mb-3" />
							</div>

							{{-- About Image --}}
							<div class="form-group">
								<label for="about_image">{{ __('admin.about_image') }}</label>
								<input type="file" class="form-control" id="about_image" name="about_image" accept="image/*"/>
							</div>
							<div class="form-group">
								<img id="preview_about_image" src="{{ asset('storage/main_images/' . $mainImage->about_image) }}" alt="About Image" style="max-width: 200px; max-height:200px" class="shadow rounded mb-3" />
							</div>

							{{-- Menu Image --}}
							<div class="form-group">
								<label for="menu_image">{{ __('admin.about_image') }}</label>
								<input type="file" class="form-control" id="menu_image" name="menu_image" accept="image/*"/>
							</div>
							<div class="form-group">
								<img id="preview_menu_image" src="{{ asset('storage/main_images/' . $mainImage->menu_image) }}" alt="Menu Image" style="max-width: 200px; max-height:200px" class="shadow rounded mb-3" />
							</div>

							{{-- Reservation Image --}}
							<div class="form-group">
								<label for="reservation_image">{{ __('admin.reservation_image') }}</label>
								<input type="file" class="form-control" id="reservation_image" name="reservation_image" accept="image/*"/>
							</div>
							<div class="form-group">
								<img id="preview_reservation_image" src="{{ asset('storage/main_images/' . $mainImage->reservation_image) }}" alt="Reservation Image" style="max-width: 200px; max-height:200px" class="shadow rounded mb-3" />
							</div>

							{{-- @if ($isAdmin === true) --}}
								<button type="submit" class="btn btn-primary mr-2">{{ __('admin.edit') }}</button>
							{{-- @else
								<button type="button" onclick="alert('Only admin can update site images')" class="btn btn-primary mr-2">Update Images</button>
							@endif --}}

							<a href="{{ route('dashboard') }}" class="btn btn-light">{{ __('admin.cancel') }}</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	{{-- JavaScript preview --}}
	<script>
		const inputs = ['banner_image', 'about_image', 'menu_image', 'reservation_image'];
		inputs.forEach(id => {
			document.getElementById(id).addEventListener('change', function(evt) {
				const [file] = this.files;
				if (file) {
					document.getElementById(`preview_${id}`).src = URL.createObjectURL(file);
				}
			});
		});
	</script>




</x-admin.index>
