
<div class="modal fade  active show" id="new-Business-modal" tabindex="-1" >
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
                <form id="modal_new_deal_form" method="POST" class="ajax-form form" action="{{route('Deal.store')}}">
                    @csrf
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create deal</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Deals used as second step after Lead conversion, 
                            and you can set deal as Client if Won
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <div class="w-full flex gap-10">

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row w-full">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Name</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Deal name " name="name">
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row w-full">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Amount</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid" placeholder="Deal budget amount" name="amount">
                        </div>
                        <!--end::Input group-->
                    </div>
                    <div class="w-full flex gap-10">

                        <div class="w-full">
                            <div class="w-full">
                                <label for="assigned" class="control-label">Client</label>
                                @php $selectedClient = $deal->client ?? null; @endphp
                                @include('clients::search-input')
                            </div>
                        </div>
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row w-full">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Expected Close date</span>
                            </label>
                            <!--end::Label-->
                            <input class="form-control form-control-solid  py-2" type="date" name="expected_due_date" value="{{date('Y-m-d', strtotime('+1 week'))}}">
                        </div>
                        <!--end::Input group-->
                        
                    </div>

                    <div class="w-full flex gap-10">
                        @include('pipeline::pipeline-input')
                    </div>

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Description</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid" placeholder="Deal description" name="description"></textarea>
                    </div>
                    <!--end::Input group-->


                    <!--begin::Actions-->
                    <div class="text-center">

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
@yield('search-scripts')
@yield('client-search-scripts')