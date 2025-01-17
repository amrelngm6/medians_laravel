@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0 flex w-full">
                
                <h3 class="fw-bold m-0 w-full">Files list</h3>
                <span data-modal="#upload-modal" class="show-modal fw-bold m-0 btn btn-md btn-primary ">Add File
                        </span>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        
        <!--begin::Card body-->
        <div class="card-body  ">
            <hr />
            <div class="flex flex-column gap-3 p-7">
                @foreach ($files as $file)
                <div  class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                    <div class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                        @include('uploads::components.file-icon')
                    </div>
                    <div class="grow min-w-150px">
                        <h6>{{$file->file_name}}</h6>
                        <p class="text-slate-500 dark:text-zink-200">{{$file->fileSizeText()}}</p>
                    </div>
                    <div class="w-full">
                        Uploaded at {{date('M d, Y', strtotime($file->created_at))}}
                    </div>
                    
                    <div class="flex flex-none  gap-2">
                        <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px" src="/{{$file->user->picture ?? ''}}"> <span class="pt-1"><b>{{$file->user->name ?? ''}}</b></span>     
                    </div>
                    <div class="flex items-center justify-end gap-2">
                        <a href="{{route('Uploads.download', $file->id)}}?_token={{csrf_token()}}" target="_blank" class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                            <i class="bx bx-download fs-4"></i>
                        </a>
                        <a href="#!" data-path="{{route('Uploads.delete', $file->id)}}" class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                            <i class="bx bx-trash  fs-4"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            @if (count($files) < 1) No data here yet @endif </div>
                <!--end::Card body-->

        </div>
    </div>

<div class="modal fade  active" id="upload-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon text-danger fs-2hx close-modal" data-modal="#upload-modal">
                    <i class="bx bx-message-square-x"></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="project-file-form" action="{{route('Uploads.store')}}" class="form ajax-form" novalidate="novalidate">
                    @csrf
                    <input type="hidden" name="model_id" value="{{$project->project_id ?? ''}}">
                    <input type="hidden" name="model_type" value="{{get_class($project) ?? ''}}">

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Upload new file</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Allowd files types are customizeable from Settings page
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">

                            <!--begin::Col-->
                            <div class="col-lg-8 flex gap-10">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('/data/profile/blank.svg')">
                                    <div class="image-input-wrapper w-125px h-125px" style="background-image: url(/data/icons/picture.svg)">
                                    </div>
                                    
                                </div>
                                <!--begin::Hint-->
                                <div class="form-text">
                                    <p class="pb-10">Allowed file types: png, jpg, jpeg.</p>
                                    <label class="block btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                        <i class="bx bx-cloud-upload  fs-1"></i>
                                        <input type="file" name="file" class="hidden" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                    </label>
                                </div>
                                <!--end::Hint-->
                            </div>
                            <div class="col-md-4">
                                
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
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
                    <input type="hidden">
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

    @endsection
    