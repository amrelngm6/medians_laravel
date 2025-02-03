@extends('deal::page')

@section('deal-page')
<div class="col-xxl-6 col-lg-7 col-md-12">
    <div class="card mb-5 mb-xl-10" id="profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer w-full">
            <!--begin::Card title-->
            <div class="card-title m-0 w-full flex">
                <h3 class="fw-bold m-0 w-full">Client Details</h3>
                <a href="{{route('Client.edit', $deal->client_id)}}" class="open-modal fw-bold m-0 fs-3"><i
                        class="bx bx-edit"></i></a>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-2">
            <!--begin::Row-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <img class="w-10 h-10 p-1 rounded-circle" src="/{{$deal->client->picture ?? ''}}" />
                    <span class="fw-bold fs-6 text-gray-800">{{$deal->client->name}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->


            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">
                    Contact Phone

                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                        data-bs-original-title="Phone number must be active">
                        <i class="bx bx-phone"></i> </span>
                </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8 d-flex align-items-center">
                    <span class="fw-bold fs-6 text-gray-800 me-2">{{$deal->client->phone}}</span>
                    <a href="tel:{{$deal->client->phone}}" class="badge bg-success"><i class="bx bx-phone"></i> Call</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Company Site <i class='bx bx-globe'></i></label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <a href="javascript:;"
                        class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$deal->client->location_info->website ?? ''}}</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Contact Email <i class='bx bx-envelope'></i></label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <a href="javascript:;"
                        class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$deal->client->email}}</a>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">
                    Country
                    <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination"
                        data-bs-original-title="Country of origination" data-kt-initialized="1">
                        <i class='bx bxs-edit-location'></i> </span>

                </label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">{{$deal->client->location_info->country ?? ''}}</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-7">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Communication <i class='bx bx-bell'></i></label>
                <!--end::Label-->

                <!--begin::Col-->
                <div class="col-lg-8">
                    <span class="fw-bold fs-6 text-gray-800">Email, Phone</span>
                </div>
                <!--end::Col-->
            </div>
            <!--end::Input group-->

            <!--begin::Input group-->
            <div class="row mb-10">
                <!--begin::Label-->
                <label class="col-lg-4 fw-semibold text-muted">Allow Changes</label>
                <!--begin::Label-->

                <!--begin::Label-->
                <div class="col-lg-8">
                    <span class="fw-semibold fs-6 text-gray-800">Yes</span>
                </div>
                <!--begin::Label-->
            </div>
            <!--end::Input group-->

            @foreach ($deal->client->fields ?? [] as $field)
            @if (!empty($field->field->show_at_overview))
            <!--begin::Custom Fields group-->
            <div class="row mb-10">
                <label class="col-lg-4 fw-semibold text-muted">{{$field->title}}</label>
                <div class="col-lg-8">
                    <span class="fw-semibold fs-6 text-gray-800">{{$field->value}}</span>
                </div>
            </div>
            <!--end::Custom Fields group-->
            @endif
            @endforeach

            <!--begin::Notice-->
            <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                <!--begin::Icon-->
                <i class="ki-duotone ki-information fs-2tx text-warning me-4"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span></i>
                <!--end::Icon-->

                <!--begin::Wrapper-->
                <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
                    <div class=" fw-semibold">
                        <h4 class="text-gray-900 fw-bold">We need your attention!</h4>

                        <div class="fs-6 text-gray-700 ">Your account setup not completed. To start using tools,
                            please <a class="fw-bold" href="{{route(App::getLocale() . '.profile_setting')}}">Complete
                                your settings</a>.</div>
                    </div>
                    <!--end::Content-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Card body-->
    </div>
</div>


<div class="col-xxl-6 col-lg-5 col-md-12">

    <!--begin::Card-->
    <div class="card">

        <div class="flex border-0 p-7 pb-0">
            <div class="w-full">
                <h2 class="title ">Team Activities</h2>
                <p class="mb-0">Team activities at the projects tasks</p>
            </div>
            <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
        </div>

        <div class="card-body">

            <!--begin::Timeline-->
            <div class="timeline timeline-border-dashed h-350px overflow-auto">
                @foreach($deal->activities() as $activity)
                <!--begin::Timeline item-->
                @include('activities::block')
                <!--end::Timeline item-->
                @endforeach
            </div>
            <!--end::Timeline-->

        </div>
    </div>
    <!--end::Card-->

</div>


<div class="col-md-12">


</div>

@endsection
@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

@endsection