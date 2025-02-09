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
                                    <a href="{{route('EmailAccount')}}">Email Accounts</a>
                                </li>
                                <li>
                                    <a href="{{route('EmailAccount.show', $account->id)}}">{{$account->email}}</a>
                                </li>
                                <li class="active">
                                    <strong>Message detail</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="mt-2 ">
                    <div class="col-sm-12 col-md-3">
                        <!-- BEGIN: Chat Menu -->
                         
                        <div class="card  ">
                            <div class="card-body  ">
                                <a href="{{route('EmailMessage.compose', $account->id)}}" data-modal="#new-mail-modal" class="open-modal w-full btn btn-primary transition duration-200  shadow-md cursor-pointer "><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit" class="lucide lucide-edit stroke-1.5 mr-2 h-4 w-4"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path></svg>
                                    Compose</a>
                                <div class="mt-6 border-t border-white/10 pt-6 dark:border-darkmode-400 ">
                                    
                                    @foreach ($folders as $folderValue)
                                    <a class="{{$folderValue->id == $folder->id ? 'text-danger' : 'text-dark-blue'}}  mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 "
                                        href="{{route('EmailAccount.show', $account->id)}}?folder={{$folderValue->id}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round" data-lucide="star"
                                            class="lucide lucide-star stroke-1.5 mr-2 h-4 w-4">
                                            <polygon
                                                points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                            </polygon>
                                        </svg>
                                        {{$folderValue->name}} ({{$folderValue->messages_count}})
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
                                <div class=" d-sm-flex d-block justify-content-between">
                                    <div class="mb-3 flex">
                                        <img class="w-50px h-50px rounded-circle" alt="image" src="/data/profile/avatar-3.png">
                                        <div class=" mx-4">
                                            <h5 class="text-primary mb-0 mt-1">{{$message->sender_name}}</h5>
                                            <p class="mb-0">{{$message->time}}</p>
                                        </div>
                                    </div>
                                    <div class="clearfix mb-3">
                                        <div class="btn-group mb-1">
                                            <div class="dropdown show-child relative ml-4"
                                                rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                data-title="Folders"
                                                data-content="Move to another Folder">
                                                <button type="button" class="btn btn-primary light  px-3" >
                                                    <i class="fa fa-folder"></i> <b class="caret m-l-5"></b>
                                                </button>
                                                <div class="show-on-hover position-absolute z-[9999]  hidden ">
                                                    <div
                                                        class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-auto right-0 text-slate-800 dark:text-slate-300">
                                                        <a class="dropdown-item open-modal fs-4 p-2 font-semibold textprimary" href="{{route('EmailAccount.createFolder', $account->id)}}?_token={{csrf_token()}}">Create folder</a> 
                                                        @foreach ($folders as $folderValue)
                                                        @if ($folderValue->id != $folder->id )
                                                        <a class="dropdown-item ajax-link fs-4 p-2" href="{{route('EmailMessage.move', ['id'=>$message->id, 'folder_id'=>$folderValue->id])}}?_token={{csrf_token()}}">{{$folderValue->name}}</a> 
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="btn-group mb-1" 
                                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                            data-content="Delete message forever">
                                            <button type="button" data-path="{{route('EmailMessage.delete', $message->id)}}" class="delete-item btn btn-primary light px-3"><i class="fa fa-trash"></i></button>
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

 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection