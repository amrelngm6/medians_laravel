
<div class="modal fade  active show" id="edit-reminders-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#edit-reminders-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_edit_target_form" method="POST" class="ajax-form form" action="{{route('Reminder.store')}}">
                    @csrf
                    <input type="hidden" name="model_type" value="{{$modelType ?? ''}}" />
                    <input type="hidden" name="model_id" value="{{$modelId ?? ''}}" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create Reminder</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Create new Reminder.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" placeholder="Reminder name " name="name" />
                    </div>
                    <!--end::Input group-->


                    <div class="w-full flex gap-10">
                        <!--begin::Input group-->
                        <div class="w-full d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Date</span>
                            </label>
                            <!--end::Label-->
                            <input type="date" class="form-control form-control-solid"  name="date" min="{{date('Y-m-d')}}" value="{{date('Y-m-d')}}" />
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="w-full d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Time</span>
                            </label>
                            <!--end::Label-->
                            <input type="time" class="form-control form-control-solid"  name="time" value="{{date('H:i:s', strtotime('+1hour'))}}"  />
                        </div>
                        <!--end::Input group-->
                    </div>

                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Description</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid" placeholder="Reminder description" name="description"></textarea>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="modal_edit_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="modal_edit_target_submit" class="btn btn-primary">
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
<script> 
    MediansSettings.dropdownWidget() 
</script>