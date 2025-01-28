<table id="example" class="text-start display datatable table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-start">Code</th>
            <th class="text-start">Client</th>
            <th class="text-start">User</th>
            <th class="text-start">Items</th>
            <th class="text-start">Tax</th>
            <th class="text-start">Discount</th>
            <th class="text-start">Total</th>
            <th class="text-start">Due Date</th>
            <th class="text-start">Status</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-invoices">

        @foreach ($invoices as $invoice)
        <tr>
            <td>{{ $invoice->code }}</td>
            <td>
                <img alt="Pic" src="/{{ $invoice->client->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $invoice->client->name ?? '' }}
            </td>
            <td>
                <img alt="Pic" src="/{{ $invoice->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $invoice->user->name ?? '' }}
            </td>
            <td>{{ $invoice->items->count() }}</td>
            <td>{{$settings['currency_code']}}{{ $invoice->tax_amount }}</td>
            <td>{{$settings['currency_code']}}{{ $invoice->discount_amount }}</td>
            <td>{{$settings['currency_code']}}{{ $invoice->total }}</td>
            <td>{{$invoice->date }}</td>
            <td>
                <span
                    class="badge bg-{{$invoice->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$invoice->status->name ?? ''}}</span>
            </td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="{{route('Invoice.show', $invoice->id)}}" class="text-primary"><i
                            class='bx bx-show fs-4'></i></a>
                    <a href="javascript:;" data-path="{{route('Invoice.delete', $invoice->id)}}" class="delete-item "><i
                            class='bx bx-trash fs-4'></i></a>
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