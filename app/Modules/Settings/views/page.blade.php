@extends('layout.master')
@section('title', 'All Custom Fields')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">@yield('nav-title') </h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>


    <div class="col-lg-12">
        <div class="w-full flex gap gap-10">
            <div class="card mb-5 mb-xl-10 col-md-3 " id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Information</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body px-4 text-gray-800 ">

                    <div class="d-flex align-items-center mb-6">
                        <i class='me-1 fs-3 bx bx-chevron-right'></i>
                        <a href="{{route('SystemSetting.basic')}}" data-element="#setting-page-content" class="ajax-load fw-semibold  nav-link text-hover-primary fs-4 m-0"> Basic settings </a>
                    </div>
                    @foreach ($modules as $module)
                    @if (Route::has($module->route_name.'.settings'))
                    <div class="d-flex align-items-center mb-6">
                        <i class='me-1 fs-3 bx bx-chevron-right'></i>
                        <a href="{{route($module->route_name.'.settings')}}" data-element="#setting-page-content" class="ajax-load fw-semibold nav-link text-hover-primary fs-4 m-0"> {{$module->name}} settings </a>
                    </div>
                    @endif
                    @endforeach
                </div>
            </div>

            <div id="setting-page-content" class="w-full">
            @yield('settings-page')
            </div>

        </div>
    </div>
    <div class="clearfix"></div>


    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection