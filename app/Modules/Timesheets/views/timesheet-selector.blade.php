                            <div class=" " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Start Timesheet for this task" >
                                <small>Timesheet</small>
                                                        
                                <form action="{{route('Timesheet.store')}}" class="ajax-form " id="timesheet-form" >
                                    @csrf
                                    <input type="hidden" name="model_id" value="{{$model->task_id}}" />
                                    <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                                    <input type="hidden" name="user_id" value="{{$user->id()}}" />
                                    <input type="hidden" name="user_type" value="{{get_class($user)}}" />
                                    <input type="hidden" name="start" value="{{date('Y-m-d H:i')}}">

                                    <button type="submit" id="modal_new_target_submit" class="btn btn-primary btn-sm">
                                        <i class='bx bx-time-five'></i> {{ $timesheet->start ?? 'Start timer' }} <span class="h-10px inline-block rounded-full w-10px bg-{{$timesheet->status->color ?? ''}}"></span>
                                    </button>
                                </form>
                            </div>
