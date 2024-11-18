@extends('layout.master')
@section('title', 'User Profile - Billing')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">User Profile</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">Profile</a>
                                </li>
                                <li class="active">
                                    <strong>Billing</strong>
                                </li>
                            </ol>
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
                                <!--begin: Pic-->
                                <div class="me-7 mb-4">
                                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                                        <img src="/data/profile/avatar-1.png" alt="image">

                                    </div>
                                </div>
                                <!--end::Pic-->

                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Anthony
                                                    Smith</a>
                                                <a href="#"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                                            class="path1"></span><span class="path2"></span></i></a>
                                            </div>
                                            <!--end::Name-->

                                            <!--begin::Info-->
                                            <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 ">
                                                <a href="#"
                                                    class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-profile-circle fs-4 me-1"><span
                                                            class="path1"></span><span class="path2"></span><span
                                                            class="path3"></span></i> Manager
                                                </a>
                                                <a href="#"
                                                    class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                                    <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span
                                                            class="path2"></span></i> CA, Egypt
                                                </a>
                                                <a href="#" class="d-flex align-items-center text-muted text-hover-primary mb-2">
                                                    <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span
                                                            class="path2"></span></i> info@example.com
                                                </a>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Actions-->
                                        <!--begin::Details-->
                                        <div class="mb-0">
                                            <!--begin::Plan-->
                                            <span class="badge badge-light-info me-2">Basic Bundle</span>
                                            <!--end::Plan-->

                                            <!--begin::Price-->
                                            <span class="fw-semibold text-gray-600">$149.99 / Year</span>
                                            <!--end::Price-->
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Stats-->
                                    <div class="d-flex flex-wrap flex-stack">
                                        <!--begin::Wrapper-->

                                        <div class="d-flex flex-column flex-grow-1 pe-8">
                                            <!--begin::Stats-->
                                            <div class="d-flex flex-wrap">
                                                <!--begin::Stat-->
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-2 fw-bold counted w-full">$963</div>
                                                        <i class='bx bxs-wallet fs-1 text-danger'></i>

                                                    </div>
                                                    <!--end::Number-->

                                                    <!--begin::Label-->
                                                    <div class="fw-semibold fs-6 text-muted">Balance</div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->

                                                <!--begin::Stat-->
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-2 fw-bold counted w-full">239</div>
                                                        <i class='bx bx-cart fs-1 text-danger'></i>
                                                    </div>
                                                    <!--end::Number-->

                                                    <!--begin::Label-->
                                                    <div class="flex fw-semibold fs-6 text-muted">
                                                        Orders
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->

                                                <!--begin::Stat-->
                                                <div
                                                    class="border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                                    <!--begin::Number-->
                                                    <div class="d-flex align-items-center">
                                                        <div class="fs-2 fw-bold counted w-full">$14,567</div>
                                                        <i class='bx bxs-credit-card fs-1 text-danger'></i>
                                                    </div>
                                                    <!--end::Number-->

                                                    <!--begin::Label-->
                                                    <div class="flex fw-semibold fs-6 text-muted">
                                                        Total Income
                                                    </div>
                                                    <!--end::Label-->
                                                </div>
                                                <!--end::Stat-->

                                            </div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Wrapper-->

                                        <!--begin::Progress-->
                                        <div class="d-flex align-items-center flex-column ">

                                            <div class="card card-flush p-0 mb-0">

                                                <!--begin::Card body-->
                                                <div class="card-body p-0 fs-6">
                                                    <!--begin::Section-->
                                                    <div class="mb-0">

                                                        <!--begin::Details-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Avatar-->
                                                            <div class="symbol symbol-60px symbol-circle me-3">
                                                                <img alt="Pic" src="/data/logos/logo1.png">
                                                            </div>
                                                            <!--end::Avatar-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-column">
                                                                <!--begin::Name-->
                                                                <a href="#"
                                                                    class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">Triangles
                                                                    Agency</a>
                                                                <!--end::Name-->

                                                                <!--begin::Email-->
                                                                <a href="#"
                                                                    class="fw-semibold text-gray-600 text-hover-primary">Company</a>
                                                                <!--end::Email-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Details-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                        </div>
                                        <!--end::Progress-->
                                    </div>
                                    <!--end::Stats-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.profile_overview')}}">
                                        Overview </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.profile_setting')}}">
                                        Settings </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.profile_activity')}}">
                                        Activity </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active" href="{{route(App::getLocale() . '.profile_billing')}}">
                                        Billing </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.profile_referrals')}}">
                                        Referrals </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                </div>

                <div class="card mb-5 mb-xl-10" id="profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Billing history</h3>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Action-->
                        <a href="#!" data-name="Adam Smith" data-img="/data/profile/avatar-1.png" data-user-id="1"
                            class="msg-user btn btn-sm btn-primary align-self-center">Message</a>
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Tab panel-->
                        <div id="billing_months" class="card-body p-0">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-bordered align-middle gy-4 gs-9">
                                    <thead class="border-bottom border-gray-200 fs-6 text-gray-600 fw-bold bg-light bg-opacity-75">
                                        <tr>
                                            <td class="min-w-150px">Date</td>
                                            <td class="min-w-250px">Description</td>
                                            <td class="min-w-150px">Amount</td>
                                            <td class="min-w-150px">Invoice</td>
                                            <td></td>
                                        </tr>
                                    </thead>
                                    <tbody class="fw-semibold text-gray-600">
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Nov 01, 2020</td>
                                            <td><a href="#">Invoice for Ocrober 2024</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Oct 08, 2020</td>
                                            <td><a href="#">Invoice for September 2024</a></td>
                                            <td>$98.03</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 24, 2020</td>
                                            <td>Paypal</td>
                                            <td>$35.07</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Aug 01, 2020</td>
                                            <td><a href="#">Invoice for July 2024</a></td>
                                            <td>$142.80</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jul 01, 2020</td>
                                            <td><a href="#">Invoice for June 2024</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 17, 2020</td>
                                            <td>Paypal</td>
                                            <td>$523.09</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                        <!--begin::Table row-->
                                        <tr>
                                            <td>Jun 01, 2020</td>
                                            <td><a href="#">Invoice for May 2024</a></td>
                                            <td>$123.79</td>
                                            <td><a href="#" class="btn btn-sm btn-light btn-active-light-primary">PDF</a></td>
                                            <td class="text-right"><a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a></td>
                                        </tr>
                                        <!--end::Table row-->
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Tab panel-->
                    </div>
                    <!--end::Card body-->
                </div>

                <div class="clearfix"></div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection