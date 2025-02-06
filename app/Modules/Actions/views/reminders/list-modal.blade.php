
<div class="modal fade show active" id="show-reminder-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <a class="cursor-pointer text-danger {{$modalRoute ? 'open-modal' : ''}}" href="{{$modalRoute ?? 'javascript:;'}}" >
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
                    <h1 class="mb-3">Reminders list </h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                       This is a list of all reminders for <a class="open-modal" href="{{$modalRoute}}">{{$reminders ? ($reminders->first()->model->name ?? '') : ''}} .</a>
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

            <!--begin:Form-->
                <table class="w-full bg-white rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-4 px-6  text-gray-700 font-bold">Name</th>
                            <th class="py-4 px-6  text-gray-700 font-bold">Time</th>
                            <th class="py-4 px-6  text-gray-700 font-bold">Is Notified</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($reminders as $reminder)
                        <tr class="border-b border-gray-200">
                            <td class="fw-bold text-primary">
                                <span class="py-4 px-6 w-full block" rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-title="{{$reminder->name}}"
                                    data-content="{{$reminder->description}}">{{$reminder->name}}</span> 
                            </td>
                            <td class="py-4 px-6 ">{{date('M d, H:i', strtotime($reminder->date))}} </td>
                            <td class="py-4 px-6 fw-bold text-primary"><span class="label rounded bg-{{$reminder->is_notified ? 'success' : 'danger'}}">{{$reminder->is_notified ? 'Yes' : 'no'}}</spam></td>
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

<script> 
    MediansSettings.tooltipsPopovers() 
</script>