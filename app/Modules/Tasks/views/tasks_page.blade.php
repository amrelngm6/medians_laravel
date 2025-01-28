@extends('layout.master')
@section('title', 'Project Tasks')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Tasks</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12 hidden">

                    <div class="card mb-5 mb-xl-10 py-0">
                        <div class="card-body py-0 flex w-full">
                            <!--begin::Navs-->
                            <ul class="w-full nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                @yield('tasks-views-menu')
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('Tasks')}}">
                                        List </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route('Tasks')}}?view=kanban">
                                        Kanban </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->

                        </div>
                    </div>
                </div>

                
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                @yield('tasks-list')

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