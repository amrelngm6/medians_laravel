@extends('layout.master')
@section('title', 'Mail Details')
@section('css')

@endsection
@section('main-content')
            
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Email details </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">Email Accounts</a>
                                </li>
                                <li class="active">
                                    <strong>Message detail</strong>
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
                        <!-- BEGIN: Chat Menu -->
                         
                        <div class="card  ">
                            <div class="card-body  ">
                                <a href="{{route('EmailAccount.compose', $account->id)}}" data-modal="#new-mail-modal" class="open-modal w-full btn btn-primary transition duration-200  shadow-md cursor-pointer "><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit" class="lucide lucide-edit stroke-1.5 mr-2 h-4 w-4"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path></svg>
                                    Compose</a>
                                <div class="mt-6 border-t border-white/10 pt-6 dark:border-darkmode-400 ">
                                    
                                    @foreach ($folders as $folder)
                                    <a class="mt-2  flex gap-4 items-center rounded-md px-3 py-2 fs-4 text-dark-blue"
                                        href="{{route('EmailAccount.show', $account->id)}}?folder={{$folder->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="star"
                                            class="lucide lucide-star stroke-1.5 mr-2 h-4 w-4">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{$folder->name}} ({{$folder->messages_count}})
                                    </a>
                                    @endforeach
                                </div>
                                <div class="mt-4 border-t border-white/10 pt-4 text-white dark:border-darkmode-400">
                                    @foreach($priorities as $priority)
                                    <a class="flex items-center text-truncate px-3 py-2" href="?priority_id={{$priority->priority_id}}">
                                        <div class="mr-5 w-15px h-15px rounded-circle bg-{{$priority->color}}"></div>
                                        {{$priority->name}}
                                    </a>
                                    @endforeach
                                    
                                    <a class="mt-2 flex items-center  rounded-md px-3 py-2 " href="{{route('EmailAccount')}}">
                                        Show ALL
                                    </a>
                                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2 open-modal" href="{{route('Priority.create')}}?model=EmailAccount">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                            data-lucide="plus" class="lucide lucide-plus stroke-1.5 mr-2 h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="M12 5v14"></path>
                                        </svg>
                                        Add New Label
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- END: Chat Menu -->
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <!-- BEGIN: Chat Content -->
                        <div class="card">
                            <div class="toolbar mb-4" role="toolbar">
                                
                            </div>
                            <div class="card-body py-5">
                                <div class="media d-sm-flex d-block justify-content-between">
                                    <div class="mb-3 flex">
                                        <img class="w-50px h-50px rounded-circle" alt="image" src="/data/profile/avatar-3.png">
                                        <div class=" mx-4">
                                            <h5 class="text-primary mb-0 mt-1">{{$message->sender_name}}</h5>
                                            <p class="mb-0">{{$message->time}}</p>
                                        </div>
                                    </div>
                                    <div class="clearfix mb-3">
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-archive"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-exclamation-circle"></i></button>
                                            <button type="button" class="btn btn-primary light px-3"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light  px-3" data-bs-toggle="dropdown">
                                                <i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
                                            </button>
                                            <div class="dropdown-menu"> 
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light  px-3" data-bs-toggle="dropdown">
                                                <i class="fa fa-tag"></i>  <b class="caret m-l-5"></b>
                                            </button>
                                            <div class="dropdown-menu"> 
                                                <a class="dropdown-item" href="javascript: void(0);">Updates</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Social</a> 
                                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                                            </div>
                                        </div>
                                        <div class="btn-group mb-1">
                                            <button type="button" class="btn btn-primary light " data-bs-toggle="dropdown">More <span class="caret m-l-5"></span>
                                            </button>
                                            <div class="dropdown-menu"> <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a> <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a> <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="media mb-2 mt-3">
                                    <div class="media-body"><span class="pull-end">{{$message->delivery_date}}</span>
                                        <h4 class="my-1 text-primary">{{$message->subject}}</h4>
                                        <p class="read-content-email">
                                            To: {{$message->email}}</p>
                                    </div>
                                </div>
                                <div class="read-content-body default-height">
                                <iframe srcdoc="{{ preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $message->message_html) }}" style="width:100%; min-height:500px; border:none;"></iframe>


                                </div>
                                <div class="read-content-attachment">
                                    <button class="btn btn-danger bg-danger btn-sm"><i class="bx bx-message-rounded fa-reply me-1"></i>Reply</button>
                                    <button type="button" class="btn btn-primary btn-sm"><i class="bx bx-fast-forward me-1"></i>Forward</button>
                                </div>
                                <hr>
                            </div>
                        </div>
                        <!-- END: Chat Content -->
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