<div class="modal fade active show" id="duplicate-task-modal" tabindex="-1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#duplicate-task-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_conver_task_form" method="POST" class="ajax-form form"
                    action="{{route('Task.duplicate', $task->task_id)}}">
                    @csrf
                    <input name="task_id" type="hidden" value="{{$task->task_id}}" />

                    <!--begin::Heading-->

                    <div class="w-full flex gap-10">
                        <div class="mb-13 w-full">
                            <!--begin::Title-->
                            <h1 class="mb-3">Copy Task</h1>
                            <!--end::Title-->

                            <!--begin::Description-->
                            <div class="text-muted fw-semibold fs-5">
                                Duplicate task <span class="text-danger">{{$task->name}}</span>, with optional related
                                modules.
                            </div>
                            <!--end::Description-->
                        </div>
                        <!--end::Heading-->
                    </div>

                    <div class="w-full flex gap-10">

                        <div class="w-full">

                            @include('tasks::components.name')

                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Description</span>
                                </label>
                                <!--end::Label-->
                                <textarea class="form-control form-control-solid" placeholder="Task description"
                                    name="description"></textarea>
                            </div>
                            <!--end::Input group-->

                            <div class="w-full flex gap-10">

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row w-full">
                                    <!--begin::Label-->
                                    <label rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Exptected date to close the task"
                                        class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Due date <i class="bx bx-help-circle"></i> </span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid  py-2" type="date" name="due_date">
                                </div>
                                <!--end::Input group-->

                            </div>


                            <!-- Render dynamic components -->
                            @foreach ($components as $component)
                            {!! $component !!}
                            @endforeach

                        </div>

                        @php
                        $modules = ["comments"=> "Comments", "checklist"=> "Task checklist", "team"=>"Team members"];
                        @endphp
                        <div class="w-full">
                            

                            <div class="mb-6 w-full">
                                <h4 class="my-10">Optional modules</h4>
                            </div>
                            @foreach ($modules as $key => $module)
                            <div class="d-flex flex-stack mb-10">
                                <!--begin::Label-->
                                <div class="fw-semibold me-5">
                                    <label class="fs-6">{{$module}}</label>

                                    <div class="fs-7 text-muted">Copy {{$module}} from olda task</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Checkboxes-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Checkbox-->
                                    <label class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox"
                                            name="modules[]" value="{{$key}}" checked="checked">
                                        <span class="form-check-label fw-semibold">
                                            Yes
                                        </span>
                                    </label>
                                    <!--end::Checkbox-->
                                </div>
                                <!--end::Checkboxes-->
                            </div>
                            @endforeach
                            
                    <!--begin::Actions-->
                    <div class="text-end">
                        <button type="submit" id="modal_edit_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Save as new task
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                        </div>

                    </div>
                    <!--end::Card body-->

                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<script>
MediansSettings.dropdownWidget();
MediansSettings.tooltipsPopovers();
</script>
@yield('search-scripts')