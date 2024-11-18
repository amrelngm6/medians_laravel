@extends('layout.master')
@section('title', 'Widgets')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Widgets</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">UI</a>
                                </li>
                                <li class="active">
                                    <strong>Widgets</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->




                <div class="w-full">
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-header  pt-8">
                                <div class="d-flex w-full align-items-center justify-content-between">
                                    <div class="w-full ">
                                        <h5 class="">Team members</h5>
                                        <p>Lorem ipsum dolor sit amet </p>
                                    </div>
                                    <div class="dropdown show-child relative">
                                        <a class="avtar avtar-s btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-dots-vertical f-18"></i>
                                        </a>
                                        <div class="dropdown-menu show-on-hover">
                                            <a class="dropdown-item" href="#">Today</a>
                                            <a class="dropdown-item" href="#">Weekly</a>
                                            <a class="dropdown-item" href="#">Monthly</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush border-top-0 pb-8">
                                <li class="list-group-item my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="/data/profile/profile-blog.jpg" alt="user-image"
                                                class="user-avtar w-40px h-40px rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 mx-2">
                                            <h6 class="mb-1">David Jones</h6>
                                            <p class="mb-0">Project Leader</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">5 min ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="/data/profile/profile-crm.jpg" alt="user-image"
                                                class="user-avtar w-40px h-40px rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 mx-2">
                                            <h6 class="mb-1">Robert Smith</h6>
                                            <p class="mb-0">HR Manager</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">Yesterday</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item my-3">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="/data/profile/profile-ecommerce.jpg" alt="user-image"
                                                class="user-avtar w-40px h-40px rounded-circle">
                                        </div>
                                        <div class="flex-grow-1 mx-2">
                                            <h6 class="mb-1">John larry</h6>
                                            <p class="mb-0">Developer</p>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <p class="text-muted mb-0">1 hour ago</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0 w-full">Conversion Rate</h5>
                                    <i class="bx bx-line-chart fs-1 ms-1" data-bs-toggle="tooltip"
                                        data-bs-title="Conversion Rate"></i>
                                </div>
                                <div class="d-flex align-items-start my-4">
                                    <h2>5.63</h2>
                                    <p>%</p>
                                    <span class="badge bg-light-success ms-2"><i class="bx bx-up-arrow-alt me-1"></i>
                                        3.4%</span>
                                </div>
                            </div>
                            <div class="table-body card-body py-0 ">
                                <div class="table-responsive">
                                    <table class="table table-borderless mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h6 class="f-w-500 mb-0">Added to Cart</h6>
                                                    <span class="d-block text-muted">5 visits</span>
                                                </td>
                                                <td class="text-end">7.04</td>
                                                <td class="text-end"><i class="bx bx-up-arrow-alt text-success"></i>
                                                    4.0%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="f-w-500 mb-0">Reached Checkout</h6>
                                                    <span class="d-block text-muted">5 visits</span>
                                                </td>
                                                <td class="text-end">7.04</td>
                                                <td class="text-end"><i class="bx bx-up-arrow-alt text-success"></i>
                                                    2.0%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="f-w-500 mb-0">Purchased</h6>
                                                    <span class="d-block text-muted">4 orders</span>
                                                </td>
                                                <td class="text-end">5.63</td>
                                                <td class="text-end"><i class="bx bx-arrow-down text-danger"></i> 1.4%
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="f-w-500 mb-0">Purchased</h6>
                                                    <span class="d-block text-muted">4 orders</span>
                                                </td>
                                                <td class="text-end">5.63</td>
                                                <td class="text-end"><i class="bx bx-arrow-down text-danger"></i> 1.4%
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-12">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5 class="mb-0">My Task</h5>
                                <div class="show-child relative">
                                    <a class="avtar avtar-s btn-link-secondary arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-analyse fs-1"></i>
                                    </a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush border-top-0 my-4">
                                <li class="list-group-item">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1 me-2">
                                            <h6 class="mb-0">Follow up client for feedback</h6>
                                            <p class="my-1"><i class="bx bx-archive"></i> Sending report</p>
                                            <span class="badge bg-danger rounded-pill">00 : 15</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#" class="avtar avtar-s btn-link-secondary">
                                                <i class="bx bx-circle-check text-success f-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1 me-2">
                                            <h6 class="mb-0">Follow up client for feedback</h6>
                                            <p class="my-1"><i class="bx bx-folder"></i> Received report</p>
                                            <span class="badge bg-success rounded-pill">00 : 30</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#" class="avtar avtar-s btn-link-secondary">
                                                <i class="bx bx-circle-check f-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="d-flex align-items-start">
                                        <div class="flex-grow-1 me-2">
                                            <h6 class="mb-0">Follow up client for feedback</h6>
                                            <p class="my-1"><i class="bx bx-archive"></i> Sending report</p>
                                            <span class="badge bg-danger rounded-pill">00 : 15</span>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="#" class="avtar avtar-s btn-link-secondary">
                                                <i class="bx bx-circle-check f-18"></i>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-xl-6 col-md-12">
                        <div class="card card-flush ">
                            <!--begin::Header-->
                            <div class="card-header py-7">

                                <!--begin::Statistics-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <span class="badge round-success fs-base">
                                            <i class="bx bxs-up-arrow-alt"></i>
                                            2.2%
                                        </span>
                                        <!--end::Label-->

                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->


                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body card-body d-flex justify-content-between flex-column pt-3">

                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <i class="bx bxl-instagram fs-2hx me-4 text-sinata"></i>
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                                            <!--end::Number-->

                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge round-success fs-base">
                                                    <i class="bx bxs-up-arrow-alt"></i>
                                                    2.6%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->


                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <i class="bx bxl-facebook fs-2hx me-4 text-dark-blue"></i>
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>

                                            <!--end::Number-->

                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge round-success fs-base">
                                                    <i class="bx bxs-up-arrow-alt"></i>
                                                    0.4%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->


                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <i class="bx bxl-linkedin fs-2hx me-4 text-cyan "></i>
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                                            <!--end::Number-->

                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge round-danger fs-base">
                                                    <i class="bx bxs-down-arrow-alt"></i>
                                                    0.2%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->


                                <!--begin::Separator-->
                                <div class="separator separator-dashed my-3"></div>
                                <!--end::Separator-->


                                <!--begin::Item-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Flag-->
                                    <i class="bx bxl-youtube fs-2hx me-4 red-text"></i>
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                            <!--end::Title-->

                                            <!--begin::Desc-->
                                            <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                                Channel</span>
                                            <!--end::Desc-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Number-->
                                            <span class="text-gray-800 fw-bold fs-4 me-3">978</span>

                                            <!--end::Number-->

                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge round-success fs-base">
                                                    <i class="bx bxs-up-arrow-alt"></i>
                                                    4.1%
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->


                            </div>
                            <!--end::Body-->
                        </div>

                        <div class="card ">
                            <div class="card-header py-7">
                                <h5 class="w-full">Visits by Location</h5>
                                <p class="block">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <div class="dropdown show-child relative">
                                    <a class="avtar avtar-s btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-3">
                                <div class="table-responsive">
                                    <table class="table table-hover table-striped table-borderless text-center mb-0">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/data/flags/egypt.svg" alt=""
                                                            class="rounded-circle w-30px h-30px rounded-circle">
                                                        <h6 class="mb-0 ms-2">Egypt</h6>
                                                    </div>
                                                </td>
                                                <td class="text-end">38</td>
                                                <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                    5.8%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/data/flags/united-states.svg" alt=""
                                                            class="rounded-circle w-30px h-30px rounded-circle">
                                                        <h6 class="mb-0 ms-2">USA</h6>
                                                    </div>
                                                </td>
                                                <td class="text-end">928</td>
                                                <td><i class="bx bx-arrow-down text-danger f-18 align-text-bottom"></i>
                                                    51.2%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/data/flags/spain.svg" alt=""
                                                            class="rounded-circle w-30px h-30px rounded-circle">
                                                        <h6 class="mb-0 ms-2">Spain</h6>
                                                    </div>
                                                </td>
                                                <td class="text-end">674</td>
                                                <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                    17.1%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/data/flags/ar.svg" alt=""
                                                            class="rounded-circle w-30px h-30px rounded-circle">
                                                        <h6 class="mb-0 ms-2">UK</h6>
                                                    </div>
                                                </td>
                                                <td class="text-end">1,438</td>
                                                <td><i class="bx bx-arrow-down text-danger f-18 align-text-bottom"></i>
                                                    15.8%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/data/flags/en.svg" alt=""
                                                            class="rounded-circle w-30px h-30px rounded-circle">
                                                        <h6 class="mb-0 ms-2">Brazil</h6>
                                                    </div>
                                                </td>
                                                <td class="text-end">90</td>
                                                <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                    9.8%</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="/data/flags/spain.svg" alt=""
                                                            class="rounded-circle w-30px h-30px rounded-circle">
                                                        <h6 class="mb-0 ms-2">Germany</h6>
                                                    </div>
                                                </td>
                                                <td class="text-end">123</td>
                                                <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                    5.8%</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <div class="flex border-0 p-7">
                                <div class="w-full">
                                    <h2 class="title ">Projects Tracking</h2>
                                    <p class="mb-0">Team activities at the projects tasks </p>
                                </div>
                                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
                            </div>

                            <div class="card-body  ">
                                <div class="project-details">
                                    <div class="d-flex w-full align-items-center justify-content-between">
                                        <div class="d-flex w-full align-items-center">
                                            <span
                                                class="bullet bullet-vertical d-flex align-items-center p-0 h-40px bg-success"></span>
                                            <div class="ms-3 w-full">
                                                <h5 class="mb-1">Awespme Tasklist</h5>
                                                <p class="mb-0">Creative Agency</p>
                                            </div>
                                            <span class="pt-1 flex flex-none flex-end badge bg-success light">Active</span>
                                        </div>
                                    </div>
                                    <div class="mt-10">

                                        <div class="d-flex align-items-end mb-2 justify-content-between">
                                            <p class="mb-0"><strong class="text-black me-2">308</strong>Tasks</p>
                                            <p class="mb-0">Due date: Dec 15, 2024</p>
                                        </div>
                                        <div class="progress default-progress h-4px">
                                            <div class="progress-bar bg-gradient1 progress-animated" style="width: 85%; "
                                                role="progressbar">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="project-details">
                                    <div class="d-flex w-full align-items-center justify-content-between">
                                        <div class="d-flex w-full align-items-center">
                                            <span
                                                class="bullet bullet-vertical d-flex align-items-center p-0 h-40px bg-success"></span>
                                            <div class="ms-3 w-full">
                                                <h5 class="mb-1">Big Project</h5>
                                                <p class="mb-0">Creative Agency</p>
                                            </div>
                                            <span class="pt-1 flex flex-none flex-end badge bg-success light">Active</span>
                                        </div>
                                    </div>
                                    <div class="mt-10">

                                        <div class="d-flex align-items-end mb-2 justify-content-between">
                                            <p class="mb-0"><strong class="text-black me-2">204</strong>Tasks</p>
                                            <p class="mb-0">Due date: Dec 23, 2024</p>
                                        </div>
                                        <div class="progress default-progress h-4px">
                                            <div class="progress-bar bg-gradient1 progress-animated" style="width: 80%; "
                                                role="progressbar">
                                                <span class="sr-only">80% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="project-details">
                                    <div class="d-flex w-full align-items-center justify-content-between">
                                        <div class="d-flex w-full align-items-center">
                                            <span
                                                class="bullet bullet-vertical d-flex align-items-center p-0 h-40px bg-success"></span>
                                            <div class="ms-3 w-full">
                                                <h5 class="mb-1">E-Commerce Website</h5>
                                                <p class="mb-0">Creative Agency</p>
                                            </div>
                                            <span class="pt-1 flex flex-none flex-end badge bg-success light">Active</span>
                                        </div>
                                    </div>
                                    <div class="mt-10">

                                        <div class="d-flex align-items-end mb-2 justify-content-between">
                                            <p class="mb-0"><strong class="text-black me-2">16</strong>Tasks</p>
                                            <p class="mb-0">Due date: Jan 23, 2025</p>
                                        </div>
                                        <div class="progress default-progress h-4px">
                                            <div class="progress-bar bg-gradient1 progress-animated" style="width: 72%; "
                                                role="progressbar">
                                                <span class="sr-only">72% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <div class="card">
                            <div class="card-body px-0 py-7 ">
                                <div class="col-xs-12">
                                    <h2 class="title mb-10">Latest Sent messages</h2>

                                    <div class="table-responsive" data-pattern="priority-columns">
                                        <table id="tech-companies-1"
                                            class="table vm table-small-font no-mb table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Customer</th>
                                                    <th>Email</th>
                                                    <th>Time.</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="round">S</div>
                                                        <div class="designer-info">
                                                            <h6>Sunil Joshi</h6>
                                                            <small class="text-muted">+020 109 876 5432</small>
                                                        </div>
                                                    </td>
                                                    <td>Sunil@example.com</td>
                                                    <td>06:34 PM</td>
                                                    <td><span class="badge round-primary">Pending</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="round round-success">V</div>
                                                        <div class="designer-info">
                                                            <h6>Messsy Adam</h6>
                                                            <small class="text-muted">+044 109 876 5432</small>
                                                        </div>
                                                    </td>
                                                    <td>Messsy@example.com</td>
                                                    <td>04:21 PM</td>
                                                    <td><span class="badge round-danger">Answered</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="round round-warning">J</div>
                                                        <div class="designer-info">
                                                            <h6>John Richards</h6>
                                                            <small class="text-muted">+020 109 876 5432</small>
                                                        </div>
                                                    </td>
                                                    <td>John@example.com</td>
                                                    <td>09:21 AM</td>
                                                    <td><span class="badge round-primary">Pending</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="round round-primary">P</div>
                                                        <div class="designer-info">
                                                            <h6>Peter Meggik</h6>
                                                            <small class="text-muted">+020 109 876 5432</small>
                                                        </div>
                                                    </td>
                                                    <td>Peter@example.com</td>
                                                    <td>02:28 PM</td>
                                                    <td><span class="badge round-primary">Pending</span></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="round round-danger">T</div>
                                                        <div class="designer-info">
                                                            <h6>Henry Tom</h6>
                                                            <small class="text-muted">+020 109 876 5432</small>
                                                        </div>
                                                    </td>
                                                    <td>Henry@example.com</td>
                                                    <td>11:28 PM</td>
                                                    <td><span class="badge round-danger">Answered</span></td>
                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card ">
                            <div class="card-header py-7">
                                <h5>Your quick style guide line</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                                <div class="dropdown show-child relative">
                                    <a class="avtar avtar-s btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical f-18"></i>
                                    </a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">Today</a>
                                        <a class="dropdown-item" href="#">Weekly</a>
                                        <a class="dropdown-item" href="#">Monthly</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body latest-activity-card py-3">
                                <div class="latest-update-box">
                                    <div class="row p-t-20 p-b-30">
                                        <div class="flex text-end gap-2 update-meta">
                                            <p class="text-muted pt-2 d-inline-flex">08:00 AM</p>
                                            <div
                                                class="border w-30px h-30px rounded-circle border-2 border-success text-success text-xs py-1 text-center update-icon">
                                                20
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a href="#!" class="d-inline-flex align-items-center">
                                                <h6 class="mb-0 me-2">Create report</h6>
                                                <span class="badge bg-success">Done</span>
                                            </a>
                                            <p class="text-muted m-b-0">The trip was an amazing and a life changing
                                                experience!!</p>
                                        </div>
                                    </div>
                                    <div class="row p-b-30">
                                        <div class="flex gap-2 text-end update-meta">
                                            <p class="text-muted pt-2 d-inline-flex">08:20 AM</p>
                                            <div
                                                class="border w-30px h-30px rounded-circle border-2 border-success text-success text-xs py-1 text-center update-icon">
                                                <i class="bx bx-rocket"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a href="#!" class="d-inline-flex align-items-center">
                                                <h6 class="mb-0 me-2">Create report</h6>
                                                <span class="badge bg-primary">Running</span>
                                            </a>
                                            <p class="text-muted m-b-0">Free courses for all our customers at A1
                                                Conference Room - 9:00 am tomorrow!</p>
                                        </div>
                                    </div>
                                    <div class="row p-b-30">
                                        <div class="flex gap-2 text-end update-meta">
                                            <p class="text-muted pt-2 d-inline-flex">08:20 AM</p>
                                            <div
                                                class="border w-30px h-30px rounded-circle border-2 border-warning text-warning text-xs py-1 text-center update-icon">
                                                <i class="bx bx-line-chart"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a href="#!" class="d-inline-flex align-items-center">
                                                <h6 class="mb-0 me-2">Create report</h6>
                                                <span class="badge bg-warning">Pending</span>
                                            </a>
                                            <p class="text-muted m-b-0">Free courses for all our customers at A1
                                                Conference Room - 9:00 am tomorrow!</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="flex gap-2 text-end update-meta">
                                            <p class="text-muted pt-2  d-inline-flex">09:15 AM</p>

                                            <div
                                                class="border w-30px h-30px rounded-circle border-2 border-danger text-danger text-xs py-1 text-center update-icon">
                                                <i class="bx bx-analyse"></i>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <a href="#!" class="d-inline-flex align-items-center">
                                                <h6 class="mb-0 me-2">Create report</h6>
                                                <span class="badge bg-danger">Not Start</span>
                                            </a>
                                            <p class="text-muted m-b-0">Happy Hour! Free drinks at <span> <a href="#!"
                                                        class="text-primary">Cafe-Bar all </a> </span>day long!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">


                            <div class="flex border-0 p-7">
                                <div class="w-full">
                                    <h2 class="title ">Team Activities</h2>
                                    <p class="mb-0">Team activities at the projects tasks</p>
                                </div>
                                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
                            </div>

                            <div class="card-body py-0">

                                <!--begin::Timeline-->
                                <div class="timeline timeline-border-dashed h-400px overflow-auto">
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
                                                <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs
                                                    that
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
                                <!--end::Timeline-->

                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

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
                                                    aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
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
                                                        class="text-muted bg-light fs-11 mx-2">opened Sep 15,
                                                        2024</span>
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
                                                    aria-expanded="false"><i class="bx bx-dots-vertical-rounded"></i></a>
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

                    <div class="card">
                        <div class="card-body p-2">
                            <div class="d-flex flex-">
                                <div class="flex-shrink-0"><svg viewBox="0 0 24 24"
                                        class="pc-icon h-50px  wid-40 hei-40 text-warning">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.35791 12.7787C2.74772 13.7201 2.99956 15.0291 3.50323 17.647C3.8658 19.5316 4.04709 20.4738 4.67523 21.0991C4.8382 21.2614 5.02054 21.4052 5.2186 21.5277C5.98195 21.9999 6.99539 21.9999 9.02227 21.9999H15.9777C18.0046 21.9999 19.0181 21.9999 19.7814 21.5277C19.9795 21.4052 20.1618 21.2614 20.3248 21.0991C20.9529 20.4738 21.1342 19.5316 21.4968 17.647C22.0004 15.0291 22.2523 13.7201 21.6421 12.7787C21.4864 12.5384 21.2943 12.321 21.0721 12.1332C20.2011 11.3975 18.7933 11.3975 15.9777 11.3975H9.02227C6.20667 11.3975 4.79888 11.3975 3.92792 12.1332C3.70566 12.321 3.51363 12.5384 3.35791 12.7787ZM9.69518 17.1806C9.69518 16.7814 10.0376 16.4577 10.4601 16.4577H14.5398C14.9622 16.4577 15.3047 16.7814 15.3047 17.1806C15.3047 17.5798 14.9622 17.9035 14.5398 17.9035H10.4601C10.0376 17.9035 9.69518 17.5798 9.69518 17.1806Z"
                                            fill="#1C274C"></path>
                                        <path opacity="0.5"
                                            d="M3.5762 12.4846C3.68271 12.3586 3.80034 12.241 3.92792 12.1332C4.79888 11.3975 6.20667 11.3975 9.02227 11.3975H15.9777C18.7933 11.3975 20.2011 11.3975 21.0721 12.1332C21.2 12.2413 21.3179 12.3592 21.4247 12.4857V9.75579C21.4247 8.84687 21.4247 8.09279 21.3394 7.49156C21.2494 6.85704 21.0531 6.29458 20.5839 5.83245C20.5074 5.75707 20.4266 5.68552 20.342 5.61807C19.8302 5.21023 19.2167 5.04345 18.5222 4.96608C17.8531 4.89155 17.0102 4.89157 15.9769 4.89158L15.6242 4.89158C14.6421 4.89158 14.29 4.88587 13.9711 4.80533C13.7837 4.75802 13.604 4.69195 13.4352 4.60878C13.151 4.46867 12.9033 4.25762 12.2077 3.64132L11.7336 3.22128C11.5345 3.04489 11.3987 2.9245 11.2531 2.81755C10.6284 2.35879 9.86779 2.08132 9.07145 2.01534C8.88602 1.99998 8.6968 1.99999 8.41356 2.00002L8.29714 2.00001C7.65647 1.9999 7.23365 1.99983 6.86652 2.0612C5.26167 2.32947 3.96392 3.45143 3.64782 4.93575C3.57591 5.27344 3.57602 5.66035 3.57619 6.21853L3.5762 12.4846Z"
                                            fill="#1C274C"></path>
                                    </svg></div>
                                <div class="flex-grow-1 mx-3">
                                    <h5 class="mb-1 d-grid"><a href="#!" class="text-truncate w-100">Documents</a></h5>
                                    <p class="mb-0"><small>24 files</small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body py-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-inline-flex align-items-center">
                                    <i class="bx bx-line-chart-down text-primary me-2 fs-3"></i>
                                    <p class="text-muted mb-0 fs-3">Income</p>
                                </div>
                                <canvas class="clean-line-chartjs w-100px h-30px" data-limit="8" width="300" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12  col-xl-4">

                    <div class="card overflow-hidden ">
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
                    <div class="card " dir="ltr">
                        <!--begin::Body-->
                        <div class="card-body d-flex flex-column flex-center px-0">
                            <!--begin::Heading-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                                    Quick form to <br>
                                    <span class="fw-bolder"> Reply to sent messages</span>
                                    from customers
                                </h1>
                                <!--end::Title-->

                                <!--begin::Illustration-->
                                <div class="py-10 text-center">
                                    <img src="/assets/images/3.svg" class="theme-light-show w-200px" alt="">
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Heading-->

                            <!--begin::Links-->
                            <div class="text-center mb-1">
                                <!--begin::Link-->
                                <a class="btn btn-sm btn-primary me-2 open-modal" data-modal="#form-modal">
                                    Start Now </a>
                                <!--end::Link-->

                                <!--begin::Link-->
                                <a class="btn btn-sm btn-light" href="#!">
                                    Quick Guide </a>
                                <!--end::Link-->
                            </div>
                            <!--end::Links-->
                        </div>
                        <!--end::Body-->
                    </div>
                </div>

                <div class="col-md-12  col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="avtar bg-light-primary"><svg viewBox="0 0 24 24" class="pc-icon h-50px ">
                                    <path
                                        d="M22.0187 16.8203L18.8887 9.50027C18.3187 8.16027 17.4687 7.40027 16.4987 7.35027C15.5387 7.30027 14.6087 7.97027 13.8987 9.25027L11.9987 12.6603C11.5987 13.3803 11.0287 13.8103 10.4087 13.8603C9.77867 13.9203 9.14867 13.5903 8.63867 12.9403L8.41867 12.6603C7.70867 11.7703 6.82867 11.3403 5.92867 11.4303C5.02867 11.5203 4.25867 12.1403 3.74867 13.1503L2.01867 16.6003C1.39867 17.8503 1.45867 19.3003 2.18867 20.4803C2.91867 21.6603 4.18867 22.3703 5.57867 22.3703H18.3387C19.6787 22.3703 20.9287 21.7003 21.6687 20.5803C22.4287 19.4603 22.5487 18.0503 22.0187 16.8203Z"
                                        fill="currentcolor"></path>
                                    <path
                                        d="M6.96984 8.38109C8.83657 8.38109 10.3498 6.86782 10.3498 5.00109C10.3498 3.13437 8.83657 1.62109 6.96984 1.62109C5.10312 1.62109 3.58984 3.13437 3.58984 5.00109C3.58984 6.86782 5.10312 8.38109 6.96984 8.38109Z"
                                        fill="currentcolor"></path>
                                </svg></div>
                            <div class="d-flex align-items-end justify-content-between mt-4">
                                <div>
                                    <h6 class="mb-1">Documents</h6>
                                    <p class="mb-0">100 files</p>
                                </div><span class="badge bg-primary f-12">15 GB</span>
                            </div>
                        </div>
                    </div>


                    <div class="card border-0 shadow-none drp-upgrade-card">
                        <div class="card-body">
                            <h5 class="mb-0 text-muted">20.5GB of 50GB</h5>
                            <div class="row align-items-center my-2">
                                <div class="col">
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-primary" style="width: 70%"></div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <p class="mb-0 text-muted">70%</p>
                                </div>
                            </div>
                            <button class="btn btn-primary mt-3">Want More Storage?</button>

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="w-full">
                                <div class="block w-full">
                                    <h4 class="mb-4 block"> <a href="#!" class="open-modal" data-modal="#task-modal">Change Header,
                                            sidebar and Footer </a></h4>
                                    <p class="block w-full"> Footer &amp; Header background color needs to be changed
                                        from dark blue to light purple...</p>
                                </div>
                            </div>
                            <div class=" mt-10">
                                <div class="flex align-items-center">
                                    <div class="w-full">
                                        <p class="m-0 mb-2">Assigned to</p>
                                        <div class="symbol-group symbol-hover flex-nowrap flex">
                                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                data-kt-initialized="1">
                                                <img alt="Pic" src="/data/profile/avatar-1.png">
                                            </div>
                                        </div>
                                    </div>
                                    <span class="pt-2 block flex-none ">
                                        <div class="flex items-center justify-end gap-4">
                                            <a href="#!"
                                                class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                                    <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                    <circle cx="12" cy="12" r="3"></circle>
                                                </svg></a>
                                            <a href="#!"
                                                class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="check-square"
                                                    class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                    <polyline points="9 11 12 14 22 4"></polyline>
                                                    <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                    </path>
                                                </svg></a>
                                            <a href="#!"
                                                class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round" data-lucide="trash-2"
                                                    class="lucide lucide-trash-2 size-3">
                                                    <path d="M3 6h18"></path>
                                                    <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                    <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                    <line x1="10" x2="10" y1="11" y2="17"></line>
                                                    <line x1="14" x2="14" y1="11" y2="17"></line>
                                                </svg></a>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12  col-xl-4">

                </div>

                <div class="clearfix"></div>


                <div class="w-full">
                    <!-- [ Row 1 ] start -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card statistics-card-1">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Online Orders</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body overflow-hidden relative">
                                <img src="/data/dashboard/img-status-1.svg" alt="img"
                                    class="bottom-25 h-100 img-bg rounded-circle position-absolute right-0 w-50px">
                                <div class="d-flex align-items-center">
                                    <h3 class="f-w-300 d-flex align-items-center m-b-0 fs-2hx">237 <small
                                            class="text-muted">/400</small></h3>
                                    <span class="badge bg-light-success ms-2">36%</span>
                                </div>
                                <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                                <div class="progress" style="height: 7px">
                                    <div class="progress-bar bg-brand-color-2" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card statistics-card-1">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Pending Orders</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body relative">
                                <img src="/data/dashboard/img-status-2.svg" alt="img"
                                    class="h-100 img-bg rounded-circle position-absolute right-0 w-60px top-0">
                                <div class="d-flex align-items-center">
                                    <h3 class="f-w-300 d-flex align-items-center m-b-0 fs-2hx">100 <small
                                            class="text-muted">/500</small></h3>
                                    <span class="badge bg-light-primary ms-2">20%</span>
                                </div>
                                <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                                <div class="progress" style="height: 7px">
                                    <div class="progress-bar bg-brand-color-1" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card statistics-card-1">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Return Orders</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body relative">
                                <img src="/data/dashboard/img-status-1.svg" alt="img"
                                    class="bottom-25 h-100 img-bg rounded-circle position-absolute right-0 w-50px">
                                <div class="d-flex align-items-center">
                                    <h3 class="f-w-300 d-flex align-items-center m-b-0 fs-2hx">50 <small
                                            class="text-muted">/400</small></h3>
                                    <span class="badge bg-light-danger ms-2">10%</span>
                                </div>
                                <p class="text-muted mb-2 text-sm mt-3">Return Orders</p>
                                <div class="progress" style="height: 7px">
                                    <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%"
                                        aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Row 1 ] end -->
                    <!-- [ Row 2 ] start -->
                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Register User</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div class="block w-full">
                                    <div class="d-flex align-items-end my-3">
                                        <div class="d-flex align-items-end ">
                                            <h1 class="mb-0">1205</h1>
                                            <span class="badge bg-success py-1 mx-2">20%</span>
                                        </div>
                                        <p class="text-muted mb-0">Monthly Increase</p>
                                    </div>
                                    <canvas class="clean-line-chartjs" data-limit="8" width="300" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Daily User</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div class="block w-full">
                                    <div class="d-flex align-items-end my-3">
                                        <div class="d-flex align-items-end ">
                                            <h1 class="mb-0">1659</h1>
                                            <span class="badge bg-success py-1 mx-2">14%</span>
                                        </div>
                                        <p class="text-muted mb-0">Weekly Increase</p>
                                    </div>
                                    <canvas class="clean-line-chartjs" data-limit="8" data-color="#f23f3f" width="300"
                                        height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Featured Users</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div class="block w-full">
                                    <div class="d-flex align-items-end my-3">
                                        <div class="d-flex align-items-end ">
                                            <h1 class="mb-0">416</h1>
                                            <span class="badge bg-success py-1 mx-2">14%</span>
                                        </div>
                                        <p class="text-muted mb-0">Yearly Increase</p>
                                    </div>
                                    <canvas class="clean-bar-chartjs" data-limit="8" width="300" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-xl-4">
                        <div class="card overflow-hidden">
                            <div class="card-body pb-7 bg-light-primary">
                                <div class="row align-items-center">
                                    <div class="col-5">
                                        <p class="text-muted mb-1">Total Visitors</p>
                                        <div class="d-flex align-items-center mb-1">
                                            <h4 class="mb-0">235</h4>
                                            <span class="badge bg-primary ms-2">20%</span>
                                        </div>
                                        <p class="text-primary text-sm mb-0">More than last Month</p>
                                    </div>
                                    <div class="col-6">
                                        <canvas class="clean-bar-chartjs w-125px h-50px" data-limit="8" width="50"
                                            height="20"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <p class="mb-0"><i class="bx bx-circle text-warning me-2"></i> Parcel in the
                                            way</p>
                                        <div class="d-flex align-items-center my-2">
                                            <h2 class="d-flex align-items-center m-b-0">25 <span class="text-muted">/40</span>
                                            </h2>
                                        </div>
                                        <p class="mb-0">
                                            <span class="text-success"><i class="bx bx-caret-up f-20 align-bottom"></i>
                                                +15%</span> last month
                                        </p>
                                    </div>
                                    <div class="col-6">
                                        <canvas class="clean-doughnut-chartjs h-80px " data-limit="8"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">

                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <h5>Product earn</h5>
                                                <p class="text-muted mb-0">Sale Product</p>
                                                <div class="d-flex align-items-end mt-1">
                                                    <h4 class="mb-0">375</h4>
                                                    <span class="badge bg-light-success ms-2">36%</span>
                                                </div>
                                            </div>
                                            <div class="avtar bg-brand-color-2 text-white">
                                                <i class="bx bx-cube f-26"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <canvas class="clean-pie-chartjs h-80px" data-limit="8"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Row 2 ] end -->
                    <div class="clearfix"></div>

                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-flush border-0  bg-dark pb-0">
                            <!--begin::Header-->
                            <div class="card-header pt-2">
                                <!--begin::Title-->
                                <h3 class="card-title">
                                    <span class="text-white fs-3 fw-bold me-2">Social Media Customers</span>

                                </h3>
                                <!--end::Title-->

                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body  d-flex justify-content-between flex-column pt-1 px-0 pb-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex  p-7 mb-5">
                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted">
                                                29,341</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class=" fs-6 text-white opacity-50">New Followers</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->

                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted">
                                                $9,167</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class=" fs-6 text-white opacity-50">New Revenue</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Chart-->
                                <canvas class="clean-bar-chartjs  w-100" data-limit="10" data-fill="true" data-color="white"
                                    data-label="Followers"></canvas>
                                <!--end::Chart-->

                                <!--end::Body-->
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-flush border-0  bg-primary px-0">
                            <!--begin::Header-->
                            <div class="card-header pt-2">
                                <!--begin::Title-->
                                <h3 class="card-title">
                                    <span class="text-white fs-3 fw-bold me-2">Call Center Customers</span>

                                </h3>
                                <!--end::Title-->

                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body  d-flex justify-content-between flex-column pt-1 px-0 pb-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex  p-7 mb-5">
                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted">
                                                5,146</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fs-6 text-white opacity-50">Total Contacts</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->

                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted">
                                                478</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fs-6 text-white opacity-50">New Contacts</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Chart-->
                                <canvas class="clean-line-chartjs  w-100" data-limit="10" data-fill="true" data-color="white"
                                    data-label="Followers"></canvas>
                                <!--end::Chart-->

                                <!--end::Body-->
                            </div>

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="card card-flush border-0  bg-info pb-0">
                            <!--begin::Header-->
                            <div class="card-header pt-2">
                                <!--begin::Title-->
                                <h3 class="card-title">
                                    <span class="text-white fs-3 fw-bold me-2">Walk-in Customers</span>

                                </h3>
                                <!--end::Title-->

                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body  d-flex justify-content-between flex-column pt-1 px-0 pb-0">
                                <!--begin::Wrapper-->
                                <div class="d-flex  p-7 mb-5">
                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted">
                                                2,016</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fs-6 text-white opacity-50">Total visits</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->

                                    <!--begin::Stat-->
                                    <div class="rounded min-w-125px py-3 px-4 my-1 me-6"
                                        style="border: 1px dashed rgba(255, 255, 255, 0.2)">
                                        <!--begin::Number-->
                                        <div class="d-flex align-items-center">
                                            <div class="text-white fs-2 fw-bold counted">
                                                197</div>
                                        </div>
                                        <!--end::Number-->

                                        <!--begin::Label-->
                                        <div class="fs-6 text-white opacity-50">New visits</div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Stat-->
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Chart-->
                                <canvas class="clean-bar-chartjs  w-100" data-limit="10" data-fill="true" data-color="white"
                                    data-label="Followers"></canvas>
                                <!--end::Chart-->

                                <!--end::Body-->
                            </div>

                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <!-- [ Row 3 ] start -->
                    <div class="col-md-12 col-xl-8">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class=" align-items-center justify-content-center">
                                    <div class="col-md-6 col-xl-4 my-2">
                                        <div class="mt-1 row align-items-center">
                                            <div class="w-full">
                                                <p class="mb-0 me-1">Sales</p>
                                                <h5 class="mb-0">$6780.09</h5>
                                                <p class="text-muted mb-0">Total Sales</p>
                                            </div>
                                            <div class="col-4">
                                                <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="7" height="30"
                                                    width="100"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 my-2">
                                        <div class="mt-1 row align-items-center">
                                            <div class="w-full">
                                                <p class="mb-0 me-1">Tax</p>
                                                <h5 class="mb-0">$178.09</h5>
                                                <p class="text-muted mb-0">Total Tax</p>
                                            </div>
                                            <div class="col-6">
                                                <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="7" height="30"
                                                    width="100"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xl-4 my-2">
                                        <div class="mt-1 row align-items-center">
                                            <div class="w-full">
                                                <p class="mb-0 me-1">Revenue</p>
                                                <h5 class="mb-0">$678.09</h5>
                                                <p class="text-muted mb-0">Profit</p>
                                            </div>
                                            <div class="col-6">
                                                <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="5" height="30"
                                                    width="100"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card bg-dark-blue earning-card statistics-card-1">
                            <div class="card-body overflow-hidden relative">
                                <ul class="mt-3 nav nav-fill nav-pills align-items-center justify-content-center mb-5"
                                    id="pills-tab" role="tablist">
                                    <li class="nav-item active" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-mon" data-toggle="tab"
                                            href="#earnings-mon" role="tab" aria-controls="earnings-mon"
                                            aria-selected="true">Mon</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-tue" data-toggle="tab"
                                            href="#earnings-tue" role="tab" aria-controls="earnings-tue" aria-selected="false"
                                            tabindex="-1">Tue</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-wed" data-toggle="tab"
                                            href="#earnings-wed" role="tab" aria-controls="earnings-wed" aria-selected="false"
                                            tabindex="-1">Wed</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-thu" data-toggle="tab"
                                            href="#earnings-thu" role="tab" aria-controls="earnings-thu" aria-selected="false"
                                            tabindex="-1">Thu</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-fri" data-toggle="tab"
                                            href="#earnings-fri" role="tab" aria-controls="earnings-fri" aria-selected="false"
                                            tabindex="-1">Fri</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-sat" data-toggle="tab"
                                            href="#earnings-sat" role="tab" aria-controls="earnings-sat" aria-selected="false"
                                            tabindex="-1">Sat</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link fw-bold text-white" id="pills-earnings-sun" data-toggle="tab"
                                            href="#earnings-sun" role="tab" aria-controls="earnings-sun" aria-selected="false"
                                            tabindex="-1">Sun</a>
                                    </li>
                                </ul>
                                <div class="mb-3 tab-content px-0" id="tabContent-pills">
                                    <div class="tab-pane fade active in " id="earnings-mon" role="tabpanel">
                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="earnings-tue" role="tabpanel"
                                        aria-labelledby="pills-earnings-tue">

                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="earnings-wed" role="tabpanel"
                                        aria-labelledby="pills-earnings-wed">
                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="earnings-thu" role="tabpanel"
                                        aria-labelledby="pills-earnings-thu">

                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="earnings-fri" role="tabpanel"
                                        aria-labelledby="pills-earnings-fri">
                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="earnings-sat" role="tabpanel"
                                        aria-labelledby="pills-earnings-sat">
                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="earnings-sun" role="tabpanel"
                                        aria-labelledby="pills-earnings-sun">
                                        <div class="w-full">
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="bx bx-line-chart text-white fs-1"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">984,632</h3>
                                                            <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                    </div>
                                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                        <i class="ti ti-zoom-money text-white f-30"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <div class="d-inline-flex align-items-center mb-1">
                                                            <h3 class="mb-0 text-white">134,276</h3>
                                                            <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                        </div>
                                                        <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                    </div>
                                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10"
                                                        data-color="white" data-fill="true" width="50" height="20"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-4">
                        <div class="card bg-dark-blue">
                            <div class="card-body py-0 ">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex text-white align-items-center">
                                        <i class="bx bx-line-chart-down text-primary me-2 f-20"></i>
                                        <p class="text-white mb-0">Profit</p>
                                    </div>
                                    <h4 class="mb-0 text-white">3.15k</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body py-0">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="bx bx-line-chart-down text-primary me-2 f-20"></i>
                                        <p class="text-muted mb-0">Income</p>
                                    </div>
                                    <h4 class="mb-0">3.15k</h4>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-3">
                                    <div class="flex-shrink-0">
                                        <img src="/data/profile/profile-ecommerce.jpg" alt="img"
                                            class="w-40px h-40px rounded-circle">
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="mb-0">Light able</h5>
                                        <span class="text-sm text-muted">Light able@developers.io</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center">
                                    <div class="flex-grow-1 mt-6">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- [ Row 3 ] end -->
                    <!-- [ Row 4 ] start -->
                    <div class="col-md-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <h6>Languages</h6>
                                <p class="text-muted text-sm">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry.</p>
                                <div class="progress mt-10 bg-transparent w-full" style="height: 8px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 20%" aria-valuenow="30"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 20%" aria-valuenow="30"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 25%" aria-valuenow="20"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <div class="g-1">
                                    <div class="col-md-6">
                                        <p class="mb-0"><i class="bx bx-circle text-success f-12"></i> React
                                            native</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0"><i class="bx bx-circle text-primary f-12"></i> Figma</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0"><i class="bx bx-circle text-warning f-12"></i> Bootstrap
                                            5</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="mb-0"><i class="bx bx-circle text-danger f-12"></i> Shopify
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-body pb-0">
                                <div class="flex  mb-2">
                                    <div class="w-100">
                                        <p class="mb-0">Users</p>
                                        <h1 class="mb-0">56,908</h1>
                                    </div>
                                    <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" width="50"
                                        height="20"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card">

                            <div class="card-body pb-0">
                                <div class="flex  mb-2">
                                    <div class="w-100">
                                        <p class="mb-0">Income of Month</p>
                                        <h1 class="mb-0">48,908</h1>
                                    </div>
                                    <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" width="50"
                                        height="20"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-2">
                                    <h6 class="mb-0">Releases new version</h6>
                                    <span class="badge bg-primary ms-2">350</span>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="flex-shrink-0">
                                        <i class="bx bx-tag-chevron text-primary f-30"></i>
                                    </div>
                                    <div class="flex-grow-1 ms-3">
                                        <div class="d-inline-flex align-items-center mb-2">
                                            <h6 class="mb-0"><u>v2.63.3</u></h6>
                                            <span class="badge bg-light-success ms-2">Latest</span>
                                        </div>
                                        <p class="mb-0 text-muted">on Sep 29</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-body py-0 relative overflow-hidden">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div class="d-inline-flex align-items-center">
                                        <i class="bx bx-line-chart-down text-primary me-2 fs-3"></i>
                                        <p class="text-muted mb-0 fs-3">Income</p>
                                    </div>
                                </div>
                                <canvas class="position-absolute right-0 bottom-0 clean-line-chartjs w-100px" data-limit="12"
                                    width="300" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- [ Row 4 ] start -->
                </div>

                <div class="clearfix"></div>



                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            
    @include('includes.modals.task-modal')

    @include('includes.modals.send-message-modal')
    
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart-chartjs.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection