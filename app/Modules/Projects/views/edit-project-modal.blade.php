
<div class="modal fade  active show" id="edit-project-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#edit-project-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_edit_target_form" class="form ajax-form" action="{{route('Projects.update', $project->project_id)}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Edit Project</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Change the project details.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <div class="d-flex w-full gap-6">

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row w-full">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Name</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Project name "
                                    name="name" required value="{{$project->name}}" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column fv-row w-full">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Client</span>
                            </label>
                            <!--end::Label-->
                            
                            <div class="select-placeholder form-group w-full">
                                <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                                <select id="assigned" name="client_id"
                                    class="select-bootstrap form-control form-control-solid ">
                                    <option value="0"></option>
                                    @foreach ($clients as $client)
                                    <option value="{{$client->client_id}}" @if ($client->client_id == $project->client_id) selected @endif>
                                        {{$client->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--end::Input group-->
                        

                        
                    </div>

                        
                    <div class="d-flex w-full gap-6">
                        <!--begin::Input group-->
                        <div class=" w-full d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Start date</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Project name "
                                    name="start_date" type="date" value="{{$project->start_date}}" />
                        </div>
                        <!--end::Input group-->

                        
                        <!--begin::Input group-->
                        <div class=" w-full d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Deadline date</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Project name "
                                    name="deadline_date" type="date" value="{{$project->deadline_date}}" />
                        </div>
                        <!--end::Input group-->
                    </div>


                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Project Description</label>

                        <textarea class="form-control form-control-solid" rows="3" name="description"
                            placeholder="Type Description / Details">{{$project->description}}</textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Payment type</label>

                                <div class="fs-7 text-muted">Check if the project is paid or informative only</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label onClick="jQuery('#totalCost').removeClass('hidden')"  class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="radio"
                                        name="is_paid" value="0" @if ($project->is_paid == 0) checked @endif  />

                                    <span class="form-check-label fw-semibold">
                                        Paid
                                    </span>
                                </label>
                                <!--end::Checkbox-->
                                <!--begin::Checkbox-->
                                <label onClick="jQuery('#totalCost').addClass('hidden')" class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="radio"
                                        name="is_paid" value="1" @if ($project->is_paid == 1) checked @endif />

                                    <span class="form-check-label fw-semibold">
                                        Unpaid
                                    </span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="w-full  @if ($project->total_cost < 1) hidden @endif " id="totalCost">
                        <div class="d-flex flex-column mb-8 fv-row " >
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Total Cost</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Project cost"
                                    name="total_cost"  value="{{$project->total_cost}}" />
                        </div>
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Status</label>

                                <div class="fs-7 text-muted">If disabled the project and tasks will be restricted for team</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <div class="select-placeholder form-group w-full">
                                    <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                                    <select id="status_id" name="status_id"
                                        class="select-bootstrap form-control form-control-solid ">
                                        <option value=""></option>
                                        @foreach ($statusList as $status)
                                        <option value="{{$status->status_id}}" @if ($project->status_id == $status->status_id) selected @endif >
                                            {{$status->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
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
                            <span class="indicator-progress">
                                Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
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