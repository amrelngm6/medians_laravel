                            <div class=" " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Change prioriy" >
                                <small>Pipeline</small>
                                <a class="pb-2 open-modal text-primary block w-full " href="{{route('Pipeline.edit_field',$model->id())}}" >
                                    <i class='bx bxs-sort-alt '></i> {{ $pipeline->name ?? '' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$pipeline->color ?? ''}}"></span>
                                </a>
                            </div>