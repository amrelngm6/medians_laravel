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
                            <h1 class="title">{{$folder->name}} </h1>
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
                                <li class="active">
                                    <strong>{{$account->email}}</strong>
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
                            <div class="card-body px-0">
                                <a href="{{route('EmailMessage.compose', $account->id)}}" data-modal="#new-mail-modal" class="open-modal mx-auto w-64 btn btn-primary transition duration-200  shadow-md cursor-pointer "><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" data-lucide="edit" class="lucide lucide-edit stroke-1.5 mr-2 h-4 w-4"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path></svg>
                                    Compose</a>
                                <div class="mt-6 border-t border-white/10 pt-6 dark:border-darkmode-400 ">
                                    @foreach ($folders as $folder)
                                    <div class="w-full flex gap-2">
                                        <i class="bx bx-start"></i>
                                        <a class="{{$folder->id == request()->get('folder') ? 'text-danger' : 'text-dark-blue'}} w-full text-hover-info mt-2 flex gap-4 items-center rounded-md px-3 py-2 fs-4 "
                                            href="{{route('EmailAccount.show', $account->id)}}?folder={{$folder->id}}">
                                            {{$folder->name}} ({{$folder->messages_count}})</a>
                                        <div class="dropdown show-child relative mt-2">
                                            <i class='bx bx-dots-vertical-rounded fs-3 pt-3 px-2' ></i>
                                            <div class="show-on-hover position-absolute z-[9999]  hidden ">
                                                <div
                                                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-auto right-0 text-slate-800 dark:text-slate-300">
                                                    <a class="dropdown-item delete-item fs-4 p-2" href="#!" data-path="{{route('EmailAccount.deleteFolder', ['folder'=>$folder->account_id, 'id'=>$folder->id])}}"><i class='bx bx-trash' ></i> Delete folder</a> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                                <div class="mt-4 border-t border-white/10 pt-4 text-white dark:border-darkmode-400">
                                @foreach($priorities as $priority)
                                    <a class="flex items-center text-truncate px-3 py-2" href="?priority_id={{$priority->priority_id}}">
                                        <div class="mr-5 w-15px h-15px rounded-circle bg-{{$priority->color}}"></div>
                                        {{$priority->name}}
                                    </a>
                                    @endforeach
                                    
                                    <a class="mt-2 flex items-center  rounded-md px-3 py-2 ajax-link" href="{{route('EmailAccount.fetchFolders', $account->id)}}?_token={{csrf_token()}}">
                                        Refresh Folders
                                    </a>
                                    
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
                        <!-- END: Inbox Menu -->
                    </div>
                    <div class="col-sm-12 col-md-9">
                        <!-- BEGIN: Inbox Content -->
                        <div class="intro-y card " id="messages-list">
                        </div>
                        <!-- END: Inbox Content -->
                    </div>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script>
jQuery(document).ready(function(){
    loadAjax('{{route('EmailAccount.filter', $account->id)}}?folder={{request()->get('folder') ?? ($account->folder->id ?? 0)}}', '#messages-list')
})
</script> 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection