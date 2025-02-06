@extends('packages::page')

@section('nav-title', 'Package Features')

@section('packages-page')

<div class="col-lg-12">
    <form action="{{route('PackageFeature.update', $package->id)}}" class="ajax-form  w-full" id="custom_field-form">
        @csrf

        <div class="w-full flex gap gap-10">
            <div class="card mb-5 mb-xl-10 col-md-2" id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer p-4">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Package</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body p-4">


                    <div class="form-group w-full select-placeholder">
                        <label for="rel_model" 
                            class="control-label">Package Name </label>
                        <p class="text-danger fw-bold"> {{$package->name}} </p>
                    </div>

                    <div class="form-group w-full select-placeholder">
                        <label for="rel_model" class="control-label"
                            rel="popover" data-trigger="hover" data-placement="top"
                            data-content="This is <b class='text-danger'>{{ucfirst($package->payment_type)}}</b> Package" data-html="true"
                        >Is Paid <i class="bx bx-help-circle"></i> </label>
                        <p class="text-danger"> {{$package->payment_type}} </p>
                    </div>

                    @if ($package->is_paid)
                    <div class="form-group w-full select-placeholder">
                        <label for="rel_model" class="control-label"
                        >Cost per Month </label>
                        <p class="text-danger"> {{$settings['currency_code'] ?? ''}}{{$package->cost_month}} </p>
                    </div>
                    <div class="form-group w-full select-placeholder">
                        <label for="rel_model" class="control-label"
                        >Cost per Quarter</label>
                        <p class="text-danger"> {{$settings['currency_code'] ?? ''}}{{$package->cost_quarter}}  </p>
                    </div>
                    <div class="form-group w-full select-placeholder">
                        <label for="rel_model" class="control-label"
                        >Cost per Year </label>
                        <p class="text-danger"> {{$settings['currency_code'] ?? ''}}{{$package->cost_year}} </p>
                    </div>
                    @endif

                </div>
            </div>

            <div class="card mb-5 mb-xl-10 w-full" id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Features of modules</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body">
                    <div class="w-full grid grid-cols-3 ">

                    @foreach ($modules as $module)

                        <div class="form-group w-full shadow-md rounded-md">

                            <div class="w-full flex my-2">
                                <label for="allow-{{$module->id}}" class="w-full required control-label" 
                                    rel="popover" data-trigger="hover" data-placement="top" data-html="true"
                                    data-content="Set the max limit to create <b class='text-danger'>{{$module->name}}</b> for subscribers"
                                    >Allow {{$module->name}} <i
                                        class="bx bx-help-circle"></i></label>
                                <div class="form-check form-check-solid form-switch form-check-custom fv-row">
                                    <input 
                                        onChange="(function(){ jQuery('#limit-{{$module->id}}').val('').css('opacity',jQuery('#allow-{{$module->id}}').is(':checked') ? '1' : '.3').attr('disabled', !jQuery('#allow-{{$module->id}}').is(':checked') ) })()" 
                                        class="form-check-input w-30px h-20px" type="checkbox" id="allow-{{$module->id}}"
                                        {{isset($features[$module->name]) ? 'checked' : ''}}>
                                    <label class="form-check-label" for="allow-{{$module->id}}"></label>
                                </div>
                            </div>
                            <input type="number" placeholder="{{$module->name}} max limit" required
                                class=" form-control form-control-solid  " id="limit-{{$module->id}}" name="features[{{$module->name}}]"
                                style="opacity:{{isset($features[$module->name]) ? '1' : '.3'}}"
                                class="form-control form-control-solid " value="{{$features[$module->name] ?? ''}}"
                                {{isset($features[$module->name]) ? '' : 'disabled'}}
                                >
                        </div>
                    @endforeach  
                        
                        

                    </div>


                    <div class="text-end">
                        <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

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