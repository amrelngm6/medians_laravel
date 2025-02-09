    <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

    <!-- CORE JS FRAMEWORK - START -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/pace/pace.min.js')}}"></script>
    <script src="{{asset('assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/plugins/viewport/viewportchecker.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-select/dist/js/ajax-bootstrap-select.min.js')}}"></script>
    <script src="{{asset('assets/plugins/calendar/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/calendar/moment-timezone.js')}}"></script>
    <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.min.js')}}"></script>
    <!-- CORE JS FRAMEWORK - END -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    @yield('script')
    @yield('header-script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    <!-- CORE TEMPLATE JS - START -->
    <script src="{{asset('assets/js/scripts.js')}}"></script>
    <!-- END CORE TEMPLATE JS - END -->
    <script>
        setTimeout(() => {
            MediansSettings.handleNotification( '{{route('Reminder.subscribe')}}', '{{ env('VAPID_PUBLIC_KEY') }}', '{{ csrf_token() }}');
        }, 2000);
    </script>
    
    @include('components.text-select-speech')
    @include('components.speech-recognise')


    <div id="modals"></div>
