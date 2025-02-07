@extends('layout.master')
@section('title', 'All Projects')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">All Projects ( Grid view ) </h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
                <div class="card-title">
                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                </div>
                <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Projects.create')}}" data-modal="#new-project-modal">
                    New Project </a>
            </div>
        </div>
    </div>

    @foreach($projects as $project)
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
        <div class="card">
            <div class="card-body px-0">
                <div class="w-full">
                    <div class="row">
                        <div class="col">
                            <div class="d-sm-flex align-items-center">
                                <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-primary me-2">
                                </div>
                                <div class="ms-1">
                                    <h6 class="mb-1"> <a href="{{route('Projects.show', $project->project_id)}}"
                                            class="float-start">{{ $project->name }}</a> <span
                                            class="text-muted bg-light fs-11 mx-2">opened {{ date('M d, Y', strtotime($project->start_date)) }}</span>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div x-data="{open: true}" class="d-flex align-items-center relative">
                                <div class="stars-main me-3">
                                    <i class="fa fa-star text-grey star"></i>
                                </div>
                                <div class="show-child">
                                    <a href="javascript:;" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                    <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                        <a class="dropdown-item open-modal" href="{{route('Projects.edit', $project->project_id)}}" data-modal="#edit-project-modal"
                                        ><i class="fe fe-edit me-2"></i>
                                            Edit</a>
                                        <a class="dropdown-item" href="{{route('Projects.settings', $project->project_id)}}" ><i class="fe fe-edit me-2"></i>
                                            Settings</a>
                                        <a class="dropdown-item delete-item" data-path="{{route('Projects.delete', $project->project_id)}}" href="javascript:;"><i class="fe fe-trash me-2"></i>
                                            Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" mt-10">
                    <div class="row align-items-center">
                        <div class="col">
                            <p class="m-0 mb-2">Members</p>
                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                @foreach($project->members() as $member)
                                <div class="symbol symbol-35px symbol-circle" rel="popover"  data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                                    data-content="<b class='text-danger'>{{$member->user->name ?? ''}}">
                                    <img alt="Pic" src="/{{ $member->user->picture ?? '' }}">
                                </div>
                                @endforeach
                                @if ($project->members()->count() > 5)
                                <a href="javascript:;" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_view_users">
                                    <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+{{ $project->members()->count() - 5 }}</span>
                                </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-auto">
                            <p class="mb-0">
                                <span class="text-muted d-block">Due Date</span>
                                <span class="text-danger">{{ date('M d, Y', strtotime($project->deadline_date))  }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="pt-10 flex gap-4">
                    <h5 class="w-full">Progress</h5>
                    <span class="pt-1 block flex-none badge badge-danger light">{{ count($project->tasks) ? $project->tasks->first()->countByStatus('Completed') : 0 }} / {{ $project->tasks->count() }} Tasks</span>
                </div>
                <div class="mt-3">
                    <div class="mb-0 progress default-progress h-4px">
                        <div class="progress-bar bg-gradient1 progress-animated" style="width: {{ (($project->completed_tasks ?? 1) / ($project->total_tasks ?? 1)) * 100 }}%; "
                            role="progressbar">
                            <span class="sr-only">{{ (($project->completed_tasks ?? 1) / ($project->total_tasks ?? 1)) * 100 }}% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <div class="clearfix"></div>
    <div class="text-center pb-20 pt-10">
        <a class="btn btn-md btn-primary w-200px  mx-auto " >
            Load more </a>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection