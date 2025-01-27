                                
                                @foreach ($conversations as $conversation)
                                <div class="w-full">
                                    <a href="{{route('WhatsConversation.show', ['wa_id'=> $conversation->wa_id, 'display_phone_number' => $conversation->display_phone_number])}}?_token={{csrf_token()}}"
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
                                            <p class="text-xs truncate text-muted dark:text-zink-200">{{$conversation->last_message($conversation->wa_id, $conversation->display_phone_number)->message_text ?? ''}}</p>
                                        </div>
                                        <div class="self-start shrink-0 flex-none  text-muted dark:text-zink-200">
                                            <small>{{$conversation->last_message($conversation->wa_id, $conversation->display_phone_number) ? $conversation->last_message($conversation->wa_id, $conversation->display_phone_number)->time_elapsed_string() : '' }}</small>
                                        </div>
                                    </a>
                                </div>
                                @endforeach

                                