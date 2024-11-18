@extends('layout.master')
@section('title', 'User Profile - Referrals')
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
                                    <strong>Referrals</strong>
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
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.profile_billing')}}">
                                        Billing </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 active"
                                        href="{{route(App::getLocale() . '.profile_referrals')}}">
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
                            <h3 class="fw-bold m-0">Profile Referrals</h3>
                        </div>
                        <!--end::Card title-->

                        <!--begin::Action-->
                        <a href="#!" data-name="Adam Smith" data-img="/data/profile/avatar-1.png" data-user-id="1"
                            class="msg-user btn btn-sm btn-primary align-self-center">Message</a>
                        <!--end::Action-->
                    </div>
                    <!--begin::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body py-10">
                        <!--begin::Overview-->
                        <div class="w-full  mb-10">
                            <!--begin::Col-->
                            <div class="col-md-6 mb-15 ">
                                <h4 class="mb-0">How to use Referral Program</h4>

                                <p class="fs-6 fw-semibold text-muted py-4 m-0">
                                    Use images to enhance your post, improve its flow, add humor <br> and explain
                                    complex topics
                                </p>

                                <a href="#" class="btn btn-light btn-active-light-primary fw-bold">Get Started</a>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-md-6">
                                <h4 class="text-gray-800 mb-0">
                                    Your Referral Link
                                </h4>

                                <p class="fs-6 fw-semibold text-muted py-4 m-0">
                                    Plan your blog post by choosing a topic, creating an outline conduct <br> research,
                                    and checking facts
                                </p>

                                <div class="d-flex">
                                    <input id="referral_link_input" type="text"
                                        class="form-control form-control-solid me-3 flex-grow-1" name="search"
                                        value="https://example.com/reffer/?refid=345re66787k8">

                                    <button id="referral_program_link_copy_btn"
                                        class="btn btn-light btn-active-light-primary fw-bold flex-shrink-0"
                                        data-clipboard-target="#kt_referral_link_input">Copy Link</button>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Overview-->
                        <div class="clearfix"></div>
                        <!--begin::Stats-->
                        <div class="w-full">
                            <!--begin::Col-->
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                    <span class="fs-4 fw-semibold text-info pb-1 px-2">Net Earnings</span>
                                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                                        $<span data-kt-countup="true" data-kt-countup-value="160.00" class="counted"
                                            data-kt-initialized="1">160</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                    <span class="fs-4 fw-semibold text-success pb-1 px-2">Balance</span>
                                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                                        $<span data-kt-countup="true" data-kt-countup-value="34.00" class="counted"
                                            data-kt-initialized="1">34</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                    <span class="fs-4 fw-semibold text-danger pb-1 px-2">Avg Deal Size</span>
                                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                                        $<span data-kt-countup="true" data-kt-countup-value="45" class="counted"
                                            data-kt-initialized="1">45</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-3 col-md-6 col-sm-12 ">
                                <div class="card card-dashed flex-center min-w-175px my-3 p-6">
                                    <span class="fs-4 fw-semibold text-primary pb-1 px-2">Referral Signups</span>
                                    <span class="fs-lg-2tx fw-bold d-flex justify-content-center">
                                        <span data-kt-countup="true" data-kt-countup-value="14" class="counted"
                                            data-kt-initialized="1">14</span>
                                    </span>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Stats-->

                        <!--begin::Info-->
                        <p class="fs-5 fw-semibold text-muted py-6">
                            Writing headlines for blog posts is as much an art as it is a science, and probably warrants
                            its own post,
                            but for now, all I’d advise is experimenting with what works for your audience, especially
                            if it’s not resonating with your audience
                        </p>
                        <!--end::Info-->


                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-bank fs-2tx text-primary me-4"><span class="path1"></span><span
                                    class="path2"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                <!--begin::Content-->
                                <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Withdraw Your Money to a Bank Account</h4>

                                    <div class="fs-6 text-muted pe-7">Withdraw money securily to your bank account.
                                        Commision is $25 per transaction under $50,000</div>
                                </div>
                                <!--end::Content-->

                                <!--begin::Action-->
                                <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">
                                    Withdraw Money </a>
                                <!--end::Action-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
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