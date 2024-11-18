@extends('layout.master')
@section('title', 'Merchants')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Merchants</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li class="py-1">
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="py-1">
                                    <a href="">E-Commerce</a>
                                </li>
                                <li class="active">
                                    <strong>Merchants</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-12 gap-x-5">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="" onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction1" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction1">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="/data/logos/logo2.png" alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Triangles Agency</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Adam Smith</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">4.5k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">310</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$235.3k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item " onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction2" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction2">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="/data/logos/logo3.png" alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Curva Fashion</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Kara Miller</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">2.3k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">67</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$152.8k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item " onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction3" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction3">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="data:image/png;base64,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"
                                        alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Express Marketing</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Daniel Miller</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">7.1k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">138</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$465.9k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item  active"
                                            onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction4" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction4">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="data:image/png;base64,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"
                                        alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Extra Diamond</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Mark Walton</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">1.9k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">49</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$198.3k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item active"
                                            onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction5" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction5">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="data:image/png;base64,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"
                                        alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Bedaya Technologies</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Heineman Walt</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">4.8k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">172</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$746.1k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item " onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction6" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction6">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="/data/logos/logo1.png" alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Digitech Galaxy</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">David Biggs</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">9.2k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">674</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$14.4m</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item " onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction7" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction7">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="/data/logos/logo1.png" alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Zoetic Fashion</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Jaqueline Hammes</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">1.8k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">112</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$132.4k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="flex items-center gap-2 mb-4">
                                    <div class="grow w-full">
                                        <a href="javascript:;" class="group/item " onClick="jQuery(this).toggleClass('text-danger')"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="heart"
                                                class="lucide lucide-heart size-5 text-slate-500 dark:text-zink-200 fill-slate-200 dark:fill-zink-500 transition-all duration-150 ease-linear group-[.active]/item:text-yellow-500 dark:group-[.active]/item:text-yellow-500 group-[.active]/item:fill-yellow-200 dark:group-[.active]/item:fill-yellow-500/20 group-hover/item:text-yellow-500 dark:group-hover/item:text-yellow-500 group-hover/item:fill-yellow-200 dark:group-hover/item:fill-yellow-500/20">
                                                <path
                                                    d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z">
                                                </path>
                                            </svg></a>
                                    </div>
                                    <div class="relative show-child shrink-0">
                                        <button id="sellersAction8" data-bs-toggle="dropdown"
                                            class="flex items-center justify-center size-[30px]  p-1 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" data-lucide="more-horizontal"
                                                class="lucide lucide-more-horizontal size-3">
                                                <circle cx="12" cy="12" r="1"></circle>
                                                <circle cx="19" cy="12" r="1"></circle>
                                                <circle cx="5" cy="12" r="1"></circle>
                                            </svg></button>
                                        <ul class="show-on-hover absolute z-50  hidden py-2  ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="sellersAction8">
                                            <li class="py-1">
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="eye"
                                                        class="lucide lucide-eye inline-block mr-1 size-3">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg> <span class="align-middle">Overview</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="addSellerModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="file-edit"
                                                        class="lucide lucide-file-edit inline-block mr-1 size-3">
                                                        <path d="M4 13.5V4a2 2 0 0 1 2-2h8.5L20 7.5V20a2 2 0 0 1-2 2h-5.5"></path>
                                                        <polyline points="14 2 14 8 20 8"></polyline>
                                                        <path
                                                            d="M10.42 12.61a2.1 2.1 0 1 1 2.97 2.97L7.95 21 4 22l.99-3.95 5.43-5.44Z">
                                                        </path>
                                                    </svg> <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li class="py-1">
                                                <a data-modal-target="deleteModal"
                                                    class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200"
                                                    href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="trash-2"
                                                        class="lucide lucide-trash-2 inline-block mr-1 size-3">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg> <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    class="flex items-center justify-center mx-auto rounded-full size-16 bg-slate-100 outline outline-slate-100 outline-offset-1 dark:bg-zink-600 dark:outline-zink-600">
                                    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAACXBIWXMAAE69AABOvQFzamgUAAAAGXRFWHRTb2Z0d2FyZQB3d3cuaW5rc2NhcGUub3Jnm+48GgAADJlJREFUeJztnXuQVNWdxz+/ywwwjpAwicbVBUHMGMB1fRAV0cQtrCg6A5PEIaLlFhJrtPC1VAR5VdIiIFtxETPAirJChQ0YR1HEDRqzC2UiVFAQrVKMiBofwS1FkWhkZvqe7/4xM4gsMLe7b3ffHs6n6hRF93n8pu/3/M77XPB4PB6Px+PxeDwej8fj8Xg8Ho/H4/F4PB6Px+PxeDwej8fTFbBiG+DJjnXrVPbOOxzfrRtWXs67Y8ZYmE0+XgAlxPLlOkWiBrgMOBeoaP9qF3Bfz57cMWaMfZ5Jnl4ACSaVUtC/P8PMGC1RB3yzkyRbJEZcc43tjlpGWW4meuJm6VL1NGMEUCcxSuJYKXLyM81oBK6OmsB7gASwaJH69OzJZRKjgUuAo3PIzgF9f/xj+0uUyN4DFIkHHlDfMGRkEFAr8T3n6B5T1oHEucCqKJG9AArI4sX6B6DOjNHpNGcCFmbVdz88ZhwVNa4XQB5JpRSccAJnOEct8CPgWwAZtOlZIbE9alwvgJhZulQ9P/+c882oBerTaf6u0DaUl0cXgO8ExsCSJapqaWEEUAvUAb2KaM7HEyZYVdTI3gNkyYIFOhG4GKjdu5eLgfIim9RB5NoPXgAZsWCBhgA1ErUS55FAD2rmBRAbDz2kbjt3MkyixozvhyHVxbYpAl4AuTBvniqAi8yoee89RgPfgPz33OMikxEAeAEAMG+eqiRqgoAaiZHA0aXywA/C65lEPmIFcPfd6h+GjAZqnOO7QHk+JmUKTRBkJoDEdWLyyV136az2+fbRwGnFtoe2efsgxvx2TZpkX88kQZf2AKmUyioq+C5tY/NRYUi/Ytu0H08DxwL/GGOer2WaoMsJ4Oc/V2U6zSVm1AGXSfQptk0H8LwZsyVuId6HD7At0wRdQgB33qk+wEUSta2tfJ9kduLeMWNWGLI2CFhD/A8fiVczTVOyApgzR8dIjJSod47vQWzLqXHzMfCvra3cU17OyWY8K9E3HwWZdXEPcMcdGgCMAurDkGG0d6ASWNsBWs1YGgTMmDbNPrj9do1wjkeAr+SrwDDsgh5g5kwNkainbbh2VrHtiYCAh4OAqTNm2A6AmTP1zxJLnMvrekHz4MG8mWmixAkglVIQBPvW0Mc6VxLTrx1sBG5NpWxDxwe3365bnONu8j/kfi2breGJEEB9vboNGcKw9va83rnCr6HnyKvAT2fOtKaOD+rr1W3wYBaEIdcXwoBs2n8oogAmTlRFr15c5Bz1ZowKw/y1jXnkQ4lZZWUsTKUs3fHhrbeqsqKCB52jplCGZDMCgAILIJVSVUsLNWbUAJeGIZWQ2E7c4fjMjAVlZcxJpWzP/l9MnaqvBQGPO8d5BbYpmQKYPl19gZFAbUtL28aJEnzgHTgzfiVx2+zZtvPAL2fM0EDnWCt1eoAjHySnCZgyRSdJ1JpRH4bJ3DiRBb8LAn4ye7a9dLAvp07VOek0a4BjCmwXgOvZM/NpYIhRALfdpiFm1EvUSG3DtRKu6fvzvBmT5s619YeKMHmy6pxjBV+c1Ss0f06l7G/ZJMxJAFOmqH8YcjPwQ+cStdASB29KTLvrLn4NdkgpT56sGyXukWJd1csIs+zaf8hSAA0NKu/dm5+l00wmOZsh4+IjYHZzMwsbG6350NFkkyYxyzmmFcyyQ1M4AUyYoKN79GCNc1yYbaEJpRlo7N6dOXPn2seHi5hKqWzPHhaHIeMLZFtnZNUBhCwE0L07v5K4sIu07wCSWGnG9Pnz7a3OIjc06Kjdu3mQtjMAiaBgTcDNN+sKiVHZFpZA1gUBk+fPt+ejRJ44UVXOsaZ9S3hiyGYRqIOMBOAc/2JdYUAHrwCTGxvtv6ImmDBBfdNpngQG58+srPiwsdE+yDZxZAFMnKiq1la+XeKuf6cZP3v/fR5oaoq+cHLTTRos8WS+1vFzIRf3DxkIoLmZgcS7gbGQfGbGgiBgTmPjl6duO+OGG3ROGPIEkNFmywKSdQcQMhCAc3QvQfefNuM/gNTChfZ+poknTFCtc/ya4k3wRKEwHiAIeLuU9s1LPF5WxpRFiyyrGnL99RofhiwmIUvmh8K53DxARnW6oUHbaL/kIME8Z8atixfbM9lm0NCgacAsSmANIwgYcO+9nQ9fD0VG6pZYJPGLbAvLM2+YMf3++w8/dXs4UikF773HPc5xY9zG5Ym/HX88b+eSQUYKr69X9969eY5knKrp4CNg1p49LGxqspZsM2n/235J21UuJYEZW5YssZz2SWbkAZqarGXcOF1uxjPAcbkUHBP/1tzM7BUrDj912xkNDTqqtZWHnWNkXIYVAim39h+y6OAsW2bbx43TdyQeAk7P1YBccI6mXB/+uHH6anMzTwDDYzKrkOQsgKzG9cuW2fYePTjbOa6VWCuxU2pb/y9kaD/+lTVjx+obzrFOYngx7M815DoCgBh7uePG6bh0mtMlhphRDVQDp0D+dvia8ery5TYom7RXXqkTg4Cn6fz+3cRixuDly7Mb5u7LIy5jDsX48eq1dy/VQUC1c1SbcTJwshkDpdy3TznHoJUrLaPJkKuv1iDn+C3w97mWX0RaKyupvO8+a80lk6KOc+vr9ZUgYGAQcDIwEPb9ezrRj1BNXbnS5kYtc+xYncYXR7NLmW0rV1rOC1NFneVqarJPgC3tYR9jx+paifsjZjMaiCSAK67QGRK/Jbnz+pmQc/sPyV3cecw50s5BhHDOD36gTl15fb3Oco7fOcfXI+ab9PBKHD90IgWwcqV9KLEhYm/YysoOfwJnzBgNB/5HoqrYPfcYQyweILELHWHIo2Z8J0pcM0YD9x7su8sv1wVhyG/I7Q7+xKEsj4IdSCI9QDuPSijieHhEXZ2+emAGdXXq7xyPSG03hnSh4Cor+VMcP3JiBbBqlf3ZObZEbA/LzbjkyznIgBXOcUwC2uu4w9vLl9tncfzOiW0CACQelaJdCqG2lyo92PH/UaP4kXMMy5txxSWW9h8S7AHaeTSqWwQuHTlSPToSSvwkAa46XyGWEQAkXACrV9srEn+K6BZ7mfFPAJdeqtOdY2gCXHVeQi7bwA8k0QIAcC4jL1AHYMaoBNTSfIYjpgnAOVZFrRkSdamUAuc4v9i1NJ+hpSU+D5D4PW8gu/hi3oJop4+DgGHO8TjFOadfCP73qacsts04iR4FtGGStFripiixneM6uu7DhxhHAFASAtg3KxhJAJTQnr4sOfIEUFXFM7t28QHRanaSD3HEQWxDQCiBTiBAU5OFEmvy0JuWREsCevWRg3PxdQChRDwAgNpmBeO8kEHt/YoNZjxGxE5msUmn4/UAJSOAigqe/vRT9gC9Y8hOEjf+4Q+2COCCC3SuGavU9tLlJLPn2Wf5f9fT5UJJNAEAa9das9qOaOfs9oEbOh4+wO9/bzsrK7lQ4hfFdvGdhFeyPfV0KErGA0DbrCAwJocsQuDaDRts2YFfrF1rzcAt552n54DFEP0N3AUk1hEAlJAHAOjenSck9mZZe0KJ8Qd7+PuzYYP9p8T5Em8moMYfGI5sAaxfb586x39nMX0aOsc1GzfaL6OUs3GjvRCGfNs5nir2tO8Bi0BHtgDaeSTDWpN2jqv++EdbnkkhmzbZrn79uExijiLuTMp3yIcASmAt4MsMH65ezc38hWh7/Folrtq8+Yt7/LNh6FCNMmOZivsGsr0DBnB0JncbRaHkBAAwdKgWSzR0Eq1V4ootW2xVHGWefbYGhCFNULTX1ry4ebPFfhi3FJsAJKaHIW8cpr1sCUPq43r4AJs22ZuffMJw5/j3IvUBYnf/UKIC2LzZPkynuVBi/cHGymHIRVu32uq4y339dWt+4QWbIHGVxKeFbP+d4+W4/x4o0SZgf047TafS7paDgBe3buXFuCdLDsapp2pQENAEDMl3We2MfOklezLuTEteAMVk2DBV/PWv3A1cl+eiWsvKOHbrVtsdd8ZeADEwaJDqgoAlwNfyVMRTL79sl3QeLXNKsg+QNLZts8fMOMM5nsnTBFCkCaxs8B4gVtRt0CCmSfyU+NZZ3jjuOE5Zv/6L19LFiRdAHqiu1tnACtouu8gFSdRu3x79VvNM8U1AHnjtNdvU0sJQ4KEch37z8vnwwXuAvHPSSbrSjAWQ0TSygDt37GBGvoe0XgAFoLpaJ6TTzAd+SOe/+WYzJu3YYesKYJoXQCE58USdacZ1tL1Jdf+XT3xsxm8kHn7rLVYXYiKrAy+AItGvn/oAfZxj97vv2kfFtsfj8Xg8Ho/H4/F4PB6Px+PxeDwej8fj8Xg8Ho/H4/F4PB6Px1PC/B8ry8l4H0WeiQAAAABJRU5ErkJggg=="
                                        alt="" class="mx-auto h-100px w-100px rounded-circle">
                                </div>

                                <div class="mt-4 mb-6 text-center">
                                    <h6 class="text-16"><a href="javascript:;">Force Medicines</a></h6>
                                    <p class="text-slate-500 dark:text-zink-200">Ashley Uilson</p>
                                </div>
                                <div class="flex w-full">
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">4.1k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Sales</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">243</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Product</p>
                                    </div>
                                    <!--end col-->
                                    <div class="text-center w-full">
                                        <h6 class="mb-1">$861.7k</h6>
                                        <p class="text-slate-500 dark:text-zink-200">Revenue</p>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </div>
                        </div>
                        <!--end card-->
                    </div>
                    <!--end col-->
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection