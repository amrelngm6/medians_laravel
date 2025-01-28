<table id="example" class="text-start display datatable table table-hover table-striped  table-bordered ">
    <thead>
        <tr>
            <th class="text-start">Code</th>
            <th class="text-start">Title</th>
            <th class="text-start">Client</th>
            <th class="text-start">Item</th>
            <th class="text-start">Total</th>
            <th class="text-start">Due Date</th>
            <th class="text-start">Status</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-estimates">
        @foreach ($estimates as $estimate)
        <tr>
            <td>{{$estimate->id}}</td>
            <td>{{$estimate->title}}</td>
            <td>
                @if ($estimate->client) <img alt="Pic" src="/{{ $estimate->client->picture ?? '' }}"
                    class="w-6 symbol me-1 symbol-circle">@endif
                {{ $estimate->client->name ?? '' }}</td>

            <td>
                <span rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                    data-content="Related to <b>{{$estimate->modelName()}}: {{ $estimate->model->name ?? '' }}</b>">
                    {{ $estimate->model->name ?? '' }}</span>
            </td>
            <td>{{$settings['currency_code']}}{{ $estimate->total }}</td>
            <td>{{$estimate->date }}</td>
            <td>
                <span
                    class="badge bg-{{$estimate->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$estimate->status->name ?? ''}}</span>
            </td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="{{route('Estimate.edit', $estimate->id)}}" class="text-primary open-modal"><i
                            class='bx bx-edit fs-4'></i></a>
                    <a href="javascript:;" data-path="{{route('Estimate.delete', $estimate->id)}}"
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