

                            @foreach ($announcements as $announcement)
                            <tr>
                                <td>{{$announcement->id}}</td>
                                <td>{{$announcement->title}}</td>
                                <td>
                                    @if ($announcement->user) <img alt="Pic" src="/{{ $announcement->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">@endif
                                    {{ $announcement->user->name ?? '' }}</td>
                                <td>{{ $announcement->model->name ?? '' }}</td>
                                <td>{{$settings['currency_code']}}{{ $announcement->total }}</td>
                                <td>{{$announcement->date }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{$announcement->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$announcement->status->name ?? ''}}</span>
                                </td>
                                <td>
                                    <div 
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        <a href="javascript:;" data-path="{{route('Announcement.delete', $announcement->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                