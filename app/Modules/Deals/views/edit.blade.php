@extends('deal::page')
@php 
$tabsList = [
    [
        'title' => 'Details',
        'text' => 'Basic information of the Deal',
    ],
    [
        'title' => 'Assign Staff',
        'text' => 'Assign this Deal to your Staff team',
    ],
    [
        'title' => 'Location',
        'text' => 'Manage location information ',
    ]
];
@endphp
@section('deal-page')

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
                <form action="{{route('Deal.update', $deal->id)}}" id="form" class="ajax-form" method="POST">
                    @csrf
                    <div class="card w-full step-container" id="form-content-0">

                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Basic Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Basic Information about the Deal</p>.
                                </div>
                            </div>
                            <div class="w-full">

                                <div class="form-group w-full" app-field-wrapper="subject"><label for="subject"
                                        class="control-label">Name</label>
                                    <input type="text" id="fname" name="name" class="form-control form-control-solid"
                                        autofocus="1" value="{{$deal->name}}">
                                </div>
                                <div class="form-group w-full">
                                    <label for="address" class="control-label">Description</label><textarea id="description" name="description"
                                        class="form-control form-control-solid " rows="4">{{$deal->description}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card w-full step-container" id="form-content-1">

                        <div class="card-body">

                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Assign to Staff</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Deal assignment</p>.
                                </div>
                            </div>
                            <div class="w-full">
                                <div class="w-full">
                                    <label for="assigned" class="control-label">Assigned To</label>
                                    @php $selectedStaff = $deal->assigned->user ?? null; @endphp
                                    @include('staff::search-input')
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card w-full step-container" id="form-content-2">
                        @include('deal::location-form')
                    </div>
                
                    @if (!empty($custom_fields))
                    <div class="card w-full step-container"  id="fields-form">
                        <div class="card-body">
                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Custom Fields</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Custom Fields related to the Deal</p>.
                                </div>
                            </div>
                            <div class="w-full ">
                                @foreach ($custom_fields as $field)
                                    <?php $currentVal = $deal->field[$field->name] ?? ''; ?>
                                    @include('custom_field::field_input')
                                @endforeach
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    <div>
                        <a href="{{route('Deal')}}"
                            class="btn btn-default mleft10 proposal-form-submit save-and-send transaction-submit">
                            Back </a>
                        <button class="btn btn-primary mleft5 proposal-form-submit transaction-submit"
                            type="submit">
                            Save </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script>
        setTimeout(() => { MediansSettings.stepper() }, 1000);
    </script>
    @yield('search-scripts')


@endsection
