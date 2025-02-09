@extends('layout.master')
@section('title', 'Leave Types')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style="">

    <div class="col-xs-12">
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Leaves types List</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="">HR</a>
                    </li>
                    <li class="active">
                        <strong>Leave Types</strong>
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
            <div class="card-title w-full gap-4">
                <div class="flex flex-equal flex-end">
                    <span class="fs-2 w-full px-2"> Shifts management </span>
                    <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Shift.create')}}"
                        data-modal="#new-shift-modal">
                        New Shift </a>
                </div>
            </div>
            <div class="card-body px-2" id="shifts">
                <table id="example" class="text-start display datatable table table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-start">#</th>
                            <th class="text-start">Name</th>
                            <th class="text-start">Start</th>
                            <th class="text-start">End</th>
                            <th class="text-start">Days</th>
                            <th class="text-start">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="rows-shifts">
                        @foreach ($shifts as $shift)
                        <tr>
                            <td>{{ $shift->id }}</td>
                            <td>{{ $shift->name }}</td>
                            <td>{{date('H:i a', strtotime($shift->start_time)) }}</td>
                            <td>{{date('H:i a', strtotime($shift->end_time)) }}</td>
                            <td>{{"1" }}</td>
                            <td>
                                <div
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                    <a href="{{route('Shift.edit', $shift->id)}}" class="open-modal "><i
                                        class='bx bx-edit fs-4'></i></a>
                                    <a href="javascript:;" data-path="{{route('Shift.delete', $shift->id)}}"
                                        class="delete-item "><i class='bx bx-trash fs-4'></i></a>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->


<!-- Load required assets for the datatable -->
@include('assets.datatable-scripts')

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection