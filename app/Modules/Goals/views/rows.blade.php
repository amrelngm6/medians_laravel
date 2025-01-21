

                            @foreach ($goals as $goal)
                            <tr>
                                <td>{{ $goal->id }}</td>
                                <td>{{ $goal->name }}</td>
                                <td>
                                    <img alt="Pic" src="/{{ $goal->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                                    {{ $goal->user->name ?? '' }}
                                </td>
                                <td>
                                <span  rel="popover"  data-toggle="popover" data-placement="top" data-trigger="hover" data-html="true"
                                        data-content="Related to <b>{{basename($goal->model)}}: {{ $goal->model->name ?? '' }}</b>">
                                {{ $goal->model->name ?? '' }}</span></td>
                                <td>{{date('M d, Y', strtotime($goal->due_date)) }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{$goal->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$goal->status->name ?? ''}}</span>
                                </td>
                                <td>
                                    <div 
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        <!-- <a href="{{route('Goal.show', $goal->id)}}" class="text-primary"><i class='bx bx-show fs-4'></i></a> -->
                                        <a href="javascript:;" data-path="{{route('Goal.delete', $goal->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
<script>MediansSettings.tooltipsPopovers();</script>
                