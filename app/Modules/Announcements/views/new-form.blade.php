<form action="{{route('Announcement.store')}}" class="w-full ajax-form fs-5 card-body " id="announcement-form">
            @csrf
            <input type="hidden" name="model_id" value="{{$project->project_id ?? 0}}" />
            <input type="hidden" name="model_type" value="{{isset($project) ? get_class($project) : null}}" />

            <div class="w-full flex gap-10">

                <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                    <input type="text" placeholder="Announcement title" class=" form-control form-control-solid  " id="name" name="name"
                        class="form-control form-control-solid ">
                </div>

                <div class="form-group w-full"><label for="range" class="control-label"
                rel="popover" data-animate=" animated fadeIn " data-container="body"
                data-toggle="popover" data-placement="top"
                data-content="Set the start & End date of the announcement"
                data-title="Date Range" data-trigger="hover" data-html="true"
                >Date Range <i class="bx bx-help-circle"></i></label>
                    <input type="text" class="datepicker form-control form-control-solid  " id="range" name="date"
                        class="form-control form-control-solid ">
                </div>
            </div>
            <div class="w-full flex gap-10">

            <div class="w-full">
                    <label class="form-label required fw-semibold fs-6"
                        rel="popover" data-animate=" animated fadeIn " data-container="body"
                        data-toggle="popover" data-placement="top"
                        data-content="Manage who can see this announcement"
                        data-title="Privacy" data-trigger="hover" data-html="true"
                        >Is Private <i class="bx bx-help-circle"></i></label>
                    <div class="form-group w-full flex">
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="is_private" onChange="(function(){ jQuery('#project-access').hide() })()" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> Yes </span>
                        </label>
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="is_private"  onChange="(function(){ jQuery('#project-access').show() })()" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> No </span>
                        </label>
                    </div>
                </div>

                
                <div class="w-full" id="project-access">
                    <label class="form-label required fw-semibold fs-6"
                        rel="popover" data-animate=" animated fadeIn " data-container="body"
                        data-toggle="popover" data-placement="top"
                        data-content="Staff members can see this announcement"
                        data-title="Privacy" data-trigger="hover" data-html="true"
                        >Staff access <i class="bx bx-help-circle"></i></label>
                    <div class="form-group w-full flex">
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="staff_access" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> Yes </span>
                        </label>
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="staff_access" class="form-check-input h-20px w-20px" type="radio" />
                            <span class="form-check-label fw-semibold"> No </span>
                        </label>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-column my-10">
                <label class="fs-6 fw-semibold mb-2">Details</label>

                <textarea class="form-control form-control-solid" rows="3" name="description"
                    placeholder="Type Details"></textarea>
            </div>
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
        </form>