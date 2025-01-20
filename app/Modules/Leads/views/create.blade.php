@extends('leads::page')

@section('lead-page')
<div class="col-md-12">

    <div class="w-full flex gap-10 content-wrapper">
        <div id="form-sidebar"
            class="rounded d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
            <!--begin::Nav-->
            <div class="bg-white   stepper-nav p-10 mt-6">
                <!--begin::Step 1-->
                <div class="stepper-item cursor-pointer current "
                    onClick="(function(){jQuery('.step-container,.step-item').addClass('hidden'), jQuery('#basic-form').removeClass('hidden'), jQ})()"
                    data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper flex gap-6 ">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px pt-3 bg-success text-center rounded">
                            <i class="bx bx-check fs-2"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label ">
                            <h3 class="stepper-title">
                                Details
                            </h3>

                            <div class="stepper-desc">
                                Basic information of the lead
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 1-->

                <!--begin::Step 2-->
                <div class="stepper-item cursor-pointer " data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper flex gap-6">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px pt-3  text-center rounded">
                            <i class="bx bx-check fs-2"></i>
                        </div>
                        <!--begin::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Frameworks
                            </h3>

                            <div class="stepper-desc">
                                Define your app framework
                            </div>
                        </div>
                        <!--begin::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 2-->

                <!--begin::Step 3-->
                <div class="stepper-item cursor-pointer " data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper flex gap-6">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px pt-3  text-center rounded">
                            <i class="bx bx-check fs-2"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Database
                            </h3>

                            <div class="stepper-desc">
                                Select the app database type
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 3-->

                <!--begin::Step 4-->
                <div class="stepper-item cursor-pointer " data-kt-stepper-element="nav">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper flex gap-6">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px pt-3  text-center rounded">
                            <i class="bx bx-check fs-2"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Billing
                            </h3>

                            <div class="stepper-desc">
                                Provide payment details
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Line-->
                    <div class="stepper-line h-40px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 4-->

                <!--begin::Step 5-->
                <div class="stepper-item cursor-pointer " onClick="(function(){jQuery().addClass()})()">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper flex gap-6">
                        <!--begin::Icon-->
                        <div class="stepper-icon w-40px h-40px pt-3  text-center rounded">
                            <i class="bx bx-check fs-2"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Label-->
                        <div class="stepper-label">
                            <h3 class="stepper-title">
                                Completed
                            </h3>

                            <div class="stepper-desc">
                                Review and Submit
                            </div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Step 5-->
            </div>
            <!--end::Nav-->
        </div>
        <form action="{{route('Lead.store')}}"  class="ajax-form" method="POST">
            @csrf
            <div id="content">
                <div class="w-full  step-container" id="basic-form">

                    <div class="card w-full">

                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Basic Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Basic Information about the Lead</p>.
                                </div>
                            </div>
                            <div class="w-full grid grid-cols-2 gap-4">

                                <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                        class="control-label">First name</label>
                                    <input type="text" id="fname" name="first_name" class="form-control form-control-solid"
                                        autofocus="1">
                                </div>


                                <div class="form-group w-full"><label for="subject" class="control-label">Last
                                        name</label>
                                    <input type="text" id="lname" name="last_name" class="form-control form-control-solid"
                                        autofocus="1">
                                </div>

                                <div class="w-full">
                                    <div class="form-group" app-field-wrapper="email"><label for="email"
                                            class="control-label">Email</label><input type="text" id="email" name="email"
                                            class="form-control form-control-solid "></div>
                                </div>

                                <div class="w-full">
                                    <div class="form-group" app-field-wrapper="phone"><label for="phone"
                                            class="control-label">Phone</label><input type="text" id="phone" name="phone"
                                            class="form-control form-control-solid "></div>
                                </div>



                            </div>

                        </div>
                    </div>
                </div>

                <div class="w-full  step-container" id="info-form">

                    <div class="card w-full">

                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Lead Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Lead assignment</p>.
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="w-full grid grid-cols-2 gap-4">


                                    <div class="form-group w-full select-placeholder">
                                        <label for="rel_type" class="control-label">Type</label>
                                        <select name="type" id="rel_type"
                                            class="form-control form-control-solid py-2 select-bootstrap">
                                            <option value="person">Person
                                            </option>
                                            <option value="company">
                                                Company </option>
                                        </select>
                                    </div>

                                    <div class="form-group w-full select-placeholder">
                                        <label for="rel_type" class="control-label">Source</label>
                                        <select name="source_id" id="rel_type"
                                            class="form-control form-control-solid py-2 select-bootstrap">
                                            @foreach ($leadSources as $source)
                                            <option value="{{$source->source_id}}"> {{$source->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="select-placeholder form-group w-full">
                                        <label for="assigned" class="control-label">Assigned To</label>
                                        <select id="assigned" name="assigned_to"
                                            class="select-bootstrap form-control form-control-solid py-2">
                                            <option value=""></option>
                                            @foreach ($staffList as $staff)
                                            <option value="{{$staff->staff_id}}">
                                                {{$staff->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>


                                    <div class="w-full form-group select-placeholder ">
                                        <label for="status" class="control-label">Status</label>
                                        <select name="status" class="select-bootstrap form-control form-control-solid py-2">
                                            <option value=""> </option>
                                            @foreach ($statusList as $status)
                                            <option value="{{$status->status_id}}">
                                                {{$status->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="w-full step-container" id="location-form">
                    <div class="card w-full">
                        <div class="card-body">
                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Location Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Lead location</p>.
                                </div>
                            </div>
                            <div class="w-full flex gap-10">

                                <div class="form-group w-full"><label for="address"
                                        class="control-label">Address</label><input type="text" id="address"
                                        name="location_info[address]" class="form-control form-control-solid "></div>

                                <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                                        type="text" id="city" name="location_info[city]"
                                        class="form-control form-control-solid "></div>

                            </div>
                            <div class="w-full flex gap-10">

                                <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                                <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                                        type="text" id="state" name="location_info[state]"
                                        class="form-control form-control-solid "></div>
                                <div class="w-full">
                                    <div class="select-placeholder form-group" app-field-wrapper="country"><label
                                            for="country" class="control-label">Country</label><select id="country"
                                            name="location_info[country]"
                                            class="select-bootstrap form-control form-control-solid py-2">
                                            <option value=""></option>
                                            @foreach ($countriyService->list() as $country)
                                            <option value="{{$country->id}}" data-subtext="{{$country->code}}">
                                                {{$country->name}}</option>
                                            @endforeach
                                        </select></div>
                                </div>

                            </div>
                            <div class="w-full flex gap-10">

                                <div class=" w-full">
                                    <div class="form-group" app-field-wrapper="zip"><label for="zip"
                                            class="control-label">Zip
                                            Code</label><input type="text" id="zip" name="location_info[zip]"
                                            class="form-control form-control-solid "></div>
                                </div>
                                <div class=" w-full">
                                    <div class="form-group" app-field-wrapper="website"><label for="website"
                                            class="control-label">Website</label><input type="text" id="website"
                                            name="location_info[website]" class="form-control form-control-solid ">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full step-container" id="fields-form">
                    @if (!empty($custom_fields))
                    <div class="card w-full">
                        <div class="card-body">
                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Custom Fields</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Custom Fields related to the Lead</p>.
                                </div>
                            </div>
                            <div class="w-full ">
                                @foreach ($custom_fields as $field)
                                @include('custom_field::field_input')
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                </div>


                <div class="card w-full step-container">
                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Business Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Lead & his business</p>.
                            </div>
                        </div>
                        <div class="w-full flex gap-10">

                            <div class="form-group w-full"><label for="address" class="control-label">Company</label><input
                                    type="text" id="company" name="company" class="form-control form-control-solid "></div>

                            <div class="form-group w-full"><label for="city" class="control-label">Position</label><input
                                    type="text" id="Position" name="position" class="form-control form-control-solid ">
                            </div>

                        </div>
                        <div class="form-group w-full">
                            <label for="address" class="control-label">About</label><textarea id="about" name="about"
                                class="form-control form-control-solid " rows="4"></textarea>
                        </div>

                        <div
                            class=" mt-4 btn-bottom-toolbar bottom-transaction text-right sm:tw-flex sm:tw-items-center sm:tw-justify-between">
                            <p class="no-mbot pull-left  btn-toolbar-notice tw-hidden sm:tw-block">
                                Include proposal items with merge field anywhere in proposal content as
                                <b>{proposal_items}</b>
                            </p>
                            <div>
                                <a href="{{route('Lead')}}"
                                    class="btn btn-default mleft10 proposal-form-submit save-and-send transaction-submit">
                                    Back </a>
                                <button class="btn btn-primary mleft5 proposal-form-submit transaction-submit"
                                    type="submit">
                                    Save </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </form>
    </div>
</div>
@endsection
@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/js/sticky-sidebar.js')}}"></script>
<script>
var stickySidebar = new StickySidebar('#form-sidebar', {
    topSpacing: 10,
    bottomSpacing: 0,
    containerSelector: '.content-wrapper',
    innerWrapperSelector: '.stepper-nav'
});
</script>
@endsection