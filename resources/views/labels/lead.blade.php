@extends('leads.page')

@section('lead-page')

<div class="col-lg-12">
    <div class="card mb-5 mb-xl-10" id="profile_details_view">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Labels list</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body p-9">
            @foreach ($labels as $label)

            <label
                class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                <div class="user-img img-fluid"><img src="{{ $label->user->picture ?? '/data/profile/avatar-2.png'}}" alt="story-img"
                        class="rounded-circle w-50px h-50px"></div>
                <div class="media-support-info px-4 w-full">
                    <h6 class="d-inline-block">{{$label->description}}</h6>
                    <div class="w-full flex mb-0 ">
                        <p class="w-full">by {{ $label->user->name ?? ''}}
                            <span class="badge badge-success badge-sm mx-2">{{date('M d, Y', strtotime($label->created_at))}}</span>
                        </p>
                            
                        <a data-path="{{route('Label.delete', $label->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                            href="#!">
                            <span class="align-middle">Delete</span></a>
                    </div>
                </div>

            </label>
            @endforeach

            <form action="{{route('Label.store')}}" class="w-full ajax-form" id="label-form">
                @csrf
                <input type="hidden" name="model_id" value="{{$lead->lead_id}}" />
                <input type="hidden" name="model_type" value="{{get_class($lead)}}" />
                <div class="d-flex flex-column my-10">
                    <label class="fs-6 fw-semibold mb-2">Message</label>

                    <textarea class="form-control form-control-solid" rows="3" name="description"
                        placeholder="Type Message Details"></textarea>
                </div>
                <div class="text-center">
                    <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
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
            </div>
        </div>
        <!--end::Card body-->
    </div>
</div>
@endsection