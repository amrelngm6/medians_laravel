@extends('layout.master')
@section('title', 'CRM Dashboard')
@section('css')

    <link href="/assets/plugins/jvectormap/jquery-jvectormap-2.0.1.css" rel="stylesheet" type="text/css" media="screen" />
@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">CRM Dashboard</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- begin:Wlecome  -->
                <!-- end:Wlecome  -->

                <div class="col-lg-5 col-md-8 col-sm-12">
                    <div class="card p-7">
                        <div class="w-full flex gap-2">

                            <div class="w-full p-7">
                                <h2 class="title ">Tasks Status</h2>
                                <p class="mb-0">List of tasks by status</p>
                            </div>
                            <canvas class="clean-line-chartjs  h-70px" data-fill="true" data-label="Tasks"></canvas>

                        </div>

                        <div class="card-body  pb-4 row gap-6 align-items-center">
                            <!--begin::Chart-->
                            <!-- <canvas class="clean-pie-chartjs" data-label="Tasks"  width="100"></canvas> -->
                            <canvas class="clean-doughnut-chartjs w-200px h-200px" data-label="Sales"></canvas>
                            <!--end::Chart-->

                            <!--begin::Labels-->
                            <div class="d-flex flex-column gap-4 content-justify-center flex-row-fluid">
                                <!--begin::Label-->
                                <div class="d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Completed</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">64</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Delayed</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">64</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-warning me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Refunded</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">64</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-danger me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Canceled</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">64</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-info me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Pending</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">64</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Labels-->
                        </div>
                    </div>

                </div>
                <div class="col-lg-7 col-md-4 col-sm-12">
                    <div class="col-lg-6 col-sm-12">
                        <div class="widget-stat pb-0 card bg-info">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="flex-none flex-end text-white ">
                                        <p class="mb-1">Sales</p>
                                        <h3 class="text-white">$341.73K</h3>
                                    </div>
                                    <span class="w-full">
                                        <canvas class="clean-line-chartjs relative" data-fill="true" data-color="white"
                                            data-label="Sales" height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="widget-stat pb-0 card bg-primary">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="pt-2 flex-none text-white ">
                                        <p class="mb-1">Referrals</p>
                                        <h3 class="text-white mb-0 pb-0">16.57K</h3>
                                    </div>
                                    <span class="w-full ">
                                        <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Sales"
                                            height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-lg-6 col-sm-12">
                        <div class="widget-stat pb-0 card bg-warning">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="flex-none flex-end text-white ">
                                        <p class="mb-1">Invoices</p>
                                        <h3 class="text-white">946</h3>
                                    </div>
                                    <span class="w-full">
                                        <canvas class="clean-line-chartjs relative" data-fill="true" data-color="white"
                                            data-label="Sales" height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="widget-stat pb-0 card bg-success">
                            <div class="card-body p-0 ">
                                <div class="mt-4 overflow-hidden flex gap-4">
                                    <div class="pt-2 flex-none text-white ">
                                        <p class="mb-1">Earning</p>
                                        <h3 class="text-white mb-0 pb-0">$56K</h3>
                                    </div>
                                    <span class="w-full ">
                                        <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Sales"
                                            height="40" width="100%"></canvas>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-12 col-sm-12">

                        <div class="card border-transparent overflow-hidden" style="background-color: #1C325E;">
                            <!--begin::Body-->
                            <div class="card-body d-flex py-0">
                                <!--begin::Wrapper-->
                                <div class="m-0 rela">
                                    <!--begin::Title-->
                                    <div class="position-relative fs-2x z-index-2 fw-bold text-white mb-7">
                                        <span class="me-2 fs-5">
                                            You have completed
                                            <span class="position-relative d-inline-block text-danger">
                                                <a href="#!" class="text-danger opacity-75-hover">200</a>

                                                <!--begin::Separator-->
                                                <span
                                                    class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                <!--end::Separator-->
                                            </span>
                                            successful tasks.
                                        </span>
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Action-->
                                    <div class=" relative z-index-2">
                                        <a href="#" class="btn btn-danger fw-bold me-2" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_upgrade_plan">
                                            Set New Target
                                        </a>

                                        <a href="#!"
                                            class="btn btn-color-white bg-white bg-opacity-15 bg-hover-opacity-25 fw-bold">
                                            How to
                                        </a>
                                    </div>
                                    <!--begin::Action-->
                                </div>
                                <!--begin::Wrapper-->

                                <!--begin::Illustration-->
                                <img src="/data/icons/card-bg.png"
                                    class="position-absolute  bottom-0 end-0 w-100 h-auto" alt="">
                                <!--end::Illustration-->
                            </div>
                            <!--end::Body-->
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12">

                    <div class="card ">

                        <div class="flex border-0 p-7">
                            <div class="w-full">
                                <h2 class="title ">Tasks Timeline</h2>
                                <p class="mb-0">Companies with subscriptions ending soon</p>
                            </div>
                            <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
                        </div>

                        <div class="card-body">
                            <div id="visualization"></div>
                        </div>
                    </div>

                </div>
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
                    <div class="card card-flush border-0  bg-primary pb-0 px-0">
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
                            <canvas class="clean-bar-chartjs  w-100" data-limit="10" data-fill="true" data-color="white"
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
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12 ">
                    <div class="card" style="overflow:hidden">
                        <div class="card-body">
                            <h2 class="title pull-left">Total Visits Statistics</h2>
                        </div>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div id="demoarea-chart">
                                        <div id="db-world-map-markers"
                                            style="width: 100%;height:330px; text-align: center; margin:0 auto;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>



                <div class="col-xxl-6 col-lg-5 col-md-12">
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


                <div class="col-xxl-6 col-lg-7 col-md-12">

                    <!--begin::Card-->
                    <div class="card">

                        
                        <div class="flex border-0 p-7">
                            <div class="w-full">
                                <h2 class="title ">Team Activities</h2>
                                <p class="mb-0">Team activities at the projects tasks</p>
                            </div>
                            <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
                        </div>

                        <div class="card-body">

                            <!--begin::Timeline-->
                            <div class="timeline timeline-border-dashed h-400px overflow-auto" >
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
                                            <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus Mobile
                                                App” project:</div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" >
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
                                                <div class="symbol symbol-circle symbol-25px" >
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
                                            <a href="#" class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">Incoming Project Files:</a>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" >
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
                                                <div class="symbol symbol-circle symbol-25px" >
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
                                            <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->

                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->

                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" >
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
                                                <div class="symbol symbol-circle symbol-25px" >
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
                                                New order  is placed for Workshow Planning &amp; Budget Estimation
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
                    <!--end::Card-->

                </div>
            </div>
@endsection
   
@section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- ChartJs Charts -->
    <script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/chart-chartjs.js')}}"></script>
    
    <!-- Vector Map -->
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.1.min.js')}}"></script>
    <script src="{{asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

    <!-- Horizontal Timeline -->
    <script src="{{asset('assets/plugins/vis-timeline/vis-timeline-graph2d.min.js')}}"></script>
    <script src="{{asset('assets/js/timeline.js')}}"></script>

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection