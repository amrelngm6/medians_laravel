@extends('layout.master')
@section('title', 'Calendar')
@section('css')

<link href="/assets/plugins/calendar/fullcalendar.css" rel="stylesheet" type="text/css" />

@endsection
@section('main-content')

            <div class="wrapper main-wrapper mb-20" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Day Events Calendar </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">Events</a>
                                </li>
                                <li class="active">
                                    <strong>Day Calendar</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-2">

                    <div class="pb-20 w-full ">

                        <div class="w-full flex gap-20 relative">
                            <div id="slider-container" class="w-32">

                                <div class="position-absolute top-0 bottom-0 mt-100"
                                    style=" max-width: 140px; display: grid;  transform: scale(.6);">

                                    <!-- put all in a wrapper:-->
                                    <div class="wrap" role="group" aria-label="slider with ruler"
                                        style="display: grid; --min: 1; --val: 30; --max: 60">
                                        <!-- slider:-->
                                        <input id="r" type="range" list="l" step="1" min="0" max="60" />
                                        <!-- value display:-->
                                        <output for="r"></output>
                                        <!-- ruler:-->
                                        <datalist id="l">
                                            <option value="5" style="--idx: 2"></option>
                                            <option value="5" style="--idx: 4"></option>
                                            <option value="6" style="--idx: 6" label="6"></option>

                                            <option value="11" style="--idx: 8"></option>
                                            <option value="11" style="--idx: 10"></option>
                                            <option value="12" style="--idx: 12" label="12"></option>

                                            <option value="17" style="--idx: 14"></option>
                                            <option value="17" style="--idx: 16"></option>
                                            <option value="18" style="--idx: 18" label="18"></option>

                                            <option value="23" style="--idx: 20"></option>
                                            <option value="23" style="--idx: 22"></option>
                                            <option value="24" style="--idx: 24" label="24"></option>

                                            <option value="29" style="--idx: 26"></option>
                                            <option value="29" style="--idx: 28"></option>
                                            <option value="30" style="--idx: 30" label="30"></option>

                                            <option value="35" style="--idx: 32"></option>
                                            <option value="35" style="--idx: 34"></option>
                                            <option value="36" style="--idx: 36" label="36"></option>

                                            <option value="41" style="--idx: 38"></option>
                                            <option value="41" style="--idx: 40"></option>
                                            <option value="42" style="--idx: 42" label="42"></option>

                                            <option value="47" style="--idx: 44"></option>
                                            <option value="47" style="--idx: 46"></option>
                                            <option value="48" style="--idx: 48" label="48"></option>

                                            <option value="53" style="--idx: 50"></option>
                                            <option value="53" style="--idx: 52"></option>
                                            <option value="54" style="--idx: 54" label="54"></option>

                                            <option value="59" style="--idx: 56"></option>
                                            <option value="59" style="--idx: 58"></option>
                                            <option value="60" style="--idx: 60" label="60"></option>

                                            <option value="22" style="--idx: 22"></option>

                                        </datalist>
                                    </div>
                                    <section class="range-info">
                                        <p class="box box--fail box--list"></p>
                                        <p class="box box--warn box--trig"></p>
                                        <p class="box box--fail box--cmix"></p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">

                    <div class="w-full pt-10">
                        <div class="w-full bg-white p-8 rounded-xl shadow-md dark:bg-gray-900 dark:text-gray-300" id='day-calendar'
                            style="max-height:calc(100vh - 50px)"></div>
                    </div>
                    <!-- <div id="calendar"></div> -->
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/calendar/fullcalendar.min.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection