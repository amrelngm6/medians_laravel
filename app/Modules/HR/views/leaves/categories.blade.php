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
                    <span class="fs-2 w-full px-2"> Leave types </span>
                    <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('LeaveType.create')}}"
                        data-modal="#new-leave_type-modal">
                        New Leave Type </a>
                </div>
            </div>
            <div class="card-body px-2" id="leave_types">
                <table id="example" class="text-start display datatable table table-hover table-striped">
                    <thead>
                        <tr>
                            <th class="text-start">#</th>
                            <th class="text-start">Name</th>
                            <th class="text-start">Start</th>
                            <th class="text-start">End</th>
                            <th class="text-start">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="rows-leave_types">
                        @foreach ($leave_types as $leave_type)
                        <tr>
                            <td>{{ $leave_type->id }}</td>
                            <td>{{ $leave_type->name }}</td>
                            <td>
                                <div
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                    <a href="{{route('LeaveType.edit', $leave_type->id)}}" class="open-modal "><i
                                        class='bx bx-edit fs-4'></i></a>
                                    <a href="javascript:;" data-path="{{route('LeaveType.delete', $leave_type->id)}}"
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