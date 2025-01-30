<?php $Modules = \App\Models\Module::get(); ?>

<div class="modal fade  active show" id="edit-pipeline-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#edit-pipeline-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_edit_target_form" method="POST" class="ajax-form form" action="{{route('Pipeline.update', $pipeline->pipeline_id)}}">
                    @csrf
                    <input name="pipeline_id" type="hidden" value="{{$pipeline->pipeline_id}}" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Update Pipeline</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Update <span class="text-danger">{{$pipeline->name}}</span> Models Pipeline list.
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
                        <input class="form-control form-control-solid" placeholder="Pipeline name " value="{{$pipeline->name}}"
                                name="name" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Sort</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" type="number" placeholder="Sort" value="{{$pipeline->sort}}" name="sort" />
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Model</span>
                        </label>
                        <!--end::Label-->
                        
                        <select class="form-control form-control-solid select2" placeholder="Select a Team Member" name="model">
                            <option value=""></option>
                            @foreach ($Modules as $Module)
                            <option value="{{$Module->path}}\Models\{{$Module->name}}" 
                            @if ($Module->path.'\\Models\\'.$Module->name == $pipeline->model )
                            selected
                            @endif
                            >{{$Module->name}}</option>
                            @endforeach 
                        </select>
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="flex flex-column">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5 flex gap-10">
                                <label class="fs-6">Color</label>

                                <div class="pt-1 fs-7 text-muted">Select pipeline color</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center pt-6">
                                @foreach (['primary', 'success', 'info', 'accent', 'dark'] as $color )
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="radio"
                                        name="color" value="{{$color}}" @if ($color == $pipeline->color ) checked @endif />

                                    <span class="form-check-label fw-semibold bg-{{$color}} w-20px h-20px"> </span>
                                </label>
                                <!--end::Checkbox-->
                                @endforeach
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
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