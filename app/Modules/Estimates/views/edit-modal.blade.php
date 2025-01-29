
    <div class="modal fade show active " id="edit-estimate-modal" tabindex="-1" >
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-800px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <a class="cursor-pointer text-danger close-modal" data-modal="#edit-estimate-modal">
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
                        <h1 class="mb-3">Edit Estimate</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Update the information of this Estimate .
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <form action="{{route('Estimate.update', $estimate->id)}}" class="w-full ajax-form card-body " data-append="true"
                        data-element="variants-container" id="edit-estimate-form">
                        @csrf

                        <div class="w-full flex gap-10">
                            <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                                <input type="text" placeholder="Estimate title" class=" form-control form-control-solid  "
                                    id="name" name="title" class="form-control form-control-solid " value="{{$estimate->title}}">
                            </div>

                            <div class="form-group w-full"><label for="client_id" class="control-label">Client</label>
                                <select name="client_id" id="client_id" class="form-control form-control-solid">
                                    @foreach ($clients as $client)
                                    <option value="{{ $client->client_id }}" @if($estimate->client_id == $client->client_id) selected @endif >{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full flex gap-10">

                            <div class="form-group w-full"><label for="date" class="control-label">Date </label>
                                <input type="date" class=" form-control form-control-solid  " id="date" name="date"
                                    class="form-control form-control-solid " value="{{$estimate->date}}" >
                            </div>
                            <div class="form-group w-full"><label for="expiry_date" class="control-label" rel="popover"
                                    data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                    data-placement="top" data-content="Set the End date of the estimate to approve"
                                    data-title="Expiry Date" data-trigger="hover" data-html="true">Expiry Date <i
                                        class="bx bx-help-circle"></i></label>
                                <input type="date" class=" form-control form-control-solid  " min="{{$estimate->date ?? date('Y-m-d')}}"
                                    id="expiry_date" name="expiry_date" class="form-control form-control-solid " value="{{$estimate->expiry_date}}" >
                            </div>
                        </div>
                        <div class="w-full flex gap-10">
                            <div class="form-group w-full"><label for="status_id" class="control-label">Status</label>
                                <select name="status_id" id="status_id" class="form-control form-control-solid">
                                    @foreach ($statusList as $status)
                                    <option value="{{ $status->status_id }}"  @if($estimate->status_id == $status->status_id) selected @endif>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-7 gap-lg-10">

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
                                        <label class="form-label fw-bold pb-4">Estimate items</label>
                                        <div>
                                            <div class="form-group" id="variants-container">

                                                <div class="form-group d-flex  align-items-center gap-5 flex ">

                                                    <span class="mw-100 min-w-200px"> Title</span>
                                                    <span class="mw-100 w-full"> Quantity</span>
                                                    <span class="mw-100 w-full"> Unit price</span>
                                                    <span class="mw-100 w-full"> Tax</span>
                                                    <span class="mw-100 w-full"> Subtotal</span>
                                                    --
                                                </div>
                                                @foreach ( $estimate->items as $item)
                                                @include('estimate::estimate-item-row')
                                                @endforeach
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
                                        placeholder="Type Details">{{$estimate->content}}</textarea>
                                </div>

                            </div>
                            <div class="w-50 flex flex-column fs-5">
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Sub Total :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end">{{$settings['currency_code']}}<span id="">{{$estimate->subtotal}}</span></p>
                                    </div>
                                </div>
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Discount :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="">{{$estimate->discount_amount}}</span></p>
                                    </div>
                                </div>
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Taxes :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="">{{$estimate->tax_amount}}</span></p>
                                    </div>
                                </div>
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Grand Total :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="">{{$estimate->total}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--begin::Actions-->
                        <div class="text-center py-10">

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
