<div class="modal fade  active " id="create-project-invoice" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger close-modal" data-modal="#create-project-invoice">
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
                    <h1 class="mb-3">Create invoice</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        Create new invoice for <a href="">{{$project->name}}</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <form action="{{route('Invoice.store')}}" class="w-full ajax-form card-body " id="Invoice-form">
                    @csrf
                    <input type="hidden" name="model_id" value="{{$project->project_id}}" />
                    <input type="hidden" name="model_type" value="{{get_class($project)}}" />

                    <div class="w-full flex gap-10">
                       
                        <div class="form-group w-full"><label for="client_id" class="control-label">Client</label>
                            <input type="text" class=" form-control form-control-solid  " id="client_id"
                                class="form-control form-control-solid " value="{{$project->client->name ?? ''}}"
                                disabled />
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

                        <div class="form-group w-full"><label for="date" class="control-label" rel="popover"
                                data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Set the Issue date of the Invoice"
                                data-title="Issue Date" data-trigger="hover" data-html="true">Date <i
                                class="bx bx-help-circle"></i></label>
                            <input type="date" class=" form-control form-control-solid  " id="date" name="date"
                                class="form-control form-control-solid " value="{{date('Y-m-d')}}">
                        </div>
                        <div class="form-group w-full"><label for="due_date" class="control-label" rel="popover"
                                data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                data-placement="top" data-content="Set the date of the Invoice to be paid"
                                data-title="Due Date" data-trigger="hover" data-html="true">Due Date <i
                                    class="bx bx-help-circle"></i></label>
                            <input type="date" class=" form-control form-control-solid  " min="{{date('Y-m-d')}}"
                                id="due_date" name="due_date" value="{{date('Y-m-d')}}" class="form-control form-control-solid ">
                        </div>
                    </div>
                    <div class="d-flex flex-column gap-7 ">

                        <div class="card card-flush py-4">
                            <div class="card-header mb-10">
                                <div class="card-title block">
                                    <h2>Items</h2>
                                    <div class="form-text">Pick from your current <a href="{{route('Item')}}">Services /
                                            Items</a> list</div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="w-full">
                                    <label class="form-label fw-bold pb-4">Invoice items</label>
                                    <div>
                                        <div class="form-group" id="variants-container">

                                            <div class="form-group d-flex  align-items-center gap-5 flex ">

                                                <span class="mw-100 min-w-200px"> Title</span>
                                                <span class="mw-100 w-full"> Quantity</span>
                                                <span class="mw-100 w-full"> Unit price</span>
                                                <span class="mw-100 w-full"> Tax</span>
                                                <span class="mw-100 w-full"> Subtotal</span>
                                                <span class="mw-100 w-full"> Total</span>
                                                --
                                            </div>
                                        </div>
                                        <div class="form-group mt-5">
                                            <a href="#!" data-modal="#items-modal"
                                                class="btn btn-sm btn-light-primary show-modal">
                                                <i class="bx bx-add-to-queue"></i>
                                                <span>Add new</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="invoice-total py-10 ms-auto d-lg-flex gap-20">
                        <div class="w-full">

                            <div class="d-flex flex-column my-10">
                                <label class="fs-6 fw-semibold mb-2">Details</label>
                                <textarea class="form-control form-control-solid" rows="3" name="content"
                                    placeholder="Type Details"></textarea>
                            </div>

                        </div>
                        <div class="w-50 flex flex-column fs-5">
                            <div class="flex gap-10">
                                <div class="w-full">
                                    <div class="mb-3">
                                        <label class="form-label fs-4">Discount</label>
                                        <input type="text" name="discount_amount" class="form-control" value="0"
                                            id="discount_amount">
                                    </div>
                                </div>
                            </div>
                            <div class="flex gap-10 py-2">
                                <div class="w-full">
                                    <p class="text-muted mb-1 text-start">Sub Total :</p>
                                </div>
                                <div class="">
                                    <p class="f-w-600 mb-1 text-end">{{$settings['currency_code']}}<span id="subtotal">0.00</span></p>
                                </div>
                            </div>
                            <div class="flex gap-10 py-2">
                                <div class="w-full">
                                    <p class="text-muted mb-1 text-start">Discount :</p>
                                </div>
                                <div class="">
                                    <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="discount">0.00</span></p>
                                </div>
                            </div>
                            <div class="flex gap-10 py-2">
                                <div class="w-full">
                                    <p class="text-muted mb-1 text-start">Taxes :</p>
                                </div>
                                <div class="">
                                    <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="tax">0.00</span></p>
                                </div>
                            </div>
                            <div class="flex gap-10 py-2">
                                <div class="w-full">
                                    <p class="text-muted mb-1 text-start">Grand Total :</p>
                                </div>
                                <div class="">
                                    <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="total">0.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input value="{{$project->client_id}}" name="client_id" type="hidden" />
                    <input id="total_input" name="total" type="hidden" />
                    <input id="subtotal_input" name="subtotal" type="hidden" />
                    <input id="tax_input" name="tax_amount" type="hidden" />
                    <input id="discount_input" name="discount" type="hidden" />
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
                </form>

                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@include('estimate::items-modal')
