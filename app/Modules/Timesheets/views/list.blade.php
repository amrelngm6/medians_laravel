@extends('layout.master')
@section('title', 'Timesheets')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style="">

    <div class="col-xs-12">
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Timesheets List</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="">Pages</a>
                    </li>
                    <li class="active">
                        <strong>Timesheets</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- STATS AREA STARTS -->

    

    <div class="clearfix"></div>

    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-xs-12 ">
        <section class="card ">
            <form action="{{route('Timesheet.filter')}}" id="filter-form" class="card-header ajax-form">
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
                    
                    <div class="flex flex-equal flex-end">
                        <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Timesheet.create')}}" data-modal="#new-timesheet-modal">
                        New timesheet </a>
                    </div>
                </div>
            </form>
            <div class="card-body" id="timesheets">
                <div class="w-full">
                    
                    <div class="card-body">
                        <div class="table" id="datatable-content" data-pattern="priority-columns"></div>
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
 
@include('assets.datatable-scripts')

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection