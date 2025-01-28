<table id="example" class="text-start display datatable table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-start">Code</th>
            <th class="text-start">User</th>
            <th class="text-start">Amount</th>
            <th class="text-start">Model</th>
            <th class="text-start">Date</th>
            <th class="text-start">Status</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-transactions">

        @foreach ($transactions as $transaction)
        <tr>
            <td>{{ $transaction->code }}</td>
            <td>
                <img alt="Pic" src="/{{ $transaction->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $transaction->user->name ?? '' }}
            </td>
            <td>{{$settings['currency_code']}}{{ $transaction->amount }}</td>
            <td> <a href="{{route(basename($transaction->model_type).'.show', $transaction->model_id)}}">
                    {{basename($transaction->model_type) }}</a></td>
            <td>{{$transaction->date }}</td>
            <td>
                <span
                    class="badge bg-{{$transaction->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$transaction->status->name ?? ''}}</span>
            </td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <!-- <a href="{{route('Transaction.show', $transaction->id)}}" class="text-primary"><i class='bx bx-show fs-4'></i></a> -->
                    <a href="javascript:;" data-path="{{route('Transaction.delete', $transaction->id)}}"
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