@extends('projects::project')

@section('project-content')
<div class="w-full" style=''>

    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">

        <div class="card mb-5 mb-xl-10 py-0">
            <div class="card-body py-0 flex w-full">
                <!--begin::Navs-->
                <ul class="w-full nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="">
                            Project Tasks </a>
                    </li>
                    <!--end::Nav item-->
                </ul>
                <!--begin::Navs-->
                <div class="d-flex flex-none align-items-center position-relative my-1 gap-10">
                    <input type="text" class="form-control form-control-solid w-250px ps-12"
                        placeholder="Search in Tasks">
                    <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Tasks.create_project', $project->project_id)}}" data-modal="#add-task-modal">
                        Add Task </a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12   post-wrapper">
        <div class="w-full flex gap-10 overflow-auto  mb-10">
    
            @foreach($statusList as $status)
            <div class="min-w-350px ">
                <div class="card">
                    <div class="card-body p-2">
                        <div class="d-flex flex-">
                            <div class="flex-shrink-0"><i class="p-1 fs-2tx bx bx-list-check"></i></div>
                            <div class="flex-grow-1 mx-3">
                                <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">{{$status->name}}</a>
                                </h5>
                                <p class="mb-0"><small>{{$tasks->first() ? $tasks->first()->countByStatus($status->name) : 0}} items</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tasks_container py-4"  data-id="{{$status->status_id}}">

                    @foreach($tasks as $task)
                    @if ($task->status_id == $status->status_id)
                    <div class="cursor-move w-full"  data-id="{{$task->task_id}}">
                        <div class="card"  >
                            <div class="sort_item card-body pb-0" data-id="{{$task->task_id}}">
                                <div class="w-full">
                                    <div class="block w-full">
                                        <h4 class="mb-4 block"> <a href="{{route('Tasks.project_task', $task->task_id)}}" class="open-modal"
                                                data-modal="#task-modal">{{ $task->name }} </a></h4>
                                        <p class="block w-full">{{ $task->description }}</p>
                                    </div>
                                </div>
                                <div class=" mt-10">
                                    <div class="flex align-items-center">
                                        <div class="w-full flex gap-2">
                                            <p class="m-0 mb-2">Assigned to</p>
                                            <div class="symbol-group symbol-hover flex-nowrap flex">
                                                @if($task->team)
                                                @foreach($task->team as $member)
                                                <div class="symbol symbol-25px symbol-circle" 
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="{{$member->user->name ?? ''}}">
                                                    
                                                    <img alt="Pic" src="/{{ $member->user->picture }}" class="w-10">
                                                </div>
                                                @endforeach
                                                @endif
                                            </div>
                                        </div>
                                        <span class="pt-2 block flex-none ">
                                            <div class="flex items-center justify-end gap-4">
                                                <a href="{{route('Tasks.project_task', $task->task_id)}}" data-modal="#add-task-modal"
                                                    class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="eye" class="lucide lucide-eye ">
                                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z">
                                                        </path>
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                    </svg></a>
                                                <a href="{{route('Tasks.edit_project', $task->task_id)}}" data-modal="#add-task-modal"
                                                    class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="check-square"
                                                        class="lucide lucide-check-square stroke-1.5 mr-1 h-4 w-4">
                                                        <polyline points="9 11 12 14 22 4"></polyline>
                                                        <path
                                                            d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11">
                                                        </path>
                                                    </svg></a>
                                                <a href="javascript:;" data-path="{{route('Task.delete', $task->task_id)}}"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        data-lucide="trash-2" class="lucide lucide-trash-2 ">
                                                        <path d="M3 6h18"></path>
                                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6">
                                                        </path>
                                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                                        <line x1="10" x2="10" y1="11" y2="17"></line>
                                                        <line x1="14" x2="14" y1="11" y2="17"></line>
                                                    </svg></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach

                </div>
            </div>
            @endforeach
            
            
        </div>
    </div>

    <div class="clearfix"></div>


    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('css')
<link href="/assets/plugins/jquery-ui/smoothness/jquery-ui.min.css" rel="stylesheet" type="text/css" media="screen" />
@endsection
@section('script')

<script src="{{asset('assets/plugins/jquery-ui/smoothness/jquery-ui.min.js')}}"></script>

<script>
jQuery(document).ready(function(){
    
        jQuery(".tasks_container").sortable({
            connectWith: ".tasks_container",
            handle: "div.sort_item",
            cancel: ".panel_actions",
            placeholder: "portlet-placeholder",
            update: function(event, ui) {
                var sortedIDs = $(this).sortable("toArray", { attribute: 'data-id' });
                // You can make an AJAX call here to save the new order to the server
                var listContainerId = $(this).attr('data-id');

                $.ajax({
                    url: '{{ route("Tasks.updateOrder") }}',
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
@endsection
