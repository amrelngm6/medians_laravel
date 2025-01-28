@extends('layout.master')
@section('title', 'Staff')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Staff list </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">Staff</a>
                                </li>
                                <li class="active">
                                    <strong>All Staff</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-md-12">
                    <div class="card">
                        <form action="{{route('Staff.filter')}}" id="filter-form" class="card-header ajax-form">
                            @csrf
                            <div class="card-title w-full gap-4">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="timesheets" class="filter-on-change datepicker form-control form-control-solid  w-200px" />
                                </div>
                                
                                <div class="d-flex align-items-center position-relative my-1">
                                    
                                    <div class="select-placeholder w-full">
                                        <select id="status_id" name="status_id" placeholder=""
                                            class=" select-bootstrap border border-gray-300 form-control form-control-solid ">
                                            <option value="0">Status</option>
                                            @foreach ($statusList as $status)
                                            <option value="{{$status->status_id}}">{{$status->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                
                                <a class="btn btn-md btn-primary me-2 " href="{{route('Staff.create')}}">
                                    New Staff </a>
                                </div>
                            </div>
                        </form>
                        
                        <div class="card" id="staff">
                            <div class="w-full">

                                <div class="card-body">
                                    <div class="table" id="datatable-content" data-pattern="priority-columns"></div>
                                </div>                    
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

    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

    @include('assets.datatable-scripts')
    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection