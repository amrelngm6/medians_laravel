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
                                                01:10 PM
                                            </div>
                                        </div>
                                    </div>
                                </div>
@endforeach

<script>
MediansSettings.tooltipsPopovers();
</script>