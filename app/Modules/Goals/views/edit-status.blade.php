
<div class="modal fade  active " id="edit-goal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger close-modal" data-modal="#edit-goal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </a>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form  id="modal_edit_status_form" method="POST" class="form ajax-form" action="{{route('Goal.update', $goal->id)}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Edit Goal</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Edit status  for goal <a href="#!"
                                class="fw-bold link-primary">{{$goal->code ?? ''}}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    
                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Status</span>
                        </label>
                        <!--end::Label-->
                        
                        <select class="form-control form-control-solid " placeholder="Select a Status" name="status_id">
                            <option value=""></option>
                            @foreach ($statusList as $statusRow)
                            <option value="{{$statusRow->status_id}}" 
                            @if ($statusRow->status_id == $goal->status_id ) selected @endif
                            >{{$statusRow->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <!--end::Input group-->

                    
                    <div class="form-group w-full"><label for="date" class="control-label" rel="popover"
                            data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                            data-placement="top" data-content="Set the Issue date of the Goal"
                            data-title="Issue Date" data-trigger="hover" data-html="true">Due Date <i
                            class="bx bx-help-circle"></i></label>
                        <input type="date" class=" form-control form-control-solid  " id="date" name="due_date"
                            class="form-control form-control-solid " value="{{$goal->due_date}}">
                    </div>
                    
                    <!--begin::Actions-->
                    <div class="text-center">

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