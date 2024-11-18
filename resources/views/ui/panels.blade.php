@extends('layout.master')
@section('title', 'Panels')
@section('css')
<link href="/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Draggable Panels</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Appearance</a>
                                </li>
                                <li class="active">
                                    <strong>Draggable Panels</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="sort_container grid grid-cols-3 col-lg-12">
                    <div class="cursor-move w-full">
                        <div class="card">
                            <div class="sort_item card-body pb-0">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="javascript:;" class="open-modal" data-modal="#task-modal">Handle
                                                custom scroll, sidebar and Mobile Menu </a></h4>
                                        <p class="block w-full"> Footer & Header background color needs to be changed from dark blue
                                            to light purple...</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full">
                                            <p class="m-0 mb-2">Assigned to</p>
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
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" cursor-move w-full">
                        <div class="card">
                            <div class="sort_item card-body pb-0">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="javascript:;" class="open-modal" data-modal="#task-modal">Full
                                                Testing at Dashboard & Other sub-pages </a></h4>
                                        <p class="block w-full">You need to be sure there isn't anything embarrassing hidden in the
                                            middle of text....</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-3.png">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" cursor-move w-full">
                        <div class="card">
                            <div class="sort_item card-body pb-0">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="javascript:;" class="open-modal" data-modal="#task-modal">Change
                                                Header, sidebar and Footer colors </a></h4>
                                        <p class="block w-full"> Footer & Header background color needs to be changed from dark blue
                                            to light purple...</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-3.png">
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-1.png">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" cursor-move w-full">
                        <div class="card">
                            <div class="sort_item card-body pb-0">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="javascript:;" class="open-modal" data-modal="#task-modal">Fix Main
                                                Menu issue</a></h4>
                                        <p class="block w-full"> There are many variations of passages of Lorem Ipsum available, but
                                            the majority have ...</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-2.png">
                                                </div>
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-5.png">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=" cursor-move w-full">
                        <div class="card">
                            <div class="sort_item card-body pb-0">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="javascript:;" class="open-modal" data-modal="#task-modal">Fix Main
                                                Menu issue</a></h4>
                                        <p class="block w-full"> There are many variations of passages of Lorem Ipsum available, but
                                            the majority have ...</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-5.png">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" cursor-move w-full">
                        <div class="card">
                            <div class="sort_item card-body pb-0">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="javascript:;" class="open-modal" data-modal="#task-modal">Full
                                                Testing at Dashboard & Other sub-pages </a></h4>
                                        <p class="block w-full">You need to be sure there isn't anything embarrassing hidden in the
                                            middle of text....</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                    aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                    data-kt-initialized="1">
                                                    <img alt="Pic" src="/data/profile/avatar-4.png">
                                                </div>
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                                                    </svg></a>
                                                <a href="javascript:;"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.task-modal')
@endsection


@section('script')

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection