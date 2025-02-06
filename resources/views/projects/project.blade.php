@extends('layout.master')
@section('title', 'Project Details')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Project Details</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>

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
                        <div class="d-flex justify-content-between align-items-start     mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Flutter
                                        Mobile APP</a>
                                </div>
                                <!--end::Name-->

                                <!--begin::Info-->
                                <p class="w-500px pt-6">Mobile APP Project using Flutter Framework for
                                    Triangles
                                    Agency Services Mobile APP Project using Flutter Framework for Triangles
                                    Agency Services </p>
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
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                            data-kt-initialized="1">
                                            <img alt="Pic" src="/data/profile/avatar-1.png">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                            data-kt-initialized="1">
                                            <img alt="Pic" src="/data/profile/avatar-2.png">
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                            data-kt-initialized="1">
                                            <img alt="Pic" src="/data/profile/avatar-3.png">
                                        </div>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                        </a>
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
                                                <div class="fs-2 fw-bold counted w-full">50</div>
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
                                                <div class="fs-2 fw-bold counted w-full">41</div>
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
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5"
                            href="?tab=overview">
                            Overview </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="?tab=tasks">
                            Tasks </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="?tab=team">
                            Team </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="?tab=files">
                            Files </a>
                    </li>
                    <!--end::Nav item-->
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="?tab=activity">
                            Activity </a>
                    </li>
                    <!--end::Nav item-->
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
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart-chartjs.js')}}"></script>

<script src="{{asset('assets/plugins/vis-timeline/vis-timeline-graph2d.min.js')}}"></script>
<script src="{{asset('assets/js/timeline.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection