@extends('tasks::tasks_page')

@section('tasks-list')

<div class="w-full" style=''>

    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">

        <div class="card mb-5 mb-xl-10 py-0">
            <div class="card-body p-0 flex w-full">
                
                <form action="{{route('Tasks.filterKanban')}}" id="filter-form" class="card-header ajax-form px-0">
                    @csrf
                    <div class="card-title gap-6">
                                
                        <div class="d-flex align-items-center position-relative my-1 show-child" 
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Search for tasks by name" >
                            <input type="text" class="filter-on-change form-control form-control-solid w-150px " placeholder="Search in Tasks" name="name" id="search-name" data-element="tasks-container" data-form="filter-form">
                            <i onClick="(function(){testSpeech('#search-name', '#mic-icon');})()" id="mic-icon" class='hidden absolute top-2 right-0 cursor-pointer p-2 fs-1 show-on-hover bx bxs-microphone-alt'></i>
                        </div>
                        
                        
                        <div class="d-flex align-items-center position-relative my-1"
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter tasks by Due date" >
                            <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-form" data-element="tasks-container" class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                        </div>  
                        
                        <div class="d-flex align-items-center position-relative my-1">
                            @include('status.status-field-inline')
                        </div>
                        
                        <div class="d-flex align-items-center position-relative my-1">
                            @include('staff::search-input')
                        </div>
                    </div>
                </form>
                
                <!--begin::Navs-->
                <span class="w-full"></span>
                <!--begin::Navs-->
                <div class="d-flex flex-none align-items-center position-relative my-1 gap-10">
                    <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Task.create')}}" data-modal="#add-task-modal">
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
    setTimeout(() => {
        // Check if GET request has task_id and open the task modal
        if (window.location.search.includes('task_id')) {
            let taskId = window.location.search.split('task_id=')[1];
            jQuery('.open-modal[data-id='+taskId+']').trigger('click');
        }
    }, 2000);
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
@yield('search-scripts')

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
