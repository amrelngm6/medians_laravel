@extends('layout.master')
@section('title', 'Inbox')
@section('css')

@endsection
@section('main-content')
            
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Inbox </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">APPs</a>
                                </li>
                                <li class="active">
                                    <strong>Inbox</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 ">

                </div>
                <div class="mt-8 ">
                    <div class="col-sm-12 col-md-3">
                        <!-- BEGIN: Inbox Menu -->
                        <div class="card  ">
                            <div class="card-body  ">
                                <button type="button" data-modal="#mail-modal"
                                    class="open-modal w-full btn btn-primary transition duration-200  shadow-md cursor-pointer "><svg
                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" data-lucide="edit"
                                        class="lucide lucide-edit stroke-1.5 mr-2 h-4 w-4">
                                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                        <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                                    </svg>
                                    Compose</button>
                                <div class="mt-6 border-t border-white/10 pt-6 dark:border-darkmode-400 ">
                                    <a class="flex gap-4 items-center rounded-md bg-white/10 px-3 fs-4 py-2 fw-bold text-dark-blue"
                                        href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="mail"
                                            class="lucide lucide-mail stroke-1.5 mr-2 h-4 w-4">
                                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                        </svg>
                                        Inbox
                                    </a>
                                    <a class="mt-2  flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue"
                                        href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="star"
                                            class="lucide lucide-star stroke-1.5 mr-2 h-4 w-4">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        Marked
                                    </a>
                                    <a class="mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue"
                                        href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="inbox"
                                            class="lucide lucide-inbox stroke-1.5 mr-2 h-4 w-4">
                                            <polyline points="22 12 16 12 14 15 10 15 8 12 2 12"></polyline>
                                            <path
                                                d="M5.45 5.11 2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z">
                                            </path>
                                        </svg>
                                        Draft
                                    </a>
                                    <a class="mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue"
                                        href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="send"
                                            class="lucide lucide-send stroke-1.5 mr-2 h-4 w-4">
                                            <path d="m22 2-7 20-4-9-9-4Z"></path>
                                            <path d="M22 2 11 13"></path>
                                        </svg>
                                        Sent
                                    </a>
                                    <a class="mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue"
                                        href="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="trash"
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="plus"
                                            class="lucide lucide-plus stroke-1.5 mr-2 h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                        Add New Label
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END: Inbox Menu -->
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <!-- BEGIN: Inbox Content -->
                        <div class="intro-y card ">
                            <div class="flex  border-b border-slate-200/60 p-5 text-slate-500 ">
                                <div
                                    class="w-full flex items-center border-t border-slate-200/60 sm:mx-0  sm:border-0 ">
                                    <label class="form-check form-check-custom form-check-solid"> <input  class="form-check-input " type="checkbox" /> </label>
                                    <div data-tw-placement="bottom-start" class="dropdown show-child relative ml-4">
                                        <button data-tw-toggle="dropdown" aria-expanded="false"
                                            class="cursor-pointer block py-2 px-1 border-0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                data-lucide="chevron-down" class="lucide lucide-chevron-down ">
                                                <path d="m6 9 6 6 6-6"></path>
                                            </svg>
                                        </button>
                                        <div class="show-on-hover position-absolute z-[9999]  hidden  translate-y-1"
                                            data-state="leave">
                                            <div
                                                class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-32 text-slate-800 dark:text-slate-300">
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">All</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">None</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Read</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Unread</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Starred</a>
                                                <a
                                                    class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">Unstarred</a>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="refresh-cw"
                                            class="lucide lucide-refresh-cw stroke-1.5 h-4 w-4">
                                            <path d="M3 12a9 9 0 0 1 9-9 9.75 9.75 0 0 1 6.74 2.74L21 8"></path>
                                            <path d="M21 3v5h-5"></path>
                                            <path d="M21 12a9 9 0 0 1-9 9 9.75 9.75 0 0 1-6.74-2.74L3 16"></path>
                                            <path d="M8 16H3v5"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal"
                                            class="lucide lucide-more-horizontal stroke-1.5 h-4 w-4">
                                            <circle cx="12" cy="12" r="1"></circle>
                                            <circle cx="19" cy="12" r="1"></circle>
                                            <circle cx="5" cy="12" r="1"></circle>
                                        </svg>
                                    </a>
                                </div>
                                <div class="flex items-center  flex-end  flex-none">
                                    <div class="">1 - 50 of 5,238</div>
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-left"
                                            class="lucide lucide-chevron-left stroke-1.5 h-4 w-4">
                                            <path d="m15 18-6-6 6-6"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="chevron-right"
                                            class="lucide lucide-chevron-right stroke-1.5 h-4 w-4">
                                            <path d="m9 18 6-6-6-6"></path>
                                        </svg>
                                    </a>
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="settings"
                                            class="lucide lucide-settings stroke-1.5 h-4 w-4">
                                            <path
                                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                            </path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="overflow-x-auto sm:overflow-x-visible">
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block  ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-1.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Robert De Niro
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    Lorem Ipsum is simply dummy te
                                                </span>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input checked
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-2.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Angelina Jolie
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-5.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Denzel Washington
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    Lorem Ipsum is simply dummy te
                                                </span>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-5.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Al Pacino
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    It is a long established fact
                                                </span>
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input checked
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-1.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Johnny Depp
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-5.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Johnny Depp
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    Contrary to popular belief, Lo
                                                </span>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 20
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-2.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Sylvester Stallone
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-4.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Angelina Jolie
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-3.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Brad Pitt
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-2.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Robert De Niro
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    Lorem Ipsum is simply dummy te
                                                </span>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-4.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Kevin Spacey
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-3.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Angelina Jolie
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-2.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Kate Winslet
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-5.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Johnny Depp
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    Contrary to popular belief, Lo
                                                </span>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 20
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-2.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    John Travolta
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    It is a long established fact
                                                </span>
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                05:09 AM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-3.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Russell Crowe
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    Contrary to popular belief, Lo
                                                </span>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 20
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-5.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Robert De Niro
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    There are many variations of passages of Lorem Ips
                                                </span>
                                                There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomi
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                03:20 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-2.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Leonardo DiCaprio
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    It is a long established fact
                                                </span>
                                                It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b border-slate-200/60 dark:border-darkmode-400 hover:scale-[1.02] hover:relative hover:z-20 hover:shadow-md hover:border-0 hover:rounded bg-slate-100 text-slate-600 dark:text-slate-500 dark:bg-darkmode-400/70">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-3.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate">
                                                    Kevin Spacey
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate">
                                                    Lorem Ipsum is simply dummy te
                                                </span>
                                                Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text ever
                                                since the 1500
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="intro-y">
                                    <div
                                        class="transition duration-200 ease-in-out transform cursor-pointer inline-block sm:block border-b ">
                                        <div class="flex px-5 py-3">
                                            <div class="mr-5 flex w-72 flex-none items-center">
                                                <label class="form-check form-check-custom form-check-solid"> <input
                                                        class="form-check-input " type="checkbox" /> </label>
                                                <a class="ml-4 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="star"
                                                        class="lucide lucide-star stroke-1.5 h-4 w-4">
                                                        <polygon
                                                            points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                        </polygon>
                                                    </svg>
                                                </a>
                                                <a class="ml-2 flex py-2 px-1 flex-none items-center justify-center text-slate-400"
                                                    href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="bookmark"
                                                        class="lucide lucide-bookmark stroke-1.5 h-4 w-4">
                                                        <path d="m19 21-7-4-7 4V5a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v16z">
                                                        </path>
                                                    </svg>
                                                </a>
                                                <div class="image-fit relative mx-2 flex-none">
                                                    <img class="rounded-circle h-30px h-30px "
                                                        src="/data/profile/avatar-1.png" alt="Image">
                                                </div>
                                                <div class="ml-3 text-truncate font-medium">
                                                    Christian Bale
                                                </div>
                                            </div>
                                            <a href="{{route(App::getLocale() . '.apps_mail-details')}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    Contrary to popular belief, Lo
                                                </span>
                                                Contrary to popular belief, Lorem Ipsum is not simply random text. It
                                                has roots in a piece of classical Latin literature from 45 BC, making it
                                                over 20
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-center p-5 ">
                                <div class="w-full">4.41 GB (25%) of 17 GB used Manage</div>
                                <div class="flex-none sm:ml-auto sm:mt-0">
                                    Last account activity: 36 minutes ago
                                </div>
                            </div>
                        </div>
                        <!-- END: Inbox Content -->
                    </div>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.mail-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection