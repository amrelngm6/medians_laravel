@extends('layout.master')
@section('title', 'Client')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Client list </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Client</a>
                                </li>
                                <li class="active">
                                    <strong>All Client</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-md-12">

                    <div class="card">
                        <form action="{{route('Client.filter')}}" id="filter-form" class="card-header w-full ajax-form">
                            @csrf
                            <div class="card-title w-full gap-4">
                                
                                <div class="d-flex align-items-center position-relative my-1" 
                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by Name, Email or Phone" >
                                    <input type="text" name="name" id="filter-name" class="filter-on-change form-control form-control-solid py-1 w-200px" />
                                </div>
                                <div class="d-flex align-items-center position-relative my-1 ">
                                    @include('status.status-field-inline')
                                </div>
                                <span class="w-full"></span>
                                <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Client.create')}}">
                                    New Client </a>
                                </div>
                            </div>
                        </form>

                        <div class="card" id="client-list">
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