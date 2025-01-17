
<div class="modal fade  active show" id="new-Business-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#new-Business-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_new_target_form" method="POST" class="ajax-form form" action="{{route('Category.store')}}">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create category</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Add new category for specific Model.
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
                        <input class="form-control form-control-solid" placeholder="Status name "
                                name="name" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Description</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" type="text" placeholder="Description" name="description" />
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row" 
                            rel="popover" data-animate=" animated fadeIn " data-container="body"
                            data-toggle="popover" data-placement="top" data-trigger="hover"  data-html="true"
                            data-content="The Model that this category related with"
                            data-title="Category Model ( Type )"  >
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2"
                            >
                            <span class="required">Model</span>
                        </label>
                        <!--end::Label-->
                        <select class="form-control form-control-solid select2" placeholder="Select a Team Member" name="model">
                            <?php $Modules = \App\Models\Module::get(); ?>
                            <?php $StatusList = \App\Modules\Core\Models\Status::forBusiness(0)->get(); ?>
                            <option value=""></option>
                            @foreach ($Modules as $Module)
                            <option value="{{$Module->path}}\Models\{{$Module->name}}">{{$Module->name}}</option>
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

                                <div class="pt-1 fs-7 text-muted">Select category color</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center pt-6">
                                @foreach (['primary', 'success', 'info', 'accent', 'dark'] as $color )
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="radio"
                                        name="color" value="{{$color}}" />

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
<script> 
    MediansSettings.dropdownWidget() 
</script>