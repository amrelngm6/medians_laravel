@extends('layout.master')
@section('title', 'All Custom Fields')
@section('css')

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
                
                @yield('fields-page')

                <div class="clearfix"></div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection