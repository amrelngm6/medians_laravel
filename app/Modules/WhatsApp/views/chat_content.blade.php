
                        <!--begin::Messenger-->
                        <div class="card" id="chat_messenger">
                            <!--begin::Card header-->
                            <div class="card-header" id="chat_messenger_header">
                                <!--begin::Title-->
                                <div class="card-title">
                                    <!--begin::User-->
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <a href="#"
                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">{{$conversation->contact->name ?? ''}}</a>

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
                                        <button class="btn btn-sm btn-icon btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="bx bx-dots-vertical-rounded fs-2"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

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
                                    @foreach ($conversation->messages as $message)
                                    @include('whatsapp::messageComponent')
                                    @endforeach
                                </div>
                                <!--end::Messages-->
                            </div>
                            <!--end::Card body-->

                            <!--begin::Card footer-->
                            <form class="flex gap-2 pt-4 ajax-form" action="{{route('WhatsMessage.store')}}" id="chat_messenger_footer">
                                @csrf
                                <input name="wa_id" value="{{}}" />
                                    <!--begin::Actions-->
                                    <div class="d-flex align-items-center ">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary px-1" type="button"
                                            >
                                            <i class="bx bx-cloud-upload fs-3"></i> </button>
                                        <button class="btn btn-sm btn-icon btn-active-light-primary px-1" type="button">
                                            <i class="bx bx-microphone fs-3"><span class="path1"></span><span
                                                    class="path2"></span></i> </button>
                                    </div>
                                    <!--end::Actions-->
                                <!--begin::Input-->
                                <textarea class="form-control form-control-solid mb-3" rows="1" data-kt-element="input"
                                    placeholder="Type a message"></textarea>
                                <!--end::Input-->

                                <!--begin:Toolbar-->
                                <div class="d-flex flex-stack">

                                    <!--begin::Send-->
                                    <button class="btn btn-primary" type="submit" data-kt-element="send">Send</button>
                                    <!--end::Send-->
                                </div>
                                <!--end::Toolbar-->
                            </form>
                            <!--end::Card footer-->
                        </div>
                        <!--end::Messenger-->