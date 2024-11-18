@extends('layout.master')
@section('title', 'Flot Area')
@section('css')

@endsection
@section('main-content')


            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Flot Charts - Line</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">Flot Charts</a>
                                </li>
                                <li class="active">
                                    <strong>Multi Charts</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Toggle</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row flot-chart-area">
                                        <div class="col-md-10 col-sm-8 col-xs-12">
                                            <div class="flot-demo-container">
                                                <div id="flot-toggle" class="flot-demo-placeholder" style="float:left; width:100%;">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2 col-sm-4 col-xs-12">
                                            <p id="choices" style="float:right; width:135px;"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Real Time</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="flot-demo-container">
                                        <div id="flot-realtime" class="flot-demo-placeholder"></div>
                                    </div>
                                    <br>
                                    <p>You can update a chart periodically to get a real-time effect by using a timer to insert the
                                        new data in the plot and redraw it.</p>
                                    <p>Time between updates:
                                        <input id="updateInterval" type="text" value=""
                                            style="text-align: right; width:3em;padding:2px 5px;"> milliseconds
                                    </p>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Tracking</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="flot-demo-container">
                                        <div id="flot-track" class="flot-demo-placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Visitors</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="flot-demo-container">
                                        <div id="flot-visitors" class="flot-demo-placeholder"></div>
                                    </div>

                                    <div class="flot-demo-container" style="height:150px;">
                                        <div id="flot-visit-overview" class="flot-demo-placeholder"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.fillbetween.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.navigate.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.pie.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.stack.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/plugins/flot-chart/jquery.flot.selection.js')}}"></script>
<script src="{{asset('assets/js/chart-flot.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection