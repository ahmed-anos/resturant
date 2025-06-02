<x-admin.index :user="$user" :isAdmin="$isAdmin">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body food_body">
                    <h4 class="card-title">{{ __('admin.hours_table') }}</h4>
                    <p class="card-description">
                        {{ __('admin.hours_table_desc') }}
                    </p>

                    <table style="width: 100%; border-collapse: collapse; border: 1px solid #ccc; " class="table table-hover overflow-auto block">
                        <thead>
                            <tr style="color: #ccc" class="bg-slate-800">
                                <th style="width: 25%;  padding: 14px; border: 1px solid #ccc;" class="font-bold text-white ">{{ __('admin.day') }}</th>
                                <th style="width: 75%;  padding: 14px; border: 1px solid #ccc;" class="font-bold text-white "> {{ __('admin.working_hours') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workingHours as $workingHour)
                                <tr style="background-color: #ffffff;" onmouseover="this.style.backgroundColor='#e9f5ff'" onmouseout="this.style.backgroundColor='#ffffff'">
                                    <td style="padding: 14px; border: 1px solid #ccc;">
                                        {{ __('days.' . $workingHour->day) }}
                                    </td>
                                    <td style="padding: 14px; border: 1px solid #ccc;">
                                        @if ($workingHour->is_open)
                                            {{ __('admin.from') }} <strong>{{ \Carbon\Carbon::parse($workingHour->open_at)->format('H:i') }}</strong>
                                            {{ __('admin.to') }} <strong>{{ \Carbon\Carbon::parse($workingHour->close_at)->format('H:i') }}</strong>
                                        @else
                                            <span style="color: red;">{{ __('admin.close') }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @if ($isAdmin === true)
                        <a href="{{ route('working-hours.edit') }}" class="btn btn-primary mr-2 mt-3">{{ __('admin.edit') }}</a>
                    @else
                        <button onclick="alert('فقط المسؤول يمكنه تعديل ساعات العمل')" type="button"
                            class="btn btn-primary mr-2 mt-3"> {{ __('admin.edit') }}</button>
                    @endif

                    <a href="{{ route('admin.index') }}" class="btn btn-light mt-3">{{ __('admin.cancel') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-admin.index>
