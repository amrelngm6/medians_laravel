@extends('layout.master')
@section('title', 'Prohect Modules')
@section('css')
<link href="/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Modules</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">

                    <div class="card mb-5 mb-xl-10 py-0">
                        <div class="card-body py-0 flex w-full">
                            <!--begin::Navs-->
                            <ul class="w-full nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('Modules')}}">
                                        List </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route('Modules')}}?view=kanban">
                                        Kanban </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                            <div class="d-flex flex-none align-items-center position-relative my-1 gap-10">
                                <input type="text"
                                    class="form-control form-control-solid w-250px ps-12" placeholder="Search in Modules">
                                <a class="btn btn-md btn-primary  open-modal" href="{{route('Modules.upload')}}">
                                    New Module </a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-12   post-wrapper">
                    <div class="w-full flex gap-10 overflow-auto  mb-10">
                        <div class="min-w-350px ">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex flex-">
                                        <div class="flex-shrink-0"><i class="p-1 fs-2tx bx bx-list-check"></i></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Active Modules</a></h5>
                                            <p class="mb-0"><small>24 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sort_container">
                                @foreach ($modules as $module)
                                <div class="cursor-move w-full">
                                    <div class="card">
                                        <div class="sort_item card-body pb-0">
                                            <div class="w-full">
                                                <div class="block w-full">
                                                    <h4 class="mb-4 block"> <a href="javascript:;" >{{$module->name}} </a></h4>
                                                </div>
                                            </div>
                                            <div class=" mt-10">
                                                <div class="flex align-items-center">
                                                    <div class="w-full">
                                                        <p class="m-0 mb-2">Uploaded by</p>
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
                                                            
                                                        
                                                        
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="min-w-350px ">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><i class='p-1 fs-2hx  bx bx-message-square-x'></i></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Disabled Modules</a>
                                            </h5>
                                            <p class="mb-0"><small>13 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sort_container w-full min-h-100px"></div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection



@section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection