@extends('custom_field::page')

@section('nav-title', 'Custom Fields')

@section('fields-page')

<div class="clearfix"></div>
<!-- MAIN CONTENT AREA STARTS -->
<div class="col-sm-12">
    <div class="card">
        <form id="change-date" action="{{route('CustomField.ajax')}}"
            class="form ajax-form card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
            @csrf
            <div class="card-title">
                <input data-form="change-date" data-element="data-rows" data-append="true" name="date"
                    class="datepicker submit-on-change form-control form-control-solid py-1 w-200px" />
            </div>
            <a class="btn btn-md btn-primary me-2" href="{{route('CustomField.create')}}">
                                New Custom Field </a>
        </form>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">

            <div class="table-responsive" data-pattern="priority-columns">
                <table id="tech-companies-1"
                    class="table datatable table-small-font no-mb table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-start">ID</th>
                            <th class="text-start">Title</th>
                            <th class="text-start">Type</th>
                            <th class="text-start">Model</th>
                            <th class="text-start">Default value</th>
                            <th class="text-start">Sort</th>
                            <th class="text-start">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="data-rows">
                        @include('custom_field::rows')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection