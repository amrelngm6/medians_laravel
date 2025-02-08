@extends('layout.master')
@section('title', 'HR Employees')
@section('css')

@endsection

@section('main-content')


            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Employees </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">HR</a>
                                </li>
                                <li class="active">
                                    <strong>Employees</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 ">

                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                                </div>
                            </div>

                            <a class="btn btn-md btn-primary me-2 open-modal" data-modal="#new-user-modal" href="javascript:;">
                                New Employee </a>
                        </div>

                    </div>
                </div>
                <div class="w-full">
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card ">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="w-auto">
                                        <img class="rounded-circle w-50px h-50px" src="/data/profile/avatar-1.png" alt="">
                                    </div>
                                    <div class="mt-3 text-start user-info">
                                        <a class="font-medium user" href="">
                                            Adam Smith
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            Full-stack Engineer
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Attendance</div>
                                            <div>84%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 84%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="Adam Smith" data-img="/data/profile/avatar-1.png"
                                        data-user-id="1"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>

                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="">
                                        <img class="rounded-circle w-50px h-50px" src="/data/profile/avatar-2.png" alt="">
                                    </div>
                                    <div class="mt-3 text-start ">
                                        <a class="font-medium" href="">
                                            Jhon Doe
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            Front-end Engineer
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Attendance</div>
                                            <div>90%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 90%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="Adam Smith" data-img="/data/profile/avatar-2.png"
                                        data-user-id="2"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>
                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="">
                                        <img class="rounded-circle w-50px h-50px" src="/data/profile/avatar-3.png" alt="">
                                    </div>
                                    <div class="mt-3 text-start ">
                                        <a class="font-medium" href="">
                                            Hany Maged
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            Quality Tester
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Attendance</div>
                                            <div>65%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 65%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="Adam Smith" data-img="/data/profile/avatar-3.png"
                                        data-user-id="3"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>
                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="">
                                        <img class="rounded-circle w-50px h-50px" src="/data/profile/avatar-5.png" alt="">
                                    </div>
                                    <div class="mt-3 text-start ">
                                        <a class="font-medium" href="">
                                            Hoda Kamal
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            Graphic Designer
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Attendance</div>
                                            <div>80%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 80%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="Adam Smith" data-img="/data/profile/avatar-5.png"
                                        data-user-id="4"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>
                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="">
                                        <img class="rounded-circle w-50px h-50px" src="/data/profile/avatar-4.png" alt="">
                                    </div>
                                    <div class="mt-3 text-start ">
                                        <a class="font-medium" href="">
                                            Smith Karl
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            Full-stack Engineer
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Attendance</div>
                                            <div>84%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 84%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="Adam Smith" data-img="/data/profile/avatar-1.png"
                                        data-user-id="5"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>

                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="">
                                        <img class="rounded-circle w-50px h-50px" src="/data/profile/avatar-1.png" alt="">
                                    </div>
                                    <div class="mt-3 text-start ">
                                        <a class="font-medium" href="">
                                            Kenedy AdaM
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            Full-stack Engineer
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Attendance</div>
                                            <div>84%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 84%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="Adam Smith" data-img="/data/profile/avatar-1.png"
                                        data-user-id="6"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>
                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.new-user-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection