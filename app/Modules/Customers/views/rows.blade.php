<table class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped"
    id="productTable">
    <thead class="text-start bg-slate-100 dark:bg-zink-600">
        <tr>
            <th class="text-start w-20" data-sort="client_id">ID</th>
            <th class="text-start Client_name" data-sort="Client_name">Name</th>
            <th class="text-start Client_name" data-sort="Client_name">Email</th>
            <th class="text-start status" data-sort="status">Status</th>
            <th class="text-start action">Actions</th>
        </tr>
    </thead>
    <tbody class="list">
        @foreach ($ClientList as $client )
        <tr>
            <td class="">
                {{$client->client_id}}
            </td>
            <td class="">

                <img alt="Pic" src="/{{ $client->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                {{ $client->name ?? '' }}
            </td>
            <td class=" ">{{$client->email}} </td>
            <td class=" status">
                <span
                    class="badge round-danger px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-{{$client->status_model->color ?? 'danger' }} border-transparent text-orange-500">{{$client->status_model->name ?? ''}}</span>
            </td>
            <td class=" action">
                <div class="relative show-child">
                    <button
                        class="flex items-center justify-center size-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                        id="productAction1" data-bs-toggle="dropdown"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal"
                            class="lucide lucide-more-horizontal size-3">
                            <circle cx="12" cy="12" r="1"></circle>
                            <circle cx="19" cy="12" r="1"></circle>
                            <circle cx="5" cy="12" r="1"></circle>
                        </svg></button>
                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                        aria-labelledby="productAction1">
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                href="{{route('Client.tabs.overview', $client->client_id)}}">
                                <span class="align-middle">Overview</span></a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                href="{{route('Client.tabs.edit', $client->client_id)}}">
                                <span class="align-middle">Edit</span></a>
                        </li>
                        <li>
                            <a data-path="{{route('Client.delete', $client->client_id)}}"
                                class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                href="#!">
                                <span class="align-middle">Delete</span></a>
                        </li>
                    </ul>
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