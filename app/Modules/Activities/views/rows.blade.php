<table id="example" class="text-start display datatable table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-start">ID</th>
            <th class="text-start">Description</th>
            <th class="text-start">User</th>
            <th class="text-start">Model</th>
            <th class="text-start">Time</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-activities">

        @foreach ($activities as $activity)
        <tr>
            <td>{{ $activity->id }}</td>
            <td>{{ $activity->description }}</td>
            <td>
                <img alt="Pic" src="/{{ $activity->causer->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $activity->causer->name ?? '' }}
            </td>
            <td>{{class_basename($activity->model_type) }}</td>
            <td>{{date('M d, Y H:i a', strtotime($activity->created_at)) }}</td>
           
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="javascript:;" data-path="{{route('Activity.delete', $activity->id)}}"
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