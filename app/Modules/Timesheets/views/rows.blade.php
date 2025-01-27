
                            @foreach ($timesheets as $timesheet)
                            <tr>
                                <td>{{ $timesheet->code }}</td>
                                <td>
                                    <img alt="Pic" src="/{{ $timesheet->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                                     {{ $timesheet->user->name ?? '' }}</td>
                                <td>{{$settings['currency_code']}}{{ $timesheet->amount }}</td>
                                <td>{{$timesheet->date }}</td>
                                <td>{{$timesheet->category->category->name ?? '' }}</td>
                                <td>
                                    <span
                                        class="badge bg-{{$timesheet->status->color ?? ''}} px-2.5 py-1 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">{{$timesheet->status->name ?? ''}}</span>
                                </td>
                                <td>
                                    <div 
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        <a href="javascript:;" data-path="{{route('Timesheet.delete', $timesheet->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                