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
                                    <a href="javascript:;">Staff</a>
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
                    <div class="card w-full">
                        <form action="{{route('Staff.filter')}}" id="filter-form" class="card-header w-full ajax-form">
                            @csrf
                            <div class="card-title w-full gap-4">
                                
                                <input class="datepicker filter-on-change" value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="hidden" />
                                
                                <div class="d-flex align-items-center position-relative my-1 ">
                                    <div class="select-placeholder w-full" 
                                        rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by Role" >
                                    
                                        <select id="role_id" name="role_id" placeholder="A"
                                            class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                            <option value=""></option>
                                            @foreach ($rolesList as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center position-relative my-1 ">
                                    @include('status.status-field-inline')
                                </div>
                                <span class="w-full"></span>
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