
                            @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->task_id }}</td>
                                <td>{{$task->name}}</td>
                                <td>
                                    <img alt="Pic" src="/{{ $task->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                                     {{ $task->user->name ?? '' }}</td>
                                <td>{{ $task->model->name ?? '' }}</td>
                                <td>{{date('M d, Y - H:i a', strtotime($task->start)) }}</td>
                                <td>{{date('M d, Y - H:i a', strtotime($task->end)) ?? '' }}</td>
                                <td class=" status">
                                    <span
                                        class="badge bg-{{$task->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$task->status->name ?? ''}}</span>
                                </td>
                                <td>
                                    <div  class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        
                                    <a href="{{route('Tasks.project_task', $task->task_id)}}" data-modal="#add-task-modal"
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="Manage task details"
                                                    class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                                    <i class="bx bx-show fs-3"></i>    
                                                </a>
                                                <a href="{{route('Tasks.edit_project', $task->task_id)}}" data-modal="#add-task-modal"
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="Edit task information"
                                                    class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                                    <i class="bx bx-edit fs-4"></i></a>
                                        <a href="javascript:;" data-path="{{route('Task.delete', $task->task_id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                