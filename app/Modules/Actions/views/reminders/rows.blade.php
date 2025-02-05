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
    <tbody id="rows-reminders">
        @foreach ($reminders as $reminder)
        <tr>
            <td>{{ $reminder->id }}</td>
            <td>
                <img alt="Pic" src="/{{ $reminder->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $reminder->user->name ?? '' }}
            </td>
            <td><span  rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                    data-title="{{$reminder->model_name()}}"
                    data-content="Related to {{$reminder->model->name ?? ''}}" >{{ $reminder->model->name ?? '' }}</span>
            </td>
            <td>{{date('M d, Y - H:i a', strtotime($reminder->start)) }}</td>
            <td>{{date('M d, Y - H:i a', strtotime($reminder->end)) ?? '' }}</td>
            <td>{{$reminder->notes}}</td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="javascript:;" data-path="{{route('Reminder.delete', $reminder->id)}}"
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