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
                                    
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center open-modal"  href="{{route('EmailAccount.edit', $account->id)}}">
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
                                    
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center ajax-load" data-element="#messages-list" href="{{route('EmailAccount.fetch', $account->id)}}?folder={{request()->get('folder') }}">
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
                                </div>
                            </div>
                            <div class="overflow-x-auto sm:overflow-x-visible" id="messages-list">
                                
                            </div>
                            <div class="flex flex-col items-center p-5 ">
                                <div class="w-full">{{$account->messages->groupEmailAccountSize()}} {{ $account->messages->groupEmailAccountSize() > 1000000 ? 'GB' : 'MB'}} ({{number_format(($account->messages->groupEmailAccountSize() / (5000)) * 100, 3)}}%) of {{'5'}} GB used Manage</div>
                                <div class="flex-none sm:ml-auto sm:mt-0">
                                    Total count {{$account->messages()->count()}}
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
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script>
jQuery(document).ready(function(){
    loadAjax('{{route('EmailAccount.filter', $account->id)}}?folder={{request()->get('folder') ?? ($account->folder->id ?? 0)}}', '#messages-list')
})
</script> 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection