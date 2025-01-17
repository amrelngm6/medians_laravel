
                                        @foreach ($templates as $template)
                                        <tr>
                                            <td>{{$template->id}}</td>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route('Templates.edit', $template->id)}}">{{$template->name}}</a>
                                                </div>
                                            </td>
                                            <td >{{basename($template->model)}} </td>
                                            <td class=" action">
                                                <div class="flex gap-4">
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                        href="{{route('Templates.edit', $template->id)}}">
                                                        <span class="align-middle">Edit</span></a>
                                                    <a data-path="{{route('Templates.delete', $template->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                        href="#!">
                                                        <span class="align-middle">Delete</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach