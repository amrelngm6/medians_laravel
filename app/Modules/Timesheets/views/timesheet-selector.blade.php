                            <div class=" w-full" >
                                <small>Timesheet</small>
                                
                                @if (!$timesheet)
                                <form action="{{route('Timesheet.store')}}" class="ajax-form " id="timesheet-form" >
                                    @csrf
                                    <input type="hidden" name="model_id" value="{{$model->task_id}}" />
                                    <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                                    <input type="hidden" name="user_id" value="{{$user->id()}}" />
                                    <input type="hidden" name="user_type" value="{{get_class($user)}}" />
                                    <input type="hidden" name="start" value="{{date('Y-m-d H:i')}}">

                                    <button 
                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-content="Start Timesheet for this task" 
                                    type="submit" id="modal_new_target_submit" class="btn btn-primary btn-sm">
                                        <i class='bx bx-time-five'></i> Start timer <span class="h-10px inline-block rounded-full w-10px bg-{{$timesheet->status->color ?? ''}}"></span>
                                    </button>
                                <span>Log</span>
                                </form>
                                @else 
                                <a rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-content="End current Timesheet for this task"  
                                    data-confirm="End Timesheet ?"
                                    data-confirm-text="Are you sure you want to end this active Timesheet for this Task ?"
                                    href="{{route('Timesheet.end', $timesheet->id)}}?_token={{csrf_token()}}" class="ajax-link btn btn-primary btn-sm">
                                    <i class='bx bx-time-five'></i> <span id="timer-track"></span> <span class="h-10px inline-block rounded-full w-10px bg-{{$timesheet->status->color ?? ''}}"></span>
                                </a> 
                                <span>Log</span>
                                @endif 
                            </div>
@if ($timesheet)
<script>
// Calculate the time difference between the start time and now using moment.js
setInterval(()=> {
    let startTime = moment("{{$timesheet->start}}", "YYYY-MM-DD HH:mm:ss");
    let now = moment();
    let duration = moment.duration(now.diff(startTime));

    let hours = String(duration.hours()).padStart(2, '0');
    let minutes = String(duration.minutes()).padStart(2, '0');
    let seconds = String(duration.seconds()).padStart(2, '0');
    jQuery('#timer-track').html(`${hours}:${minutes}:${seconds}`)
}, 1000)
</script>
@endif