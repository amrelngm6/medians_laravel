@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0 flex w-full">
                <h3 class="fw-bold m-0 w-full">Timesheets list</h3>
                <span onClick="(function(){jQuery('#timesheet-form').toggle()})()" class="fw-bold m-0 btn btn-md btn-primary ">Add Timesheet
                        </span>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <form action="{{route('Timesheet.store')}}" class="w-full ajax-form card-body " id="timesheet-form"
            style="display:none">
            @csrf
            <input type="hidden" name="model_id" value="{{$project->project_id}}" />
            <input type="hidden" name="model_type" value="{{get_class($project)}}" />
            <input type="hidden" name="user_id" value="{{$user->id()}}" />
            <input type="hidden" name="user_type" value="{{get_class($user)}}" />

            <div class="w-full flex gap-10">

                <div class="form-group w-full"><label for="start" class="control-label">Start time </label>
                    <input type="datetime-local" class=" form-control form-control-solid  " id="start" name="start"
                         value="{{date('Y-m-d H:i')}}">
                </div>
                <div class="form-group w-full"><label for="end" class="control-label" rel="popover"
                        data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Set the End date of the timesheet to approve"
                        data-title="Expiry Date" data-trigger="hover" data-html="true">Expiry Date <i
                            class="bx bx-help-circle"></i></label>
                    <input type="datetime-local" class=" form-control form-control-solid  " min="{{date('Y-m-d H:i')}}"
                        id="end" name="end"  value="{{date('Y-m-d H:i', strtotime('+1 Hour'))}}" >
                </div>
            </div>

            <div class="text-center">
                <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Submit
                    </span>
                </button>
            </div>
        </form>
        
        <!--begin::Card body-->
        <div class="card-body  ">
            @foreach ($timesheets as $timesheet)
            <hr />
            <div class="divide-y divide-gray-200 dark:divide-gray-700 w-full card card-flush mb-0 py-0">
                <div class="flex  items-center gap-y-4 pt-4  w-full gap-2">
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">ID:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="#!" onClick="(function(){jQuery('#timesheet-info-{{$timesheet->id}}').toggle()})()"  class="hover:underline">#{{$timesheet->id}}</a>
                        </dd>
                    </dl>

                    <dl class="w-full">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Staff:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            {{$timesheet->user->name ?? ''}}
                        </dd>
                    </dl>
                    
                    <dl class="w-full">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Model:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            {{$timesheet->model->name ?? ''}}
                        </dd>
                    </dl>

                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Start:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y - H:i a', strtotime($timesheet->start))}}</dd>
                    </dl>

                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">End:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y - H:i a', strtotime($timesheet->end))}}</dd>
                    </dl>

                    <dl class="">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Actions:</dt>
                        <dd 
                            class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                            <a href="javascript:;" data-path="{{route('Timesheet.delete', $timesheet->id)}}" class="delete-item"><i class='bx bx-trash fs-4'></i></a>
                        </dd>
                    </dl>

                </div>
            </div>
            @endforeach

            @if (count($timesheets) < 1) No data here yet @endif </div>
                <!--end::Card body-->

        </div>
    </div>

    @endsection
    