@extends('layout.master')
@section('title', 'CreditNotes')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style="">

    <div class="col-xs-12">
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">CreditNotes List</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="">Pages</a>
                    </li>
                    <li class="active">
                        <strong>CreditNotes</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- STATS AREA STARTS -->

    

    <div class="clearfix"></div>

    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-xs-12 ">
        <section class="card ">
            <form action="{{route('CreditNote.filter')}}" id="filter-form" class="card-header ajax-form">
                @csrf
                <div class="card-title w-full gap-4">
                    <div class="d-flex align-items-center position-relative my-1">
                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="credit_notes" class="filter-on-change datepicker form-control form-control-solid  w-200px" />
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        
                        <div class="select-placeholder w-full">
                            <select id="status_id" name="status_id" placeholder=""
                                class=" select-bootstrap border border-gray-300 form-control form-control-solid ">
                                <option value="0">Status</option>
                                @foreach ($statusList as $status)
                                <option value="{{$status->status_id}}">{{$status->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </form>
            <div class="card-body" id="credit_notes">
                <div class="w-full">
                    <!-- ********************************************** -->
                    <table id="example" class="text-start display ajax-datatable table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-start">Code</th>
                                <th class="text-start">User</th>
                                <th class="text-start">Invoice</th>
                                <th class="text-start">Subtotal</th>
                                <th class="text-start">Tax Amount</th>
                                <th class="text-start">Total</th>
                                <th class="text-start">Date</th>
                                <th class="text-start">Status</th>
                                <th class="text-start">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="rows-credit_notes">
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>


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
                    jQuery('tbody#rows-credit_notes').html(xhr.responseText);
                    table.clear();
                    table.responsive.recalc();
                } else {
                    jQuery('tbody#rows-credit_notes').html(' ');
                }
            }
        };
        xhr.send(formData);

    }

    // Initial fetch without filters
    // fetchData();

    // Add date range filtering logic
    $('#filter-date,#status_id,#category_id').on('change', function (ev, picker) {
        const dates = ev.target.value.split(' - ');
        const startDate = dates[0];
        const endDate = dates[1];
        fetchData(dates);
    });

</script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection