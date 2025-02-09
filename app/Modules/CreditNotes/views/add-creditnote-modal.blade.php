<div class="modal fade show active " id="create-creditnote-invoice" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-1000px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger close-modal" data-modal="#create-creditnote-invoice">
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
                        Create new Credit Note for Invoice <a href="">{{$invoice->code}}</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <form action="{{route('CreditNote.store')}}" class="w-full ajax-form fs-5 card-body " id="CreditNote-form">
                    @csrf
                    <input name="model_type" type="hidden" value="{{get_class($invoice) ?? ''}}" />
                    <input name="model_id" type="hidden" value="{{$invoice->id ?? ''}}" />
                    
                    <div class="w-full flex gap-10">
                        
                        <div class="form-group w-full"><label for="date" class="control-label">Date</label>
                            <input type="date" class=" form-control form-control-solid  py-2" id="date" name="date"
                                class="form-control form-control-solid " value="{{date('Y-m-d')}}">
                        </div>
                        <div class="form-group w-full"><label for="status_id" class="control-label">Status</label>
                            <select name="status_id" id="status_id" class="form-control form-control-solid">
                                @foreach ($statusList as $status)
                                <option value="{{ $status->status_id }}">{{ $status->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="d-flex flex-column gap-7 ">

                        <div class="card card-flush pt-4">
                            <div class="card-header mb-4">
                                <div class="card-title block">
                                    <h2>Items</h2>
                                    <div class="form-text">Pick from current Invoice <a href="{{route('Item')}}">Services /
                                            Items</a> list</div>
                                </div>
                            </div>
                            <div class="card-body py-0">
                                <div class="w-full">
                                    <div>
                                        <div class="form-group" id="variants-container">

                                            <div class="form-group d-flex  align-items-center gap-5 flex ">

                                                <span class="mw-100 min-w-200px"> Title</span>
                                                <span class="mw-100 w-full"> Quantity</span>
                                                <span class="mw-100 w-full"> Unit price</span>
                                                <span class="mw-100 w-full"> Subtotal</span>
                                                --
                                            </div>

                                            @foreach ($invoice->items as $key => $item) 
                                            <div class="d-flex flex-column gap-3" id="variants{{$key}}">
                                                <div class="form-group d-flex  align-items-center gap-5 flex item-row" >

                                                    <input type="text" name="items[{{$key}}][item_name]" class="form-control mw-100 w-300px" placeholder="title" value="{{$item->item_name ?? ''}}"  required>

                                                    <input type="number" name="items[{{$key}}][quantity]" class="form-control mw-100 w-full" placeholder="Quantity" max="{{$item->quantity}}" min="1" value="{{$item->quantity ?? 1 }}" required>

                                                    <input type="number" name="items[{{$key}}][price]" class="form-control mw-100 w-full pe-2 disabled" placeholder="Unit price"  min="1" value="-{{$item->unit_price ?? '0' }}" readonly >

                                                    <input type="number" name="items[{{$key}}][tax]" class="form-control mw-100 w-full hidden" placeholder="Tax"   value="{{$item->tax ?? '0' }}" >

                                                    <input type="number" name="items[{{$key}}][subtotal]" class="form-control mw-100 w-full disabled" placeholder="subtotal"   value="-{{$item->total ?? '' }}" readonly >

                                                    <input type="hidden" name="items[{{$key}}][total]" >

                                                    <input type="hidden" name="items[{{$key}}][model_id]" value="{{$item->id ?? 0}}"  >

                                                    <button data-element="#variants{{$key}}" type="button" class="remove-item btn btn-sm btn-icon bg-gray-100 flex gap-4">
                                                        <i class="bx bx-message-square-x"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="invoice-total py-10 ms-auto d-lg-flex gap-20">
                        <div class="w-full">

                            <div class="d-flex flex-column ">
                                <label class="fs-6 fw-semibold mb-2">Terms</label>
                                <textarea class="form-control form-control-solid" rows="3" name="terms"
                                    placeholder="Terms Details"></textarea>
                            </div>

                        </div>
                        <div class="w-50 flex flex-column fs-5">
                            
                            <div class="flex gap-10 py-2">
                                <div class="w-full">
                                    <p class="text-muted mb-1 text-start">Sub Total :</p>
                                </div>
                                <div class="">
                                    <p class="f-w-600 mb-1 text-end">{{$settings['currency_code']}}<span id="subtotal">0.00</span></p>
                                </div>
                            </div>
                            <div class=" gap-10 py-2 hidden">
                                <div class="w-full">
                                    <p class="text-muted mb-1 text-start">Discount :</p>
                                </div>
                                <div class="">
                                    <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="discount">0.00</span></p>
                                </div>
                            </div>
                            <div class=" gap-10 py-2 hidden">
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
                                    <p class="f-w-600 mb-1 text-end fs-3">{{$settings['currency_code']}}<span id="total">0.00</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="w-full flex gap-10 w-full">
                        <div class="form-group w-full">
                            <label for="admin_note" class="control-label"
                                rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-title="Admin Note" data-content="Notes from the Staff team" 
                                >Admin Note <i class="bx bx-help-circle"></i> 
                            </label>
                            <textarea class="border-gray-300 form-control form-control-solid w-full" id="admin_note" name="admin_note" rows="3"></textarea>
                        </div>
                    
                    
                        <div class="form-group w-full">
                            <label for="client_note" class="control-label"
                                rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-title="Client Note" data-content="Notes from the Client" 
                                >Client Note <i class="bx bx-help-circle"></i> </label>
                            <textarea class="border-gray-300 form-control form-control-solid w-full" id="client_note" name="client_note" rows="3"></textarea>
                        </div>
                    </div>

                    
                    <input id="total_input" name="total" type="hidden" />
                    <input id="subtotal_input" name="subtotal" type="hidden" />
                    <input id="tax_input" name="tax_amount" type="hidden" />
                    <input id="discount_amount" name="discount" value="-{{$invoice->discount_amount}}" type="hidden" />
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
@include('credit_notes::items-modal')
