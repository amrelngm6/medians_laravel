@extends('projects::project')

@section('project-content')

<div class="w-full">

    <div class="col-xxl-6 col-lg-5 col-md-12">

        <!--begin::Card-->
        <div class="card">

            <div class="flex border-0 p-7 pb-0">
                <div class="w-full">
                    <h2 class="title ">Team Activities</h2>
                    <p class="mb-0">Team activities at the projects tasks</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>

            <div class="card-body">

                <!--begin::Timeline-->
                <div class="timeline timeline-border-dashed h-350px overflow-auto">
                    @foreach($project->activities() as $activity)
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="bx bx-bug-alt fs-2 text-gray-500"></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">{{ $activity->title }}</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at {{ date('M d, Y', strtotime($project->start_date)) }} by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px">
                                        <img src="{{ $activity->user->avatar }}" alt="img">
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    <!--end::Timeline item-->
                    @endforeach
                </div>
                <!--end::Timeline-->

            </div>
        </div>
        <!--end::Card-->

    </div>

    @foreach ($components as $component)
        {!! $component !!}
    @endforeach


    <div class="clearfix"></div>



    <div class="col-lg-12">

        <div class="card ">

            <div class="flex border-0 p-7">
                <div class="w-full">
                    <h2 class="title ">Tasks Timeline</h2>
                    <p class="mb-0">Companies with subscriptions ending soon</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>

            <div class="card-body">
                <div id="visualization"></div>
            </div>
        </div>

    </div>

    <div class="clearfix"></div>



    <div class="col-lg-4 col-md-6 col-sm-12">

        <div class="card ">

            <div class="flex border-0 p-7">
                <div class="w-full">
                    <h2 class="title ">Team Comments</h2>
                    <p class="mb-0">Comments from team of the project</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>
            <div class="card-body py-2  p-7">
                @foreach($project->comments as $comment)
                <div class="mb-7">

                    <!--begin::Header-->
                    <div class="d-flex align-items-center mb-3">
                        <!--begin::User-->
                        <div class="d-flex align-items-center flex-grow-1">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-45px me-5">
                                <img src="{{ $comment->user->avatar }}" alt="">
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Info-->
                            <div class="d-flex flex-column">
                                <a href="javascript:;" class="text-gray-900 text-hover-primary fs-6 fw-bold">{{ $comment->user->name }}</a>
                                <span class="text-gray-500 fw-bold">{{ date('h:i a', strtotime($comment->created_at)) }}</span>
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::User-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Post-->
                    <div class="mb-7">
                        <!--begin::Text-->
                        <div class="text-gray-800 mb-5">
                            {{ $comment->content }}
                        </div>
                        <!--end::Text-->
                    </div>
                    <!--end::Post-->
                </div>
                @endforeach
            </div>
        </div>

    </div>



    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="card card-flush ">
            <!--begin::Card header-->

            <div class="flex border-0 p-7 pb-0">
                <div class="w-full">
                    <h2 class="title ">Latest Files</h2>
                    <p class="mb-0">Total files <b>{{ $project->files->count() }}</b> and <b>{{ $project->files->sum('size') }}GB</b> space usage</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>

            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body p-9  px-5">
                <!--begin::Files-->
                <div class="d-flex flex-column ">
                    @foreach($project->files as $file)
                    <!--begin::File-->
                    <div class="d-flex align-items-center mb-5">
                        <!--begin::Icon-->
                        <div class="symbol symbol-30px me-5">
                            <i class="bx bxs-file-{{ $file->type }} text-info fs-1"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Details-->
                        <div class="fw-semibold">
                            <a class="fs-6 fw-bold text-gray-900 text-hover-primary" href="javascript:;">{{ $file->name }}</a>

                            <div class="text-gray-500">
                                {{ $file->created_at->diffForHumans() }} <a href="javascript:;">{{ $file->user->name }}</a>
                            </div>
                        </div>
                        <!--end::Details-->
                    </div>
                    <!--end::File-->
                    @endforeach
                </div>
                <!--end::Files-->
            </div>
            <!--end::Card body -->
        </div>
    </div>



    <div class="col-lg-4 col-md-6 col-sm-12">

        <div class="card " dir="ltr">
            <!--begin::Body-->
            <div class="card-body d-flex flex-column flex-center px-0">
                <!--begin::Heading-->
                <div class="">
                    <!--begin::Title-->
                    <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                        To Finish Faster <br>
                        <span class="block fw-bolder"> Add Team Member</span>
                        from Current Users
                    </h1>
                    <!--end::Title-->

                    <!--begin::Illustration-->
                    <div class="py-10 text-center">
                        <img src="/assets/images/3.svg" class="theme-light-show w-200px" alt="">
                    </div>
                    <!--end::Illustration-->
                </div>
                <!--end::Heading-->

                <!--begin::Links-->
                <div class="text-center ">
                    <!--begin::Link-->
                    <a class="btn btn-sm btn-primary me-2 open-modal" data-modal="#form-modal">
                        Add Team Member </a>
                    <!--end::Link-->
                </div>
                <!--end::Links-->
            </div>
            <!--end::Body-->
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="card  ">

        <!--begin::Card header-->
        <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
            data-bs-target="#kt_account_deactivate" aria-expanded="true" aria-controls="account_deactivate">
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Remove Project</h3>
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Content-->
        <div class="collapse show">
            <!--begin::Form-->
            <form id="account_deactivate_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                novalidate="novalidate">

                <!--begin::Card body-->
                <div class="card-body border-top p-9">

                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-9 p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                                class="path2"></span><span class="path3"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                            <div class=" fw-semibold">
                                <h4 class="text-gray-900 fw-bold">You Are Removing this project</h4>

                                <div class="fs-6 text-gray-700 ">For extra security, this requires you to
                                    confirm your email or phone number , because all related files and tasks will be
                                    removed too</div>
                            </div>
                            <!--end::Content-->

                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->

                    <!--begin::Form input row-->
                    <div class="flex w-full">

                        <div class="w-full form-check form-check-solid fv-row fv-plugins-icon-container">
                            <input name="deactivate" class="form-check-input" type="checkbox" value="" id="deactivate">
                            <label class="form-check-label fw-semibold ps-2 fs-6" for="deactivate">I confirm my
                                remove project</label>
                            <div
                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                            </div>
                        </div>

                        <button type="submit" class="flex-none btn btn-danger fw-semibold">Remove Project</button>
                    </div>
                    <!--end::Form input row-->
                </div>

                <!--end::Card body-->

                <input type="hidden">
            </form>
            <!--end::Form-->
        </div>
        <!--end::Content-->
    </div>

</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
<script src="{{asset('assets/js/chart-chartjs.js')}}"></script>

<script src="{{asset('assets/plugins/vis-timeline/vis-timeline-graph2d.min.js')}}"></script>
<script src="{{asset('assets/js/timeline.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection