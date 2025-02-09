<div class="modal fade show active " id="add-ticket-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger close-modal" data-modal="#add-ticket-modal">
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
                    <h1 class="mb-3">Create ticket</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        Create new ticket .
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <form action="{{route('Ticket.store')}}" class="w-full ajax-form fs-5 card-body " id="Ticket-form">
                    @csrf
                    <input type="hidden" name="model_id" value="{{$model_id ?? ''}}" />
                    <input type="hidden" name="model_type" value="{{get_class($clients->first()) ?? ''}}" >

                    <!--begin::Input group-->
                    <div class="flex gap-6 ">
                        <div class="d-flex flex-column w-full mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Client</span>
                            </label>
                            <!--end::Label-->
                            <input type="hidden" name="client_type" value="{{get_class($clients->first()) ?? ''}}" >
                            <select class="form-control form-control-solid select-bootstrap" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a Client"
                                name="client_id" required>
                                @foreach ($clients as $client)
                                <option value="{{$client->id()}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        @include('tickets::components.staff')
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="flex gap-6">
                        <div class="w-full d-flex flex-column mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Subject</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Ticket subject "
                                name="subject" />
                        </div>
                        
                        <div class="d-flex flex-column w-full mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Category</span>
                            </label>
                            <!--end::Label-->
                            <select class="form-control form-control-solid select-bootstrap" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a category"
                                name="category_id" required>
                                @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Ticket Description</label>

                        <textarea class="form-control form-control-solid" rows="3" name="message"
                            placeholder="Type Description / Details"></textarea>
                    </div>
                    <!--end::Input group-->





                    <!--begin::Input group-->
                    <div class="mb-15 hidden">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Add File</label>

                                <div class="fs-7 text-muted">Append files to this task</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">

                                <!--begin::Input group-->
                                <div class="d-flex flex-column  fv-row">
                                    <input class="form-control form-control-solid"
                                        placeholder="Project name " name="file" type="file" />
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

    
                    <!-- Render dynamic components -->
                    @foreach ($components as $component)
                        {!! $component !!}
                    @endforeach
                    


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
