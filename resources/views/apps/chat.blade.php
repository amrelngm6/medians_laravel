@extends('layout.master')
@section('title', 'Chat')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Chat </h1>
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
                        <strong>Chat</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-lg-4 ">

        <div class="card" style="padding: 0px;">
            <div class=" ">
                <form class="w-100 position-relative" autocomplete="off">
                    <!--begin::Icon-->
                    <i class="bx bx-search fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span
                            class="path1"></span><span class="path2"></span></i>
                    <!--end::Icon-->

                    <!--begin::Input-->
                    <input type="text" class="form-control form-control-solid px-13" name="search" value=""
                        placeholder="Search by username or email...">
                    <!--end::Input-->
                </form>
                <div class="card-body gap-1 h-500px mb-10 overflow-auto ">
                    <div class=" px-2">
                        <p class="mb-1 text-muted dark:text-zink-200">Recent Chats</p>
                    </div>
                    <div class="">
                        <a href="#!"
                            class="flex items-center gap-3 px-2 py-2 [&amp;.active]:bg-slate-50 dark:[&amp;.active]:bg-zink-600 group/item active online">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/profile-crm.jpg" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Adam Smith</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">I will purchase it
                                    for support</p>
                            </div>
                            <div class="self-start shrink-0 flex-none  text-muted dark:text-zink-200">
                                <small>2 min ago</small>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-2.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Kara Miller</h6>
                                <p class="text-xs truncate text-slate-500 dark:text-zink-200">Hey, how's it
                                    going?</p>
                            </div>
                            <div class="self-start shrink-0 flex-none  text-slate-500 dark:text-zink-200">
                                <small>02:57 PM</small>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2 online">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-5.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Brian Cox</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">Hey, how's it
                                    going?</p>
                            </div>
                            <div class="self-start shrink-0 flex-none  text-muted dark:text-zink-200">
                                <small>Yesterday</small>
                            </div>
                        </a>
                    </div>
                    <div class="px-2">
                        <p class="mb-1 text-muted dark:text-zink-200">All Conversion</p>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2 offline">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-4.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Aurore Maggio</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">React Developer
                                </p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-5.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Daniel Miller</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">ASP.Net Developer
                                </p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2 offline">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/profile-blog.jpg" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Jaqueline Hammes</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">Angular Developer
                                </p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2 offline">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-4.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Andrea Pesina</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">Laravel Developer
                                </p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2 online">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-5.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">Bernard Pereira</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">Web Designer</p>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#!" class="flex items-center gap-3 px-2 py-2 offline">
                            <div
                                class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                <img src="/data/profile/avatar-1.png" alt="" class="rounded-circle h-30px w-30px">
                                <span
                                    class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                            </div>
                            <div class="overflow-hidden grow w-full">
                                <h6 class="mb-1">William Jones</h6>
                                <p class="text-xs truncate text-muted dark:text-zink-200">Project Manager
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-lg-8 ">
        <div class="w-full">
            <!--begin::Messenger-->
            <div class="card" id="chat_messenger">
                <!--begin::Card header-->
                <div class="card-header" id="chat_messenger_header">
                    <!--begin::Title-->
                    <div class="card-title">
                        <!--begin::User-->
                        <div class="d-flex justify-content-center flex-column me-3">
                            <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Adam
                                Smith</a>

                            <!--begin::Info-->
                            <div class="mb-0 lh-1">
                                <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                <span class="fs-7 fw-semibold text-muted">Active</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Title-->

                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <div class="me-n3 show-child">
                            <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                                <i class="bx bx-dots-vertical-rounded fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                            </button>

                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->

                <!--begin::Card body-->
                <div class="card-body" id="chat_messenger_body">
                    <!--begin::Messages-->
                    <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" style="max-height: 224px;">

                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-4.png"></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                            Cox</a>
                                        <span class="text-muted fs-7 mb-1">2 mins</span>
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                    data-kt-element="message-text">
                                    How likely are you to recommend our company to your friends and family ?
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->

                        <!--begin::Message(out)-->
                        <div class="d-flex justify-content-end mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">5 mins</span>
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-1.png"></div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                    data-kt-element="message-text">
                                    Hey there, we’re just writing to let you know that you’ve been
                                    subscribed to a repository on GitHub. </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(out)-->

                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-4.png"></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                            Cox</a>
                                        <span class="text-muted fs-7 mb-1">1 Hour</span>
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                    data-kt-element="message-text">
                                    Ok, Understood! </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->

                        <!--begin::Message(out)-->
                        <div class="d-flex justify-content-end mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">2 Hours</span>
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-1.png"></div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                    data-kt-element="message-text">
                                    You’ll receive notifications for all issues, pull requests! </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(out)-->

                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-4.png"></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                            Cox</a>
                                        <span class="text-muted fs-7 mb-1">3 Hours</span>
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                    data-kt-element="message-text">
                                    You can unwatch this repository immediately </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->

                        <!--begin::Message(out)-->
                        <div class="d-flex justify-content-end mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">4 Hours</span>
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-1.png"></div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                    data-kt-element="message-text">
                                    Most purchased Business courses during this sale! </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(out)-->

                        <!--begin::Message(in)-->
                        <div class="d-flex justify-content-start mb-10 ">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-4.png"></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                            Cox</a>
                                        <span class="text-muted fs-7 mb-1">5 Hours</span>
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                    data-kt-element="message-text">
                                    Company BBQ to celebrate the last quater achievements and goals. Food
                                    and drinks provided </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(in)-->

                        <!--begin::Message(template for out)-->
                        <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-end">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                                    <div class="me-3">
                                        <span class="text-muted fs-7 mb-1">Just now</span>
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                    </div>
                                    <!--end::Details-->

                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-1.png"></div>
                                    <!--end::Avatar-->
                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end"
                                    data-kt-element="message-text">
                                </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(template for out)-->

                        <!--begin::Message(template for in)-->
                        <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column align-items-start">
                                <!--begin::User-->
                                <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar-->
                                    <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                            src="/data/profile/avatar-4.png"></div>
                                    <!--end::Avatar-->
                                    <!--begin::Details-->
                                    <div class="ms-3">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                            Cox</a>
                                        <span class="text-muted fs-7 mb-1">Just now</span>
                                    </div>
                                    <!--end::Details-->

                                </div>
                                <!--end::User-->

                                <!--begin::Text-->
                                <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start"
                                    data-kt-element="message-text">
                                    Right before vacation season we have the next Big Deal for you. </div>
                                <!--end::Text-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Message(template for in)-->
                    </div>
                    <!--end::Messages-->
                </div>
                <!--end::Card body-->

                <!--begin::Card footer-->
                <div class="flex gap-2 pt-4" id="chat_messenger_footer">

                    <!--begin::Actions-->
                    <div class="d-flex align-items-center ">
                        <button class="btn btn-sm btn-icon btn-active-light-primary px-1" type="button">
                            <i class="bx bx-cloud-upload fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary px-1" type="button">
                            <i class="bx bx-microphone fs-3"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                    </div>
                    <!--end::Actions-->
                    <!--begin::Input-->
                    <textarea class="form-control form-control-solid mb-3" rows="1" data-kt-element="input"
                        placeholder="Type a message"></textarea>
                    <!--end::Input-->

                    <!--begin:Toolbar-->
                    <div class="d-flex flex-stack">

                        <!--begin::Send-->
                        <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                        <!--end::Send-->
                    </div>
                    <!--end::Toolbar-->
                </div>
                <!--end::Card footer-->
            </div>
            <!--end::Messenger-->
        </div>
    </div>
    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection