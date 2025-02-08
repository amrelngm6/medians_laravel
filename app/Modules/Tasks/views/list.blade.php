@extends('tasks::tasks_page')
@section('tasks-views-menu')

<!--end::Nav item-->
@endsection

@section('tasks-list')

<div class="col-lg-12">

    <div class="card mb-5 mb-xl-10 py-0">
        <div class="card-body p-0 flex w-full">

            <form action="{{route('Task.filter')}}" id="filter-form" class="card-header ajax-form px-0">
                @csrf
                <div class="card-title gap-6">

                    <div class="d-flex align-items-center position-relative my-1 show-child" 
                        rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Search for tasks by name" >
                        <input type="text" class="filter-on-change form-control form-control-solid w-150px " placeholder="Search in Tasks" name="name" id="search-name"  data-element="datatable-content" data-form="filter-form">
                        <i data-speech-target="search-name" id="mic-icon" class='hidden absolute top-2 right-0 cursor-pointer p-2 fs-1 show-on-hover bx bxs-microphone-alt'></i>
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1" rel="popover" data-toggle="popover"
                        data-placement="top" data-trigger="hover" data-content="Filter tasks by Due date">
                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date"
                            data-form="filter-date" data-element="invoices"
                            class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        <div class="select-placeholder w-full" 
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by related Model" >
                            <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                            <select id="model_type" name="model_type" placeholder="Model"
                                class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                <option value=""></option>
                                @foreach ($types as $type)
                                <option value="{{$type['model_type']}}" >{{class_basename(new $type['model_type'])}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        @include('status.status-field-inline')
                    </div>

                    <div class="d-flex align-items-center position-relative my-1">
                        @include('staff::search-input')
                    </div>
                </div>
            </form>

            <!--begin::Navs-->
            <span class="w-full"></span>
            <!--begin::Navs-->
            <div class="d-flex flex-none align-items-center position-relative my-1 gap-10">
                <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Task.create')}}"
                    data-modal="#add-task-modal">
                    Add Task </a>
            </div>

        </div>
    </div>
</div>


<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <div class="table" id="datatable-content" data-pattern="priority-columns"></div>
        </div>
    </div>
</div>
@endsection



@section('css')
<link href="/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<!-- Load required assets for the datatable -->
@include('assets.datatable-scripts')

@yield('search-scripts')

@endsection