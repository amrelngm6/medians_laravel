


                <div class="d-flex flex-column gap-3" id="variants{{$key}}">
                    <div class="form-group d-flex  align-items-center gap-5 flex item-row" >

                        <input type="text" name="items[{{$key}}][item_name]" class="form-control mw-100 w-300px" placeholder="title" value="{{$item->item_name ?? ''}}"  required>

                        <input type="number" name="items[{{$key}}][quantity]" class="form-control mw-100 w-full" placeholder="Quantity" max="{{$item->quantity}}" min="1" value="{{$item->quantity ?? 1 }}" required>

                        <input type="number" name="items[{{$key}}][unit_price]" class="form-control mw-100 w-full pe-2 disabled" placeholder="Unit price"  min="1" value="-{{$item->unit_price ?? '0' }}" disabled>

                        <input type="number" name="items[{{$key}}][tax]" class="form-control mw-100 w-full hidden" placeholder="Tax"   value="-{{$invoice->tax ?? '0' }}" >

                        <input type="number" name="items[{{$key}}][subtotal]" class="form-control mw-100 w-full disabled" placeholder="subtotal"   value="-{{$item->total ?? '' }}" disabled >
                        <input type="hidden" name="items[{{$key}}][total]" class="form-control mw-100 w-full "    value=""  >

                        <input type="hidden" name="items[{{$key}}][invoice_item_id]" value="{{$item->id ?? 0}}"  >

                        <button data-element="#variants{{$key}}" type="button" class="remove-item btn btn-sm btn-icon bg-gray-100 flex gap-4">
                            <i class="bx bx-message-square-x"></i>
                        </button>
                    </div>
                </div>
