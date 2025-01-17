@extends('milestones::page')

@section('nav-title', 'Create Milestone')

@section('milestones-page')

<div class="col-lg-12">
    <form action="{{route('Milestone.update', $milestone->id)}}" class="ajax-form  w-full" id="milestones-form">
        @csrf

        <div class="w-full flex gap gap-10">

            <div class="card mb-5 mb-xl-10 w-full" id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Milestone options</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body">
                    <div class="w-full flex gap-10">

                        <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                            <input type="text" placeholder="Milestone title" class=" form-control form-control-solid  "
                                id="name" name="name" class="form-control form-control-solid " value="{{$milestone->name}}">
                        </div>

                        <div class="form-group w-full"><label for="range" class="control-label" rel="popover"
                                data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Set the start & End date of the milestone"
                                data-title="Date Range" data-trigger="hover" data-html="true">Date Range <i
                                    class="bx bx-help-circle"></i></label>
                            <input type="text" class="datepicker form-control form-control-solid  " id="range"
                                name="date" class="form-control form-control-solid " value="{{date('m-d-Y', strtotime($milestone->start_date))}} - {{date('m-d-Y', strtotime($milestone->end_date))}}">
                        </div>
                    </div>
                    <div class="w-full flex gap-10">

                        <div class="w-full" id="project-access">
                            <label class="form-label required fw-semibold fs-6" rel="popover"
                                data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Client can see this milestone" data-title="Privacy"
                                data-trigger="hover" data-html="true">Client access <i
                                    class="bx bx-help-circle"></i></label>
                            <div class="form-group w-full flex">
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="client_access" class="form-check-input h-20px w-20px" value="1"
                                        type="radio" @if($milestone->client_access) checked @endif />
                                    <span class="form-check-label fw-semibold"> Yes </span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="client_access" class="form-check-input h-20px w-20px" value="0"
                                        type="radio" @if(!$milestone->client_access) checked @endif />
                                    <span class="form-check-label fw-semibold"> No </span>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex flex-column my-10">
                        <label class="fs-6 fw-semibold mb-2">Details</label>

                        <textarea class="form-control form-control-solid" rows="3" name="description"
                            placeholder="Type Details">{{$milestone->description}}</textarea>
                    </div>


                    <div class="text-end">
                        <a href="{{route('Milestones')}}" id="modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel</a>

                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection