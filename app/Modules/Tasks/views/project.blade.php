@extends('projects::project')

@section('project-content')
<div class="w-full" style=''>

    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">

        <div class="card mb-5 mb-xl-10 py-0">
            <div class="card-body p-0 flex w-full">
                
                <form action="{{route('Project.tasks.filter', $project->project_id)}}" id="filter-form" class="card-header ajax-form px-0">
                    @csrf
                    <div class="card-title gap-6">
                        
                        <div class="d-flex align-items-center position-relative my-1" 
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Search for tasks by name" >
                            <input type="text" class="form-control form-control-solid w-150px ps-12" placeholder="Search in Tasks">
                        </div>
                        <div class="d-flex align-items-center position-relative my-1"
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter tasks by Due date" >
                            <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="invoices" class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                        </div>
                        
                        <div class="d-flex align-items-center position-relative my-1">
                            
                            <div class="select-placeholder w-full" 
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter by Status" >
                                <select id="status_id" name="status_id" placeholder=""
                                    class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                    <option value="0">-- Status --</option>
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
                    <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Tasks.create_project', $project->project_id)}}" data-modal="#add-task-modal">
                        Add Task </a>
                </div>

            </div>
        </div>
    </div>

    <div class="col-sm-12   post-wrapper">
        <div class="w-full flex gap-10 overflow-auto  mb-10" id="tasks-container">
    
           
            
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
    
    // Initial fetch without filters
    fetchData();

    

    // Add date range filtering logic
    $('#filter-date,.filter-on-change').on('change', function (ev, picker) {
        fetchData();
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
                    jQuery('#tasks-container').html(xhr.responseText);
                    handleSort();
                }
            }
        };
        xhr.send(formData);

    }

    function handleSort() {
        
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

    }
</script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
