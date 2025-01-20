@extends('leads::page')

@section('lead-page')

            <div class="col-lg-12">
                <div class="card mb-5 mb-xl-10" id="profile_details_view">
                    <!--begin::Card header-->
                    <div class="card-header cursor-pointer">
                        <!--begin::Card title-->
                        <div class="card-title m-0">
                            <h3 class="fw-bold m-0">Profile Details</h3>
                        </div>
                        <!--end::Card title-->
                    </div>
                    <!--begin::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body p-9">
                        <!--begin::Row-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{$lead->name}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Company <i class='bx bx-buildings'></i></label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 fv-row">
                                <span class="fw-semibold text-gray-800 fs-6">{{$lead->company}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">
                                Contact Phone

                                <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active"
                                    data-bs-original-title="Phone number must be active" >
                                    <i class="bx bx-phone"></i> </span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8 d-flex align-items-center">
                                <span class="fw-bold fs-6 text-gray-800 me-2">{{$lead->phone}}</span>
                                <a href="tel:{{$lead->phone}}" class="badge bg-success"><i class="bx bx-phone"></i> Call</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Company Site <i class='bx bx-globe' ></i></label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$lead->location_info->website ?? ''}}</a>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Contact Email <i class='bx bx-envelope' ></i></label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{$lead->email}}</a>
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
                                    <i class='bx bxs-edit-location' ></i> </span>

                            </label>
                            <!--end::Label-->

                            <!--begin::Col-->
                            <div class="col-lg-8">
                                <span class="fw-bold fs-6 text-gray-800">{{$lead->location_info->country ?? ''}}</span>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-7">
                            <!--begin::Label-->
                            <label class="col-lg-4 fw-semibold text-muted">Communication <i class='bx bx-bell' ></i></label>
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
        
                        @foreach ($lead->fields ?? [] as $field)
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
                                        please <a class="fw-bold" href="{{route(App::getLocale() . '.profile_setting')}}">Complete your settings</a>.</div>
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
@endsection
