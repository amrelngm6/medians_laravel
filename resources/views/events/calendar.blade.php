@extends('layout.master')
@section('title', 'Calendar')
@section('css')
    
    <link href="/assets/plugins/calendar/fullcalendar.css" rel="stylesheet" type="text/css" />

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Events Calendar </h1>
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
                                    <strong>Calendar</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12">

                    <div class="w-full pt-10">
                        <div class="w-full bg-white p-8 rounded-xl shadow-md dark:bg-gray-900 dark:text-gray-300"
                            id='main-calendar' style="max-height:calc(100vh - 50px)"></div>
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