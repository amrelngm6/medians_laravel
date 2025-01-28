@extends('layout.master')
@section('title', 'Invoices')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style="">

    <div class="col-xs-12">
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Invoices List</h1>
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
                        <strong>Invoices</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>
    <div class="clearfix"></div>
    <!-- STATS AREA STARTS -->

    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                            <i class='bx bxs-pie-chart-alt fs-2tx'></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Paid Amount</p>
                        <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">{{$settings['currency_code']}}{{number_format($invoices->where('status_id', $status('paid', $model::class))->sum('total'), 2)}}</span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 align-self-end">
                        <span class="badge bg-success text-success"><i
                                class="bx bxs-down-arrow-alt align-middle me-1"></i>4.67 %<span>
                            </span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="card ">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                            <i class='bx bx-line-chart-down fs-2tx'></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Net Profit</p>
                        <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">{{$settings['currency_code']}}{{number_format($invoices->where('status_id', $status('paid', $model::class))->sum('subtotal'), 2)}}</span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 align-self-end">
                        <span class="badge bg-danger text-danger"><i
                                class="bx bxs-down-arrow-alt align-middle me-1"></i>1.24 %<span>
                            </span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xs-12 col-md-6 col-lg-4">
        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                            <i class='bx bx-analyse fs-2tx'></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Invoices Count</p>
                        <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">{{$invoices->count()}}</span>
                        </h4>
                    </div>
                    <div class="flex-shrink-0 align-self-end">
                        <span class="badge bg-success text-success"><i
                                class="bx bxs-up-arrow-alt align-middle me-1"></i>1.24 %<span>
                            </span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- STATS AREA END -->

    <div class="clearfix"></div>

    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-xs-12 ">
        <section class="card ">
            <form action="{{route('Invoice.filter')}}" id="filter-form" class="card-header ajax-form">
                @csrf
                <div class="card-title">
                    <div class="d-flex align-items-center position-relative my-1">
                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="invoices" class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        
                        @include('status.status-field-inline')

                    </div>
                </div>
                <!-- <div class="flex flex-center">
                    <a class="btn btn-md btn-primary open-modal" data-modal="#add-payment-modal" href="javascript:;">
                        New Invoice </a>
                </div> -->
            </form>
            <div class="card-body" id="invoices">
                <div class="w-full">
                    <!-- ********************************************** -->
                    <table id="example" class="text-start display datatable table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-start">Code</th>
                                <th class="text-start">Client</th>
                                <th class="text-start">User</th>
                                <th class="text-start">Items</th>
                                <th class="text-start">Tax</th>
                                <th class="text-start">Discount</th>
                                <th class="text-start">Total</th>
                                <th class="text-start">Due Date</th>
                                <th class="text-start">Status</th>
                                <th class="text-start">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="rows-invoices">
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
        jQuery('tbody#rows-invoices').empty();
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
                    jQuery('tbody#rows-invoices').html(xhr.responseText);
                    table.clear();
                    table.responsive.recalc();
                }
            }
        };
        xhr.send(formData);

    }

    // Initial fetch without filters
    // fetchData();

    // Add date range filtering logic
    $('#filter-date,#status_id,.filter-on-change').on('change', function (ev, picker) {
        const dates = ev.target.value.split(' - ');
        const startDate = dates[0];
        const endDate = dates[1];
        fetchData(dates);
    });

</script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection