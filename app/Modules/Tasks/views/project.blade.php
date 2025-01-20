@extends('projects::project')

@section('project-content')
<div class="w-full" style=''>

    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">

        <div class="card mb-5 mb-xl-10 py-0">
            <div class="card-body py-0 flex w-full">
                
                <form action="{{route('Project.tasks.filter', $project->project_id)}}" id="filter-form" class="card-header ajax-form">
                    @csrf
                    <div class="card-title">
                        <div class="d-flex align-items-center position-relative my-1">
                            <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="invoices" class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                        </div>
                        
                        <div class="d-flex align-items-center position-relative my-1">
                            
                            <div class="select-placeholder w-full">
                                <select id="status_id" name="status_id" placeholder=""
                                    class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                    <option value="0"></option>
                                    @foreach ($statusList as $status)
                                    <option value="{{$status->status_id}}">{{$status->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                
                <!--begin::Navs-->
                <span class="w-full"></span>
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
                                
                                <div class="pt-10 flex gap-4">
                                    <h5 class="w-full">Progress</h5>
                                    <span class="pt-1 block flex-none badge badge-danger light">{{$task->checklist->where('status' ,'1')->count()}} / {{ $task->checklist->count()}} Items</span>
                                </div>
                                <div class="mt-3">
                                    <div class="mb-0 progress default-progress h-4px">
                                        <div class="progress-bar bg-{{ $task->status->color ?? 'gradient1' }} progress-animated" 
                                            style="width: {{$task->progress()}}%; " role="progressbar">
                                            <span class="sr-only">{{$task->progress()}}% Complete</span>
                                        </div>
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
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="Manage task details"
                                                    class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                                    <i class="bx bx-show fs-3"></i>    
                                                </a>
                                                <a href="{{route('Tasks.edit_project', $task->task_id)}}" data-modal="#add-task-modal"
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="Edit task information"
                                                    class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                                    <i class="bx bx-edit fs-4"></i></a>
                                                <a href="javascript:;" data-path="{{route('Task.delete', $task->task_id)}}"
                                                    rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                                    data-content="Delete"
                                                    class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                                    <i class="bx bx-trash fs-4"></i>    
                                                </a>
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
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
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


    // Function to fetch and update table data
    // function fetchData(startDate = '', endDate = '') {
    function fetchData() {
        const form = document.getElementById('filter-form');
    
        // Get the form data as a FormData object
        const formData = new FormData(form);

        // Send the form data via AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', form.action, true);
        // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
        xhr.onreadystatechange = function () {
            console.log(xhr.responseText);
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.responseText)
                {
                    jQuery('tbody#rows-invoices').html(xhr.responseText);
                }
            }
        };
        xhr.send(formData);

    }

    // Initial fetch without filters
    // fetchData();

    // Add date range filtering logic
    $('#filter-date,.filter-on-change').on('change', function (ev, picker) {
        fetchData();
    });

</script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
