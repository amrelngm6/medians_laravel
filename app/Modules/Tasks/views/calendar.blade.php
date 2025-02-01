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
                // events: "{{route('Project.tasks.filter', 0)}}",
                events: {
                    url: "{{route('Task.filter-json')}}",
                    method: 'POST',
                    extraParams: {
                        _token: '{{csrf_token()}}',
                    },
                    failure: function() {
                        alert('there was an error while fetching events!');
                    },
                    textColor: 'black' // a non-ajax option
                },
                
                eventDidMount: function(info) {
                    info.el.setAttribute('data-trigger', 'hover');
                    info.el.setAttribute('data-toggle', 'popover');
                    info.el.setAttribute('data-placement', 'bottom');
                    info.el.setAttribute('data-html', true);
                    info.el.setAttribute('data-title', info.event.title + ('<small class="text-white">( '+(info.event.extendedProps.model_name ?? '')+' )</small>'));
                    info.el.setAttribute('data-content', info.event.extendedProps.description);

                    jQuery(info.el).popover({
                        template: '<div class="popover"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'
                    });
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
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection