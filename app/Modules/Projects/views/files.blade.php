@extends('layout.master')
@section('title', 'Project Files')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Project Details</h1>
                            <!-- PAGE HEADING TAG - END -->
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
                                <!--begin::Info-->
                                <div class="flex-grow-1">
                                    <!--begin::Title-->
                                    <div class="d-flex justify-content-between align-items-start     mb-2">
                                        <!--begin::User-->
                                        <div class="d-flex flex-column">
                                            <!--begin::Name-->
                                            <div class="d-flex align-items-center mb-2">
                                                <a href="javascript:;" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">Flutter
                                                    Mobile APP</a>
                                            </div>
                                            <!--end::Name-->

                                            <!--begin::Info-->
                                            <p class="w-500px pt-6">Mobile APP Project using Flutter Framework for Triangles
                                                Agency Services Mobile APP Project using Flutter Framework for Triangles
                                                Agency Services </p>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::User-->

                                        <!--begin::Stats-->
                                        <div class=" ">
                                            <div class="flex gap-10 ">

                                                <!--begin::Wrapper-->
                                                <h4 class="pt-2">Team</h4>
                                                <!--begin::Users group-->
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-2.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                                                        <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                    <a href="javascript:;" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_view_users">
                                                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                                    </a>
                                                </div>
                                                <!--end::Users group-->
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 mt-4">
                                                <!--begin::Stats-->
                                                <div class="d-flex ">
                                                    <!--begin::Stat-->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 ">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <div class="fs-2 fw-bold counted w-full">50</div>
                                                            <i class='bx bx-qr fs-1 text-danger'></i>

                                                        </div>
                                                        <!--end::Number-->

                                                        <!--begin::Label-->
                                                        <div class="fw-semibold fs-6 text-gray-500">Tasks</div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->

                                                    <!--begin::Stat-->
                                                    <div
                                                        class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 ">
                                                        <!--begin::Number-->
                                                        <div class="d-flex align-items-center">
                                                            <div class="fs-2 fw-bold counted w-full">41</div>
                                                            <i class='bx bx-check-square fs-1 text-danger'></i>
                                                        </div>
                                                        <!--end::Number-->

                                                        <!--begin::Label-->
                                                        <div class="flex fw-semibold fs-6 text-gray-500">
                                                            Completed
                                                        </div>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Stat-->


                                                </div>
                                                <!--end::Stats-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Stats-->
                                    </div>
                                    <!--end::Title-->

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Details-->

                            <!--begin::Navs-->
                            <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_project')}}">
                                        Overview </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_tasks')}}">
                                        Tasks </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_team')}}">
                                        Team </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_files')}}">
                                        Files </a>
                                </li>
                                <!--end::Nav item-->
                                <!--begin::Nav item-->
                                <li class="nav-item mt-2">
                                    <a class="nav-link text-active-primary ms-0 me-10 py-5 " href="{{route(App::getLocale() . '.projects_activity')}}">
                                        Activity </a>
                                </li>
                                <!--end::Nav item-->
                            </ul>
                            <!--begin::Navs-->
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-sm-12">
                    <div class="card">
                        <div class="flex flex-column gap-3 p-7">
                            <div href="#!"
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                                    <i class="bx bxs-file-doc fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>Preview-01.jpg</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>

                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-2.png" /> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="#!"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>

                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-danger shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-1.png" /> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="#!"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>



                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-primary shrink-0">
                                    <i class="bx bxs-file-pdf fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>Homepage-design.pdf</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-5.png" /> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="#!"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-warning shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-1.png" /> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="#!"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-3.png" /> <span class="pt-1"><b>Jhon Doe</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="#!"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-warning shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-2.png" /> <span class="pt-1"><b>Smith Adam </b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="#!"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="#!"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection