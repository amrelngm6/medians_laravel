
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
                                    <div class="">1 - 50 of {{$account->messages->count()}}</div>
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
                                    
                                    <a class="ml-5 flex py-2 px-1 items-center justify-center ajax-load" data-element="#messages-list" href="{{route('EmailAccount.fetch', $account->id)}}?folder={{request()->get('folder') }}&days=30">
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
                                
@foreach($messages as $message)

                                <div class="intro-y">
                                    <div
                                        class=" {{ $message->read ? 'active-task' : '' }} transition duration-200 ease-in-out transform cursor-pointer inline-block  ">
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
                                                <div class="ml-3 text-truncate font-medium"
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-title="{{$message->sender_name}}"
                                                    data-content="From: {{$message->sender_email ?? ''}}">
                                                    {{$message->sender_name}}
                                                </div>
                                            </div>
                                            <a href="{{route('EmailAccount.showMessage', ['id'=>$account->id, 'msg_id'=>$message->id])}}" class="w-64 text-truncate sm:w-auto">
                                                <span class="ml-3 text-truncate font-medium">
                                                    {{$message->subject}}
                                                </span>
                                                <span class="text-muted"> 
                                                    {{substr($message->message_text, 0, 100)}}
                                                </span>
                                            </a>
                                            <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                                                {{$message->delivery_date}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endforeach

</div>
<div class="flex flex-col items-center p-5 ">
    @php $size = $account->messages->first ? $account->messages->first()->groupEmailAccountSize() : 0; @endphp
    <div class="w-full">{{$size}} {{ $size > 1000000 ? 'GB' : 'MB'}} ({{number_format(($size / (5000)) * 100, 3)}}%) of {{'5'}} GB used Manage</div>
    <div class="flex-none sm:ml-auto sm:mt-0">
        Total count {{$account->messages->count()}}
    </div>
</div>
<script>
MediansSettings.tooltipsPopovers();
</script>