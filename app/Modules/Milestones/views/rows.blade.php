
                                        @foreach ($milestones as $milestone)
                                        <tr>
                                            <td>{{$milestone->id}}</td>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route('Milestone.edit', $milestone->id)}}">{{$milestone->name}}</a>
                                                </div>
                                            </td>
                                            <td >{{basename($milestone->model->name ?? '')}} </td>
                                            <td class=" action">
                                                <div class="flex gap-4">
                                                    <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                        href="{{route('Milestone.edit', $milestone->id)}}">
                                                        <span class="align-middle">Edit</span></a>
                                                    <a data-path="{{route('Milestone.delete', $milestone->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                        href="#!">
                                                        <span class="align-middle">Delete</span></a>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach