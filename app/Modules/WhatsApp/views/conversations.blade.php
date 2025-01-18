@extends('layout.master')
@section('title', 'WhatsApp Conversations')
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
                                    <a href="/index.html"><i class="fa fa-home"></i>Home</a>
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
                        <div class=" " >
                            <form class="w-100 position-relative" autocomplete="off">	
                                <!--begin::Icon-->
                                <i class="bx bx-search fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>            <!--end::Icon-->
                    
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid px-13" name="search" value="" placeholder="Search by username or email...">
                                <!--end::Input-->
                            </form>
                            <div class="card-body gap-1 h-500px mb-10 overflow-auto " >
                                <div class=" px-2">
                                    <p class="mb-1 text-muted dark:text-zink-200">New Chats</p>
                                </div>
                                @foreach ($new_conversations as $conversation)
                                <div class="">
                                    <a href="{{route('WhatsConversation.show', $conversation->conversation_id)}}?_token={{csrf_token()}}"
                                        data-element="#chat_content"
                                        class="ajax-load flex items-center gap-3 px-2 py-2 [&amp;.active]:bg-slate-50 dark:[&amp;.active]:bg-zink-600 group/item active online">
                                        <div
                                            class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                            <img src="/data/profile/profile-crm.jpg" alt=""
                                                class="rounded-circle h-30px w-30px">
                                            <span
                                                class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                        </div>
                                        <div class="overflow-hidden grow w-full">
                                            <h6 class="mb-1">{{$conversation->contact->name ?? ''}}</h6>
                                            <p class="text-xs truncate text-muted dark:text-zink-200">{{$conversation->contact->last_message ? $conversation->contact->last_message->message_text : ''}}</p>
                                        </div>
                                        <div class="self-start shrink-0 flex-none  text-muted dark:text-zink-200">
                                            <small>{{$conversation->contact ? $conversation->contact->last_message->time_elapsed_string() : ''}}</small>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                                
                                <div class="px-2">
                                    <p class="mb-1 text-muted dark:text-zink-200">All Conversations</p>
                                </div>
                                
                                @foreach ($my_conversations as $conversation)
                                <div class="">
                                    <a href="{{route('WhatsConversation.show', $conversation->conversation_id)}}?_token={{csrf_token()}}"
                                        data-element="#chat_content"
                                        class="ajax-load flex items-center gap-3 px-2 py-2 [&amp;.active]:bg-slate-50 dark:[&amp;.active]:bg-zink-600 group/item active online">
                                        <div
                                            class="relative flex items-center justify-center font-semibold rounded-full text-muted dark:text-zink-200 size-9 bg-slate-100 dark:bg-zink-600">
                                            <img src="/data/profile/profile-crm.jpg" alt=""
                                                class="rounded-circle h-30px w-30px">
                                            <span
                                                class="absolute bottom-0 ltr:right-0 rtl:left-0 w-2.5 h-2.5 border-2 border-white dark:border-zink-700 rounded-full group-[.online]/item:bg-green-400 group-[.offline]/item:bg-slate-400 dark:group-[.offline]/item:bg-zink-500 bg-red-500"></span>
                                        </div>
                                        <div class="overflow-hidden grow w-full">
                                            <h6 class="mb-1">{{$conversation->contact->name ?? ''}}</h6>
                                            <p class="text-xs truncate text-muted dark:text-zink-200">{{$conversation->contact->last_message->message_text ?? ''}}</p>
                                        </div>
                                        <div class="self-start shrink-0 flex-none  text-muted dark:text-zink-200">
                                            <small>{{$conversation->contact->last_message->time_elapsed_string() ?? ''}}</small>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8 ">
                    <div class="w-full" id="chat_content">
                    </div>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection



@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection