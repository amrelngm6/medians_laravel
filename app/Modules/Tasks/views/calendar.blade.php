@extends('tasks::tasks_page')
@section('tasks-views-menu')

<!--end::Nav item-->
@endsection

@section('css')
    <link href="/assets/plugins/calendar/fullcalendar.css" rel="stylesheet" type="text/css" />
@endsection

@section('tasks-list')
    <div class="col-lg-12">

        <div class="w-full ">
            <div class="w-full bg-white p-8 rounded-xl shadow-md dark:bg-gray-900 dark:text-gray-300"
                id='tasks-calendar' style="max-height:calc(100vh - 50px)"></div>
        </div>
        <!-- <div id="calendar"></div> -->
    </div>
@endsection
   
@section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
    <script src="{{asset('assets/plugins/calendar/fullcalendar.min.js')}}"></script>

    <script>
        jQuery(document).ready(function() {
            var calendarEl = document.getElementById('tasks-calendar');
            var calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay'
                },
                events: [
                    @foreach($tasks as $task)
                    {
                        title: '{{ $task->name }}',
                        // Set the description at one line
                        description: '{{ str_replace(["\r\n", "\r", "\n"], ' ', $task->description) }}',
                        start: '{{ $task->start_date }}',
                        end: '{{ $task->due_date }}',
                        url: '{{ route('Tasks.project_task', $task->task_id) }}',
                        classNames: ['bg-{{ $task->status->color ?? 'primary' }}', 'p-1'],
                        borderColor: 'white',
                        textColor: 'white',
                    },
                    @endforeach
                ],
                eventDidMount: function(info) {
                    info.el.setAttribute('data-trigger', 'hover');
                    info.el.setAttribute('data-toggle', 'popover');
                    info.el.setAttribute('data-placement', 'bottom');
                    info.el.setAttribute('data-html', true);
                    info.el.setAttribute('data-title', info.event.title);
                    
                    info.el.setAttribute('data-content', info.event.extendedProps.description);

                    jQuery(info.el).popover({
                        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
                    });
                
                    // var tooltip = new Tooltip(info.el, {
                    //     title: info.event.extendedProps.description,
                    //     placement: 'top',
                    //     trigger: 'hover',
                    //     container: 'body'
                    // });
                },
            });
            calendar.render();

            jQuery(document).on('click', 'a.fc-event', async function(e) {
                e.preventDefault();
                let res = await fetch(jQuery(this).attr('href'));
                res.text().then(data=> {
                    jQuery('#modals').html(data)
                })
            });
        });
        </script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection