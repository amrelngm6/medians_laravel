@extends('layout.master')
@section('title', 'Lead Profile - Overview')
@section('css')

@endsection
@section('main-content')
        <!-- MAIN CONTENT AREA STARTS -->
        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Lead Profile</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="{{route('dashboard')}}"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li>
                                <a href="{{route('Lead')}}">Leads</a>
                            </li>
                            <li class="active">
                                <strong>Lead Page</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            @if (isset($lead))
            <div class="col-lg-12">

                <div class="card mb-5 mb-xl-10 py-0">
                    <div class="card-body pt-9 pb-0">
                        <!--begin::Details-->
                        <div class="d-flex flex-wrap flex-sm-nowrap">

                            <!--begin::Info-->
                            <div class="flex-grow-1">
                                <!--begin::Title-->
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                    <!--begin::User-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Name-->
                                        <div class="d-flex align-items-center mb-2">
                                            <a href="javascript:;" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$lead->name}}</a>
                                            @if ($lead->deal)
                                            <a href="{{route('Deal.show', $lead->deal->id)}}" data-toggle="popover" rel="popover"  data-content="Converted to Deal: <b class='text-danger'>( {{$lead->deal->name}} )</b>" data-trigger="hover" data-html="true" class="mx-4 text-gray-600 text-hover-primary fs-7 fw-bold me-1">Deal: <b>{{$lead->deal->name}}</b></a>
                                            @else
                                            <a href="{{route('Deal.convert_lead_modal', $lead->lead_id)}}" class="open-modal label rounded bg-primary text-white hoverbg-primary mx-6 fs-7 fw-bold me-1">Make a Deal</a>
                                            @endif
                                        </div>
                                        <!--end::Name-->

                                        <!--begin::Info-->
                                        <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 ">
                                            <a href="javascript:;"
                                                class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                                 {{$lead->position}} ,  {{$lead->company}}
                                            </a>
                                            <a href="#!"
                                                class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                                 {{$lead->location_info->city ?? ''}}, {{$lead->location_info->country ?? ''}}
                                            </a>
                                            <a href="#!" class="d-flex align-items-center text-muted text-hover-primary mb-2">
                                               {{$lead->email}}
                                            </a>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Actions-->
                                    <!--begin::Details-->
                                    <div class="mb-0">
                                        
                                    <div class="d-flex flex-column flex-grow-1 pe-8">
                                        <!--begin::Stats-->
                                        <div class="d-flex flex-wrap">

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bold counted w-full">{{$lead->tasks->count()}}</div>
                                                    <i class='bx bx-cart fs-1 text-danger'></i>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="flex fw-semibold fs-6 text-muted">
                                                    Tasks
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                            <!--begin::Stat-->
                                            <div
                                                class="border border-gray-300 border-dashed rounded min-w-150px py-3 px-4 me-6 mb-3">
                                                <!--begin::Number-->
                                                <div class="d-flex align-items-center">
                                                    <div class="fs-2 fw-bold counted w-full">{{$lead->calls ? $lead->calls->count() : 0}}</div>
                                                    <i class='bx bxs-credit-card fs-1 text-danger'></i>
                                                </div>
                                                <!--end::Number-->

                                                <!--begin::Label-->
                                                <div class="flex fw-semibold fs-6 text-muted">
                                                    Total Calls
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Stat-->

                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap flex-stack">
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center w-full gap-10">

                                        <div class=" p-0 mb-0">

                                            <!--begin::Card body-->
                                            <div class="card-body p-0 fs-6">
                                                <!--begin::Section-->
                                                <div class="mb-0">

                                                    <!--begin::Details-->
                                                    <div class="d-flex align-items-center gap-10">
                                                        @if ($lead->company)
                                                        <!--begin::Info-->
                                                        <div class="d-flex flex-column" data-toggle="popover" rel="popover"  data-content="This is <b class='text-danger'>{{ucfirst($lead->type)}}</b> lead" data-trigger="hover" data-html="true">
                                                            <!--begin::Name-->
                                                            <a href="javascript:;"
                                                                class="fs-4 fw-bold text-gray-900 text-hover-primary me-2">{{$lead->company}}</a>
                                                            <!--end::Name-->

                                                            <!--begin::Email-->
                                                            <a href="javascript:;"
                                                                class="fw-semibold text-gray-600 text-hover-primary">{{ucfirst($lead->type)}}</a>
                                                            <!--end::Email-->
                                                        </div>
                                                        <!--end::Info-->
                                                        @endif 
                                                        
                                                    </div>
                                                    <!--end::Details-->
                                                </div>
                                                <!--end::Section-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                                        
                                        <a href="{{route('Lead.tabs.edit', $lead->lead_id)}}#form-content-1" class="flex gap-2   "
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="Assigned to {{$lead->assigned->name ?? ''}}">
                                            <img class='w-10 h-10 p-1 rounded-circle' src='/{{$lead->assigned->picture ?? ""}}' /> 
                                            <span class="pt-2 fs-6 fw-bold text-danger">{{$lead->assigned->name ?? ''}} </span>
                                        </a>
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
                            @foreach ($leadTabs as $tabItem)
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                                    href="{{route($tabItem['route'], $lead->lead_id)}}">
                                    {{$tabItem['name']}} </a>
                            </li>
                            <!--end::Nav item-->
                            @endforeach
                        </ul>
                        <!--begin::Navs-->
                    </div>
                </div>
            </div>
            @endif

            @yield('lead-page')

            <div class="clearfix"></div>
        </div>
        <!-- MAIN CONTENT AREA ENDS -->
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/js/sticky-sidebar.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection