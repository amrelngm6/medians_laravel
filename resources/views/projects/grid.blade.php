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
                            <a class="btn btn-md btn-primary me-2 open-modal" data-modal="#new-project-modal">
                                New Project </a>
                        </div>
                    </div>
                </div>

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
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}"
                                                        class="float-start">E-Commerce Website</a> <span
                                                        class="text-muted bg-light fs-11 mx-2">opened Sep 15, 2024</span>
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
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-3.png">
                                            </div>
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
                                                aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-2.png">
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                            </div>
                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_view_users">
                                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+1</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">43 / 50 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 85%; "
                                        role="progressbar">
                                        <span class="sr-only">85% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-body px-0">
                            <div class="w-full">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex align-items-center">
                                            <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-dark me-2">
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Server
                                                        Maintenance</a> <span class="text-muted bg-light fs-11 mx-2">opened Sep 25,
                                                        2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-warning star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
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
                                                aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-1.png">
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-3.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">21 / 30 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 70%; "
                                        role="progressbar">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-body px-0">
                            <div class="w-full">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex align-items-center">
                                            <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-success me-2">
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Social
                                                        Media Marketing</a> <span class="text-muted bg-light fs-11 mx-2">opened Oct
                                                        05, 2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-warning star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
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
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">10 / 25 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; "
                                        role="progressbar">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-body px-0">
                            <div class="w-full">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex align-items-center">
                                            <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-info me-2">
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Flutter
                                                        Mobile APP</a> <span class="text-muted bg-light fs-11 mx-2">opened Oct 15,
                                                        2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-grey star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-3.png">
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
                                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
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
                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_view_users">
                                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+2</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">31 / 50 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 26%; "
                                        role="progressbar">
                                        <span class="sr-only">62% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Web
                                                        Design</a> <span class="text-muted bg-light fs-11 mx-2">opened Oct 15,
                                                        2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-grey star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-3.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">26 / 50 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 55%; "
                                        role="progressbar">
                                        <span class="sr-only">55% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-body px-0">
                            <div class="w-full">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex align-items-center">
                                            <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-warning me-2">
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Cloud
                                                        Computing</a> <span class="text-muted bg-light fs-11 mx-2">opened Oct 25,
                                                        2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-warning star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-1.png">
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
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">8 / 20 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 45%; "
                                        role="progressbar">
                                        <span class="sr-only">45% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

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
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}"
                                                        class="float-start">E-Commerce Website</a> <span
                                                        class="text-muted bg-light fs-11 mx-2">opened Nov 01, 2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-warning star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-3.png">
                                            </div>
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
                                                aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-2.png">
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                            </div>
                                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_view_users">
                                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+1</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">43 / 50 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 85%; "
                                        role="progressbar">
                                        <span class="sr-only">85% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-body px-0">
                            <div class="w-full">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex align-items-center">
                                            <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-dark me-2">
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Server
                                                        Maintenance</a> <span class="text-muted bg-light fs-11 mx-2">opened Oct 01,
                                                        2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-grey star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
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
                                                aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-1.png">
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-3.png">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">21 / 30 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 70%; "
                                        role="progressbar">
                                        <span class="sr-only">70% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
                    <div class="card">
                        <div class="card-body px-0">
                            <div class="w-full">
                                <div class="row">
                                    <div class="col">
                                        <div class="d-sm-flex align-items-center">
                                            <div class="avatar mb-2 p-2  mb-sm-0 avatar-md rounded-circle bg-success me-2">
                                            </div>
                                            <div class="ms-1">
                                                <h6 class="mb-1"> <a href="{{route(App::getLocale() . '.projects_project')}}" class="float-start">Social
                                                        Media Marketing</a> <span class="text-muted bg-light fs-11 mx-2">opened Oct
                                                        10, 2024</span>
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center">
                                            <div class="stars-main me-3">
                                                <i class="fa fa-star text-grey star"></i>
                                            </div>
                                            <div class="show-child relative">
                                                <a href="#" class="option-dots fs-3" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><i class='bx bx-dots-vertical-rounded'></i></a>
                                                <div class="show-on-hover dropdown-menu dropdown-menu-start">
                                                    <a class="dropdown-item" href="#"><i class="fe fe-edit me-2"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-share me-2"></i>
                                                        Share</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-download me-2"></i>
                                                        Clone</a>
                                                    <a class="dropdown-item" href="#"><i class="fe fe-trash me-2"></i>
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
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                            </div>
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
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
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0">
                                            <span class="text-muted d-block">Due Date</span>
                                            <span class="text-danger">11 Nov 21</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Progress</h5>
                                <span class="pt-1 block flex-none badge badge-danger light">10 / 25 Tasks</span>
                            </div>
                            <div class="mt-3">
                                <div class="mb-0 progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 40%; "
                                        role="progressbar">
                                        <span class="sr-only">40% Complete</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="text-center pb-20 pt-10">
                    <a class="btn btn-md btn-primary w-200px  mx-auto " >
                        Load more </a>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.new-project-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/calendar/moment.min.js')}}"></script>
    <script src="{{asset('assets/plugins/daterangepicker/daterangepicker.min.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection