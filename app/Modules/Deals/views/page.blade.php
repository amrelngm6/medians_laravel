@extends('layout.master')
@section('title', 'Deal Profile - Overview')
@section('css')

@endsection
@section('main-content')
<!-- MAIN CONTENT AREA STARTS -->
<div class="wrapper main-wrapper row" style=''>

    <div class="clearfix"></div>

    @if (isset($deal))
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
                                    <a href="javascript:;"
                                        class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{$deal->name}}</a>
                                    <a href="javascript:;"><i class="ki-duotone ki-verify fs-1 text-primary"><span
                                                class="path1"></span><span class="path2"></span></i></a>
                                </div>
                                <!--end::Name-->

                                <!--begin::Info-->
                                <div class="d-flex flex-wrap fw-semibold fs-6 mb-4 ">
                                    <a href="javascript:;"
                                        class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                        {{$deal->description}}
                                    </a>
                                    <a href="#!"
                                        class="d-flex align-items-center text-muted text-hover-primary me-5 mb-2">
                                        {{$deal->location_info->city ?? ''}}, {{$deal->location_info->country ?? ''}}
                                    </a>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->

                            <!--begin::Actions-->
                            <!--begin::Details-->
                            <div class="mb-0">
                                
                                
    
                                <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">

                                    <!--begin::Actions-->
                                    <div class="d-flex my-4">
                                        <a href="{{route('Deal.update', $deal->id)}}?status=won&_token={{csrf_token()}}" class="reload-ajax ajax-link btn flex gap-2 btn-primary me-2" 
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="You Won the Deal"
                                            data-reload-href="{{Request::url()}}" data-reload-id="main-content"
                                            id="won-btn">
                                            <i class='bx bx-smile fs-1 '></i>
                                            <span class="indicator-label">
                                                Win</span>
                                        </a>

                                        <a href="{{route('Deal.update', $deal->id)}}?status=lose&_token={{csrf_token()}}" class="reload-ajax ajax-link btn flex gap-2 btn-light me-2" 
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="You Lose the Deal"
                                            data-reload-href="{{Request::url()}}" data-reload-id="main-content"
                                            id="lose-btn">
                                            <i class='bx bxs-sad fs-1'></i>
                                            <span class="indicator-label">
                                                Lose</span>
                                        </a>
                                        <a href="{{route('Deal.tabs.edit', $deal->id)}}#form-content-1" class="flex gap-2   "
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="Assigned to {{$deal->assigned->user->name ?? ''}}">
                                            <img class='w-10 h-10 p-1 rounded-circle' src='/{{$deal->assigned->user->picture ?? ""}}' /> 
                                            <span class="pt-2 fs-6 fw-bold text-danger">{{$deal->assigned->user->name ?? ''}} </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!--end::Details-->
                        </div>
                        <!--end::Title-->

                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details-->

                <!-- Render dynamic components -->
                @foreach ($top_components as $component)
                {!! $component !!}
                @endforeach

                <!--begin::Navs-->
                <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    @foreach ($dealTabs as $tabItem)
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5 "
                            href="{{route($tabItem['route'], $deal->id)}}">
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

    @yield('deal-page')

    <div class="clearfix"></div>
</div>
<!-- MAIN CONTENT AREA ENDS -->
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/js/sticky-sidebar.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection