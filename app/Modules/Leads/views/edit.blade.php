@extends('leads::page')

@section('lead-page')

    <div class="col-md-12">
        <form action="{{route('Lead.update', $lead->lead_id)}}" id="form" class="ajax-form" method="POST">
            @csrf

            <div class="w-full flex gap-10">

                <div class="card w-full">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Basic Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Basic Information about the Lead</p>.
                            </div>
                        </div>
                        <div class="w-full">

                            <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                    class="control-label">First name</label>
                                <input type="text" id="fname" name="first_name" class="form-control form-control-solid"
                                    autofocus="1" value="{{$lead->first_name}}">
                            </div>


                            <div class="form-group w-full"><label for="subject" class="control-label">Last
                                    name</label>
                                <input type="text" id="lname" name="last_name" class="form-control form-control-solid"
                                    autofocus="1" value="{{$lead->last_name}}">
                            </div>

                            <div class="w-full">
                                <div class="form-group" app-field-wrapper="email"><label for="email"
                                        class="control-label">Email</label><input type="text" id="email" name="email"
                                        class="form-control form-control-solid " value="{{$lead->email}}"></div>
                            </div>

                            <div class="w-full">
                                <div class="form-group" app-field-wrapper="phone"><label for="phone"
                                        class="control-label">Phone</label><input type="text" id="phone" name="phone"
                                        class="form-control form-control-solid " value="{{$lead->phone}}"></div>
                            </div>



                        </div>

                    </div>
                </div>

                <div class="card w-full">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Lead Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Lead assignment</p>.
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="w-full">


                                <div class="form-group w-full select-placeholder">
                                    <label for="rel_type" class="control-label">Type</label>
                                    <select name="type" id="rel_type"
                                        class="form-control form-control-solid py-2 select-bootstrap">
                                        <option value="person" {{$lead->type == 'person' ? 'selected' : ''}}>Person
                                        </option>
                                        <option value="company" {{$lead->type == 'company' ? 'selected' : ''}}>
                                            Company </option>
                                    </select>
                                </div>

                                <div class="form-group w-full select-placeholder">
                                    <label for="rel_type" class="control-label">Source</label>
                                    <select name="source_id" id="rel_type"
                                        class="form-control form-control-solid py-2 select-bootstrap">
                                        @foreach ($leadSources as $source)
                                        <option value="{{$source->source_id}}"
                                            {{$lead->source_id == $source->source_id ? 'selected' : ''}}>
                                            {{$source->name}} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="select-placeholder form-group w-full">
                                    <label for="assigned" class="control-label">Assigned To</label>
                                    <select id="assigned" name="assigned_to"
                                        class="select-bootstrap form-control form-control-solid py-2">
                                        <option value=""></option>
                                        @foreach ($staffList as $staff)
                                        <option value="{{$staff->staff_id}}"
                                            {{$lead->assigned_to == $staff->staff_id ? 'selected' : ''}}>
                                            {{$staff->name}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="w-full form-group select-placeholder ">
                                    <label for="status" class="control-label">Status</label>
                                    <select name="status" class="select-bootstrap form-control form-control-solid py-2">
                                        <option value=""> </option>
                                        @foreach ($statusList as $status)
                                        <option value="{{$status->status_id}}"
                                            {{$lead->status == $status->status_id ? 'selected' : ''}}>
                                            {{$status->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full flex gap-10">
                
                <div class="card w-full">
                    <div class="card-body">
                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Location Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Lead location</p>.
                            </div>
                        </div>
                        <div class="w-full flex gap-10">

                            <div class="form-group w-full"><label for="address" class="control-label">Address</label><input
                                    type="text" id="address" name="location_info[address]"
                                    class="form-control form-control-solid "
                                    value="{{$lead->location_info->address ?? ''}}"></div>

                            <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                                    type="text" id="city" name="location_info[city]"
                                    class="form-control form-control-solid " value="{{$lead->location_info->city ?? ''}}">
                            </div>

                        </div>
                        <div class="w-full flex gap-10">

                            <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                            <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                                    type="text" id="state" name="location_info[state]"
                                    class="form-control form-control-solid " value="{{$lead->location_info->state ?? ''}}">
                            </div>
                            <div class="w-full">
                                <div class="select-placeholder form-group" app-field-wrapper="country"><label for="country"
                                        class="control-label">Country</label><select id="country"
                                        name="location_info[country]"
                                        class="select-bootstrap form-control form-control-solid py-2">
                                        <option value=""></option>

                                        @foreach ($countriyService->list() as $country)
                                        <option value="{{$country->id}}" @if ($lead->location_info && $country->id ==
                                            $lead->location_info->country)
                                            selected @endif data-subtext="{{$country->code}}">{{$country->name}}</option>
                                        @endforeach
                                    </select></div>
                            </div>

                        </div>
                        <div class="w-full flex gap-10">

                            <div class=" w-full">
                                <div class="form-group" app-field-wrapper="zip"><label for="zip" class="control-label">Zip
                                        Code</label><input type="text" id="zip" name="location_info[zip]"
                                        class="form-control form-control-solid "
                                        value="{{$lead->location_info->zip ?? ''}}"></div>
                            </div>
                            <div class=" w-full">
                                <div class="form-group" app-field-wrapper="website"><label for="website"
                                        class="control-label">Website</label><input type="text" id="website"
                                        name="location_info[website]" class="form-control form-control-solid "
                                        value="{{$lead->location_info->website ?? ''}}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            
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
                                <?php $currentVal = $lead->field[$field->name] ?? ''; ?>
                                @include('custom_field::field_input')
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <div class="card w-full">
                <div class="card-body">

                    <div class="mb-2 text-start">
                        <h3 class="mb-3">Business Info</h3>
                        <div class="text-muted fw-semibold fs-5">
                            <p class="fw-semibold">Information about the Lead & his business</p>.
                        </div>
                    </div>
                    <div class="w-full flex gap-10">

                        <div class="form-group w-full"><label for="address" class="control-label">Company</label><input
                                type="text" id="company" name="company" class="form-control form-control-solid "
                                value="{{$lead->company}}"></div>

                        <div class="form-group w-full"><label for="city" class="control-label">Position</label><input
                                type="text" id="Position" name="position" class="form-control form-control-solid "
                                value="{{$lead->position}}"></div>

                    </div>
                    <div class="form-group w-full">
                        <label for="address" class="control-label">About</label><textarea id="about" name="about"
                            class="form-control form-control-solid " rows="4">{{$lead->about}}</textarea>
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

        </form>
    </div>

@endsection
