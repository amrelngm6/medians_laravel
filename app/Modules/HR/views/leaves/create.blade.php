
<div class="modal fade show active" id="new-shift-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-700px">
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
                        
                <form action="{{route('Shift.store')}}" class="w-full ajax-form card-body " id="shift-form" >
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


                    <div class="w-full flex gap-10">

                        <div class="form-group w-full"><label for="month_limit" class="control-label" rel="popover"
                            data-trigger="hover" data-toggle="popover" data-title="Month limit"
                                data-content="Limit to use this type within a Month">Month limit <i
                                class="bx bx-help-circle"></i></label>
                            <input type="number" class=" form-control form-control-solid  " id="month_limit" name="month_limit"
                                >
                        </div>
                        <div class="form-group w-full"><label for="annual_limit" class="control-label" rel="popover"
                                data-animate=" animated fadeIn " data-toggle="popover"
                                data-placement="" data-content="Limit to apply for this type within a Year"
                                data-title="Annual limit" data-trigger="hover" data-html="true">Annual limit <i
                                    class="bx bx-help-circle"></i></label>
                            <input type="number" class=" form-control form-control-solid  " 
                                id="annual_limit" name="annual_limit"  >
                        </div>
                    </div>
                    
                    


                    <div class="w-full flex gap-10 mb-10">

                        <div class="form-group w-full"><label class="control-label" rel="popover"
                            data-trigger="hover"data-toggle="popover" data-title="Working days"
                            data-placement="top" data-content="Working days for attendance">Working days <i
                            class="bx bx-help-circle"></i></label>
                            
                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center pt-6">
                                @foreach (['saturday', 'sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday'] as $dayName )
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-4">
                                    <input class="form-check-input h-20px w-20px me-1" type="checkbox"
                                        name="{{$dayName}}" value="1" />
                                        {{ucfirst($dayName)}}
                                </label>
                                <!--end::Checkbox-->
                                @endforeach
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                    </div>
                    
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
