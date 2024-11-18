@extends('layout.master')
@section('title', 'SaaS Dashboard')
@section('css')

@endsection
@section('main-content')

        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">SaaS Dashboard</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                </div>
            </div>

            <!-- begin:Wlecome  -->
            <div class="clearfix"></div>
            <div class="col-lg-12">
                <!--begin::Card widget 18-->
                <div class="card card-flush ">
                    <!--begin::Body-->
                    <div class="card-body px-0 py-5">
                        <!--begin::Row-->
                        <div class="w-full gx-9 h-100  row">
                            <!--begin::Col-->
                            <div class="col-md-12 col-lg-4  ">
                                <!--begin::Image-->
                                <div class="card-rounded min-h-225px  h-100"
                                    style="background-size: cover;background-image:url('/data/dashboard/saas1.jpg')">
                                </div>
                                <!--end::Image-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-8 col-sm-12 ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column h-100">
                                    <!--begin::Header-->
                                    <div class="mb-7">
                                        <!--begin::Headin-->
                                        <div class="d-flex flex-stack mb-6">
                                            <!--begin::Title-->
                                            <div class="flex-shrink-0 me-5">
                                                <span class="text-gray-500 fs-7 fw-bold me-2 d-block lh-1 pb-1">Welcome</span>

                                                <span class="text-gray-800 fs-1 fw-bold">Anthony Smith</span>
                                            </div>
                                            <!--end::Title-->

                                            <!--begin::Item-->
                                            <div class="d-flex flex-none align-items-center gap-4">
                                                <!--begin::Info-->
                                                <span class="fw-semibold text-gray-500 d-block fs-8">Status</span>
                                                <span
                                                    class="flex-end badge  round-success flex-shrink-1 align-self-center py-3 px-4 fs-7">Active</span>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Items-->
                                        <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center me-5 me-xl-13">
                                                <!--begin::Symbol-->
                                                <div class="symbol symbol-30px symbol-circle me-3">
                                                    <img src="/data/profile/avatar-5.png" class="" alt="">
                                                </div>
                                                <!--end::Symbol-->

                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <span class="fw-semibold text-gray-500 d-block fs-8">Company</span>
                                                    <a href="#!" class="fw-bold text-gray-800 text-hover-primary fs-7">Medians
                                                        Co</a>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center me-5 ">
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <span class="fw-semibold text-gray-500 d-block fs-8">Plan</span>
                                                    <span class="fw-bold text-gray-800 fs-7 ">Pro Plan</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ms-5 ">
                                                <!--begin::Info-->
                                                <div class="m-0">
                                                    <span class="fw-semibold text-gray-500 d-block fs-8">Email</span>
                                                    <span class="fw-bold text-gray-800 fs-7 ">Email@example.com</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                            <!--end::Item-->

                                        </div>
                                        <!--end::Items-->
                                    </div>
                                    <!--end::Header-->

                                    <!--begin::Body-->
                                    <div class="mt-10">
                                        <!--end::Text-->

                                        <!--begin::Stats-->
                                        <div class="d-flex">
                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 ">
                                                <!--begin::Date-->
                                                <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2025</span>
                                                <!--end::Date-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold text-gray-500">Renew Date</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 ">
                                                <!--begin::Number-->
                                                <span class="fs-6 text-gray-700 fw-bold">$<span class="ms-n1 counted"
                                                        data-kt-countup="true" data-kt-countup-value="284,900.00"
                                                        data-kt-initialized="1">
                                                        19,99</span></span>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="fw-semibold text-gray-500">Renew Cost</div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Body-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card widget 18-->


            </div>
            <!-- end:Wlecome  -->


            <!--begin::Stats card-->
            <div class="col-lg-4">
                <div class="card px-0 card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10 bg-success"
                    style="background-size: cover; background-image:url('/data/icons/card-bg.png')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title text-white d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">1,346</span>
                            <!--end::Amount-->

                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total sales</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="p-0 d-flex align-items-end mt-10">
                        <!--begin::Progress-->
                        <canvas class="clean-line-chartjs" data-color="white" data-label="Sales" height="200"
                            width="600"></canvas>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Stats card-->


            <!--begin::Stats card-->
            <div class="col-lg-4">
                <div class="card px-0 card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10 bg-success"
                    style="background-size: cover; background-image:url('/data/icons/card-bg2.jpg')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title text-white d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">20,496</span>
                            <!--end::Amount-->

                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total stores views</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="p-0 d-flex align-items-end mt-10">
                        <!--begin::Progress-->
                        <canvas class="clean-line-chartjs" data-color="white" data-label="Views" height="200"
                            width="600"></canvas>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Stats card-->


            <!--begin::Stats card-->
            <div class="col-lg-4">
                <div class="card px-0 card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10 bg-success"
                    style="background-size: cover; background-image:url('/data/icons/card-bg3.jpg')">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title text-white d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">87</span>
                            <!--end::Amount-->

                            <!--begin::Subtitle-->
                            <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Total subscriptions</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Card body-->
                    <div class="p-0 d-flex align-items-end mt-10">
                        <!--begin::Progress-->
                        <canvas class="clean-line-chartjs" data-color="white" data-label="Subscribers" height="200"
                            width="600"></canvas>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
            </div>
            <!--end::Stats card-->


            <div class="col-xxl-8 col-lg-7 col-sm-12 ">

                <div class="card ">
                    <div class="card-body px-0 py-7">
                        <div id="world-map" class="h-100"></div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-4  col-lg-5 col-sm-12 ">
                <div class=" flex flex-column">
                    <div class="bg-white content-body p-0">
                        <div class="w-full">
                            <div class="doctors-list patient relative">
                                <div class="doctors-head relative text-center pb-0 px-0">
                                    <div class="w-full relative ">
                                        <h2 class="title text-white">Sales statistic</h2>
                                        <p class=" py-1 text-bg-warning ">Sales charts based on consumers orders</p>
                                    </div>
                                    <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Sales"
                                        width="600"></canvas>
                                </div>
                                <div class="w-full">
                                    <div class="relative">
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="patient-card has-shadow2">
                                                <div class="doc-info-wrap">
                                                    <div class="patient-info">
                                                        <h5 class="bold">4,169</h5>
                                                        <h6>Completed orders</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="patient-card has-shadow2">
                                                <div class="doc-info-wrap">
                                                    <div class="patient-info">
                                                        <h5 class="bold">1,714</h5>
                                                        <h6>Pending Orders</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="patient-card has-shadow2">
                                                <div class="doc-info-wrap">
                                                    <div class="patient-info">
                                                        <h5 class="bold">97</h5>
                                                        <h6>Refnud requests</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="patient-card has-shadow2">
                                                <div class="doc-info-wrap">
                                                    <div class="patient-info">
                                                        <h5 class="bold">146</h5>
                                                        <h6>Canceled Orders</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- end row -->

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix my-5"></div>

            <!-- begin:Expires soon -->
            <div class="col-xxl-4 col-lg-5 col-md-12">
                <div class="card">

                    <div class="flex border-0 p-7">
                        <div class="w-full">
                            <h2 class="title ">Expires soon</h2>
                            <p class="mb-0">Companies with subscriptions ending soon</p>
                        </div>
                        <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
                    </div>

                    <div class="card-body  ">
                        <div class="project-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <div class="big-wind">
                                        <img src="/data/logos/logo1.png"
                                            class="border border-1 border-danger h-40px p-2 rounded-circle w-40px" alt="">
                                    </div>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Big Wind</h5>
                                        <p class="mb-0">Creative Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Plan</h5>
                                <span class="pt-2 block flex-none badge badge-danger light">Enterprise Plan</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 85%; "
                                        role="progressbar">
                                        <span class="sr-only">85% Complete</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mb-2 justify-content-between">
                                    <p class="mb-0"><strong class="text-black me-2">413</strong>Invoices</p>
                                    <p class="mb-0">Due date: Dec 23, 2024</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="project-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="big-wind">
                                        <img src="/data/logos/logo2.png"
                                            class="border border-1 border-danger h-40px p-2 rounded-circle w-40px" alt="">
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Circle Hunt</h5>
                                        <p class="mb-0">Creative Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Plan</h5>
                                <span class="pt-2 block flex-none badge badge-danger light">PRO Plan</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 65%; "
                                        role="progressbar">
                                        <span class="sr-only">65% Complete</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mb-2 justify-content-between">
                                    <p class="mb-0"><strong class="text-black me-2">196</strong>Invoices</p>
                                    <p class="mb-0">Due date: Mar 14, 2025</p>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="project-details">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="big-wind">
                                        <img src="/data/logos/logo3.png"
                                            class="border border-1 border-danger h-40px p-2 rounded-circle w-40px" alt="">
                                    </span>
                                    <div class="ms-3">
                                        <h5 class="mb-1">Circle Hunt</h5>
                                        <p class="mb-0">Creative Agency</p>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-10 flex gap-4">
                                <h5 class="w-full">Plan</h5>
                                <span class="pt-2 block flex-none badge badge-danger light">PRO Plan</span>
                            </div>
                            <div class="mt-3">
                                <div class="progress default-progress h-4px">
                                    <div class="progress-bar bg-gradient1 progress-animated" style="width: 65%; "
                                        role="progressbar">
                                        <span class="sr-only">65% Complete</span>
                                    </div>
                                </div>
                                <div class="d-flex align-items-end mb-2 justify-content-between">
                                    <p class="mb-0"><strong class="text-black me-2">196</strong>Invoices</p>
                                    <p class="mb-0">Due date: Mar 14, 2025</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:Expires soon -->

            <!-- begin:Top companies -->
            <div class="col-xxl-8 col-lg-7 col-md-12">
                <div class="card">

                    <div class="flex border-0 p-7">
                        <div class="w-full">
                            <h2 class="title ">Top Companies</h2>
                            <p class=" ">Top agencies based on sales</p>
                        </div>
                        <a href="javascript:void(0);" class="d-block pt-2 w-50px">View All</a>
                    </div>
                    <div class="card-body pt-0 p-7 ">
                        <div id="" class="table-responsive">
                            <table id="widget_table_3" class="table table-row-dashed align-middle fs-6 gy-4 my-0 pb-3"
                                data-kt-table-widget-3="all" style="width: 100%;">
                                <colgroup>
                                    <col data-dt-column="0">
                                    <col data-dt-column="1">
                                    <col data-dt-column="2">
                                    <col data-dt-column="3">
                                    <col data-dt-column="4">
                                    <col data-dt-column="5">
                                    <col data-dt-column="6">
                                </colgroup>
                                <thead class="">
                                    <tr>
                                        <th data-dt-column="0" rowspan="1" colspan="1"
                                            class="dt-orderable-asc dt-orderable-desc" aria-label="Campaign: Activate to sort"
                                            tabindex="0"><span class="dt-column-title" role="button">Company</span><span
                                                class="dt-column-order"></span></th>
                                        <th data-dt-column="1" rowspan="1" colspan="1"
                                            class="dt-orderable-asc dt-orderable-desc" aria-label="Platforms: Activate to sort"
                                            tabindex="0"><span class="dt-column-title" role="button">Platforms</span><span
                                                class="dt-column-order"></span></th>
                                        <th data-dt-column="3" rowspan="1" colspan="1"
                                            class="dt-orderable-asc dt-orderable-desc" aria-label="Team: Activate to sort"
                                            tabindex="0"><span class="dt-column-title" role="button">Customers</span><span
                                                class="dt-column-order"></span></th>
                                        <th data-dt-column="4" rowspan="1" colspan="1"
                                            class="dt-orderable-asc dt-orderable-desc" aria-label="Date: Activate to sort"
                                            tabindex="0"><span class="dt-column-title" role="button">Date</span><span
                                                class="dt-column-order"></span></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="min-w-175px">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div class="position-absolute start-0 top-0 w-4px px-0 h-100 rounded-2 bg-info">
                                                </div>
                                                <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Triangles
                                                    Agency</a>
                                                <div class="block pt-1 fs-7 text-muted ">User <b>John Doe</b></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Icons-->
                                            <div class="d-flex gap-2 mb-2">
                                                <a href="#">
                                                    <img src="/data/icons/facebook-4.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/twitter-2.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/linkedin-2.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/youtube-3.svg" class="w-20px" alt="">
                                                </a>
                                            </div>
                                            <!--end::Icons-->

                                            <div class="fs-7 text-muted fw-bold">Sales 24 - 35 Referrals</div>
                                        </td>
                                        <td class="min-w-125px">
                                            <!--begin::Team members-->
                                            <div class="symbol-group symbol-hover mb-1">
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-1.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-4.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-2.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-5.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-danger">
                                                        <span class="fs-7 text-inverse-danger">E</span>
                                                    </div>
                                                </div>
                                                <!--end::Member-->

                                                <!--begin::More members-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-dark">
                                                        <span class="fs-8 text-inverse-dark">+0</span>
                                                    </div>
                                                </div>
                                                <!--end::More members-->
                                            </div>
                                            <!--end::Team members-->

                                            <div class="fs-7 fw-bold text-muted">Interested Customers</div>
                                        </td>
                                        <td class="min-w-150px">
                                            <div class="mb-2 fw-bold">24 Oct 24 - 06 Jan 22</div>
                                            <div class="fs-7 fw-bold text-muted">Date range</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="min-w-175px">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px px-0 h-100 rounded-2 bg-warning">
                                                </div>
                                                <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Express
                                                    Company</a>
                                                <div class="block pt-1 fs-7 text-muted ">User <b>Adam Hadad</b></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Icons-->
                                            <div class="d-flex gap-2 mb-2">
                                                <a href="#">
                                                    <img src="/data/icons/twitter-2.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/instagram-2-1.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/youtube-3.svg" class="w-20px" alt="">
                                                </a>
                                            </div>
                                            <!--end::Icons-->

                                            <div class="fs-7 text-muted fw-bold">Sales 37 - 52 Referrals</div>
                                        </td>
                                        <td class="min-w-125px">
                                            <!--begin::Team members-->
                                            <div class="symbol-group symbol-hover mb-1">
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-3.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-2.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-1.png" alt="">
                                                </div>
                                                <!--end::Member-->

                                            </div>
                                            <!--end::Team members-->

                                            <div class="fs-7 fw-bold text-muted">Interested Customers</div>
                                        </td>
                                        <td class="min-w-150px">
                                            <div class="mb-2 fw-bold">03 Feb 22 - 14 Feb 22</div>
                                            <div class="fs-7 fw-bold text-muted">Date range</div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="min-w-175px">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px px-0 h-100 rounded-2 bg-success">
                                                </div>
                                                <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Quatre Co</a>
                                                <div class="block pt-1 fs-7 text-muted ">User <b>Jamila Akmal</b></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Icons-->
                                            <div class="d-flex gap-2 mb-2">
                                                <a href="#">
                                                    <img src="/data/icons/facebook-4.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/instagram-2-1.svg" class="w-20px" alt="">
                                                </a>
                                            </div>
                                            <!--end::Icons-->

                                            <div class="fs-7 text-muted fw-bold">Sales 24 - 38 Referrals</div>
                                        </td>
                                        <td class="min-w-125px">
                                            <!--begin::Team members-->
                                            <div class="symbol-group symbol-hover mb-1">
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-danger">
                                                        <span class="fs-7 text-inverse-danger">M</span>
                                                    </div>
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-1.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-primary">
                                                        <span class="fs-7 text-inverse-primary">N</span>
                                                    </div>
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-3.png" alt="">
                                                </div>
                                                <!--end::Member-->

                                            </div>
                                            <!--end::Team members-->

                                            <div class="fs-7 fw-bold text-muted">Interested Customers</div>
                                        </td>
                                        <td class="min-w-150px">
                                            <div class="mb-2 fw-bold">19 Mar 22 - 04 Apr 22</div>
                                            <div class="fs-7 fw-bold text-muted">Date range</div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="min-w-175px">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px px-0 h-100 rounded-2 bg-danger">
                                                </div>
                                                <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Black Eye</a>
                                                <div class="block pt-1 fs-7 text-muted ">User <b>Karim Fady</b></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Icons-->
                                            <div class="d-flex gap-2 mb-2">
                                                <a href="#">
                                                    <img src="/data/icons/twitter-2.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/instagram-2-1.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/linkedin-2.svg" class="w-20px" alt="">
                                                </a>
                                            </div>
                                            <!--end::Icons-->

                                            <div class="fs-7 text-muted fw-bold">Sales 24 - 38 Referrals</div>
                                        </td>
                                        <td class="min-w-125px">
                                            <!--begin::Team members-->
                                            <div class="symbol-group symbol-hover mb-1">
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-1.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-2.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-3.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-primary">
                                                        <span class="fs-7 text-inverse-primary">N</span>
                                                    </div>
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-4.png" alt="">
                                                </div>
                                                <!--end::Member-->

                                                <!--begin::More members-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-dark">
                                                        <span class="fs-8 text-inverse-dark">+0</span>
                                                    </div>
                                                </div>
                                                <!--end::More members-->
                                            </div>
                                            <!--end::Team members-->

                                            <div class="fs-7 fw-bold text-muted">Interested Customers</div>
                                        </td>
                                        <td class="min-w-150px">
                                            <div class="mb-2 fw-bold">20 Jun 22 - 30 Jun 22</div>
                                            <div class="fs-7 fw-bold text-muted">Date range</div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="min-w-175px">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px px-0 h-100 rounded-2 bg-primary">
                                                </div>
                                                <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Afro Holding
                                                    Co</a>
                                                <div class="block pt-1 fs-7 text-muted ">User <b>Hader Ramy</b></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Icons-->
                                            <div class="d-flex gap-2 mb-2">
                                                <a href="#">
                                                    <img src="/data/icons/youtube-3.svg" class="w-20px" alt="">
                                                </a>
                                            </div>
                                            <!--end::Icons-->

                                            <div class="fs-7 text-muted fw-bold">Sales 30 - 40 Referrals</div>
                                        </td>
                                        <td class="min-w-125px">
                                            <!--begin::Team members-->
                                            <div class="symbol-group symbol-hover mb-1">
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-5.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-3.png" alt="">
                                                </div>
                                                <!--end::Member-->

                                            </div>
                                            <!--end::Team members-->

                                            <div class="fs-7 fw-bold text-muted">Interested Customers</div>
                                        </td>
                                        <td class="min-w-150px">
                                            <div class="mb-2 fw-bold">01 Aug 22 - 01 Sep 22</div>
                                            <div class="fs-7 fw-bold text-muted">Date range</div>
                                        </td>


                                    </tr>
                                    <tr>
                                        <td class="min-w-175px">
                                            <div class="position-relative ps-6 pe-3 py-2">
                                                <div
                                                    class="position-absolute start-0 top-0 w-4px px-0 h-100 rounded-2 bg-success">
                                                </div>
                                                <a href="#" class="mb-1 text-gray-900 text-hover-primary fw-bold">Quatre Co</a>
                                                <div class="block pt-1 fs-7 text-muted ">User <b>Jamila Akmal</b></div>
                                            </div>
                                        </td>
                                        <td>
                                            <!--begin::Icons-->
                                            <div class="d-flex gap-2 mb-2">
                                                <a href="#">
                                                    <img src="/data/icons/facebook-4.svg" class="w-20px" alt="">
                                                </a>
                                                <a href="#">
                                                    <img src="/data/icons/instagram-2-1.svg" class="w-20px" alt="">
                                                </a>
                                            </div>
                                            <!--end::Icons-->

                                            <div class="fs-7 text-muted fw-bold">Sales 24 - 38 Referrals</div>
                                        </td>
                                        <td class="min-w-125px">
                                            <!--begin::Team members-->
                                            <div class="symbol-group symbol-hover mb-1">
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-danger">
                                                        <span class="fs-7 text-inverse-danger">M</span>
                                                    </div>
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-1.png" alt="">
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <div class="symbol-label bg-primary">
                                                        <span class="fs-7 text-inverse-primary">N</span>
                                                    </div>
                                                </div>
                                                <!--end::Member-->
                                                <!--begin::Member-->
                                                <div class="symbol symbol-circle symbol-25px">
                                                    <img src="/data/profile/avatar-3.png" alt="">
                                                </div>
                                                <!--end::Member-->

                                            </div>
                                            <!--end::Team members-->

                                            <div class="fs-7 fw-bold text-muted">Interested Customers</div>
                                        </td>
                                        <td class="min-w-150px">
                                            <div class="mb-2 fw-bold">19 Mar 22 - 04 Apr 22</div>
                                            <div class="fs-7 fw-bold text-muted">Date range</div>
                                        </td>


                                    </tr>
                                </tbody>
                                <!--end::Table-->
                                <tfoot></tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end:Top companies -->

            <div class="col-lg-6">

            </div>
            <div class="col-lg-6">

            </div>

        </div>
@endsection

@section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/chart-chartjs.js')}}"></script>

    <script src="{{asset('assets/plugins/highcharts/highmaps.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/exporting.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/data.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/accessibility.js')}}"></script>
    <script src="{{asset('assets/js/chart-map.js')}}"></script>


    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection