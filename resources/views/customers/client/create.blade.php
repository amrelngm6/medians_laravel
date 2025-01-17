@extends('customers.staff.page')

@section('nav-title', 'Create Staff Member')

@section('staff-page')
<div class="col-md-12">
    <form action="{{route('Staff.store')}}" id="form" class="ajax-form" method="POST">
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
                                autofocus="1" placeholder="First name">
                        </div>


                        <div class="form-group w-full"><label for="subject" class="control-label">Last
                                name</label>
                            <input type="text" id="lname" name="last_name" class="form-control form-control-solid"
                                autofocus="1" placeholder="Last name">
                        </div>

                        <div class="w-full">
                            <div class="form-group" app-field-wrapper="email"><label for="email"
                                    class="control-label">Email</label><input type="text" id="email" name="email"
                                    class="form-control form-control-solid " placeholder="Contact Email"></div>
                        </div>

                        <div class="w-full">
                            <div class="form-group" app-field-wrapper="phone"><label for="phone"
                                    class="control-label">Phone</label><input type="text" id="phone" name="phone"
                                    class="form-control form-control-solid " placeholder="Phone number"></div>
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
                                    placeholder="Postition title"></div>


                            <div class="form-group w-full select-placeholder">
                                <label for="rel_type" class="control-label">Role</label>
                                <select id="role_id" name="role_id"
                                    class="select-bootstrap form-control form-control-solid py-2">
                                    <option value=""></option>
                                    @foreach ($rolesList as $role)
                                    <option value="{{$role->id}}">{{$role->name}}</option>
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
                            class="form-control form-control-solid " placeholder="Location Address"></div>

                    <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                            type="text" id="city" name="location_info[city]" class="form-control form-control-solid "
                            placeholder="Location City"></div>

                </div>
                <div class="w-full flex gap-10">

                    <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                    <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                            type="text" id="state" name="location_info[state]" class="form-control form-control-solid "
                            placeholder="Location State"></div>
                    <div class="w-full">
                        <div class="select-placeholder form-group" app-field-wrapper="country"><label for="country"
                                class="control-label">Country</label><select id="country" name="location_info[country]"
                                placeholder="Country" class="select-bootstrap form-control form-control-solid py-2">
                                <option value=""></option>
                                @foreach ($countriyService->list() as $country)
                                <option value="{{$country->id}}" data-subtext="{{$country->code}}">{{$country->name}}
                                </option>
                                @endforeach
                            </select></div>
                    </div>

                </div>
                <div class="w-full flex gap-10">

                    <div class=" w-full">
                        <div class="form-group" app-field-wrapper="zip"><label for="zip" class="control-label">Zip
                                Code</label><input type="text" id="zip" name="location_info[zip]"
                                class="form-control form-control-solid " placeholder="Location ZIP"></div>
                    </div>
                    <div class=" w-full">
                        <div class="form-group" app-field-wrapper="website"><label for="website"
                                class="control-label">Website</label><input type="text" id="website"
                                name="location_info[website]" placeholder="Personal Website"
                                class="form-control form-control-solid ">
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
                        <p class="fw-semibold">Information about the Staff & his rules</p>.
                    </div>
                </div>

                <div class="form-group w-full">
                    <label for="address" class="control-label">About</label><textarea id="about" name="about"
                        class="form-control form-control-solid " placeholder="About the Member" rows="4"></textarea>
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
</div>
@endsection