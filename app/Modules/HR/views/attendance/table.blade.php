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
                        <form action="{{route('Goal.filter')}}" id="filter-form" class="card-header ajax-form">
                            @csrf
                            <div class="card-title w-full gap-4">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="goals" class="filter-on-change datepicker form-control form-control-solid  w-200px" />
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
                            <div class="overflow-x-auto">
                                <table class="w-full whitespace-nowrap table table-striped">
                                    <thead
                                        class="text-center bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                        <tr
                                            class="bg-white *:px-3.5 *:py-2.5 *:font-semibold *:border-b *:border-slate-200 *:dark:border-zink-500">
                                            <th class="min-w-125px">Employee Name</th>
                                            @php $days = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); @endphp
                                            @foreach (range(0, $days) as $day)
                                            <th class="{{date('d') == ($day ) ? 'active' : ''}}">{{$day}}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td class="ps-3 fw-bold">Adam Smith</td>
                                            @foreach (range(0, $days) as $day)
                                            <td><i class="bx bx-check text-success fs-4"></i></td>
                                            @endforeach
                                        </tr>
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td class="ps-3 fw-bold">Adam Smith</td>
                                            @foreach (range(0, $days) as $day)
                                            <td><i class="bx bx-check text-success fs-4"></i></td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection