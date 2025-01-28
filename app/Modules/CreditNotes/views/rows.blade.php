
        <table id="example" class="text-start display datatable table table-hover table-condensed">
            <thead>
                <tr>
                    <th class="text-start">Code</th>
                    <th class="text-start">User</th>
                    <th class="text-start">Invoice</th>
                    <th class="text-start">Subtotal</th>
                    <th class="text-start">Tax Amount</th>
                    <th class="text-start">Total</th>
                    <th class="text-start">Date</th>
                    <th class="text-start">Status</th>
                    <th class="text-start">Actions</th>
                </tr>
            </thead>
            <tbody id="rows-credit_notes">

                @foreach ($credit_notes as $credit_note)
                <tr>
                    <td>{{ $credit_note->code }}</td>
                    <td>
                        <img alt="Pic" src="/{{ $credit_note->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                        {{ $credit_note->user->name ?? '' }}
                    </td>
                    <td><a class="text-danger"
                            href="{{route('Invoice.show', $credit_note->model->id ?? 0)}}">{{$credit_note->model->code ?? '' }}</a>
                    </td>
                    <td>{{$settings['currency_code']}}{{ $credit_note->subtotal }}</td>
                    <td>{{$settings['currency_code']}}{{ $credit_note->tax_amount }}</td>
                    <td>{{$settings['currency_code']}}{{ $credit_note->total }}</td>
                    <td>{{$credit_note->date }}</td>
                    <td>
                        <span
                            class="badge bg-{{$credit_note->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$credit_note->status->name ?? ''}}</span>
                    </td>
                    <td>
                        <div
                            class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                            <a href="{{route('CreditNote.show', $credit_note->id)}}" class="text-primary"><i
                                    class='bx bx-show fs-4'></i></a>
                            <a href="javascript:;" data-path="{{route('CreditNote.delete', $credit_note->id)}}"
                                class="delete-item "><i class='bx bx-trash fs-4'></i></a>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
        <script>
        MediansSettings.tooltipsPopovers();
        MediansSettings.dataTablesInit();
        </script>