                            <div class=" w-full py-2" >
                                <div class="flex w-full gap-4">  
                                    <small class="w-full">Timesheet</small>
                                    <a style="line-height:5px; " rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Timesheets of spent time for this task" 
                                    class="text-primary fw-bold fs-7 pb-6 open-modal" href="{{route('Timesheet.show', ['model_id'=>$model->id() ?? '0', 'model_type' => get_class($model)])}}" data-modal="#new-timesheet-modal">
                                        <i class="bx bx-log "></i> History 
                                    </a>
                                </div>  
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
                                    </form>
                                    @else 
                                    <a rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="End current Timesheet for this task"  
                                        data-confirm="End Timesheet ?"
                                        data-confirm-text="Are you sure you want to end this active Timesheet for this Task ?"
                                        href="{{route('Timesheet.end', $timesheet->id)}}?_token={{csrf_token()}}" class="ajax-link btn btn-primary btn-sm">
                                        <i class='bx bx-time-five'></i> <span id="timer-track"></span> <span class="h-10px inline-block rounded-full w-10px bg-{{$timesheet->status->color ?? ''}}"></span>
                                    </a> 
                                    @endif 
                            </div>
@if ($timesheet)
<script>
let interval;   
// Calculate the time difference between the start time and now using moment.js
interval = setInterval(()=> {
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