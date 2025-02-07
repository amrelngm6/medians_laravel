<div class="modal fade active show" id="task-modal" tabindex="-1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-800px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#task-modal"
                    onClick="(function(){fetchData(); window.history.pushState('Projects', window.title, window.location.href.replace('?task_id={{$task->task_id}}', ''))})()" >

                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <!--begin::Heading-->
                <div class="mb-13">
                    <!--begin::Title-->
                    <h4 class="mb-3">Task details</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Custom task at  <a href="#!"
                                rel="popover"
                                data-toggle="popover" data-placement="bottom" data-trigger="hover" data-html="true"
                                data-content="This task for <b class='text-danger'>{{class_basename($task->model)}}</b>"
                                class="fw-bold link-primary">{{ $task->model->name ?? '' }}</a>.
                            <a href="{{route('Task.duplicate-modal', $task->task_id)}}" rel="popover"
                                data-toggle="popover" data-placement="bottom" data-trigger="hover"
                                data-content="Duplicate this task" id="task_duplicate"
                                class="btn btn-primary btn-sm open-modal">
                                <i class="bx bx-copy me-2"></i> Duplicate task <span
                                    class="h-10px inline-block rounded-full w-10px bg-"></span>
                            </a>
                        </div>
                        <!--end::Description-->
                </div>
                <!--end::Heading-->

                <div class="mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">{{ $task->name }}</h1>
                    <!--end::Title-->
                    <div class="flex gap-10 pb-6">
                        <div class="pt-2">
                            Status:
                            <span
                                class="badge bg-{{$task->status->color ?? ''}} ">{{ $task->status->name ?? '' }}</span>
                        </div>
                        <div class="flex gap-2">

                            <div class="flex w-full">
                                <p class="mb-0 p-2.5">Members</p>
                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                    @foreach ($task->team as $member)
                                    <a id="member-{{$member->id}}" data-confirm="Remove Member"
                                        data-reload-link="{{$modalRoute}}"
                                        data-confirm-text="Confirm remove this member"
                                        href="{{route('Task.delete_team', $member->id)}}"
                                        data-params='{"_token":"{{csrf_token()}}", "model_id": "{{$task->task_id}}", "id": "{{$member->id}}" }'
                                        class="ajax-link symbol symbol-35px symbol-circle" rel="popover"
                                        data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="{{$member->user->name ?? ''}}">
                                        <img alt="Pic" src="/{{$member->user->picture ?? ''}}">
                                    </a>
                                    @endforeach
                                    <a href="javascript:;" class="symbol symbol-35px symbol-circle show-modal"
                                        data-modal="#add-member-modal">
                                        <span class="symbol-label bg-dark text-gray-300 fs-3 fw-bold">+</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex gap-10">
                        <!--begin::Description-->

                        <div class="w-full text-muted fw-semibold fs-5">
                            <a class="pt-2 open-modal text-primary"
                                href="{{route('Task.edit_field',['id' => $task->task_id, 'field' => 'tasks::components.description'])}}">
                                {{ $task->description }}
                            </a>

                            <hr />

                            <div class="w-full ">
                                <div class="w-full">
                                    <h4 class="title ">Checklist</h4>
                                    <hr />
                                </div>
                                <div class="w-full tasks_checklist_container">

                                    @foreach ($task->checklist as $checklist)

                                    <div data-id="{{$checklist->id}}" class="w-full  inline-block  ">
                                        <div data-id="{{$checklist->id}}" class="checklist_item  flex px-5 py-3">
                                            <form data-reload-link="{{$modalRoute}}"
                                                data-target-modal="task-modal"
                                                id="checklist-form-{{$checklist->id}}"
                                                action="{{route('TaskChecklist.update', $checklist->id)}}?_token={{csrf_token()}}"
                                                class="cursor-move ajax-form mr-5 flex flex-none items-center">

                                                <input name="sort" value="{{$checklist->sort}}" type="hidden">
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <input @if ($checklist->finished) checked @endif
                                                    class="form-check-input submit-on-change w-20px h-20px"
                                                    data-element="1" data-form="checklist-form-{{$checklist->id}}"
                                                    name="status" value="1" type="checkbox">
                                                </label>
                                            </form>
                                            <a href="#!"
                                                class="cursor-move w-full  @if ($checklist->finished) line-through  @endif  ">
                                                <span
                                                    class=" font-medium @if ($checklist->finished) line-through  @endif ">{{$checklist->description}}</span>
                                            </a>
                                            <a href="javascript:;" id="checklist-{{$checklist->id}}"
                                                data-reload-link="{{$modalRoute}}"
                                                data-target-modal="task-modal"
                                                data-path="{{route('TaskChecklist.delete', $checklist->id)}}"
                                                class="delete-item"> <i class='bx bx-message-square-x p-2 fs-4'></i></a>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <form data-reload-link="{{$modalRoute}}" id="modal_new_checklist_form"
                                    data-target-modal="task-modal"
                                    class="ajax-form form" action="{{route('TaskChecklist.store', $task->task_id)}}">
                                    @csrf
                                    <input type="hidden" name="task_id" value="{{$task->task_id}}">

                                    <!--begin::Input group-->
                                    <div class="flex mb-8 ">
                                        <input class="form-control form-control-solid" name="description"
                                            placeholder="Type action details" />
                                        <button type="submit" class="p-4"><i
                                                class='bx bx-message-square-add fs-2'></i></button>
                                    </div>
                                    <!--end::Input group-->

                                </form>
                                <p>OR Generate using AI</p>
                                <form data-reload-link="{{$modalRoute}}" id="modal_generate_checklist_form"
                                    class="ajax-form form" action="{{route('TaskChecklist.generate', $task->task_id)}}">
                                    @csrf

                                    <select class="hidden" name="model">
                                        <option value="google/gemma-2-2b-it">google/gemma-2-2b-it</option>
                                    </select>
                                    <!--begin::Input group-->
                                    <div class="w-full mb-8 hidden">
                                        <span class="text-muted ">Leave empty to send the Task description</span>
                                        <input class="form-control form-control-solid" name="message"
                                            placeholder="Type action details" />
                                    </div>
                                    <!--end::Input group-->
                                    <button rel="popover" data-toggle="popover" data-placement="top"
                                        data-trigger="hover" data-content="Generate checklist using AI"
                                        onClick="(function(){jQuery('#loader-svg').toggleClass('hidden')})()"
                                        type="submit" class="btn btn-primary "><i
                                            class='bx bxs-magic-wand fs-2'></i></button>
                                    <img src="/load.svg" id="loader-svg" class="w-20 p-2 hidden" />

                                </form>
                            </div>
                        </div>

                        <div class="w-175px text-muted fw-semibold fs-5">
                            <!-- Render dynamic components -->
                            @foreach ($components as $component)
                            {!! $component !!}
                            @endforeach

                            <div class="w-full ">
                                <small>Due date</small>
                                <a class="pb-2 open-modal text-primary block w-full"
                                    href="{{route('Task.edit_field',['id' => $task->task_id, 'field' => 'tasks::components.due_date'])}}">
                                    <i class="bx bx-calendar"></i> {{ date('M d, Y', strtotime($task->due_date)) }}
                                </a>
                            </div>

                            <div class="w-full ">
                                <small>Points</small>
                                <a class="pb-2 open-modal text-primary block w-full"
                                    href="{{route('Task.edit_field',['id' => $task->task_id, 'field' => 'tasks::components.points'])}}">
                                    <i class="bx bx-run"></i> {{ $task->points }}
                                </a>
                            </div>

                            <div class="w-full ">
                                <small>Sort</small>
                                <a class="pb-2 open-modal text-primary block w-full"
                                    href="{{route('Task.edit_field',['id' => $task->task_id, 'field' => 'tasks::components.sort'])}}">
                                    <i class='bx bx-sort-up'></i> {{ $task->sort }}
                                </a>
                            </div>

                            <div class="w-full ">
                                <small rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                    data-title="Payemnt type" data-content="Is this paid task">Paid <i
                                        class="bx bx-help-circle"></i></small>
                                <a class="pb-2 open-modal text-primary block w-full"
                                    href="{{route('Task.edit_field',['id' => $task->task_id, 'field' => 'tasks::components.is_paid'])}}">
                                    <i class='bx bx-credit-card-front'></i> {{ $task->is_paid ? 'Yes' : 'No' }}
                                </a>
                            </div>
                        </div>
                        <!--end::Description-->
                    </div>
                </div>

                <div class="flex">
                    <h4 class="w-full">Comments</h4>
                    <span class="flex-none fw-bold cursor-pointer text-danger show-modal"
                        data-modal="#add-comment-modal">Add Comment</span>
                </div>
                <div class="timeline timeline-border-dashed h-200px overflow-auto">
                    @foreach ($task->comments as $comment)
                    <!--begin::Timeline item-->
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="bx bx-message-rounded fs-2 text-gray-500"></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2">{{ $comment->message }}</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at {{ date('h:i A') }} </div>
                                    <!--end::Info-->
                                </div>
                                <!--end::Description-->

                                @if ($comment->file)
                                <div
                                    class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                    <div
                                        class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                                        @if ( in_array($comment->file->filetype, ['jpg', 'png', 'gif']) )
                                        <img
                                            src="{{route('Uploads.download', $comment->file->id)}}?_token={{csrf_token()}}" />
                                        @else
                                        <i class="bx bxs-file-doc fs-2hx"></i>
                                        @endif
                                    </div>
                                    <div class="grow min-w-150px">
                                        <h6>{{$comment->file->file_name}}</h6>
                                        <p class="text-slate-500 dark:text-zink-200">
                                            {{ $comment->file->size ? number_format($comment->file->size / 1000000, 2) : 0 }}
                                            MB</p>
                                    </div>
                                    <div class="flex items-center justify-end gap-2">
                                        <a href="{{route('Uploads.download', $comment->file->id)}}?_token={{csrf_token()}}"
                                            target="_blank"
                                            class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                            <i class="bx bx-download fs-4"></i></a>
                                    </div>
                                </div>
                                @endif
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                        <div class="flex-column-auto">
                            <!--begin::User-->
                            <div class="symbol symbol-circle symbol-25px">
                                <img src="/{{ $comment->user->picture ?? '' }}" alt="img">
                            </div>
                            <b class="mx-2">{{$comment->user->name}} </b>
                            <!--end::User-->
                        </div>
                    </div>
                    <!--end::Timeline item-->
                    @endforeach
                </div>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>

