@extends('clients::page')

@section('nav-title', 'Client Settings')

@section('client-page')

<div class="col-md-12">

    <div class="w-full gap-14 content-wrapper">
        <div class="w-350px pull-left px-0 " id="form-sidebar"
            class="rounded d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
            <!--begin::Nav-->
            <div class="bg-white   stepper-nav py-14 px-10 ">
                <!--begin::Step 1-->
                <div class="stepper-item cursor-pointer current " data-id="basic-form">
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
                <div class="stepper-item cursor-pointer " data-id="info-form">
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
                                Information
                            </h3>

                            <div class="stepper-desc">
                                Some information for system
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
                <div class="stepper-item cursor-pointer " data-id="location-form">
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
                                Location
                            </h3>

                            <div class="stepper-desc">
                                Information about the location
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
                @if (!empty($custom_fields))
                <!--begin::Step 4-->
                <div class="stepper-item cursor-pointer " data-id="fields-form">
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
                                Custom fields
                            </h3>

                            <div class="stepper-desc">
                                Custom fields for the item
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
                @endif
                
                <!--begin::Step 5-->
                <div class="stepper-item cursor-pointer " data-id="business-form">
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
                                About client
                            </h3>

                            <div class="stepper-desc">
                                Notes about the client
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
        <div id="content" class="w-2/3 pull-right content ">

            <form action="{{route('Client.update', $client->client_id)}}" id="form" class="ajax-form" method="POST">
                @csrf


                <div class="card w-full step-container" id="basic-form">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Basic Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Basic Information about the Client</p>.
                            </div>
                        </div>
                        <div class="w-full">

                            <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                    class="control-label">First name</label>
                                <input type="text" id="fname" name="first_name"
                                    class="form-control form-control-solid" autofocus="1"
                                    value="{{$client->first_name}}">
                            </div>


                            <div class="form-group w-full"><label for="subject" class="control-label">Last
                                    name</label>
                                <input type="text" id="lname" name="last_name"
                                    class="form-control form-control-solid" autofocus="1"
                                    value="{{$client->last_name}}">
                            </div>

                            <div class="w-full">
                                <div class="form-group" app-field-wrapper="email"><label for="email"
                                        class="control-label">Email</label><input type="text" id="email"
                                        name="email" class="form-control form-control-solid "
                                        value="{{$client->email}}"></div>
                            </div>

                            <div class="w-full">
                                <div class="form-group" app-field-wrapper="phone"><label for="phone"
                                        class="control-label">Phone</label><input type="text" id="phone"
                                        name="phone" class="form-control form-control-solid "
                                        value="{{$client->phone}}"></div>
                            </div>



                        </div>

                    </div>
                </div>

                <div class="card w-full step-container" id="info-form">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Client Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Client assignment</p>.
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="w-full">


                                <div class="w-full form-group select-placeholder ">
                                    <label for="status" class="control-label">Status</label>
                                    <select name="status"
                                        class="select-bootstrap form-control form-control-solid py-2">
                                        <option value=""> </option>
                                        @foreach ($statusList as $status)
                                        <option value="{{$status->status_id}}"
                                            {{$client->status == $status->status_id ? 'selected' : ''}}>
                                            {{$status->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card w-full step-container" id="location-form">
                    <div class="card-body">
                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Location Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Client location</p>.
                            </div>
                        </div>
                        <div class="w-full flex gap-10">

                            <div class="form-group w-full"><label for="address"
                                    class="control-label">Address</label><input type="text" id="address"
                                    name="location_info[address]" class="form-control form-control-solid "
                                    value="{{$client->location_info->address ?? ''}}">
                            </div>

                            <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                                    type="text" id="city" name="location_info[city]"
                                    class="form-control form-control-solid "
                                    value="{{$client->location_info->city ?? ''}}">
                            </div>

                        </div>
                        <div class="w-full flex gap-10">

                            <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                            <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                                    type="text" id="state" name="location_info[state]"
                                    class="form-control form-control-solid "
                                    value="{{$client->location_info->state ?? ''}}">
                            </div>
                            <div class="w-full">
                                <div class="select-placeholder form-group" app-field-wrapper="country"><label
                                        for="country" class="control-label">Country</label><select id="country"
                                        name="location_info[country]"
                                        class="select-bootstrap form-control form-control-solid py-2">
                                        <option value=""></option>

                                        @foreach ($countriyService->list() as $country)
                                        <option value="{{$country->id}}" @if ($client->location_info && $country->id ==
                                            $client->location_info->country)
                                            selected @endif data-subtext="{{$country->code}}">{{$country->name}}
                                        </option>
                                        @endforeach
                                    </select></div>
                            </div>

                        </div>
                        <div class="w-full flex gap-10">

                            <div class=" w-full">
                                <div class="form-group" app-field-wrapper="zip"><label for="zip"
                                        class="control-label">Zip
                                        Code</label><input type="text" id="zip" name="location_info[zip]"
                                        class="form-control form-control-solid "
                                        value="{{$client->location_info->zip ?? ''}}">
                                </div>
                            </div>
                            <div class=" w-full">
                                <div class="form-group" app-field-wrapper="website"><label for="website"
                                        class="control-label">Website</label><input type="text" id="website"
                                        name="location_info[website]" class="form-control form-control-solid "
                                        value="{{$client->location_info->website ?? ''}}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                
                @if (!empty($custom_fields))
                <div class="card w-full step-container"  id="fields-form">
                    <div class="card-body">
                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Custom Fields</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Custom Fields related to the Lead</p>.
                            </div>
                        </div>
                        <div class="w-full ">
                            @foreach ($custom_fields as $field)
                                <?php $currentVal = $lead->field[$field->name] ?? ''; ?>
                                @include('custom_field::field_input')
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
                <div class="card w-full step-container" id="business-form">
                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Business Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Client & his business</p>.
                            </div>
                        </div>
                        <div class="form-group w-full">
                            <label for="address" class="control-label">About</label><textarea id="about" name="about"
                                class="form-control form-control-solid " rows="4">{{$client->about}}</textarea>
                        </div>


                        <div
                            class=" mt-4 btn-bottom-toolbar bottom-transaction text-right sm:tw-flex sm:tw-items-center sm:tw-justify-between">
                            <p class="no-mbot pull-left  btn-toolbar-notice tw-hidden sm:tw-block">
                                Include proposal items with merge field anywhere in proposal content as
                                <b>{proposal_items}</b>
                            </p>
                            <div>
                                <a href="{{route('Client')}}"
                                    class="btn btn-default mleft10 proposal-form-submit save-and-send transaction-submit">
                                    Back </a>
                                <button class="btn btn-primary mleft5 proposal-form-submit transaction-submit"
                                    type="submit">
                                    Save </button>
                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </div>

        <div class="card  mb-5 mb-xl-10">
            <!--begin::Card header-->
            <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse"
                data-bs-target="#kt_account_signin_method">
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Sign-in Method</h3>
                </div>
            </div>
            <!--end::Card header-->

            <!--begin::Content-->
            <div id="kt_account_settings_signin_method" class="collapse show">
                <!--begin::Card body-->
                <div class="card-body border-top p-9">
                    <!--begin::Email Address-->
                    <div class="d-flex flex-wrap align-items-center">
                        <!--begin::Label-->
                        <div id="kt_signin_email">
                            <div class="fs-6 fw-bold mb-1">Email Address</div>
                            <div class="fw-semibold text-gray-600">support@keenthemes.com</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Edit-->
                        <div id="kt_signin_email_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form id="kt_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                novalidate="novalidate">
                                <div class="row mb-6">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                            <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New
                                                Email
                                                Address</label>
                                            <input type="email" class="form-control form-control-lg form-control-solid"
                                                id="emailaddress" placeholder="Email Address" name="emailaddress"
                                                value="support@keenthemes.com">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                            <label for="confirmemailpassword"
                                                class="form-label fs-6 fw-bold mb-3">Confirm
                                                Password</label>
                                            <input type="password"
                                                class="form-control form-control-lg form-control-solid"
                                                name="confirmemailpassword" id="confirmemailpassword">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex">
                                    <button id="kt_signin_submit" type="button"
                                        class="btn btn-primary  me-2 px-6">Update
                                        Email</button>
                                    <button id="kt_signin_cancel" type="button"
                                        class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->

                        <!--begin::Action-->
                        <div id="kt_signin_email_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">Change Email</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Email Address-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->

                    <!--begin::Password-->
                    <div class="d-flex flex-wrap align-items-center mb-10">
                        <!--begin::Label-->
                        <div id="kt_signin_password">
                            <div class="fs-6 fw-bold mb-1">Password</div>
                            <div class="fw-semibold text-gray-600">************</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Edit-->
                        <div id="kt_signin_password_edit" class="flex-row-fluid d-none">
                            <!--begin::Form-->
                            <form id="kt_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                novalidate="novalidate">
                                <div class="row mb-1">
                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                            <label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current
                                                Password</label>
                                            <input type="password"
                                                class="form-control form-control-lg form-control-solid "
                                                name="currentpassword" id="currentpassword">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                            <label for="newpassword" class="form-label fs-6 fw-bold mb-3">New
                                                Password</label>
                                            <input type="password"
                                                class="form-control form-control-lg form-control-solid "
                                                name="newpassword" id="newpassword">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="fv-row mb-0 fv-plugins-icon-container">
                                            <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm
                                                New
                                                Password</label>
                                            <input type="password"
                                                class="form-control form-control-lg form-control-solid "
                                                name="confirmpassword" id="confirmpassword">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-text mb-5">Password must be at least 8 character and contain symbols
                                </div>

                                <div class="d-flex">
                                    <button id="kt_password_submit" type="button"
                                        class="btn btn-primary me-2 px-6">Update
                                        Password</button>
                                    <button id="kt_password_cancel" type="button"
                                        class="btn btn-color-gray-500 btn-active-light-primary px-6">Cancel</button>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Edit-->

                        <!--begin::Action-->
                        <div id="kt_signin_password_button" class="ms-auto">
                            <button class="btn btn-light btn-active-light-primary">Reset Password</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Password-->


                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed  p-6">
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-shield-tick fs-2tx text-primary me-4"><span class="path1"></span><span
                                class="path2"></span></i>
                        <!--end::Icon-->

                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                            <!--begin::Content-->
                            <div class="mb-3 mb-md-0 fw-semibold">
                                <h4 class="text-gray-900 fw-bold">Secure Your Account</h4>

                                <div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of
                                    security to your account. To log in, in addition you'll need to provide a 6 digit
                                    code
                                </div>
                            </div>
                            <!--end::Content-->

                            <!--begin::Action-->
                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">
                                Enable </a>
                            <!--end::Action-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Content-->
        </div>

        @include('customers.client.notification_form')

    </div>

    @endsection

    @section('script')

    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    <script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
    <script src="{{asset('assets/js/sticky-sidebar.js')}}"></script>
    <script>
    jQuery(document).ready(function(e) {
        // jQuery('#content').css({'margin-left': (jQuery('#form-sidebar').width()+20)+'px'})
        jQuery('.content-wrapper').addClass('flex')
        jQuery(document).on('click', '.stepper-item', function(e) {
            document.getElementById(jQuery(this).data('id')).scrollIntoView({
                behavior: "smooth",
                block: "center",
                inline: "nearest"
            });
            // return jQuery('.step-container,.step-item').addClass('hidden'), 
            // jQuery('#'+jQuery(this).data('id')).removeClass('hidden'), 
            jQuery('.stepper-icon').removeClass('bg-success'),
                jQuery(this).children().children('.stepper-icon').addClass('bg-success');
        })

        var stickySidebar = new StickySidebar('#form-sidebar', {
            topSpacing: 20,
            bottomSpacing: 0,
            containerSelector: '.content-wrapper',
            innerWrapperSelector: '.stepper-nav'
        });
    })
    </script>
    @endsection