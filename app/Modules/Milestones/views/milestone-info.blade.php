                            <div class="w-full ">
                                <small>Priority</small>
                                <a class="pb-2 open-modal text-primary block w-full " href="{{route('Tasks.edit_priority_field',$model->task_id)}}" >
                                    <i class='bx bxs-sort-alt '></i> {{ $priority->name ?? '' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$priority->color ?? ''}}"></span>
                                </a>
                            </div>
