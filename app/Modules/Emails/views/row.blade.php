<div class="flex  border-b  border-t border-slate-200/60 p-5 text-slate-500 ">
    <div class="w-full flex items-center sm:mx-0 ">
        <label class="form-check form-check-custom form-check-solid"> <input class="form-check-input "
                type="checkbox" /> </label>
        <div data-tw-placement="bottom-start" class="dropdown show-child relative ml-4 hidden">
            <button data-tw-toggle="dropdown" aria-expanded="false" class="cursor-pointer block py-2 px-1 border-0">
                <i class='bx bx-chevron-down fs-3'></i>
            </button>
            <div class="show-on-hover position-absolute z-[9999]  hidden " data-state="leave">
                <div
                    class="dropdown-content rounded-md border-transparent bg-white p-2 shadow-[0px_3px_10px_#00000017] dark:border-transparent dark:bg-darkmode-600 w-32 text-slate-800 dark:text-slate-300">
                    <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">All</a>
                    <a
                        class="cursor-pointer flex items-center p-2 transition duration-300 ease-in-out rounded-md hover:bg-slate-200/60 dark:bg-darkmode-600 dark:hover:bg-darkmode-400 dropdown-item">None</a>
                </div>
            </div>
        </div>

        <div class="btn-group mb-1" rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
            data-content="Create new folder">
            <a class="dropdown-item open-modal fs-3 ps-4 font-semibold textprimary"
                href="{{route('EmailAccount.createFolder', $account->id)}}?_token={{csrf_token()}}"><i
                    class="bx bx-folder p-2 text-danger"></i></a>
        </div>

        <a class="ml-5 flex py-1 px-1 items-center justify-center open-modal"
            href="{{route('EmailAccount.edit', $account->id)}}" rel="popover" data-toggle="popover" data-placement="top"
            data-trigger="hover" data-content="IMAP server info">
            <i class='bx bxs-user-detail fs-2'></i>
        </a>

        <a class="ml-5 flex py-2 px-1 items-center justify-center open-modal"
            href="{{route('EmailAccount.settings', $account->id)}}" rel="popover" data-toggle="popover"
            data-placement="top" data-trigger="hover" data-content="Email account Settings">
            <i class='bx bx-cog fs-2'></i>
        </a>

        <a class="ml-5 flex py-1 px-1 items-center justify-center ajax-load" data-element="#messages-list"
            href="{{route('EmailAccount.fetch', $account->id)}}?folder={{$folder->id ?? 0}}" rel="popover"
            data-toggle="popover" data-placement="top" data-trigger="hover" data-title="Load emails"
            data-content="Fetch emails from Remote Server">
            <i class='bx bx-refresh fs-1'></i>
        </a>
    </div>
    <div class="flex items-center  flex-end  flex-none pb-2 fs-5">
        <div class="">{{$messagesPaginate['from']}} - {{$messagesPaginate['to']}} of {{$messagesPaginate['total']}}
        </div>
        <a class="{{$messagesPaginate['prev_page_url'] ? '' : 'disabled text-muted'}}  ml-5 flex px-1 items-center justify-center ajax-load"
            data-element="#messages-list" href="{{$messagesPaginate['prev_page_url']}}&folder={{$folder->id ?? ''}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                data-lucide="chevron-left" class="lucide lucide-chevron-left stroke-1.5 h-6 w-6">
                <path d="m15 18-6-6 6-6"></path>
            </svg>
        </a>
        <a class="{{$messagesPaginate['next_page_url'] ? '' : 'disabled text-muted'}} ml-5 flex px-1 items-center justify-center ajax-load"
            data-element="#messages-list" href="{{$messagesPaginate['next_page_url']}}&folder={{$folder->id ?? ''}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                data-lucide="chevron-right" class="lucide lucide-chevron-right stroke-1.5 h-6 w-6">
                <path d="m9 18 6-6-6-6"></path>
            </svg>
        </a>
    </div>
</div>
<div class="overflow-x-auto sm:overflow-x-visible" id="messages-list">

    @foreach($messages as $message)

    <div class="intro-y">
        <div
            class="  transition duration-200 ease-in-out transform cursor-pointer inline-block  ">
            <div class="flex px-5 py-3">
                <div class="mr-5 flex w-72 flex-none items-center">
                    <label class="form-check form-check-custom form-check-solid"> <input class="form-check-input "
                            type="checkbox" /> </label>
                    <a data-switch="add-star{{$message->id}}" id="remove-star{{$message->id}}" href="{{route('EmailMessage.update', $message->id)}}?_token={{csrf_token()}}&favourite=1" class="{{$message->favourite ? 'hidden' : ''}} ajax-link switch-view ml-4  pt-1 px-1 flex-none items-center justify-center text-slate-400" href="#">
                        <i class='bx bx-star fs-3'></i>
                    </a>
                    <a data-switch="remove-star{{$message->id}}" id="add-star{{$message->id}}" href="{{route('EmailMessage.update', $message->id)}}?_token={{csrf_token()}}&favourite=0" class="{{!$message->favourite ? 'hidden' : ''}} ajax-link switch-view ml-4  pt-1 px-1 flex-none items-center justify-center text-slate-400" href="#">
                        <i class='bx bxs-star text-danger fs-3'></i>
                    </a>
                    <div class="ml-3 text-truncate font-medium" rel="popover" data-toggle="popover" data-placement="top"
                        data-trigger="hover" data-title="{{$message->sender_name}}"
                        data-content="From: {{$message->sender_email ?? ''}}">
                        {{$message->sender_name}}
                    </div>
                </div>
                <a href="{{route('EmailMessage.show', ['account_id'=>$account->id, 'msg_id'=>$message->id])}}"
                    class="w-64 text-truncate sm:w-auto">
                    <span class="ml-3 text-truncate font-medium text-{{!$message->read ? 'danger' : 'muted'}}">
                        {{$message->subject}}
                    </span>
                    <span class="text-muted">
                        {{substr($message->message_text, 0, 100)}}
                    </span>
                </a>
                <div class="pl-10 ml-auto whitespace-nowrap flex flex-none">
                    {{date('D, d M, H:i a', strtotime($message->time))}}
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
<div class="flex flex-col items-center p-5 ">
    @php $size = $account->messages->first() ? $account->messages->first()->groupEmailAccountSize() : 0; @endphp
    <div class="w-full">{{$size}} {{ $size > 1000000 ? 'GB' : 'MB'}} ({{number_format(($size / (5000)) * 100, 3)}}%) of
        {{'5'}} GB used Manage</div>
    <div class="flex-none sm:ml-auto sm:mt-0">
        Total count {{$account->messages->count()}}
    </div>
</div>
<script>
MediansSettings.tooltipsPopovers();
</script>