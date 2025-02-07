@extends('projects::project')
@php
$tabsList = [
[
'title' => 'Details',
'text' => 'Basic Project settings',
],
[
'title' => 'Client',
'text' => 'Manage related client ',
],
[
'title' => 'AI Options',
'text' => 'Configure the AI models and features',
]
];
@endphp
@section('project-content')

<div class="col-md-12">

    <div class="w-full gap-14 content-wrapper inline-flex">
        <div class="w-350px pull-left px-0 " id="form-sidebar"
            class="rounded d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
            <!--begin::Nav-->
            <div class="bg-white   stepper-nav py-14 px-6 ">
                @foreach ($tabsList as $key => $tab)
                <!--begin::Step 1-->
                <div class="stepper-item cursor-pointer  " data-id="form-content-{{$key}}">
                    <!--begin::Wrapper-->
                    <div class="stepper-wrapper flex gap-6 ">
                        <div class="stepper-icon w-40px h-40px pt-3 bg-success text-center rounded">
                            <i class="bx bx-check fs-2"></i>
                        </div>
                        <!--begin::Label-->
                        <div class="stepper-label ">
                            <h3 class="stepper-title fs-5">{{$tab['title']}}</h3>
                            <div class="stepper-desc">{{$tab['text']}}</div>
                        </div>
                        <!--end::Label-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Line-->
                    <div class="stepper-line h-20px"></div>
                    <!--end::Line-->
                </div>
                <!--end::Step 1-->
                @endforeach
            </div>
            <!--end::Nav-->
        </div>
        <div id="content" class="w-full lg:w-2/3 pull-right content ">
            <form action="{{route('Projects.update', $project->project_id)}}" id="form" class="ajax-form" method="POST">
                @csrf
                <div class="card w-full step-container" id="form-content-0">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Basic Info</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Basic Information about the Project</p>.
                            </div>
                        </div>
                        <div class="w-full">

                            <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                    class="control-label">Name</label>
                                <input type="text" id="fname" name="name" class="form-control form-control-solid"
                                    autofocus="1" value="{{$project->name}}">
                            </div>
                            <div class="form-group w-full">
                                <label for="address" class="control-label">Description</label><textarea id="description"
                                    name="description" class="form-control form-control-solid "
                                    rows="4">{{$project->description}}</textarea>
                            </div>

                            <div class="d-flex w-full gap-6">
                                <!--begin::Input group-->
                                <div class=" w-full d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Start date</span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid" placeholder="Project name "
                                        name="start_date" type="date" value="{{$project->start_date}}" />
                                </div>
                                <!--end::Input group-->


                                <!--begin::Input group-->
                                <div class=" w-full d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Deadline date</span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid" placeholder="Project name "
                                        name="deadline_date" type="date" value="{{$project->deadline_date}}" />
                                </div>
                                <!--end::Input group-->
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card w-full step-container" id="form-content-1">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Select Client</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the Project client</p>.
                            </div>
                        </div>

                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack w-full">
                                <div class="fw-semibold me-5 w-full">
                                    <label for="assigned" class="control-label">Select Client</label>
                                    <div class="fs-7 text-muted">Select related client of this project</div>
                                </div>
                                <div class="d-flex align-items-center w-full">
                                    <div class="d-flex flex-column  fv-row w-full">
                                        @php $selectedClient = $project->client ?? null; @endphp
                                        @include('clients::search-input')
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                    </div>
                </div>


                <div class="card w-full step-container" id="form-content-2">

                    <div class="card-body">

                        <div class="mb-2 text-start">
                            <h3 class="mb-3">AI Features</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Information about the AI features for this project</p>.
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="w-full">

                            </div>
                        </div>

                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack w-full">
                                <div class="fw-semibold me-5 w-full">
                                    <label for="assigned" class="control-label">Model</label>
                                    <div class="fs-7 text-muted">Select one of the available AI Models</div>
                                </div>
                                <div class="d-flex align-items-center w-full">
                                    <div class="d-flex flex-column  fv-row w-full">
                                        <select class="form-control form-control-solid" name="model">
                                            <option value="Qwen/Qwen2.5-Coder-32B-Instruct">
                                                Qwen/Qwen2.5-Coder-32B-Instruct</option>
                                            <option value="suriya7/MaxMini-Instruct-248M">suriya7/MaxMini-Instruct-248M
                                            </option>
                                            <option value="philschmid/instruct-igel-001">philschmid/instruct-igel-001
                                            </option>
                                            <option value="google/gemma-2-2b-it" selected>google/gemma-2-2b-it</option>
                                            <option value="deepset/roberta-base-squad2">deepset/roberta-base-squad2
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack w-full">
                                <div class="fw-semibold me-5 w-full">
                                    <label for="assigned" class="control-label">Task checlist length</label>
                                    <div class="fs-7 text-muted">Select length of text of the tasks to generate</div>
                                </div>
                                <div class="d-flex align-items-center w-full">
                                    <div class="d-flex flex-column  fv-row w-full">
                                        <select class="form-control form-control-solid" placeholder="Task checlist length" name="field[ai_task_checklist_count]">
                                            <option value="short" selected>Short</option>
                                            <option value="long">Long</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="mb-15 fv-row">
                            <div class="d-flex flex-stack w-full">
                                <div class="fw-semibold me-5 w-full">
                                    <label class="fs-6  required">Limit task checklist to load </label>
                                    <div class="fs-7 text-muted">Set the limit of the <b class="text-danger"> AI
                                            Generated</b> checklist for each Task <br /></div>
                                </div>
                                <div class="d-flex align-items-center w-full">
                                    <div class="d-flex flex-column  fv-row w-full">
                                        <input placeholder="Task Checklist limit" name="fields[fetch_limit]" value=""
                                            type="number" min="1" max="100" required
                                            class="form-control form-control-solid" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->


                    </div>
                </div>
                @if (!empty($custom_fields))
                <div class="card w-full step-container" id="fields-form">
                    <div class="card-body">
                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Custom Fields</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Custom Fields related to the Project</p>.
                            </div>
                        </div>
                        <div class="w-full ">
                            @foreach ($custom_fields as $field)
                            <?php $currentVal = $project->field[$field->name] ?? ''; ?>
                            @include('custom_field::field_input')
                            @endforeach
                        </div>
                    </div>
                </div>
                @endif

                <div>
                    <a href="{{route('Projects')}}"
                        class="btn btn-default mleft10 proposal-form-submit save-and-send transaction-submit">
                        Back </a>
                    <button class="btn btn-primary mleft5 proposal-form-submit transaction-submit" type="submit">
                        Save </button>
                </div>

            </form>
        </div>
    </div>
</div>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script>
setTimeout(() => {
    MediansSettings.stepper()
}, 1000);
</script>
@yield('search-scripts')
@yield('client-search-scripts')


@endsection