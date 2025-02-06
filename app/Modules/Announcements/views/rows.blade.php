<table id="example" class="text-start display datatable table table-hover table-condensed">
    <thead>
        <tr>
            <th class="text-start">ID</th>
            <th class="text-start">Title</th>
            <th class="text-start">User</th>
            <th class="text-start">Item</th>
            <th class="text-start">Start</th>
            <th class="text-start">Due Date</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-announcements">
        @foreach ($announcements as $announcement)
        <tr>
            <td>{{$announcement->id}}</td>
            <td>{{$announcement->name}}</td>
            <td>
                @if ($announcement->user) <img alt="Pic" src="/{{ $announcement->user->picture ?? '' }}"
                    class="w-6 symbol me-1 symbol-circle">@endif
                {{ $announcement->user->name ?? '' }}</td>
            <td>
                <span rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                    data-content="Related to <b class='text-danger'>{{$announcement->modelName()}}: {{ $announcement->model->name ?? '' }}</b>">
                    {{ $announcement->model->name ?? '' }}</span>
            </td>
            <td>{{date('M d, Y', strtotime($announcement->start)) }}</td>
            <td>{{date('M d, Y', strtotime($announcement->end)) }}</td>
            <td>
                <span
                    class="badge bg-{{$announcement->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$announcement->status->name ?? ''}}</span>
            </td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="javascript:;" data-path="{{route('Announcement.delete', $announcement->id)}}"
                        class="delete-item "><i class='bx bx-trash fs-4'></i></a>
                </div>
            </td>
        </tr>

        @endforeach 
    </tbody>
</table>
<script> MediansSettings.tooltipsPopovers(); MediansSettings.dataTablesInit(); </script>
