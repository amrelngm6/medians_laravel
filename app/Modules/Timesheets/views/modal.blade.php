
<div class="modal fade show active" id="show-timesheet-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger open-modal" href="{{$modalRoute}}" >
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </a>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
            
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Timesheets list </h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                       This is a list of all timesheets for <a href="javascript:;">{{$timesheets ? ($timesheets->first()->model->name ?? '') : ''}} .</a>
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

            <!--begin:Form-->
                <table class="w-full bg-white rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-4 px-6  text-gray-700 font-bold">Date</th>
                            <th class="py-4 px-6  text-gray-700 font-bold">Start</th>
                            <th class="py-4 px-6  text-gray-700 font-bold">End</th>
                            <th class="py-4 px-6  text-gray-700 font-bold">Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($timesheets as $timesheet)
                        <tr class="border-b border-gray-200">
                            @php $diffTime = strtotime($timesheet->end) - strtotime($timesheet->start); @endphp
                            <td class="py-4 px-6 ">{{date('M d, Y', strtotime($timesheet->start))}} </td>
                            <td class="py-4 px-6 ">{{date('H:i a', strtotime($timesheet->start))}} </td>
                            <td class="py-4 px-6 ">{{$timesheet->end ? date('H:i a', strtotime($timesheet->end)) : '--'}} </td>
                            <td class="py-4 px-6 fw-bold text-primary">{{$timesheet->end ? ($diffTime > 86399 ? '1 Day + '.date('H:i:s', $diffTime) : date('H:i:s', $diffTime)) : ''}} </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
