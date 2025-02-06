<table id="example" class="text-start display datatable table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-start">ID</th>
            <th class="text-start">User</th>
            <th class="text-start">Model</th>
            <th class="text-start">Start</th>
            <th class="text-start">End</th>
            <th class="text-start">Notes</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-timesheets">
        @foreach ($timesheets as $timesheet)
        <tr>
            <td>{{ $timesheet->id }}</td>
            <td>
                <img alt="Pic" src="/{{ $timesheet->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $timesheet->user->name ?? '' }}
            </td>
            <td><span  rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                    data-title="{{$timesheet->model_name()}}"
                    data-content="Related to {{$timesheet->model->name ?? ''}}" >{{ $timesheet->model->name ?? '' }}</span>
            </td>
            <td>{{date('M d, - H:i a', strtotime($timesheet->start)) }}</td>
            <td>{{date('M d, - H:i a', strtotime($timesheet->end)) ?? '' }}</td>
            <td>{{$timesheet->notes}}</td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="javascript:;" data-path="{{route('Timesheet.delete', $timesheet->id)}}"
                        class="delete-item "><i class='bx bx-trash fs-4'></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
MediansSettings.tooltipsPopovers();
MediansSettings.dataTablesInit();
</script>