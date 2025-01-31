@extends('deal::page')

@section('deal-page')

    <div class="col-md-12">
        
        <div class="w-full gap-14 content-wrapper">
            <div class="w-350px pull-left px-0 " id="form-sidebar"
                class="rounded d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                <!--begin::Nav-->
                <div class="bg-white   stepper-nav py-14 px-10 ">
                    <!--begin::Step 1-->
                    <div class="stepper-item cursor-pointer current " data-id="basic-form"
                        >
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
                                    Basic information of the Deal
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
                    <div class="stepper-item cursor-pointer " data-id="location-form"
                        >
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

                    <!--begin::Step 4-->
                    <div class="stepper-item cursor-pointer " data-id="fields-form"
                        >
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

                    <!--begin::Step 5-->
                    <div class="stepper-item cursor-pointer " data-id="business-form" 
                        >
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
                                    Business info
                                </h3>

                                <div class="stepper-desc">
                                    Information about the business
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
                <form action="{{route('Deal.update', $deal->id)}}" id="form" class="ajax-form" method="POST">
                    @csrf


                    <div class="card w-full step-container" id="basic-form">

                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Basic Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Basic Information about the Deal</p>.
                                </div>
                            </div>
                            <div class="w-full">

                                <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                        class="control-label">First name</label>
                                    <input type="text" id="fname" name="name" class="form-control form-control-solid"
                                        autofocus="1" value="{{$deal->name}}">
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="card w-full step-container" id="info-form">

                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Deal Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Deal assignment</p>.
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="w-full">

                                    <label for="assigned" class="control-label">Assigned To</label>
                                    @include('staff::search-input')


                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card w-full step-container" id="location-form">
                        <div class="card-body">
                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Location Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Deal location</p>.
                                </div>
                            </div>
                            <div class="w-full flex gap-10">

                                <div class="form-group w-full"><label for="address" class="control-label">Address</label><input
                                        type="text" id="address" name="location_info[address]"
                                        class="form-control form-control-solid "
                                        value="{{$deal->location_info->address ?? ''}}"></div>

                                <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                                        type="text" id="city" name="location_info[city]"
                                        class="form-control form-control-solid " value="{{$deal->location_info->city ?? ''}}">
                                </div>

                            </div>
                            <div class="w-full flex gap-10">

                                <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                                <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                                        type="text" id="state" name="location_info[state]"
                                        class="form-control form-control-solid " value="{{$deal->location_info->state ?? ''}}">
                                </div>
                                <div class="w-full">
                                    <div class="select-placeholder form-group" app-field-wrapper="country"><label for="country"
                                            class="control-label">Country</label><select id="country"
                                            name="location_info[country]"
                                            class="select-bootstrap form-control form-control-solid py-2">
                                            <option value=""></option>

                                            @foreach ($countriyService->list() as $country)
                                            <option value="{{$country->id}}" @if ($deal->location_info && $country->id ==
                                                $deal->location_info->country)
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
                                            value="{{$deal->location_info->zip ?? ''}}"></div>
                                </div>
                                <div class=" w-full">
                                    <div class="form-group" app-field-wrapper="website"><label for="website"
                                            class="control-label">Website</label><input type="text" id="website"
                                            name="location_info[website]" class="form-control form-control-solid "
                                            value="{{$deal->location_info->website ?? ''}}">
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
                                    <p class="fw-semibold">Custom Fields related to the Deal</p>.
                                </div>
                            </div>
                            <div class="w-full ">
                                @foreach ($custom_fields as $field)
                                    <?php $currentVal = $deal->field[$field->name] ?? ''; ?>
                                    @include('custom_field::field_input')
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="card w-full step-container"  id="business-form">
                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Business Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Deal & his business</p>.
                                </div>
                            </div>
                            <div class="w-full flex gap-10">

                                <div class="form-group w-full"><label for="address" class="control-label">Company</label><input
                                        type="text" id="company" name="company" class="form-control form-control-solid "
                                        value="{{$deal->company}}"></div>

                                <div class="form-group w-full"><label for="city" class="control-label">Position</label><input
                                        type="text" id="Position" name="position" class="form-control form-control-solid "
                                        value="{{$deal->position}}"></div>

                            </div>
                            <div class="form-group w-full">
                                <label for="address" class="control-label">About</label><textarea id="about" name="about"
                                    class="form-control form-control-solid " rows="4">{{$deal->about}}</textarea>
                            </div>


                            <div
                                class=" mt-4 btn-bottom-toolbar bottom-transaction text-right sm:tw-flex sm:tw-items-center sm:tw-justify-between">
                                <p class="no-mbot pull-left  btn-toolbar-notice tw-hidden sm:tw-block">
                                    Include proposal items with merge field anywhere in proposal content as
                                    <b>{proposal_items}</b>
                                </p>
                                <div>
                                    <a href="{{route('Deal')}}"
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
    </div>

@endsection
@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/js/ResizeSensor.js')}}"></script>
<script src="{{asset('assets/js/sticky-sidebar.js')}}"></script>
<script>
    jQuery(document).ready(function(e){
        // jQuery('#content').css({'margin-left': (jQuery('#form-sidebar').width()+20)+'px'})
        jQuery('.content-wrapper').addClass('flex')
        jQuery(document).on('click', '.stepper-item', function(e){
            document.getElementById(jQuery(this).data('id')).scrollIntoView({ behavior: "smooth", block: "center", inline: "nearest" });
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