<div class="modal fade active" id="add-comment-modal" tabindex="-1">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#add-comment-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form data-reload-link="{{$modalRoute}}" id="modal_new_comment_form" class="ajax-form form"
                    action="{{route('Comment.store')}}">
                    <input type="hidden" name="model_type" value="{{$model_type}}" />
                    <input type="hidden" name="model_id" value="{{$model_id}}" />
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">New Comment</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Add comment to task <a href="#!" class="fw-bold link-primary">{{ $task->title }}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Comment</label>

                        <textarea class="form-control form-control-solid" rows="3" name="message"
                            placeholder="Type your Comment"></textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Add File</label>

                                <div class="fs-7 text-muted">Append files to this task</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row">
                                    <input class="form-control form-control-solid" name="file" type="file" />
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" data-modal="#add-comment-modal" class="close-modal btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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

@include('tasks::add-member-modal')
<script>
jQuery(document).ready(function() {
    MediansSettings.tooltipsPopovers();

    jQuery(".tasks_checklist_container").sortable({
        connectWith: ".tasks_checklist_container",
        handle: "div.checklist_item",
        update: function(event, ui) {
            var sortedIDs = $(this).sortable("toArray", {
                attribute: 'data-id'
            });
            // You can make an AJAX call here to save the new order to the server
            var listContainerId = $(this).attr('data-id');

            $.ajax({
                url: '{{ route("TaskChecklist.updateSort", $task->task_id) }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    sortedIDs: sortedIDs,
                    status_id: listContainerId
                },
                success: function(response) {
                    // Handle success response
                    console.log('Order updated successfully');
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    console.error('Error updating order:', error);
                }
            });
        },
    });

})
</script>

@yield('search-scripts')