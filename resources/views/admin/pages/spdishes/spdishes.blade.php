<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper food_btn_add">
		<a href="{{ route('specialdishes.create') }}" class="btn btn-primary mx-2">{{ __('admin.add_special_dish') }}

			<i class="fas fa-plus"></i>
		</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body food_body">
					<h4 class="card-title">{{ __('admin.special_table') }}</h4>					
					<p class="card-description">
						{{ __('admin.special_table_desc') }}  
					</p>

					@if(session()->has('msg'))
					<p class="alert alert-info">{{ session()->get('msg') }}</p>
					@endif
					
					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								@foreach(["Image", "Name", "Price", "Description", "Created_at", "edit_header", "delete_header"] as $heading)
									<th class="font-bold text-white">{{ __('admin.'. $heading) }}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($data as $data)
							<tr>
								<td class="w-32">
									<img src="{{$data->img}}" alt="{{$data->name}}" class="!w-full !h-auto !rounded-none">
								</td>							
								<td>
									<p class="font-bold">
		                <span class="text-amber-400">{{ $data['namepart1'] }}</span> <span class="leading-normal">{{ $data['namepart2'] }}</span>
		              </p>
		            </td>
								<td>{{$data->price}}</td>								
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->desc}}</td>
								<td>{{$data->created_at}}</td>
								<td>
									<a style="padding: 8px 12px" href="{{ route('specialdishes.edit', $data->id) }}" class="badge badge-primary cursor-pointer">
										<i class="fas fa-edit" style="margin-right: 6px;"></i>
										{{ __('admin.edit') }}
									</a>
								</td>
								<td>
									@if ($isAdmin === true)
								  		<form id="delete-form-{{ $data->id }}" action="{{ route('specialdishes.destroy', $data->id) }}" method="POST" style="display: none;">
									@csrf
									@method('DELETE')
								</form>

								<button 
									type="submit" 
									class="badge badge-danger cursor-pointer inline-flex items-center rounded"
									onclick="confirmDeleteFood({{ $data->id }}, '{{ $data->name }}');"
									style="padding: 8px 12px; text-transform: none;"
								>
									<i class="fas fa-trash" style="margin-right: 6px;"></i>
									{{ __('admin.delete') }}
								</button>
									@else
									<button
										onclick="alert('Only admin can special dish info')"
										class="badge badge-danger cursor-pointer"
										>Delete</button>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script>
  function confirmDeleteSpDish(id, name) {
      if(!confirm("Are You Sure to delete this special dish item, Named: " + name + ", Id: " + id + "." ))
      event.preventDefault();
  }
 </script>
</x-admin.index>
