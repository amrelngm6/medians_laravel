@extends('customers.staff.page')

@section('nav-title', 'Staff Settings')

@section('staff-page')

<div class="col-md-12">
    <form action="{{route('Staff.update', $staff->staff_id)}}" id="form" class="ajax-form" method="POST">
        @csrf

        <div class="w-full flex gap-10">

            <div class="card w-full">

                <div class="card-body">

                    <div class="mb-2 text-start">
                        <h3 class="mb-3">Basic Info</h3>
                        <div class="text-muted fw-semibold fs-5">
                            <p class="fw-semibold">Basic Information about the Staff</p>.
                        </div>
                    </div>
                    <div class="w-full">

                        <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                class="control-label">First name</label>
                            <input type="text" id="fname" name="first_name" class="form-control form-control-solid"
                                autofocus="1" value="{{$staff->first_name}}">
                        </div>


                        <div class="form-group w-full"><label for="subject" class="control-label">Last
                                name</label>
                            <input type="text" id="lname" name="last_name" class="form-control form-control-solid"
                                autofocus="1" value="{{$staff->last_name}}">
                        </div>

                        <div class="w-full">
                            <div class="form-group" app-field-wrapper="email"><label for="email"
                                    class="control-label">Email</label><input type="text" id="email" name="email"
                                    class="form-control form-control-solid " value="{{$staff->email}}"></div>
                        </div>

                        <div class="w-full">
                            <div class="form-group" app-field-wrapper="phone"><label for="phone"
                                    class="control-label">Phone</label><input type="text" id="phone" name="phone"
                                    class="form-control form-control-solid " value="{{$staff->phone}}"></div>
                        </div>



                    </div>

                </div>
            </div>

            <div class="card w-full">

                <div class="card-body">

                    <div class="mb-2 text-start">
                        <h3 class="mb-3">Staff Info</h3>
                        <div class="text-muted fw-semibold fs-5">
                            <p class="fw-semibold">Information about the Staff assignment</p>.
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full">

                            <div class="form-group" app-field-wrapper="position"><label for="position"
                                    class="control-label">Position</label><input type="text" id="position"
                                    name="position" class="form-control form-control-solid "
                                    placeholder="Postition title" value="{{$staff->position}}"></div>

                            <div class="form-group w-full select-placeholder">
                                <label for="rel_type" class="control-label">Role</label>
                                <select id="role_id" name="role_id"
                                    class="select-bootstrap form-control form-control-solid py-2">
                                    <option value=""></option>
                                    @foreach ($rolesList as $role)
                                    <option value="{{$role->id}}" {{$staff->role_id == $role->id ? 'selected' : ''}}>
                                        {{$role->name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="w-full form-group select-placeholder ">
                                <label for="status" class="control-label">Status</label>
                                <select name="status" class="select-bootstrap form-control form-control-solid py-2">
                                    <option value=""> </option>
                                    @foreach ($statusList as $status)
                                    <option value="{{$status->status_id}}"
                                        {{$staff->status == $status->status_id ? 'selected' : ''}}>
                                        {{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card w-full">
            <div class="card-body">
                <div class="mb-2 text-start">
                    <h3 class="mb-3">Location Info</h3>
                    <div class="text-muted fw-semibold fs-5">
                        <p class="fw-semibold">Information about the Staff location</p>.
                    </div>
                </div>
                <div class="w-full flex gap-10">

                    <div class="form-group w-full"><label for="address" class="control-label">Address</label><input
                            type="text" id="address" name="location_info[address]"
                            class="form-control form-control-solid " value="{{$staff->location_info->address ?? ''}}">
                    </div>

                    <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                            type="text" id="city" name="location_info[city]" class="form-control form-control-solid "
                            value="{{$staff->location_info->city ?? ''}}">
                    </div>

                </div>
                <div class="w-full flex gap-10">

                    <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                    <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                            type="text" id="state" name="location_info[state]" class="form-control form-control-solid "
                            value="{{$staff->location_info->state ?? ''}}">
                    </div>
                    <div class="w-full">
                        <div class="select-placeholder form-group" app-field-wrapper="country"><label for="country"
                                class="control-label">Country</label><select id="country" name="location_info[country]"
                                class="select-bootstrap form-control form-control-solid py-2">
                                <option value=""></option>

                                @foreach ($countriyService->list() as $country)
                                <option value="{{$country->id}}" @if ($staff->location_info && $country->id ==
                                    $staff->location_info->country)
                                    selected @endif data-subtext="{{$country->code}}">{{$country->name}}</option>
                                @endforeach
                            </select></div>
                    </div>

                </div>
                <div class="w-full flex gap-10">

                    <div class=" w-full">
                        <div class="form-group" app-field-wrapper="zip"><label for="zip" class="control-label">Zip
                                Code</label><input type="text" id="zip" name="location_info[zip]"
                                class="form-control form-control-solid " value="{{$staff->location_info->zip ?? ''}}">
                        </div>
                    </div>
                    <div class=" w-full">
                        <div class="form-group" app-field-wrapper="website"><label for="website"
                                class="control-label">Website</label><input type="text" id="website"
                                name="location_info[website]" class="form-control form-control-solid "
                                value="{{$staff->location_info->website ?? ''}}">
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="card w-full">
            <div class="card-body">

                <div class="mb-2 text-start">
                    <h3 class="mb-3">Business Info</h3>
                    <div class="text-muted fw-semibold fs-5">
                        <p class="fw-semibold">Information about the Staff & his business</p>.
                    </div>
                </div>
                <div class="form-group w-full">
                    <label for="address" class="control-label">About</label><textarea id="about" name="about"
                        class="form-control form-control-solid " rows="4">{{$staff->about}}</textarea>
                </div>


                <div
                    class=" mt-4 btn-bottom-toolbar bottom-transaction text-right sm:tw-flex sm:tw-items-center sm:tw-justify-between">
                    <p class="no-mbot pull-left  btn-toolbar-notice tw-hidden sm:tw-block">
                        Include proposal items with merge field anywhere in proposal content as
                        <b>{proposal_items}</b>
                    </p>
                    <div>
                        <a href="{{route('Staff')}}"
                            class="btn btn-default mleft10 proposal-form-submit save-and-send transaction-submit">
                            Back </a>
                        <button class="btn btn-primary mleft5 proposal-form-submit transaction-submit" type="submit">
                            Save </button>
                    </div>
                </div>
            </div>

        </div>

    </form>

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
                                        <label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Enter New Email
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
                                        <label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid"
                                            name="confirmemailpassword" id="confirmemailpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button id="kt_signin_submit" type="button" class="btn btn-primary  me-2 px-6">Update
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
                                        <input type="password" class="form-control form-control-lg form-control-solid "
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
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="newpassword" id="newpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="fv-row mb-0 fv-plugins-icon-container">
                                        <label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New
                                            Password</label>
                                        <input type="password" class="form-control form-control-lg form-control-solid "
                                            name="confirmpassword" id="confirmpassword">
                                        <div
                                            class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>

                            <div class="d-flex">
                                <button id="kt_password_submit" type="button" class="btn btn-primary me-2 px-6">Update
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
                                security to your account. To log in, in addition you'll need to provide a 6 digit code
                            </div>
                        </div>
                        <!--end::Content-->

                        <!--begin::Action-->
                        <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_two_factor_authentication">
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

    @include('customers.staff.notification_form')

</div>

@endsection