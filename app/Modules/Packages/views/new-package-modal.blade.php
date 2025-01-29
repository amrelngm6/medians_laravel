
<div class="modal fade show active" id="new-package-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon text-danger fs-2hx close-modal" data-modal="#new-package-modal">
                    <i class='bx bx-message-square-x'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="new_package_form" method="POST" action="{{route('Package.store')}}" enctype="multipart/form-data" class="ajax-form form fv-plugins-bootstrap5 fv-plugins-framework">
                    @csrf
                    <input type="hidden" name="status" value="1" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add New Package</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Create new Package to let <span class="text-danger">Business Owners</span> subscribe to it.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Card body-->
                    <div class="card-body border-top p-9 px-2">

                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-3  px-0 col-form-label required fw-semibold fs-6">Package Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-9">
                                <div class="fv-plugins-icon-container fv-row w-full">
                                    <input type="text" name="name" class="form-control form-control-lg form-control-solid" placeholder="Package name" value="">
                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-3  px-0 col-form-label required fw-semibold fs-6">Description</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-9 fv-row fv-plugins-icon-container">
                                <input type="text" name="description" class="form-control form-control-lg form-control-solid" placeholder="ex: Professional Package">
                                <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                </div>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->


                        
                        <!--begin::Input group-->
                        <div class="row mb-6">
                            <!--begin::Label-->
                            <label class="col-lg-3  px-0 col-form-label required fw-semibold fs-6">Type</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-9 ">
                                
                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center pt-4">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="payment_type" onChange="(function(){ jQuery('#price-row').show() })()" value="paid" class="form-check-input h-20px w-20px" type="radio" />
                                        <span class="form-check-label fw-semibold">Is Paid </span>
                                    </label>
                                    <!--end::Checkbox-->
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input name="payment_type" onChange="(function(){ jQuery('#price-row').hide() })()" value="free" checked class="form-check-input h-20px w-20px" type="radio" />
                                        <span class="form-check-label fw-semibold">Free </span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            <!--end::Col-->
                            
                        </div>
                        <!--end::Input group-->
                        
                        
                        <!--begin::Input group-->
                        <div class="row mb-6" id="price-row" style="display:none">
                            <!--begin::Label-->
                            <label class="col-lg-3  px-0 col-form-label required fw-semibold fs-6">Price</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-9 ">
                                <!--begin::Row-->
                                <div class="row">
                                    <!--begin::Col-->
                                    <div class="fv-plugins-icon-container fv-row w-full">
                                        <input type="text" name="cost_month" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Monthly" value="">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="fv-plugins-icon-container fv-row w-full">
                                        <input type="text" name="cost_quarter" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Per Quarter" value="">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="fv-plugins-icon-container fv-row w-full">
                                        <input type="text" name="cost_year" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Annually" value="">
                                        <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                        </div>
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                            </div>
                        </div>
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