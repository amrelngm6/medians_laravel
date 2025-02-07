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
        'title' => 'Custom fields',
        'text' => 'Custom fields for the projects',
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

                                    
                            <!--begin::Input group-->
                            <div class="mb-15 fv-row ">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="fw-semibold me-5">
                                        <label class="fs-6">Payment type</label>

                                        <div class="fs-7 text-muted">Check if the project is paid or informative only</div>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Checkboxes-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label onClick="jQuery('#totalCost').removeClass('hidden')"  class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-20px w-20px" type="radio"
                                                name="is_paid" value="0" @if ($project->is_paid == 0) checked @endif  />

                                            <span class="form-check-label fw-semibold">
                                                Paid
                                            </span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Checkbox-->
                                        <label onClick="jQuery('#totalCost').addClass('hidden')" class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input h-20px w-20px" type="radio"
                                                name="is_paid" value="1" @if ($project->is_paid == 1) checked @endif />

                                            <span class="form-check-label fw-semibold">
                                                Unpaid
                                            </span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Checkboxes-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="w-full  @if ($project->total_cost < 1) hidden @endif " id="totalCost">
                                <div class="d-flex flex-column mb-8 fv-row " >
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Total Cost</span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid" placeholder="Project cost"
                                            name="total_cost"  value="{{$project->total_cost}}" />
                                </div>
                            </div>
                            <!--end::Input group-->

                            
                            <!--begin::Input group-->
                            <div class="mb-15 fv-row">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="fw-semibold me-5">
                                        <label class="fs-6">Status</label>

                                        <div class="fs-7 text-muted">If disabled the project and tasks will be restricted for team</div>
                                    </div>
                                    <!--end::Label-->

                                    <!--begin::Checkboxes-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <div class="select-placeholder form-group w-full">
                                            <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                                            <select id="status_id" name="status_id"
                                                class="select-bootstrap form-control form-control-solid ">
                                                <option value=""></option>
                                                @foreach ($statusList as $status)
                                                <option value="{{$status->status_id}}" @if ($project->status_id == $status->status_id) selected @endif >
                                                    {{$status->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
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

                @if (!empty($custom_fields))
                <div class="card w-full step-container" id="form-content-3">
                    <div class="card-body">
                        <div class="mb-2 text-start">
                            <h3 class="mb-3">Custom Fields</h3>
                            <div class="text-muted fw-semibold fs-5">
                                <p class="fw-semibold">Data Fields related to the Project Manage <a href="{{route('CustomField')}}">Custom Fields</a> </p>
                            </div>
                        </div>
                        <div class="w-full ">
                            @foreach ($custom_fields as $field)
                            @php $currentVal = $project->field[$field->name] ?? $field->default_value; @endphp
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