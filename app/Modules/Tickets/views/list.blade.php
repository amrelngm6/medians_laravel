@extends('layout.master')
@section('title', 'Tickets')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style="">

    <div class="col-xs-12">
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Tickets List</h1>
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
                        <strong>Tickets</strong>
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
            <form action="{{route('Ticket.filter')}}" id="filter-form" class="card-header ajax-form">
                @csrf
                <div class="card-title w-full gap-4 flex">
                    <div class="d-flex align-items-center position-relative my-1">
                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="tickets" class="filter-on-change datepicker form-control form-control-solid py-3 w-200px" />
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        @include('status.status-field-inline')
                    </div>
                    
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        <div class="select-placeholder w-full">
                            <select id="assigned_to" name="assigned_to" placeholder=""
                                class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                <option value="0">Assignee</option>
                                @foreach ($staff as $member)
                                <option value="{{$member->staff_id}}">{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        
                        <div class="select-placeholder w-full">
                            <select id="category_id" name="category_id" placeholder=""
                                class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                <option value="0">Category</option>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="flex flex-equal flex-end">
                        <a class="btn btn-md btn-primary   open-modal" href="{{route('Ticket.create')}}">
                                New Ticket </a>
                    </div>
                </div>
            </form>
            <div class="card-body" id="tickets">
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