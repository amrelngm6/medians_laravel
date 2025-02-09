
<div class="modal fade show active" id="new-shift-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#new-shift-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                        
                <form action="{{route('LeaveType.store')}}" class="w-full ajax-form fs-5 card-body " id="shift-form" >
                    @csrf

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add Leave Type </h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Manage your Staff Leave types with limits.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack w-full">
                            <div class="fw-semibold me-5 w-full">
                                <label for="assigned" class="control-label">Type name</label>
                                <div class="fs-7 text-muted">Name of the allowed Leave Type</div>
                            </div>
                            <div class="d-flex align-items-center w-full">
                                <input class="form-control form-control-solid" placeholder="Leave type name "
                                    name="name" />
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack w-full">
                            <div class="fw-semibold me-5 w-full">
                                <label for="assigned" class="control-label">Month limit</label>
                                <div class="fs-7 text-muted">Limit to apply for this type within a Month</div>
                            </div>
                            <div class="d-flex align-items-center w-full">
                                <input type="number" class=" form-control form-control-solid  " id="month_limit" name="month_limit">
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack w-full">
                            <div class="fw-semibold me-5 w-full">
                                <label for="assigned" class="control-label">Annual limit</label>
                                <div class="fs-7 text-muted">Limit to apply for this type within a Year</div>
                            </div>
                            <div class="d-flex align-items-center w-full">
                                <input type="number" class=" form-control form-control-solid  "  id="annual_limit" name="annual_limit"  >
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>
                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

@yield('search-scripts')
<script>
    MediansSettings.tooltipsPopovers() 
</script>
