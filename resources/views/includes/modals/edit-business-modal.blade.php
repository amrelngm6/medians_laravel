<?php  $business = \App\Modules\Core\Models\Business::find($business_id); ?>
<div class="modal fade  active show" id="edit-Business-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#edit-Business-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_edit_target_form" method="POST" class="ajax-form form" action="{{route('Business.update', $business->business_id)}}">
                    @csrf
                    <input type="hidden" name="business_id" value="{{$business->business_id}}" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Edit Business</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Edit <span class="fw-semibold text-danger">{{$business->name}}</span> Information & Business Owner.
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
                        <input class="form-control form-control-solid" placeholder="Business name " value="{{$business->name}}" name="name" />
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Owner</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid select2" placeholder="Select a Team Member" name="owner_id">
                            <option ></option>
                            <?php $staffList = \App\Modules\Customers\Models\Staff::forBusiness(0)->get(); ?>
                            @foreach ($staffList as $staff)
                            <option value="{{$staff->staff_id}}" {{$staff->staff_id == $business->owner_id ? 'selected' : ''}} >{{$staff->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <!--end::Input group-->

                    
                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Category</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid select2" placeholder="Select a Category" name="category_id">
                            <option ></option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}" {{$category->id == $business->category_id ? 'selected' : ''}} >{{$category->name}}</option>
                            @endforeach 
                        </select>
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