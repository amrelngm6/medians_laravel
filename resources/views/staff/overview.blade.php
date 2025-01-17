@extends('layout.master')
@section('title', 'Staff Profile - Overview')
@section('css')

@endsection
@section('main-content')

        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Staff Profile</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="#">Staff</a>
                            </li>
                            <li class="active">
                                <strong>Overview</strong>
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
                                    <img src="{{url($staff->picture ?? 'default.png')}}" alt="image">

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
                                            <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$staff->name}}</a>
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
                                                        class="path3"></span></i> {{$staff->position}}
                                            </a>
                                            <a href="#"
                                                class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                                <i class="ki-duotone ki-geolocation fs-4 me-1"><span class="path1"></span><span
                                                        class="path2"></span></i> {{$staff->city}}, {{$staff->country}}
                                            </a>
                                            <a href="#" class="d-flex align-items-center text-muted text-hover-primary mb-2">
                                                <i class="ki-duotone ki-sms fs-4"><span class="path1"></span><span
                                                        class="path2"></span></i> {{$staff->email}}
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
                                                    <div class="fs-2 fw-bold counted w-full">${{$staff->balance}}</div>
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
                                                    <div class="fs-2 fw-bold counted w-full">{{$staff->orders_count}}</div>
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
                                                    <div class="fs-2 fw-bold counted w-full">${{$staff->total_income}}</div>
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
                                                                class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">{{$staff->company}}</a>
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
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{route('Staff.tabs.overview', $staff->staff_id)}}">
                                    Overview </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route('Staff.settings', $staff->staff_id)}}">
                                    Settings </a>
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
                        <h3 class="fw-bold m-0">Profile Details</h3>
                    </div>
                    <!--end::Card title-->

                    <!--begin::Action-->
                    <a href="#!" data-name="{{$staff->name}}" data-img="{{url($staff->picture ?? 'default.png')}}" data-user-id="{{$staff->staff_id}}"
                        class="msg-user btn btn-sm btn-primary align-self-center">Message</a>
                    <!--end::Action-->
                </div>
                <!--begin::Card header-->

                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">{{$staff->name}}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Company</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 fv-row">
                            <span class="fw-semibold text-gray-800 fs-6">{{$staff->company}}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">
                            Contact Phone

                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                                data-bs-original-title="Phone number must be active" data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i> </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8 d-flex align-items-center">
                            <span class="fw-bold fs-6 text-gray-800 me-2">{{$staff->phone}}</span>
                            <span class="badge badge-success">Verified</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Company Site</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$staff->website}}</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Contact Email</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$staff->email}}</a>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">
                            Country

                            <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination"
                                data-bs-original-title="Country of origination" data-kt-initialized="1">
                                <i class="ki-duotone ki-information fs-7"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span></i> </span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">{{$staff->company}}</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-7">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Communication</label>
                        <!--end::Label-->

                        <!--begin::Col-->
                        <div class="col-lg-8">
                            <span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Label-->
                        <label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>
                        <!--begin::Label-->

                        <!--begin::Label-->
                        <div class="col-lg-8">
                            <span class="fw-semibold fs-6 text-gray-800">Yes</span>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                            <div class=" fw-semibold">
                                <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                                <div class="fs-6 text-gray-700 ">Your account setup not completed. To start using tools,
                                    please <a class="fw-bold" href="{{route(App::getLocale() . '.profile_setting')}}">Complete your settings</a>.</div>
                            </div>
                            <!--end::Content-->

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