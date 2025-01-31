                            <div class=" " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Change prioriy" >
                                <small>Deal</small>
                                <a class="pb-2 open-modal text-primary block w-full " href="{{route('Deal.edit_field',$model->id())}}" >
                                    <i class='bx bxs-sort-alt '></i> {{ $deal->name ?? '' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$deal->color ?? ''}}"></span>
                                </a>
                            </div>
