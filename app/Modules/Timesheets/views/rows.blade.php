
                            @foreach ($timesheets as $timesheet)
                            <tr>
                                <td>{{ $timesheet->id }}</td>
                                <td>
                                    <img alt="Pic" src="/{{ $timesheet->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">
                                     {{ $timesheet->user->name ?? '' }}</td>
                                <td>{{ $timesheet->model->name ?? '' }}</td>
                                <td>{{date('M d, Y - H:i a', strtotime($timesheet->start)) }}</td>
                                <td>{{date('M d, Y - H:i a', strtotime($timesheet->end)) ?? '' }}</td>
                                <td>{{$timesheet->notes}}</td>
                                <td>
                                    <div 
                                    class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                        <a href="javascript:;" data-path="{{route('Timesheet.delete', $timesheet->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                