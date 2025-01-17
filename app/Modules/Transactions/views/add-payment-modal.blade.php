<div class="modal fade active " id="add-payment-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#add-payment-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_new_card_form" class="form ajax-form" action="{{route('Transaction.store')}}">
                    @csrf
                    <input type="hidden" name="model_id" value="{{$invoice->id ?? ''}}">
                    <input type="hidden" name="model_type" value="{{get_class($invoice) ?? ''}}">

                    <input type="hidden" name="user_id" value="{{$invoice->client->client_id ?? ''}}">
                    <input type="hidden" name="user_type" value="{{get_class($invoice->client) ?? ''}}">
                    <input type="hidden" name="amount" value="{{$invoice->total ?? ''}}">
                    <input type="hidden" name="payment_method" value="{{$invoice->payment_method->name ?? 'Visa'}}">

                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Add New Payment</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Add new card using <a href="#!" class="fw-bold link-primary">Google Checkout</a> to proceed
                            this payment.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->
                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                            <span class="required">Name On Card</span>


                            <span class="ms-1" data-bs-toggle="tooltip" title="Specify a card holder's name">
                                <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                        class="path1"></span><span class="path2"></span><span
                                        class="path3"></span></i></span> </label>
                        <!--end::Label-->

                        <input type="text" class="form-control form-control-solid" placeholder=""
                            name="custom_field[card_name]" value="{{$invoice->client->name ?? ''}}" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-7 fv-row">
                        <!--begin::Label-->
                        <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                        <!--end::Label-->

                        <!--begin::Input wrapper-->
                        <div class="position-relative">
                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-solid" placeholder="Enter card number"
                                name="custom_field[card_number]" max="16" value="" />
                            <!--end::Input-->

                            <!--begin::Card logos-->
                            <div class="position-absolute translate-middle-y top-50 flex end-0 me-5">
                                <img src="/data/icons/visa.svg" alt="" class="h-25px" />
                                <img src="/data/icons/mastercard.svg" alt="" class="h-25px" />
                            </div>
                            <!--end::Card logos-->
                        </div>
                        <!--end::Input wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row mb-10">
                        <!--begin::Col-->
                        <div class="col-md-8 fv-row">
                            <!--begin::Label-->
                            <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
                            <!--end::Label-->

                            <!--begin::Row-->
                            <div class="row fv-row">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <select name="custom_field[card_expiry_month]"
                                        class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Month">
                                        <option></option>
                                        <option value="1" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <!--end::Col-->

                                <!--begin::Col-->
                                <div class="col-6">
                                    <select name="custom_field[card_expiry_year]"
                                        class="form-select form-select-solid" data-control="select2"
                                        data-hide-search="true" data-placeholder="Year">
                                        @for ($i = 0; $i < 10; $i++) <option value="{{date('Y')+$i}}">{{date('Y')+$i}}
                                            </option>
                                            @endfor
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-4 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                <span class="required">CVV</span>


                                <span class="ms-1" data-bs-toggle="tooltip" title="Enter a card CVV code">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span></i></span> </label>
                            <!--end::Label-->

                            <!--begin::Input wrapper-->
                            <div class="position-relative">
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4"
                                    placeholder="CVV" name="custom_field[card_cvv]" />
                                <!--end::Input-->

                                <!--begin::CVV icon-->
                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                    <i class="ki-duotone ki-credit-cart fs-2hx"><span class="path1"></span><span
                                            class="path2"></span></i>
                                </div>
                                <!--end::CVV icon-->
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning
                            </div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">
                                Save Card
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="d-flex flex-stack pt-10">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold form-label">Total Amount</label>
                            <div class="fs-7 fw-semibold text-muted">Total amount to pay for the Invoice</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <span class="fs-2">{{$settings['currency_code']}}{{$invoice->total}}</span>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="modal_new_card_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit Payment
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>