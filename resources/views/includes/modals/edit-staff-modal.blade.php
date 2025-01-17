<?php $staff = App\Modules\Customers\Models\Staff::find($id); ?>
<div class="modal fade show active" id="edit-staff-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon text-danger fs-2hx close-modal" data-modal="#edit-staff-modal">
                    <i class='bx bx-message-square-x'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="edit_staff_form" method="POST" action="{{route('Staff.update', $staff->staff_id)}}" enctype="multipart/form-data" class="ajax-form form fv-plugins-bootstrap5 fv-plugins-framework">
                    <input type="hidden" name="staff_id" value="{{$staff->staff_id}}" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Edit Staff  </h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Edit Staff information and role.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9">
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label fw-semibold fs-6">Avatar</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Image input-->
                                <div class="image-input image-input-outline" style="background-image: url('/data/profile/blank.svg')">
                                    <div class="h-125px image-input-wrapper overflow-auto w-125px" style="background-image: url(/data/profile/blank.svg)">
                                        <img id="imagePreview" src="{{$staff->picture}}" />
                                    </div>
                                    <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                        <i class="bx bx-user fs-7"></i>
                                        <input type="file" id="imageInput" name="avatar" class="hidden" accept=".png, .jpg, .jpeg">
                                        <input type="hidden" name="avatar_remove">
                                    </label>
                                </div>
                                <!--begin::Hint-->
                                <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                <!--end::Hint-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Full Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="fv-plugins-icon-container fv-row w-full">
                                        <input type="text" name="first_name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First name" value="{{$staff->first_name}}">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="fv-plugins-icon-container fv-row w-full">
                                        <input type="text" name="last_name" class="form-control form-control-lg form-control-solid" placeholder="Last name" value="{{$staff->last_name}}">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="email" name="email" class="form-control form-control-lg form-control-solid" placeholder="ex: mail@example.com" value="{{$staff->email}}">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Position</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                <input type="position" name="position" class="form-control form-control-lg form-control-solid" placeholder="ex: Developer" value="{{$staff->position}}">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                        
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Role</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 ">
                                
                                <?php $roles = App\Modules\Core\Models\Role::forStaff()->get(); ?>
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center pt-4">
                                    @foreach ($roles as $role)
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="role_id" value="{{$role->id}}" class="form-check-input h-20px w-20px" {{$staff->role_id == $role->id ? 'checked' : ''}} type="radio" />
                                        <span class="form-check-label fw-semibold"> {{$role->name}} </span>
                                    </label>
                                    <!--end::Checkbox-->
                                    @endforeach
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                        
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 ">
                                
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center pt-4">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="status" value="0" class="form-check-input h-20px w-20px" {{$staff->status ? '' : 'checked'}} type="radio" />
                                        <span class="form-check-label fw-semibold"> Disabled </span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="status" value="1" class="form-check-input h-20px w-20px" {{$staff->status ? 'checked' : ''}} type="radio" />
                                        <span class="form-check-label fw-semibold"> Active </span>
                                    </label>
                                    <!--end::Checkbox-->
                                    
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                    </div>
                    <!--end::Card body-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="modal_edit_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="modal_edit_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
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