@extends('layout.master')
@section('title', 'Project Details')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">

        <div class="card mb-5 mb-xl-10 py-0">
            <div class="card-body pt-9 pb-0">
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div class="d-flex justify-content-between align-items-start mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="javascript:;" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{ $project->name }}</a>
                                </div>
                                <!--end::Name-->

                                <!--begin::Info-->
                                <p class="w-500px pt-6">{{ $project->description }}</p>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->

                            <!--begin::Stats-->
                            <div class=" ">
                                <div class="flex gap-10 ">

                                    <!--begin::Wrapper-->
                                    <h4 class="pt-2">Team</h4>
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap flex">
                                        
                                        @foreach($project->members() as $key => $member)
                                        @if ($key < 5)
                                        <div class="symbol symbol-35px symbol-circle" 
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="{{$member->user->name ?? ''}}">
                                            <img alt="Pic" src="/{{ $member->user->picture ?? '' }}">
                                        </div>
                                        @endif
                                        @endforeach
                                        @if ($project->members()->count() > 5)
                                        <a href="javascript:;" class="symbol symbol-35px symbol-circle" 
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="{{$project->members()->count() - 5 }} more">
                                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+{{ $project->members()->count() - 5 }}</span>
                                        </a>
                                        @endif
                                    </div>
                                    <!--end::Users group-->
                                </div>
                                <div class="d-flex flex-column flex-grow-1 mt-4">
                                    <!--begin::Stats-->
                                    <div class="d-flex ">
                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 ">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bold counted w-full">{{ $project->tasks->count() ?? '0' }}</div>
                                                <i class='bx bx-qr fs-1 text-danger'></i>

                                            </div>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="fw-semibold fs-6 text-gray-500">Tasks</div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->

                                        <!--begin::Stat-->
                                        <div
                                            class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 ">
                                            <!--begin::Number-->
                                            <div class="d-flex align-items-center">
                                                <div class="fs-2 fw-bold counted w-full">{{ count($project->tasks)  ? $project->tasks->first()->countByStatus('Completed') : '0' }}</div>
                                                <i class='bx bx-check-square fs-1 text-danger'></i>
                                            </div>
                                            <!--end::Number-->

                                            <!--begin::Label-->
                                            <div class="flex fw-semibold fs-6 text-gray-500">
                                                Completed
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Stat-->


                                    </div>
                                    <!--end::Stats-->
                                    
                                    <div class="mb-0 progress default-progress h-4px" 
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-title="Progress"
                                            data-content="{{round($project->progress(), 0)}}% Completed">
                                        <div class="progress-bar bg-{{ $project->status->color ?? 'gradient1' }} progress-animated" 
                                            style="width: {{$project->progress()}}%; " role="progressbar">
                                            <span class="sr-only">{{$project->progress()}}% Complete</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Title-->

                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!--begin::Navs-->
                <ul class=" nav-line-tabs  mb-0 border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5"
                            href="{{route('Projects.show', $project->project_id)}}">
                            Overview </a>
                    </li>
                    <!--end::Nav item-->
                    
                    <!--end::Nav item-->
                    <!-- < x - project-tabs /> -->

                    @foreach ($projectTabs as $tabItem)
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="{{route($tabItem['route'], $project->project_id)}}">
                            {{$tabItem['name']}} </a>
                    </li>
                    <!--end::Nav item-->
                    @endforeach
                </ul>
                <!--begin::Navs-->
            </div>
        </div>
    </div>

    @yield('project-content')
    <!-- MAIN CONTENT AREA ENDS -->
</div>
@include('includes.modals.send-message-modal')
@endsection

@section('script')
@yield('project-script')

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart-chartjs.js')}}"></script>

<script src="{{asset('assets/plugins/vis-timeline/vis-timeline-graph2d.min.js')}}"></script>
<script src="{{asset('assets/js/timeline.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection