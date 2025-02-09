@php $attendance = App\Modules\HR\Services\AttendanceService::getUserActiveAttendance(); @endphp
                            <div class=" w-full py-2">
                                @if (!$attendance)
                                <form action="{{route('Attendance.store')}}" class="ajax-form " id="attendance-form"
                                    data-reload-link="{{$modalRoute}}" data-target-modal="task-modal">
                                    @csrf
                                    <input type="hidden" name="model_id" value="{{$model->task_id}}" />
                                    <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                                    <input type="hidden" name="user_id" value="{{$user->id()}}" />
                                    <input type="hidden" name="user_type" value="{{get_class($user)}}" />
                                    <input type="hidden" name="start" value="{{date('Y-m-d H:i')}}">

                                    <button rel="popover" data-toggle="popover" data-placement="bottom"
                                        data-trigger="hover" data-content="Start Attendance for this task" type="submit"
                                        id="modal_new_target_submit" class="btn btn-primary btn-sm">
                                        <i class='bx bx-time-five'></i> Start timer <span
                                            class="h-10px inline-block rounded-full w-10px "></span>
                                    </button>
                                </form>
                                @else
                                <a rel="popover" data-toggle="popover" data-placement="bottom" data-trigger="hover"
                                    data-content="End current Attendance for Today" data-confirm="End Shift ?"
                                    data-confirm-text="Are you sure you want to end your shift for Today ?"
                                    href="{{route('Attendance.end', $attendance->id)}}?_token={{csrf_token()}}"
                                    id="track-attendance" class="ajax-link btn btn-primary btn-sm">
                                    <i class='bx bx-time-five'></i> <span id="timer-track"></span> </span>
                                </a>
                                @endif
                            </div>
@section('attendance-script')                            
@if ($attendance)
<script>
let attendanceInterval;
jQuery(document).ready(function() {

    // Calculate the time difference between the start time and now using moment.js
    moment.tz.setDefault('{{env('APP_TIMEZONE')}}');
    attendanceInterval = setInterval(async () => {
        let startTime = moment("{{$attendance->check_in}}", "YYYY-MM-DD hh:mm:ss");
        let now = moment.utc();
        let duration = moment.duration(now.tz('{{env('APP_TIMEZONE')}}').diff(startTime));
        let hours = String(duration.hours()).padStart(2, '0');
        let minutes = String(duration.minutes()).padStart(2, '0');
        let seconds = String(duration.seconds()).padStart(2, '0');
        jQuery('#timer-track').html(`${hours}:${minutes}:${seconds}`)
    }, 1000)
})
</script>
@endif
@endsection