
                                        @foreach ($fields as $field)
                                        <tr>
                                            <td>{{$field->id}}</td>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route('CustomField.edit', $field->id)}}">{{$field->title}}</a>
                                                </div>
                                                <span class="badge bg-primary badge-sm">{{$field->name}}</span>
                                            </td>
                                            <td >{{$field->type}} </td>
                                            
                                            <td><span  rel="popover" data-toggle="popover" data-placement="left" data-trigger="hover"
                                                    data-title="{{class_basename($field->model)}}"
                                                    data-content="Related to {{$field->model->name ??  $field->model->name ?? class_basename($field->model)}}" >{{ $field->model->name ?? class_basename($field->model) }}</span>
                                            </td>
                                            <td >{{$field->sort}} </td>
                                            <td >{{$field->default_value}} </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center size-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="productAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal size-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="productAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route('CustomField.edit', $field->id)}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a data-path="{{route('CustomField.delete', $field->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!">
                                                                <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
<script>
MediansSettings.tooltipsPopovers();
MediansSettings.dataTablesInit();
</script>