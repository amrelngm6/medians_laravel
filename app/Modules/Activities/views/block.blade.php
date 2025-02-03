                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            @if (class_basename($activity->subject) == 'Task')
                            <i class="bx bx-task fs-2 text-gray-500"></i>
                            @elseif (class_basename($activity->subject) == 'Project')
                            <i class="bx bx-carousel fs-2 text-gray-500"></i>
                            @else
                            <i class="bx bx-bug-alt fs-2 text-gray-500"></i>
                            @endif
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2"
                                    rel="popover" data-trigger="hover" data-toggle="popover" data-placement="bottom"
                                    data-html="true"
                                    data-title="{{class_basename($activity->subject)}}"
                                    data-content="{{$activity->description}} ( <b>{{$activity->subject->name ?? ''}}</b> )"
                                    >{{ $activity->description }} </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at {{ date('M d, Y H:i a', strtotime($activity->created_at)) }} by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" 
                                        rel="popover" data-trigger="hover" data-toggle="popover" data-placement="bottom"
                                        data-content="{{$activity->causer->name ?? ''}}">
                                        <img src="/{{ $activity->causer->picture ?? '' }}" alt="img">
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>