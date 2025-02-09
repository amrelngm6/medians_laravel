@extends('layout.master')
@section('title', 'All Notes')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">All Notes </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->
                <div class="col-sm-12">
                    <div class="card">
                        <form id="change-date" action="{{route('Note.ajax')}}" class="form ajax-form card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
                            @csrf
                            <div class="card-title">
                                <input  data-form="change-date" data-element="data-rows" data-append="true" name="date" class="datepicker submit-on-change form-control form-control-solid py-1 w-200px" />
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table datatable table-small-font no-mb table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-start">ID</th>
                                            <th class="text-start">Note</th>
                                            <th class="text-start">Created By</th>
                                            <th class="text-start">Time</th>
                                            <th class="text-start">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="data-rows">
                                        @include('notes::rows')
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection