@extends('layout.master')
@section('title', 'Modules')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Modules</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                @yield('modules-list')

                <div class="clearfix"></div>
                

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.add-task-modal')
            
            @include('includes.modals.task-modal')
@endsection



@section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    
    

    <script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection