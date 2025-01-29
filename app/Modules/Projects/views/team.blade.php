@extends('layout.master')
@section('title', 'Project Team')
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
                                                <a href="javascript:;" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Flutter
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
                                                    <a href="javascript:;" class="symbol symbol-35px symbol-circle">
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
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route(App::getLocale() . '.projects_project')}}">
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
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1"><input type="text"
                                        data-kt-ecommerce-order-filter="search"
                                        class="form-control form-control-solid w-250px ps-12" placeholder="Search in team"></div>
                            </div>
                            <a class="btn btn-md btn-primary me-2 open-modal" data-modal="#add-member-modal">
                                Add Member </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="relative card-body">
                            <div class="w-full flex gap-4">
                                <div class="text-center profile-photo">
                                    <img src="/data/profile/avatar-5.png" width="30" class="w-60px img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex w-full">
                                    <div class="w-full">
                                        <h3 class=" mb-1">Ahmed Raafat</h3>
                                        <p class="text-muted">Tester</p>
                                    </div>
                                    <a class="text-danger delete-item" href="javascript:void();"><i
                                            class='bx bx-message-square-x fs-1'></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer p-0 m-0 text-center">
                            <div class="col-md-4 pt-3 pb-3 border-end ">
                                <h3 class="mb-1">40</h3><span>Tasks</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">7</h3><span>Pending</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3">
                                <h3 class="mb-1">23</h3><span>Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="relative card-body">
                            <div class="w-full flex gap-4">
                                <div class="text-center profile-photo">
                                    <img src="/data/profile/avatar-2.png" width="30" class="w-60px img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex w-full">
                                    <div class="w-full">
                                        <h3 class=" mb-1">Jhon Doe</h3>
                                        <p class="text-muted">Full-stack Developer</p>
                                    </div>
                                    <a class="text-danger delete-item" href="javascript:void();"><i
                                            class='bx bx-message-square-x fs-1'></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer p-0 m-0 text-center">
                            <div class="col-md-4 pt-3 pb-3 border-end ">
                                <h3 class="mb-1">60</h3><span>Tasks</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">14</h3><span>Pending</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3">
                                <h3 class="mb-1">16</h3><span>Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="relative card-body">
                            <div class="w-full flex gap-4">
                                <div class="text-center profile-photo">
                                    <img src="/data/profile/avatar-1.png" width="30" class="w-60px img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex w-full">
                                    <div class="w-full">
                                        <h3 class=" mb-1">Deangelo Sena</h3>
                                        <p class="text-muted">Senior Manager</p>
                                    </div>
                                    <a class="text-danger delete-item" href="javascript:void();"><i
                                            class='bx bx-message-square-x fs-1'></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer p-0 m-0 text-center">
                            <div class="col-md-4 pt-3 pb-3 border-end ">
                                <h3 class="mb-1">150</h3><span>Tasks</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">37</h3><span>Pending</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3">
                                <h3 class="mb-1">4</h3><span>Comments</span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="relative card-body">
                            <div class="w-full flex gap-4">
                                <div class="text-center profile-photo">
                                    <img src="/data/profile/profile-blog.jpg" width="30" class="w-60px img-fluid rounded-circle"
                                        alt="">
                                </div>
                                <div class="flex w-full">
                                    <div class="w-full">
                                        <h3 class=" mb-1">Hoda Gamal</h3>
                                        <p class="text-muted">Tester</p>
                                    </div>
                                    <a class="text-danger delete-item" href="javascript:void();"><i
                                            class='bx bx-message-square-x fs-1'></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer p-0 m-0 text-center">
                            <div class="col-md-4 pt-3 pb-3 border-end ">
                                <h3 class="mb-1">90</h3><span>Tasks</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">19</h3><span>Pending</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3">
                                <h3 class="mb-1">13</h3><span>Comments</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="relative card-body">
                            <div class="w-full flex gap-4">
                                <div class="text-center profile-photo">
                                    <img src="/data/profile/avatar-4.png" width="30" class="w-60px img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex w-full">
                                    <div class="w-full">
                                        <h3 class=" mb-1">Sonny Arnold</h3>
                                        <p class="text-muted">Senior Manager</p>
                                    </div>
                                    <a class="text-danger delete-item" href="javascript:void();"><i
                                            class='bx bx-message-square-x fs-1'></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer p-0 m-0 text-center">
                            <div class="col-md-4 pt-3 pb-3 border-end ">
                                <h3 class="mb-1">120</h3><span>Tasks</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">36</h3><span>Pending</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3">
                                <h3 class="mb-1">8</h3><span>Comments</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-sm-12">
                    <div class="card overflow-hidden">
                        <div class="relative card-body">
                            <div class="w-full flex gap-4">
                                <div class="text-center profile-photo">
                                    <img src="/data/profile/avatar-3.png" width="30" class="w-60px img-fluid rounded-circle" alt="">
                                </div>
                                <div class="flex w-full">
                                    <div class="w-full">
                                        <h3 class=" mb-1">Dona Tamer</h3>
                                        <p class="text-muted">Full-stack Developer</p>
                                    </div>
                                    <a class="text-danger delete-item" href="javascript:void();"><i
                                            class='bx bx-message-square-x fs-1'></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="card-footer p-0 m-0 text-center">
                            <div class="col-md-4 pt-3 pb-3 border-end ">
                                <h3 class="mb-1">60</h3><span>Tasks</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3 border-end">
                                <h3 class="mb-1">14</h3><span>Pending</span>
                            </div>
                            <div class="col-md-4 pt-3 pb-3">
                                <h3 class="mb-1">16</h3><span>Comments</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.add-member-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection