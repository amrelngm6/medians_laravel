
    <div class="modal fade  active " id="items-modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <a class="cursor-pointer text-danger close-modal" data-modal="#items-modal">
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
                        <h1 class="mb-3">Items list</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Pick from the currently purchased <a href="{{route('Item')}}"
                                class="fw-bold link-primary">items</a> at the Invoice {{$invoice->code ?? ''}}.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <form action="{{route('CreditNote.item-row')}}" class="w-full ajax-form card-body " data-append="true"
                        data-element="variants-container" id="estimate-item-form">
                        @csrf
                        <!--begin::Checkbox-->
                        <div class="select-placeholder w-full relative">
                            <select id="item_id" name="item_id" placeholder="A"
                                class="select-bootstrap border border-gray-300 form-control form-control-solid ">
                                <option value="0"></option>
                                @foreach ($invoice->items as $item)
                                <option value="{{$item->id}}"  >
                                    {{$item->item_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <!--end::Checkbox-->

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
