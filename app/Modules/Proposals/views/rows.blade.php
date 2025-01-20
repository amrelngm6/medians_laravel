

                            @foreach ($proposals as $proposal)
                            <tr>
                                <td>{{$proposal->id}}</td>
                                <td>{{$proposal->title}}</td>
                                <td>
                                    @if ($proposal->user) <img alt="Pic" src="/{{ $proposal->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">@endif
                                    {{ $proposal->user->name ?? '' }}</td>
                                <td> 
                                    <span  rel="popover"  data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                                        data-content="Related to <b>{{$proposal->modelName()}}: {{ $proposal->model->name ?? '' }}</b>">
                                        {{ $proposal->model->name ?? '' }}</span></td>

                                <td>{{$settings['currency_code']}}{{ $proposal->total }}</td>
                                <td>{{$proposal->date }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{$proposal->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$proposal->status->name ?? ''}}</span>
                                </td>
                                <td>
                                    <div 
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        <a href="{{route('Proposal.edit', $proposal->id)}}" class="text-primary open-modal"><i class='bx bx-edit fs-4'></i></a>
                                        <a href="javascript:;" data-path="{{route('Proposal.delete', $proposal->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                
                            <script>
                MediansSettings.tooltipsPopovers();
                </script>