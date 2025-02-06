                            <div class="flex-column-auto">
                                <small>Status</small>
                                <a class="pb-2 open-modal text-primary block w-full " href="{{route('StatusList.edit_field_ticket',$model->id())}}" >
                                    <i class='bx bx-power-off'></i> {{ $status->name ?? '' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$status->color ?? ''}}"></span>
                                </a>
                            </div>
