@extends('tasks::tasks_page')
@section('tasks-views-menu')
<!--begin::Nav item-->
<li class="nav-item mt-2">
    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('Tasks')}}">
        List </a>
</li>
<!--end::Nav item-->
@endsection

@section('tasks-list')

<div class="col-lg-12">

    <div class="card mb-5 mb-xl-10 py-0">
        <div class="card-body p-0 flex w-full">
            
            <form action="{{route('Task.filter')}}" id="filter-form" class="card-header ajax-form px-0">
                @csrf
                <div class="card-title gap-6">
                    
                    <div class="d-flex align-items-center position-relative my-1" 
                        rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Search for tasks by name" >
                        <input type="text" class="filter-on-change form-control form-control-solid w-150px " placeholder="Search in Tasks" name="name">
                    </div>
                    <div class="d-flex align-items-center position-relative my-1"
                        rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Filter tasks by Due date" >
                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="invoices" class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                    </div>  
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        @include('status.status-field-inline')
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


                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                                </div>
                            </div>
                        </div>

                        <div class="card-body">

                            <div class="table" data-pattern="priority-columns">
                                <table
                                    class="w-full whitespace-nowrap table  table-small-font no-mb table-bordered table-striped"
                                    id="example">
                                    <thead class="text-start bg-slate-100 dark:bg-zink-600">
                                        <tr>
                                            <th class=" task_code" data-sort="task_code">Task ID</th>
                                            <th class="text-start task_name" data-sort="task_name">Task Name</th>
                                            <th class="text-start" data-sort="client">Client</th>
                                            <th class="text-start ">Assignees</th>
                                            <th class="text-start  start" data-sort="start">Start</th>
                                            <th class="text-start  end" data-sort="end">Deadline</th>
                                            <th class="text-start  status" data-sort="status">Status</th>
                                            <th class="text-start  action">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="rows-tasks">
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
@endsection



@section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    
    

    <script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

    
<script>
    var table = $('#example').DataTable({
        // Disable automatic processing (as we manage it manually)
        paging: true,     // Enable pagination
        searching: true,  // Enable search box
        ordering: true,   // Enable column sorting
        info: true,       // Show table info (e.g., "Showing X of Y entries")
        autoWidth: false, // Disable auto-width
        responsive: true  // Make it responsive
    });

    // Function to fetch and update table data
    // function fetchData(startDate = '', endDate = '') {
    function fetchData(dates) {
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
                    jQuery('tbody#rows-tasks').html(xhr.responseText);
                    table.clear();
                    table.responsive.recalc();
                } else {
                    jQuery('tbody#rows-tasks').html(' ');
                }
            }
        };
        xhr.send(formData);

    }

    // Initial fetch without filters
    // fetchData();

    // Add date range filtering logic
    $('#filter-date,.filter-on-change').on('change', function (ev, picker) {
        const dates = ev.target.value.split(' - ');
        const startDate = dates[0];
        const endDate = dates[1];
        fetchData(dates);
    });

</script>

@endsection