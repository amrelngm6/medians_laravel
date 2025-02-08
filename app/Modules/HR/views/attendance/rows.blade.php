
                                <table class="w-full whitespace-nowrap table table-striped">
                                    <thead
                                        class="text-center bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                        <tr
                                            class="bg-white *:px-3.5 *:py-2.5 *:font-semibold *:border-b *:border-slate-200 *:dark:border-zink-500">
                                            <th class="min-w-125px">Employee Name</th>
                                            @php $days = cal_days_in_month(CAL_GREGORIAN, date("m"), date("Y")); @endphp
                                            @foreach (range(0, $days) as $day)
                                            <th class="{{date('d') == ($day ) ? 'active' : ''}}">{{$day}}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendanceList as $staffAttendance)
                                        {{ print_r($staffAttendance->month_list(date("Y-m-01"))->toArray()) }}
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td class="ps-3 fw-bold">{{$staffAttendance->user->name ?? ''}}</td>
                                            @foreach (range(0, $days) as $day)
                                            <td>@if (in_array(date('Y-m-0'.$day), $attendanceList->pluck('date')->toArray())) <i class="bx bx-check text-success fs-4"></i>@else -- @endif</td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
