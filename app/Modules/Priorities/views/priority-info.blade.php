                            <div class=" " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Change prioriy" >
                                <small>Priority</small>
                                <a class="pb-2 open-modal text-primary block w-full " href="{{route('Priority.edit_field',$model->id())}}" >
                                    <i class='bx bxs-sort-alt '></i> {{ $priority->name ?? '' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$priority->color ?? ''}}"></span>
                                </a>
                            </div>
