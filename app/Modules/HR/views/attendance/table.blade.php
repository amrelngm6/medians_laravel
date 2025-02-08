@extends('layout.master')
@section('title', 'HR Attendance')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Attendance table </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">HR</a>
                                </li>
                                <li class="active">
                                    <strong>Attendance</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 ">
                </div>

                <div class="col-lg-12 flex gap-10">
                    <div class="w-full">
                        <div class="widget-stat pb-0 card bg-info">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="flex-none flex-end text-white ">
                                        <p class="mb-1">Absence</p>
                                        <h3 class="text-white fs-2hx">14</h3>
                                    </div>
                                    <span class="w-full">
                                        <canvas class="clean-line-chartjs relative" data-fill="true" data-color="white"
                                            data-label="Absence" height="38" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="widget-stat pb-0 card bg-primary">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="pt-2 flex-none text-white ">
                                        <p class="mb-1">Attendance</p>
                                        <h3 class="text-white mb-0 pb-0 fs-2hx">469</h3>
                                    </div>
                                    <span class="w-full ">
                                        <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Attendance"
                                            height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="widget-stat pb-0 card bg-success">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="pt-2 flex-none text-white ">
                                        <p class="mb-1">Working hours</p>
                                        <h3 class="text-white mb-0 pb-0 fs-2hx">2,698</h3>
                                    </div>
                                    <span class="w-full ">
                                        <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Working hours"
                                            height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="clearfix"></div>

                            
                <!-- MAIN CONTENT AREA STARTS -->
                <div class="col-xs-12 ">
                    <section class="card ">
                        <form action="{{route('Attendance.filter')}}" data-element="attendance-list" id="filter-form" class="card-header ajax-form">
                            @csrf
                            <div class="card-title w-full gap-4">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="month" name="month" id="filter-date" data-form="filter-form" data-element="attendance-list" class="filter-on-change  form-control form-control-solid py-2 w-200px" />
                                </div>
                                
                                <div class="d-flex align-items-center position-relative my-1">
                                    @include('status.status-field-inline')
                                </div>
                                
                                <div class="flex flex-equal flex-end">
                                    <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Attendance.create')}}" data-modal="#new-attendance-modal">
                                        Add Attendance
                                    </a>
                                </div>
                            </div>
                        </form>

                        <div class="card-body">
                            <!--end grid-->
                            <div class="overflow-x-auto" id="attendance-list"></div>
                        </div>

                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->


<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart-chartjs.js')}}"></script>

<script>
jQuery(document).ready(function(){
    
    jQuery('#filter-date,.filter-on-change').on('change', function (ev, picker) {
        submitForm('filter-form', 'attendance-list');
    }) 
    jQuery('#filter-date').val('{{date('Y-m')}}')
    jQuery('#filter-date').trigger('change');

})
</script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection