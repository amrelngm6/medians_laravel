@extends('layout.master')
@section('title', 'Project Activity')
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
                                            <p class="w-500px pt-6">Mobile APP Project using Flutter Framework for Triangles
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
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_project')}}">
                                        Overview </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_tasks')}}">
                                        Tasks </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_team')}}">
                                        Team </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_files')}}">
                                        Files </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_activity')}}">
                                        Activity </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="timeline timeline-border-dashed overflow-auto">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-bug-alt fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus
                                                Mobile
                                                App” project:</div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-1.png" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->

                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon me-4">
                                        <i class="bx bx-error-alt fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that
                                                speak human workshop</div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-3.png" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-message-rounded fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Incoming
                                                Project Files:</a>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-4.png" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->

                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-bug-alt fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">
                                                Task of Ads Has need refactor:
                                            </div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-2.png" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-bug-alt fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">3 new application design concepts added:
                                            </div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-5.png" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->

                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-message-rounded fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">
                                                New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                                is assigned to you in Multi-platform Database Design project
                                            </div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="overflow-auto pb-5">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex align-items-center mt-1 fs-6">
                                                    <!--begin::Info-->
                                                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                    <!--end::Info-->

                                                    <!--begin::User-->
                                                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                                    <!--end::User-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-message-rounded fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-2.png" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->

                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line"></div>
                                    <!--end::Timeline line-->

                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon">
                                        <i class="bx bx-bug-alt fs-2 text-gray-500"></i>
                                    </div>
                                    <!--end::Timeline icon-->

                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">
                                                New order is placed for Workshow Planning &amp; Budget Estimation
                                            </div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection