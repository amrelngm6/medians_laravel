
<div class="modal fade show active" id="new-attendance-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#new-attendance-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                        
                <form action="{{route('Attendance.store')}}" class="w-full ajax-form card-body " id="attendance-form" >
                    @csrf

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add Attendance Record</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Select staff member to add his attendance.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack w-full">
                            <div class="fw-semibold me-5 w-full">
                                <label for="assigned" class="control-label">Select User</label>
                                <div class="fs-7 text-muted">Select related User of this attendance record</div>
                            </div>
                            <div class="d-flex align-items-center w-full">
                                @include('staff::search-input')
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->


                    <div class="w-full flex gap-10">

                        <div class="form-group w-full"><label for="check_in" class="control-label" rel="popover"
                        data-trigger="hover"data-toggle="popover" data-title="Check in"
                                data-placement="top" data-content="Set the Check-in time">Check-in time <i
                                class="bx bx-help-circle"></i></label>
                            <input type="datetime-local" class=" form-control form-control-solid  " id="check_in" name="check_in"
                                value="{{date('Y-m-d H:i', strtotime('-7 Hour'))}}">
                        </div>
                        <div class="form-group w-full"><label for="check_out" class="control-label" rel="popover"
                                data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Set the Check-out time"
                                data-title="Check out" data-trigger="hover" data-html="true">Check-out Date <i
                                    class="bx bx-help-circle"></i></label>
                            <input type="datetime-local" class=" form-control form-control-solid  " 
                                id="check_out" name="check_out"  value="{{date('Y-m-d H:i')}}" >
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
