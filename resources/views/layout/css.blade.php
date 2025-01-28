
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Golos+Text:wght@400..900&display=swap" rel="stylesheet">

    <!-- Weather icon css-->
 
    <!-- CORE CSS FRAMEWORK - START -->
    <link href="/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/bootstrap-select/dist/css/ajax-bootstrap-select.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <!-- CORE CSS FRAMEWORK - END -->

    <!-- PAGE CSS - END -->
    @yield('css')
    <!-- PAGE CSS - END -->
     
    <!-- CORE CSS TEMPLATE - START -->
    <link href="{{ asset('assets/css/tailwind.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/theme.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!-- CORE CSS TEMPLATE - END -->

    @if(app()->getLocale() === 'ar') <!-- Check if RTL -->
        <link type="text/css"  rel="stylesheet" href="{{ asset('assets/css/rtl.css') }}">
    @endif

