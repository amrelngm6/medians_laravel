@extends('layout.master')
@section('title', 'Navbars')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Navigation Bars</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#!">Components</a>
                                </li>
                                <li class="active">
                                    <strong>Navbars</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Horizontal Navigation bars</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">
                                <div class="col-xs-12">
                                    <!--begin::Menu-->
                                    <div class="menu">
                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="bx bx-link fs-3"></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="bx bx-rocket fs-3"></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                                <span class="menu-badge">
                                                    <span class="badge badge-sm badge-circle badge-danger">5</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item">
                                            <a href="#" class="menu-link">
                                                <span class="menu-icon">
                                                    <i class="bx bx-message-rounded fs-3"></i>
                                                </span>
                                                <span class="menu-title">Example Link</span>
                                            </a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->

                                </div>
                                <div class="clearfix"></div>
                                <div class="col-xl-12 my-10 ">
                                    <ul class="px-10 info-menu left-links list-inline list-unstyled">
                                        <li class="sidebar-toggle-wrap">
                                            <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                                <i class="fa fa-bars"></i>
                                            </a>
                                        </li>
                                        <li class="topnav-item item1">
                                            <a href="#" class="new-link "><i class="fa fa-adjust mr-10"></i>Schedule
                                                <span class="badge badge-primary ml-5">New</span>
                                            </a>
                                        </li>
                                        <li class="topnav-item active item2">
                                            <a href="#" class="nav-link ">
                                                <i class="fa fa-area-chart mr-10"></i>Reports
                                            </a>
                                        </li>
                                        <li class="topnav-item item3">
                                            <a href="#" class="nav-link ">
                                                <i class="fa fa-sitemap mr-10"></i>Trading
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="col-lg-6 ">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Vertical Nav bars</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">
                                <!--begin::Menu-->
                                <div class="menu menu-rounded menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-5 fw-semibold w-250px"
                                    id="#kt_aside_menu" data-kt-menu="true">
                                    <div class="menu-item">
                                        <div class="menu-content ">
                                            <span class="menu-section text-muted text-uppercase fs-7 fw-bold">Public</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link active border-3 border-start border-primary">
                                            <span class="menu-title">All Questions</span>
                                            <span class="menu-badge fs-7 fw-normal text-muted">675</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link border-3 border-start border-transparent">
                                            <span class="menu-title">Popular</span>
                                            <span class="menu-badge fs-7 fw-normal text-muted">14</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link border-3 border-start border-transparent">
                                            <span class="menu-title">Tags</span>
                                        </a>
                                    </div>
                                    <div class=" px-5 pt-5">
                                        <div class="menu-content pb-2">
                                            <span class="menu-section text-muted text-uppercase fs-7 fw-bold">My
                                                Activity</span>
                                        </div>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link border-3 border-start border-transparent">
                                            <span class="menu-title">Assigned to Me</span>
                                            <span class="menu-badge fs-7 fw-semibold text-muted">1</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link border-3 border-start border-transparent">
                                            <span class="menu-title">Unresolved</span>
                                            <span class="menu-badge fs-7 fw-semibold text-muted">7</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link border-3 border-start border-transparent">
                                            <span class="menu-title">Resolved</span>
                                            <span class="menu-badge fs-7 fw-semibold text-muted">668</span>
                                        </a>
                                    </div>
                                    <div class="menu-item">
                                        <a href="#" class="menu-link border-3 border-start border-transparent">
                                            <span class="menu-title">Archived</span>
                                            <span class="menu-badge fs-7 fw-semibold text-muted">39</span>
                                        </a>
                                    </div>
                                </div>
                                <!--end::Menu-->
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6 ">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Vertical Icons Nav bars</h3>
                        </div>
                        <div class="card-body ">
                            <!-- BEGIN: Inbox Menu -->
                            <div class="w-full pt-6">
                                <span class="text-muted px-3">Menu</span>
                                <div class="border-t border-white/10 pt-6 dark:border-darkmode-400 ">
                                    <a class="flex gap-4 items-center rounded-md bg-white/10 px-3 fs-4 py-2 fw-bold text-dark-blue"
                                        href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="mail"
                                            class="lucide lucide-mail stroke-1.5 mr-2 h-4 w-4">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                        Inbox
                                    </a>
                                    <a class="mt-2  flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="star"
                                            class="lucide lucide-star stroke-1.5 mr-2 h-4 w-4">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        Marked
                                    </a>
                                    <a class="mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="inbox"
                                            class="lucide lucide-inbox stroke-1.5 mr-2 h-4 w-4">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path
                                                d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                            </path>
                                        </svg>
                                        Draft
                                    </a>
                                    <a class="mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="send"
                                            class="lucide lucide-send stroke-1.5 mr-2 h-4 w-4">
                                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                                            <path d="M22 2 11 13"></path>
                                        </svg>
                                        Sent
                                    </a>
                                    <a class="mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash"
                                            class="lucide lucide-trash stroke-1.5 mr-2 h-4 w-4">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                        </svg>
                                        Trash
                                    </a>
                                </div>
                                <div class="mt-4 border-t border-white/10 pt-4 text-white dark:border-darkmode-400">
                                    <a class="flex items-center text-truncate px-3 py-2" href="">
                                        <div class="mr-5 w-15px h-15px  rounded-circle  bg-info"></div>
                                        Custom Work
                                    </a>
                                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                        <div class="mr-5 w-15px h-15px  rounded-circle  bg-success"></div>
                                        Important Meetings
                                    </a>
                                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                        <div class="mr-5 w-15px h-15px  rounded-circle  bg-warning"></div>
                                        Work
                                    </a>
                                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                        <div class="mr-5 w-15px h-15px  rounded-circle  bg-dark"></div>
                                        Design
                                    </a>
                                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                        <div class="mr-5 w-15px h-15px  rounded-circle  bg-danger"></div>
                                        Next Week
                                    </a>
                                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="plus"
                                            class="lucide lucide-plus stroke-1.5 mr-2 h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                        Add New Label
                                    </a>
                                </div>
                            </div>
                            <!-- END: Inbox Menu -->
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')

@endsection