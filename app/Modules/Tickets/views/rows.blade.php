<table id="example" class="text-start display datatable table table-hover table-striped">
    <thead>
        <tr>
            <th class="text-start">#</th>
            <th class="text-start">Subject</th>
            <th class="text-start">Client</th>
            <th class="text-start">Assignee</th>
            <th class="text-start">Category</th>
            <th class="text-start">Last action</th>
            <th class="text-start">Status</th>
            <th class="text-start">Actions</th>
        </tr>
    </thead>
    <tbody id="rows-ticket">

        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->subject }}</td>
            <td>
                <img alt="Pic" src="/{{ $ticket->client->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $ticket->client->name ?? '' }}
            </td>
            <td>
                <img alt="Pic" src="/{{ $ticket->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $ticket->user->name ?? '' }}
            </td>
            <td> {{$ticket->category->name ?? '' }}</td>
            <td>{{date('M d, Y - H:i a', strtotime($ticket->updated_at)) }}</td>
            <td>
                <span
                    class="badge bg-{{$ticket->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$ticket->status->name ?? ''}}</span>
            </td>
            <td>
                <div
                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                    <a href="{{route('Ticket.show', $ticket->id)}}" class="text-primary"><i
                            class='bx bx-show fs-4'></i></a>
                    <a href="javascript:;" data-path="{{route('Ticket.delete', $ticket->id)}}" class="delete-item "><i
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