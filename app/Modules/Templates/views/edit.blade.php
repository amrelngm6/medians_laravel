@extends('templates::page')

@section('nav-title', 'Create Template')

@section('templates-page')

<div class="col-lg-12">
    <form action="{{route('Templates.update', $template->id)}}" class="ajax-form  w-full" id="templates-form">
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
                        <select disabled id="rel_model" onChange="(function(){  })()" 
                            class="form-control form-control-solid py-2 select-bootstrap">
                            <option value="{{$template->model}}">{{basename($template->model)}}</option>
                        </select>
                    </div>

                </div>
            </div>
            
            <div class="card mb-5 mb-xl-10 w-full" id="profile_details_view">
                <!--begin::Card header-->
                <div class="card-header cursor-pointer">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bold m-0">Template options</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <div class="card-body">
                    <div class="w-full  ">
                        
                        <div class="form-group w-full"><label for="name" class="required control-label"
                            >Template Name</label>
                            <input type="text" required placeholder="Template name" class=" form-control form-control-solid  " id="name" name="name"
                                class="form-control form-control-solid " value="{{$template->name}}">
                        </div>

                        <div class="w-full" id="field-options">
                            <div class="d-flex flex-column my-10" >
                                <label class="fs-6 fw-semibold mb-2">Template Content</label>
                                <textarea class="editor form-control form-control-solid" rows="3" name="content"
                                    placeholder="Template content with variables ">{{$template->content}}</textarea>
                            </div>
                        </div>

                    </div>
                    

                    <div class="text-end">
                        <a href="{{route('Templates')}}" id="modal_new_target_cancel" class="btn btn-light me-3">
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