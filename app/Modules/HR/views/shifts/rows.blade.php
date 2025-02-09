<table id="example" class="text-start display datatable table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-start">#</th>
            <th class="text-start">Name</th>
            <th class="text-start">Start</th>
            <th class="text-start">End</th>
            <th class="text-start">Days</th>
            <th class="text-start">Status</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-shifts">
        @foreach ($shifts as $shift)
        <tr>
            <td>{{ $shift->id }}</td>
            <td>{{ $shift->name }}</td>
            <td>{{date('H:i a', strtotime($shift->start_time)) }}</td>
            <td>{{date('H:i a', strtotime($shift->end_time)) }}</td>
            <td>{{"1" }}</td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="javascript:;" data-path="{{route('Shift.delete', $shift->id)}}" class="delete-item "><i
                            class='bx bx-trash fs-4'></i></a>
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