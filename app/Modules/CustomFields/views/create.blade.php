@extends('custom_field::page')

@section('nav-title', 'Create Custom Field')

@section('fields-page')

<div class="col-lg-12">
    <form action="{{route('CustomField.store')}}" class="ajax-form  w-full" id="custom_field-form">
        @csrf

        <div class="w-full flex gap gap-10">
            <div class="card mb-5 mb-xl-10 col-md-4 " id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Information</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body">
                    

                    <div class="form-group w-full select-placeholder">
                        <label for="rel_model" class="control-label">Related Module</label>
                        <select name="model" id="rel_model" onChange="(function(){  })()" 
                            class="form-control form-control-solid py-2 select-bootstrap">
                            @foreach ($modules as $Module)
                                <option value="{{$Module->path}}\Models\{{$Module->name}}">{{$Module->name}}</option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="form-group w-full select-placeholder">
                        <label for="rel_type" class="control-label">Type</label>
                        <select name="type" id="rel_type" onChange="(function(){ 
                            switch (jQuery('#rel_type').val())
                            {
                                case 'select':
                                case 'multiselect':
                                case 'checkbox':
                                case 'radio':
                                    jQuery('#field-options,#title-fields').show();
                                    break;
                                case 'hidden':
                                    jQuery('#field-options').hide(); jQuery('#title-fields').hide();
                                    break;
                                default:
                                    jQuery('#field-options').hide(); jQuery('#title-fields').show();
                                    break;
                            }
                        })()" 
                            class="form-control form-control-solid py-2 select-bootstrap">
                            @foreach ($types as $type)
                                <option value="{{$type['code']}}">{{$type['name']}}</option>
                            @endforeach 
                        </select>
                    </div>

                    <div class="w-full">
                        <label class="form-label required fw-semibold fs-6"
                            rel="popover" data-trigger="hover"
                            data-content="Check this option if this field is Disabled and readonly "
                            >Is Disabled <i class="bx bx-help-circle"></i></label>
                        <div class="form-group w-full flex">
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="is_disabled" onChange="(function(){ jQuery('#is-required').hide() })()" class="form-check-input h-20px w-20px" value="1" type="radio" />
                                <span class="form-check-label fw-semibold"> Yes </span>
                            </label>
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="is_disabled" checked onChange="(function(){ jQuery('#is-required').show() })()" class="form-check-input h-20px w-20px" value="0" type="radio" />
                                <span class="form-check-label fw-semibold"> No </span>
                            </label>
                        </div>
                    </div>

                    
                    <div class="w-full" id="is-required">
                        <label class="form-label required fw-semibold fs-6"
                            rel="popover" data-trigger="hover"
                            data-content="Check this option if this field is required "
                            >Is Required <i class="bx bx-help-circle"></i></label>
                        <div class="form-group w-full flex">
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="is_required" class="form-check-input h-20px w-20px" value="1" type="radio" />
                                <span class="form-check-label fw-semibold"> Yes </span>
                            </label>
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="is_required" class="form-check-input h-20px w-20px" value="0" type="radio" />
                                <span class="form-check-label fw-semibold"> No </span>
                            </label>
                        </div>
                    </div>

                    
                    <div class="w-full" id="show-at-table">
                        <label class="form-label required fw-semibold fs-6"
                            rel="popover" data-trigger="hover"
                            data-content="Check this option to show this field at list table "
                            >Show at table <i class="bx bx-help-circle"></i></label>
                        <div class="form-group w-full flex">
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="show_at_table" class="form-check-input h-20px w-20px" value="1" type="radio" />
                                <span class="form-check-label fw-semibold"> Yes </span>
                            </label>
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="show_at_table" class="form-check-input h-20px w-20px" value="0" type="radio" />
                                <span class="form-check-label fw-semibold"> No </span>
                            </label>
                        </div>
                    </div>
                    
                    <div class="w-full" id="show-at-overview">
                        <label class="form-label required fw-semibold fs-6"
                            rel="popover" data-trigger="hover"
                            data-content="Check this option to show this field at overview page "
                            >Show at Overview <i class="bx bx-help-circle"></i></label>
                        <div class="form-group w-full flex">
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="show_at_overview" class="form-check-input h-20px w-20px" type="radio" value="1" />
                                <span class="form-check-label fw-semibold"> Yes </span>
                            </label>
                            <label class="form-check form-check-custom form-check-solid me-10">
                                <input name="show_at_overview" class="form-check-input h-20px w-20px" value="0" type="radio" />
                                <span class="form-check-label fw-semibold"> No </span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mb-5 mb-xl-10 w-full" id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Field options</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body">
                    <div class="w-full  ">
                        
                        <div class="form-group w-full"><label for="title" class="required control-label"
                            rel="popover" data-trigger="hover"
                            data-content="Field title to use as reference"
                            >Title <i class="bx bx-help-circle"></i></label>
                            <input type="text" required placeholder="Field title" class=" form-control form-control-solid  " id="title" name="title"
                                class="form-control form-control-solid ">
                        </div>
                        
                        <div class="w-full " id="title-fields">
                            <div class="form-group w-full"><label for="name" class="required control-label"
                            rel="popover" data-trigger="hover"
                            data-content="input name, Should be lower-case and without spaces "
                            >Field Name <i class="bx bx-help-circle"></i></label>
                                <input type="text" required placeholder="Field name" class=" form-control form-control-solid  " id="name" name="name"
                                    class="form-control form-control-solid ">
                            </div>

                            <div class="form-group w-full"><label for="placeholder" class="control-label">Placeholder</label>
                                <input type="text" placeholder="Input Placeholder" class=" form-control form-control-solid  " id="placeholder" name="placeholder"
                                    class="form-control form-control-solid ">
                            </div>
                        </div>

                        
                        <div class="w-full" id="field-options" style="display:none">
                            <div class="d-flex flex-column my-10" >
                                <label class="fs-6 fw-semibold mb-2">Options</label>
                                <textarea class="form-control form-control-solid" rows="3" name="options"
                                    placeholder="Seperate by comma (,). ex: option 1, option 2, option 3"></textarea>
                            </div>
                        </div>

                        <div class="form-group w-full"><label for="default_value" class="control-label">Default value</label>
                            <input type="text" placeholder="Input Default value" class=" form-control form-control-solid  " id="default_value" name="default_value"
                                class="form-control form-control-solid ">
                        </div>

                        <div class="form-group w-full"><label for="class" class="control-label">CSS Class</label>
                            <input type="text" placeholder="Add Field Class" class=" form-control form-control-solid  " id="class" name="class"
                                class="form-control form-control-solid " value="form-control form-control-solid">
                        </div>

                        <div class="form-group w-full"><label for="sort" class="control-label">Sort</label>
                            <input type="text" placeholder="Filed sorting" class=" form-control form-control-solid  " id="sort" name="sort"
                                class="form-control form-control-solid " value="1">
                        </div>
                    </div>
                    

                    <div class="text-end">
                        <a href="{{route('CustomField')}}" class="btn btn-light me-3">
                            Back
                        </a>

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