@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">

    
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0 w-full flex">
                <h3 class="fw-bold m-0 w-full">Project Milestones</h3>
                
                <a class="btn btn-md btn-primary me-2 show-modal" href="#!" data-modal="#create-project-milestone">
                    New Milestone </a>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0 ">

            @foreach ($milestones as $milestone)
            <hr />
            <div class="divide-y divide-gray-200 dark:divide-gray-700 w-full card card-flush mb-0 py-0">
                <div class="flex  items-center gap-y-4 pt-4  w-full gap-2">
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">ID:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="#!" onClick="(function(){jQuery('#milestone-info-{{$milestone->id}}').toggle()})()"  class="hover:underline">#ES-{{$milestone->id}}</a>
                        </dd>
                    </dl>

                    <dl class="w-full">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Title:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            {{$milestone->name}}
                        </dd>
                    </dl>

                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Start Date:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y', strtotime($milestone->start_date))}}</dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">End Date:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y', strtotime($milestone->end_date))}}</dd>
                    </dl>
                    <dl class="">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Actions:</dt>
                        <dd 
                            class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                            <!-- <i onClick="(function(){jQuery('#milestone-info-{{$milestone->id}}').toggle()})()" class='cursor-pointer bx bx-show fs-3'></i> -->
                            <a href="{{route('Milestone.edit', $milestone->id)}}" class="text-primary"><i class='bx bx-edit fs-4'></i></a>
                            <a href="javascript:;" data-path="{{route('Milestone.delete', $milestone->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                        </dd>
                    </dl>

                </div>
            </div>
            @endforeach
            @if (count($milestones) < 1)
            No date here yet
            @endif
        </div>
        <!--end::Card body-->
        @include('milestones::create-project-milestone')
    </div>
</div>
@endsection