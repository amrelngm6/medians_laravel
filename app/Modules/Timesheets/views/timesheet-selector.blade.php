                            <div class=" " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                            data-content="Start Timesheet for this task" >
                                <small>Timesheet</small>
                                
                                <a href="javascript:;" class="btn btn-primary btn-sm">
                                    <i class='bx bx-time-five'></i> <span id="timer-track"></span> <span class="h-10px inline-block rounded-full w-10px bg-{{$timesheet->status->color ?? ''}}"></span>
                                </a>
                                @if ($timesheet->end != null)
                                <form action="{{route('Timesheet.store')}}" class="ajax-form " id="timesheet-form" >
                                    @csrf
                                    <input type="hidden" name="model_id" value="{{$model->task_id}}" />
                                    <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                                    <input type="hidden" name="user_id" value="{{$user->id()}}" />
                                    <input type="hidden" name="user_type" value="{{get_class($user)}}" />
                                    <input type="hidden" name="start" value="{{date('Y-m-d H:i')}}">

                                    <button type="submit" id="modal_new_target_submit" class="btn btn-primary btn-sm">
                                        <i class='bx bx-time-five'></i> Start timer <span class="h-10px inline-block rounded-full w-10px bg-{{$timesheet->status->color ?? ''}}"></span>
                                    </button>
                                </form>
                                @endif
                            </div>
<script>
    // Calculate the time difference between the start time and now
setInterval(()=> {
    let start = new Date('{{$timesheet->start}}')
    let now = new Date()
    let diff = now - start
    let hours = Math.floor(diff / 1000 / 60 / 60)
    let minutes = Math.floor(diff / 1000 / 60) - (hours * 60)
    let seconds = Math.floor(diff / 1000) - (minutes * 60)
    jQuery('#timer-track').html(`${hours}:${minutes}:${seconds}`)
}, 1000)
</script>