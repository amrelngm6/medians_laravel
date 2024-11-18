@extends('layout.master')
@section('title', 'Charts donut')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Chart JS - Donut</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">Charts JS</a>
                                </li>
                                <li class="active">
                                    <strong>Donut</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">
                    <div class="w-full">
                        <div class="col-xs-8">
                            <div class="card">
                                <div class="card-header block  pt-5">
                                    <h3 class="">Full charts</h3>
                                    <p>Clean charts with xAxis & yAxis</p>
                                </div>
                                <div class="card-body">
                                    <div class="div">
                                        <canvas class="doughnut-chartjs" width="600"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="card ">
                                <div class="card-header pt-5">
                                    <h3 class="">Clean charts</h3>
                                    <p>Clean charts without xAxis & yAxis</p>
                                </div>
                                <div class="card-body ">
                                    <canvas class="clean-doughnut-chartjs" data-limit="5"  width="600"></canvas>
                                </div>
                                <div class="card-body ">
                                    <canvas class="clean-doughnut-chartjs" data-limit="5" width="600"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/chart-chartjs.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection