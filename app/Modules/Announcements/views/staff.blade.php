@extends('customers.staff.page')

@section('staff-page')

<div class="col-lg-12">
    <div class="card mb-5 mb-xl-10" id="profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Announcements list</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0 ">
            @foreach ($announcements as $announcement)
            <hr />
            <label
                class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                <div class="user-img img-fluid"><img
                        src="{{ $announcement->user->picture ?? '/data/profile/avatar-2.png'}}" alt="story-img"
                        class="rounded-circle w-50px h-50px"></div>
                <div class="media-support-info px-4 w-full">
                    <h6 class="d-inline-block fw-semibold">{{$announcement->name}}</h6>
                    <div class="w-full flex mb-0 ">
                        <p class="w-full fw-normal my-0">
                            <span class="text-lg">{{$announcement->description}}</span>
                            <span rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-title="Start Date" data-content="Start date of the announcement"
                                class="badge bg-success badge-sm mx-2">{{date('M d, Y', strtotime($announcement->start))}}</span>
                            <span rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-title="End date" data-content="End date of the announcement"
                                class="badge bg-danger badge-sm mx-2">{{date('M d, Y', strtotime($announcement->end))}}</span>
                        </p>

                        <a data-path="{{route('Announcement.delete', $announcement->id)}}"
                            class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                            href="#!">
                            <span class="align-middle">Delete</span></a>
                    </div>
                </div>

            </label>
            @endforeach

        </div>
        <!--end::Card body-->
    </div>
</div>
<div class="col-lg-12">
    <div class="card w-full">

        <!--begin::Card header-->
        <div class="card-header cursor-pointer ">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Add Announcement</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        <form action="{{route('Announcement.store')}}" class="w-full ajax-form fs-5 card-body " id="announcement-form">
            @csrf
            <input type="hidden" name="model_id" value="{{$staff->staff_id}}" />
            <input type="hidden" name="model_type" value="{{get_class($staff)}}" />

            <div class="w-full flex gap-10">

                <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                    <input type="text" placeholder="Announcement title" class=" form-control form-control-solid  " id="name" name="name"
                        class="form-control form-control-solid ">
                </div>

                <div class="form-group w-full"><label for="range" class="control-label"
                rel="popover" data-animate=" animated fadeIn " data-container="body"
                data-toggle="popover" data-placement="top"
                data-content="Set the start & End date of the announcement"
                data-title="Date Range" data-trigger="hover" data-html="true"
                >Date Range <i class="bx bx-help-circle"></i></label>
                    <input type="text" class="datepicker form-control form-control-solid  " id="range" name="date"
                        class="form-control form-control-solid ">
                </div>
            </div>
            <div class="w-full flex gap-10">

            <div class="w-full">
                    <label class="form-label required fw-semibold fs-6"
                        rel="popover" data-animate=" animated fadeIn " data-container="body"
                        data-toggle="popover" data-placement="top"
                        data-content="Manage who can see this announcement"
                        data-title="Privacy" data-trigger="hover" data-html="true"
                        >Is Private <i class="bx bx-help-circle"></i></label>
                    <div class="form-group w-full flex">
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="is_private" onChange="(function(){ jQuery('#staff-access').hide() })()" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> Yes </span>
                        </label>
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="is_private"  onChange="(function(){ jQuery('#staff-access').show() })()" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> No </span>
                        </label>
                    </div>
                </div>

                
                <div class="w-full" id="staff-access">
                    <label class="form-label required fw-semibold fs-6"
                        rel="popover" data-animate=" animated fadeIn " data-container="body"
                        data-toggle="popover" data-placement="top"
                        data-content="Staff members can see this announcement"
                        data-title="Privacy" data-trigger="hover" data-html="true"
                        >Staff access <i class="bx bx-help-circle"></i></label>
                    <div class="form-group w-full flex">
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="staff_access" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> Yes </span>
                        </label>
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="staff_access" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> No </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column my-10">
                <label class="fs-6 fw-semibold mb-2">Details</label>

                <textarea class="form-control form-control-solid" rows="3" name="description"
                    placeholder="Type Details"></textarea>
            </div>
            <div class="text-center">
                <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                    Cancel
                </button>

                <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Submit
                    </span>
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>
@endsection