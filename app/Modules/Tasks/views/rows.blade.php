

<table class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped" id="example">
    <thead class="text-start bg-slate-100 dark:bg-zink-600">
        <tr>
            <th class=" task_code" >Task ID</th>
            <th class="text-start task_name" data-sort="task_name">Task Name</th>
            <th class="text-start ">Assignees</th>
            <th class="text-start" >Model</th>
            <th class="text-start  start" data-sort="start">Start</th>
            <th class="text-start  end" data-sort="end">Deadline</th>
            <th class="text-start  status" data-sort="status">Status</th>
            <th class="text-start  action">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-tasks">
        @foreach ($tasks as $task)
        <tr>
            <td>{{ $task->task_id }}</td>
            <td>{{$task->name}}</td>
            <td>
                
                <div class="symbol-group symbol-hover flex-nowrap flex">
                    @foreach($task->team as $key => $member)
                    @if ($key < 5)
                    <div class="symbol symbol-35px symbol-circle" rel="popover"  data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                        data-content="<b>{{$member->user->name ?? ''}}">
                        <img alt="Pic" src="/{{ $member->user->picture ?? '' }}">
                    </div>
                    @endif
                    @endforeach
                    @if ($task->team->count() > 5)
                    <a href="javascript:;" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                        data-bs-target="#kt_modal_view_users">
                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+{{ $task->team->count() - 5 }}</span>
                    </a>
                    @endif
                </div>
            </td>
            <td>
                <span rel="popover"  data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                data-title="{{ $task->model->name ?? '' }}"
                data-content="Related to: <b>{{class_basename($member->model)}}"> {{ $task->model->name ?? '' }}</span>
            </td>
            <td>{{date('M d, Y', strtotime($task->start_date)) }}</td>
            <td>{{date('M d, Y', strtotime($task->due_date)) ?? '' }}</td>
            <td class=" status">
                <span
                    class="badge bg-{{$task->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$task->status->name ?? ''}}</span>
            </td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">

                    <a href="{{route('Tasks.project_task', $task->task_id)}}" data-modal="#add-task-modal" rel="popover"
                        data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Manage task details"
                        class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                        <i class="bx bx-show fs-3"></i>
                    </a>
                    <a href="{{route('Tasks.edit_project', $task->task_id)}}" data-modal="#add-task-modal" rel="popover"
                        data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Edit task information"
                        class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                        <i class="bx bx-edit fs-4"></i></a>
                    <a href="javascript:;" data-path="{{route('Task.delete', $task->task_id)}}" class="delete-item "><i
                            class='bx bx-trash fs-4'></i></a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script> MediansSettings.tooltipsPopovers(); MediansSettings.dataTablesInit(); </script>
