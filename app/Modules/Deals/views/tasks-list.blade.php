@foreach($statusList as $status)
            <div class="min-w-350px ">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex flex-">
                            <div class="flex-shrink-0"><i class="p-1 fs-2tx bx bx-list-check"></i></div>
                            <div class="flex-grow-1 mx-3">
                                <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">{{$status->name}}</a>
                                </h5>
                                <p class="mb-0"><small>{{$tasks->first() ? $tasks->first()->countByStatus($status->name) : 0}} items</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tasks_container py-4"  data-id="{{$status->status_id}}">

                    @foreach($tasks as $task)
                    @if ($task->status_id == $status->status_id)
                    <div class="cursor-move w-full"  data-id="{{$task->task_id}}">
                        <div class="card"  >
                            <div class="sort_item card-body pb-0" data-id="{{$task->task_id}}">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="{{route('Deal.deal_task', $task->task_id)}}" 
                                            onClick="(function(){window.history.pushState('page{{$task->task_id}}1', window.title, '{{route('Deal.tabs.tasks', $task->model_id)}}?task_id={{$task->task_id}}');})()" 
                                            data-id="{{$task->task_id}}" class="open-modal"
                                                data-modal="#task-modal">{{ $task->name }} </a></h4>
                                        <p class="block w-full">{{ $task->description }}</p>
                                    </div>
                                </div>
                                
                                <div class="pt-10 flex gap-4">
                                    <h5 class="w-full">Progress</h5>
                                    <span class="pt-1 block flex-none badge badge-danger light">{{$task->checklist->where('status' ,'1')->count()}} / {{ $task->checklist->count()}} Items</span>
                                </div>
                                <div class="mt-3">
                                    <div class="mb-0 progress default-progress h-4px">
                                        <div class="progress-bar bg-{{ $task->status->color ?? 'gradient1' }} progress-animated" 
                                            style="width: {{$task->progress()}}%; " role="progressbar">
                                            <span class="sr-only">{{$task->progress()}}% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full flex gap-2">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                @if($task->team)
                                                @foreach($task->team as $member)
                                                <div class="symbol symbol-25px symbol-circle" 
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="{{$member->user->name ?? ''}}">
                                                    
                                                    <img alt="Pic" src="/{{ $member->user->picture }}" class="w-10">
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
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
                                                <a href="javascript:;" data-path="{{route('Task.delete', $task->task_id)}}"
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="Delete"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                                    <i class="bx bx-trash fs-4"></i>    
                                                </a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    

                </div>
            </div>
            @endforeach