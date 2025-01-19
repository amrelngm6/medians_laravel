


                <div class="d-flex flex-column gap-3" id="variants{{$key}}">
                    <div class="form-group d-flex  align-items-center gap-5 flex item-row" >

                        <input type="text" name="items[{{$key}}][item_name]" class="form-control mw-100 w-300px" placeholder="title" value="{{$item->name ?? ''}}"  required>

                        <input type="number" name="items[{{$key}}][quantity]" class="form-control mw-100 w-full" placeholder="Quantity" value="{{$item->quantity ?? 1 }}" required>

                        <input type="number" name="items[{{$key}}][price]" class="form-control mw-100 w-full pe-2" placeholder="Unit price"  value="{{$item->price ?? '' }}" required>

                        <input type="number" name="items[{{$key}}][tax]" class="form-control mw-100 w-full disabled" placeholder="Tax"   value="{{$item->tax ?? '' }}" >

                        <input type="number" name="items[{{$key}}][subtotal]" class="form-control mw-100 w-full disabled" placeholder="subtotal"   value="{{$item->price ?? '' }}" >

                        <input type="number" name="items[{{$key}}][total]" class="form-control mw-100 w-full disabled" placeholder="total" value="{{ $total }}"  >

                        <input type="hidden" name="items[{{$key}}][model_id]" value="{{$item->id ?? 0}}"  >
                        <input type="hidden" name="items[{{$key}}][model_type]" value="{{get_class($item)}}"  >

                        <button data-element="#variants{{$key}}" type="button" class="remove-item btn btn-sm btn-icon bg-gray-100 flex gap-4">
                            <i class="bx bx-message-square-x"></i>
                        </button>
                    </div>
                </div>
