
<div class="modal fade  active" id="add-task-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#add-task-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_new_task_form" class="form ajax-form" action="{{route('Task.update', $task->task_id)}}">
                    @csrf
                    <input type="hidden" name="model_type" value="{{$model_type}}" />
                    <input type="hidden" name="model_id" value="{{$model_id}}" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Edit Task</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Edit task at <a href="#!"
                                class="fw-bold link-primary">{{$project->name ?? ''}}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->


                    @include('tasks::components.name')

                    <!-- Render dynamic components -->
                    @foreach ($components as $component)
                        {!! $component !!}
                    @endforeach

                    @if ($custom_fields)
                    <p>Custom Fields</p>
                    <!-- Render dynamic components -->
                        @foreach ($custom_fields as $field)
                            <?php $currentVal = $task->field[$field->name] ?? ''; ?>
                            @include('custom_field::field_input')
                        @endforeach
                    @endif
                    
                    
                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span
                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>