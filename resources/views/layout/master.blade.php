<!DOCTYPE html>
<html lang="en" dir="@if(app()->getLocale() === 'ar') rtl @endif">

<!-- Start HEAD -->
<head>
    <!-- All meta and title start-->
@include('layout.head')
<!-- meta and title end-->

    <!-- css start-->
@include('layout.css')
<!-- css end-->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="@if(app()->getLocale() === 'ar') rtl @endif">
    
    <!-- START TOPBAR -->
    @include('layout.header')
    <!-- END TOPBAR -->

    <div class="page-container row-fluid container-fluid">
    
        <!-- SIDEBAR - START -->
        @include('layout.sidebar')
        <!--  SIDEBAR - END -->

        <!-- Main Section start -->
        <main id="main-content" class=" overflow-x-hidden">
            {{-- main body content --}}
            @yield('main-content')
        </main>
        <!-- Main Section end -->
    </div>

    <!-- Footer Section start -->
     @include('layout.footer')
    <!-- Footer Section end -->
</div>

<!--customizer-->
<div id="customizer"></div>

    <!-- scripts start-->
    @include('layout.script')
    <!-- scripts end-->
     
</body>

</html>
