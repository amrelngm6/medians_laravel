
    <div class="modal fade  active " id="create-project-milestone" tabindex="-1" >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <a class="cursor-pointer text-danger close-modal" data-modal="#create-project-milestone">
                        <i class='bx bx-message-square-x fs-2qx'></i>
                    </a>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create milestone</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Create new milestone for <a href="">{{$project->name}}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <form action="{{route('Milestone.store')}}" class="w-full ajax-form fs-5 card-body " id="milestone-form">
            @csrf
            <input type="hidden" name="model_id" value="{{$project->project_id}}" />
            <input type="hidden" name="model_type" value="{{get_class($project)}}" />

            <div class="w-full flex gap-10">

                <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                    <input type="text" placeholder="Milestone title" class=" form-control form-control-solid  " id="name" name="name"
                        class="form-control form-control-solid ">
                </div>

                <div class="form-group w-full"><label for="range" class="control-label"
                rel="popover" data-animate=" animated fadeIn " data-container="body"
                data-toggle="popover" data-placement="top"
                data-content="Set the start & End date of the milestone"
                data-title="Date Range" data-trigger="hover" data-html="true"
                >Date Range <i class="bx bx-help-circle"></i></label>
                    <input type="text" class="datepicker form-control form-control-solid  " id="range" name="date"
                        class="form-control form-control-solid ">
                </div>
            </div>
            <div class="w-full flex gap-10">

                <div class="w-full" id="project-access">
                    <label class="form-label required fw-semibold fs-6"
                        rel="popover" data-animate=" animated fadeIn " data-container="body"
                        data-toggle="popover" data-placement="top"
                        data-content="Client can see this milestone"
                        data-title="Privacy" data-trigger="hover" data-html="true"
                        >Client access <i class="bx bx-help-circle"></i></label>
                    <div class="form-group w-full flex">
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="client_access" class="form-check-input h-20px w-20px" value="1" type="radio" />
                            <span class="form-check-label fw-semibold"> Yes </span>
                        </label>
                        <label class="form-check form-check-custom form-check-solid me-10">
                            <input name="client_access" class="form-check-input h-20px w-20px" value="0" type="radio" />
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

                <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Submit
                    </span>
                </button>
            </div>
        </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
