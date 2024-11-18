@extends('layout.master')
@section('title', 'Map')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Highcharts - World Map </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">Highcharts JS</a>
                                </li>
                                <li class="active">
                                    <strong>Highcharts - World Map</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">

                    <div class="card ">
                        <div class="card-body ">

                            <div class="flex gap-10" id="demo-wrapper">
                                <h4 id="map-name-header" class="mt-5 flex-none"></h4>

                                <div id="selector" class="flex w-full">
                                    <i id="prev-map-btn" class="bx bxs-left-arrow-alt fs-2x pt-3"></i>

                                    <input list="maps" id="map-datalist-input"
                                        class="form-control form-control-lg form-control-solid" name="map-choice"
                                        aria-label="Select a map to display" />
                                    <datalist id="maps"></datalist>

                                    <i id="next-map-btn" class="bx bxs-right-arrow-alt fs-2x pt-3"></i>
                                </div>
                                <div class="flex gap-10  flex-none">
                                    <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                        <input class="small  form-check-input " type="checkbox" id="datalabels-checkbox" checked="">
                                        <label class="form-check-label" for="datalabels-checkbox">Labels</label>
                                    </div>
                                </div>

                            </div>
                            <div id="map-box">
                                <div id="world-map2"></div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/highcharts/highmaps.js')}}"></script>
<script src="{{asset('assets/plugins/highcharts/drilldown.js')}}"></script>
<script src="{{asset('assets/plugins/highcharts/index.js')}}"></script>
<script src="{{asset('assets/plugins/highcharts/accessibility.js')}}"></script>
<script src="{{asset('assets/js/chart-map.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection