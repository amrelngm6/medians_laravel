


                    <div class="form-group d-flex  align-items-center gap-5 flex item-row" >

                        <span class="w-full min-w-200px">{{$item->item_name ?? ''}}</span>
                        <span class="w-full">
                            <img alt="Pic" src="/{{ $transaction->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                                {{ $transaction->user->name ?? '' }}

                        </span>
                        <span class="w-full">{{$item->quantity ?? ''}}</span>
                        <span class="w-full">{{$item->subtotal ?? ''}}</span>
                        <span class="w-full">{{$item->tax ?? ''}}</span>
                        <span class="w-full">{{$item->total ?? ''}}</span>

                    </div>
