                            <div class=" " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Change prioriy" >
                                <small>Priority</small>
                                <a class="open-modal pb-2 text-primary block w-full " href="{{$route}}" >
                                    <i class='bx bxs-sort-alt '></i> {{ $priority->name ?? '' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$priority->color ?? ''}}"></span>
                                </a>
                            </div>
