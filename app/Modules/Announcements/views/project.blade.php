@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">

    
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Announcements list</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0 ">

            @foreach ($announcements as $announcement)
            <hr />
            <label
                class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                <div class="user-img img-fluid"><img
                        src="{{ $announcement->user->picture ?? '/data/profile/avatar-2.png'}}" alt="story-img"
                        class="rounded-circle w-50px h-50px"></div>
                <div class="media-support-info px-4 w-full">
                    <h6 class="d-inline-block fw-semibold">{{$announcement->name}}</h6>
                    <div class="w-full flex mb-0 ">
                        <p class="w-full fw-normal my-0">
                            <span class="text-lg">{{$announcement->description}}</span>
                            <span rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-title="Start Date" data-content="Start date of the announcement"
                                class="badge bg-success badge-sm mx-2">{{date('M d, Y', strtotime($announcement->start))}}</span>
                            <span rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-title="End date" data-content="End date of the announcement"
                                class="badge bg-danger badge-sm mx-2">{{date('M d, Y', strtotime($announcement->end))}}</span>
                        </p>

                        <a data-path="{{route('Announcement.delete', $announcement->id)}}"
                            class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                            href="#!">
                            <span class="align-middle">Delete</span></a>
                    </div>
                </div>

            </label>
            @endforeach
            @if (count($announcements) < 1)
            No date here yet
            @endif
        </div>
        <!--end::Card body-->

        <!--begin::Card header-->
        <div class="card-header cursor-pointer ">
            <!--begin::Card title-->
            <div class="card-title m-0">
                <h3 class="fw-bold m-0">Add Announcement</h3>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->
        @include('announcements::new-form')
    </div>
</div>
@endsection