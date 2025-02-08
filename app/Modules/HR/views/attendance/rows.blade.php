
                                <table class="w-full whitespace-nowrap table table-striped">
                                    <thead
                                        class="text-center bg-slate-100 text-slate-500 dark:text-zink-200 dark:bg-zink-600">
                                        <tr
                                            class="bg-white">
                                            <th class="min-w-125px"> <span  rel="popover" data-toggle="popover" data-trigger="hover"
                                    data-title="{{'$reminder->name'}}"
                                    data-content="{{'$reminder->description'}}"> Employee Name</span></th>
                                            @php $days = cal_days_in_month(CAL_GREGORIAN, date("m", strtotime($month)), date("Y", strtotime($month))); @endphp
                                            @foreach (range(0, $days) as $day)
                                            <th class="{{date('d') == ($day ) ? 'active' : ''}}">{{$day}}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendanceList as $staffAttendance)
                                        <tr class="*:px-3.5 *:py-2.5 *:border-y *:border-slate-200 *:dark:border-zink-500">
                                            <td class="ps-3 fw-bold" >{{$staffAttendance->user->name ?? ''}}</td>
                                            
                                            @php 
                                                $monthAttendance = $staffAttendance->month_list($month, $staffAttendance->user)->toArray();
                                                $userAttendance = call_user_func_array('array_merge', array_values($monthAttendance)); 
                                                $dates = array_column($userAttendance, 'date'); 
                                            @endphp
                                            @foreach (range(0, $days) as $day)
                                            @php $dayDate = date('Y-m-d', strtotime(date('Y-m-'.$day))); @endphp
                                            <td class="fs-1">
                                                @if (in_array($dayDate, $dates)) <span rel="popover" data-toggle="popover" data-trigger="hover" data-html="1"
                                                    data-title="{{$dayDate}}"
                                                    data-content="Check-in: <b>{{isset($monthAttendance[$dayDate][0]['check_in']) ? date('H:i a', strtotime($monthAttendance[$dayDate][0]['check_in'])) : ''}}</b> <br /> Check-out: <b>{{isset($monthAttendance[$dayDate][0]['check_out']) ? date('H:i a', strtotime($monthAttendance[$dayDate][0]['check_out'])) : ''}}</b>"> <i class="bx bx-check text-danger "></i></span>
                                                @elseif ($dayDate > date('Y-m-d'))
                                                <span> . </span>
                                                @else 
                                                <i class='bx bx-x'></i> @endif
                                            </td>
                                            @endforeach
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
<script>
    MediansSettings.tooltipsPopovers();
</script>
