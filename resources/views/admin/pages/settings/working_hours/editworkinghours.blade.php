<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body food_body">
                        <h4 class="card-title">{{ __('admin.hours_table_edit') }}   </h4>
                        <p class="card-description">  {{ __('admin.hours_table_desc_edit') }}  </p>

                        <div x-data="{ openDay: null }" class="space-y-3">
                            @foreach ($workingHour as $day)
                                <div class="border rounded-lg shadow-sm overflow-hidden my-2">
                                    <button type="button"
                                        class="w-full flex items-center justify-between px-4 py-2  hover:bg-gray-200 focus:outline-none"
                                        style="background: #7b7b7b;color: #eee;"
                                        @click="openDay === {{ $day->id }} ? openDay = null : openDay = {{ $day->id }}">

                                        <span class="day_align text-left flex-1 mange_links">{{__('days.' . $day->day) }}</span>

                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            :class="openDay === {{ $day->id }} ? 'rotate-180' : 'rotate-0'"
                                            class="h-5 w-5 transform transition-transform duration-300 text-gray-600"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.092l3.71-3.86a.75.75 0 111.08 1.04l-4.25 4.42a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>

                                    <div x-show="openDay === {{ $day->id }}"
                                        x-transition:enter="transition-all ease-in-out duration-500"
                                        x-transition:enter-start="max-h-0 opacity-0"
                                        x-transition:enter-end="max-h-screen opacity-100"
                                        x-transition:leave="transition-all ease-in-out duration-500"
                                        x-transition:leave-start="max-h-screen opacity-100"
                                        x-transition:leave-end="max-h-0 opacity-0" class="p-4 bg-white border-t"
                                        style="overflow: hidden;">

                                        <form action="{{ route('working-hours.update', $day->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            <div class="form-group">
                                                <label for="open_at_{{ $day->id }}" class="mange_links">{{ __('admin.open_time') }}</label>
                                                <input type="time" id="open_at_{{ $day->id }}" name="open_at" class="form-control" step="60"
                                                    value="{{ $day->open_at ? \Carbon\Carbon::parse($day->open_at)->format('H:i') : '' }}">
                                            </div>

                                            <div class="form-group">
                                                <label for="close_at_{{ $day->id }}" class="mange_links">{{ __('admin.close_time') }}</label>
                                                <input type="time" id="close_at_{{ $day->id }}" name="close_at" class="form-control" step="60"
                                                    value="{{ $day->close_at ? \Carbon\Carbon::parse($day->close_at)->format('H:i') : '' }}">
                                            </div>


                                            <div class="form-group">
                                                <label class="mange_links"> {{ __('admin.is_open') }} </label>
                                                <select name="is_open" class="form-control days_select mange_links">
                                                    <option value="1" {{ $day->is_open ? 'selected' : '' }} class="mange_links">{{ __('admin.yse') }}</option>
                                                    <option value="0" {{ !$day->is_open ? 'selected' : '' }} class="mange_links">{{ __('admin.no') }}</option>
                                                </select>
                                            </div>

                                            <button type="submit" class="btn btn-primary">{{ __('admin.edit') }}</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <a href="{{ route('working.hours') }}" class="btn btn-light mt-4">{{ __('admin.cancel') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>
