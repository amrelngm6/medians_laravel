
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
                        <h1 class="mb-3">Add Shift </h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Manage your Staff time Shifts.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->


                    
                    
                    


                    <div class="w-full flex gap-10 mb-10">
                        <div class="w-full ">
                            <!--begin::Input group-->
                            <div class="mb-15 fv-row">
                                <div class=" w-full">
                                    <div class="fw-semibold me-5 w-full">
                                        <label for="assigned" class="control-label">Shift name</label>
                                        <div class="fs-7 text-muted">Name of the Shift</div>
                                    </div>
                                    <div class="d-flex align-items-center w-full">
                                        <input class="form-control form-control-solid" placeholder="Shift name "
                                            name="name" value="{{$shift->name}}" />
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->

                            <div class="w-full flex gap-10">
                                <div class="form-group w-full"><label for="start_time" class="control-label" rel="popover"
                                data-trigger="hover"data-toggle="popover" data-title="Attendance"
                                        data-placement="top" data-content="Attendance Start time">Start time <i
                                        class="bx bx-help-circle"></i></label>
                                    <input type="time" class=" form-control form-control-solid  " id="start_time" name="start_time"
                                        value="{{$shift->start_time}}">
                                </div>
                                <div class="form-group w-full"><label for="end_time" class="control-label" rel="popover"
                                        data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                        data-placement="top" data-content="End time of the Shift"
                                        data-title="Leave time" data-trigger="hover" data-html="true">Leave time <i
                                            class="bx bx-help-circle"></i></label>
                                    <input type="time" class=" form-control form-control-solid  " 
                                        id="end_time" name="end_time"  value="{{$shift->end_time}}" >
                                </div>
                            </div>
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
