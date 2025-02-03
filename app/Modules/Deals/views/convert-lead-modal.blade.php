<div class="modal fade  active show" id="convert-lead-modal" tabindex="-1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#convert-lead-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_edit_target_form" method="POST" class="ajax-form form" action="{{route('Deal.store')}}">
                    @csrf
                    <input name="lead_id" type="hidden" value="{{$lead->lead_id}}" />
                    
                    <!--begin::Heading-->
                    
                    <div class="w-full flex gap-10">
                        <div class="mb-13 w-full">
                            <!--begin::Title-->
                            <h1 class="mb-3">Create Deal</h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                Convert Lead to <span class="text-danger">Deal</span>, and add new Client.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                        
                        <div class="mb-6 w-full">
                            <h4 class="mt-10">Client information</h4>
                        </div>
                    </div>

                    <div class="w-full flex gap-10">

                        <div class="w-full">

                            <div class="w-full flex gap-10">

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row w-full">
                                    <!--begin::Label-->
                                    <label  rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Name of the new Deal" 
                                        class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Name <i class="bx bx-help-circle"></i> </span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid" placeholder="Deal name "
                                        value="{{$lead->name}}" name="name">
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row w-full">
                                    <!--begin::Label-->
                                    <label rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Expected amount from this Deal" 
                                        class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Amount <i class="bx bx-help-circle"></i> </span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="number" class="form-control form-control-solid"
                                        placeholder="Deal budget amount" name="amount">
                                </div>
                                <!--end::Input group-->
                            </div>


                            <div class="w-full flex gap-10">
                                @include('pipeline::pipeline-input')
                            </div>


                            <div class="w-full flex gap-10">

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row w-full">
                                    <!--begin::Label-->
                                    <label rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Exptected date to close the Deal" 
                                        class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Expected Close date <i class="bx bx-help-circle"></i> </span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid  py-2" type="date"
                                        name="expected_due_date">
                                </div>
                                <!--end::Input group-->

                            </div>

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Description</span>
                                </label>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid" placeholder="Deal description"
                                    name="description"></textarea>
                            </div>
                            <!--end::Input group-->
                        </div>

                        <div class="w-full">

                            <!--begin::Input group-->
                            <div class="mb-6">
                                <!--begin::Label-->
                                <label rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-content="Name of the Client" 
                                    class="required fw-semibold fs-6">Full Name <i class="bx bx-help-circle"></i> </label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class="">
                                    <!--begin::Row-->
                                    <div class="row">
                                        <!--begin::Col-->
                                        <div class="fv-plugins-icon-container fv-row w-full">
                                            <input type="text" name="first_name"
                                                class="form-control form-control-lg form-control-solid mb-3 mb-lg-0"
                                                placeholder="First name" value="{{$lead->first_name}}">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="fv-plugins-icon-container fv-row w-full">
                                            <input type="text" name="last_name"
                                                class="form-control form-control-lg form-control-solid"
                                                placeholder="Last name" value="{{$lead->last_name}}">
                                            <div
                                                class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-6">
                                <!--begin::Label-->
                                <label class="required fw-semibold fs-6 mb-3">Email</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class=" fv-row fv-plugins-icon-container">
                                    <input type="email" name="email"
                                        value="{{$lead->email}}"
                                        class="form-control form-control-solid"
                                        placeholder="ex: mail@example.com">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->


                            <!--begin::Input group-->
                            <div class=" mb-6">
                                <!--begin::Label-->
                                <label class=" required fw-semibold fs-6">Position</label>
                                <!--end::Label-->

                                <!--begin::Col-->
                                <div class=" fv-row fv-plugins-icon-container">
                                    <input type="position" name="position"
                                        value="{{$lead->position}}"
                                        class="form-control form-control-lg form-control-solid"
                                        placeholder="ex: Developer">
                                    <div
                                        class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback">
                                    </div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->




                        </div>
                        <!--end::Card body-->

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
<script>
MediansSettings.dropdownWidget();
MediansSettings.tooltipsPopovers();
</script>
@yield('search-scripts')