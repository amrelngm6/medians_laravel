<div class="modal fade show active " id="add-goal-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger close-modal" data-modal="#add-goal-modal">
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
                    <h1 class="mb-3">Create goal</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        Create new goal for <a href="">{{$user->name ?? ''}}</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <form action="{{route('Goal.store')}}" class="w-full ajax-form fs-5 card-body " id="Goal-form">
                    @csrf
                    <div class="w-full flex gap-10">
                       
                        <input type="hidden"  value="{{$user->id() ?? ''}}" name="staff_id" />
                        
                        <div class="form-group w-full"><label for="date" class="control-label" rel="popover"
                                data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Goal Name"
                                data-trigger="hover" data-html="true">Name <i
                                class="bx bx-help-circle"></i></label>
                            <input type="text" class=" form-control form-control-solid  " id="name" name="name"
                                class="form-control form-control-solid " value="">
                        </div>
                        
                        <div class="form-group w-full"><label for="status_id" class="control-label">Status</label>
                            <select name="status_id" id="status_id" class="form-control form-control-solid">
                                @foreach ($statusList as $status)
                                <option value="{{ $status->status_id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex gap-10">
                        
                        <div class="form-group w-full"><label for="date" class="control-label">Start Date</label>
                            <input type="date" class=" form-control form-control-solid  " id="date" name="date"
                                class="form-control form-control-solid " value="{{date('Y-m-d')}}">
                        </div>
                        
                        <div class="form-group w-full"><label for="due_date" class="control-label">Due Date</label>
                            <input type="date" class=" form-control form-control-solid  " id="due_date" name="due_date"
                                class="form-control form-control-solid " value="{{date('Y-m-d', strtotime('+7 days'))}}">
                        </div>
                    </div>
                    
                    <div class="w-full flex gap-10 w-full">
                        <div class="form-group w-full">
                            <label for="description" class="control-label">Description</label>
                            <textarea class="form-control form-control-solid w-full" id="description" name="description" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="text-center">
                        <button  data-modal="#add-goal-modal" type="reset" id="modal_new_target_cancel" class="close-modal btn btn-light me-3">
                            Cancel
                        </button>
                        <button type="submit" id="modal_new_goal_submit" class="btn btn-primary">
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
<script>MediansSettings.tooltipsPopovers()</script>