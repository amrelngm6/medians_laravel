@extends('layout.master')
@section('title', 'All Projects')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Proposals list</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
                <div class="card-title">
                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                </div>
                
                <a class="btn btn-md btn-primary me-2 show-modal" href="#!" data-modal="#new-proposal-modal">
                    New Proposal </a>
            </div>
        </div>
    </div>

    <div class="col-xs-12 ">
        <section class="card ">
            <form action="{{route('Proposal.filter')}}" id="filter-form" class="card-header ajax-form">
                @csrf
                <div class="card-title w-full gap-6">
                    <div class="d-flex align-items-center position-relative my-1">
                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" data-form="filter-date" data-element="proposals" class="filter-on-change datepicker form-control form-control-solid py-1 w-200px" />
                    </div>
                    
                    <div class="d-flex align-items-center position-relative my-1">
                        @include('status.status-field-inline')
                    </div>
                    <span class="w-full"></span>
                    <a class="btn btn-md btn-primary me-2 show-modal" href="#!" data-modal="#new-proposal-modal">
                        New Proposal </a>
                </div>
            </form>
            <div class="card-body" id="proposals">
                <div class="w-full">
                    <!-- ********************************************** -->
                    <table id="example" class="text-start display ajax-datatable table table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-start">ID</th>
                                <th class="text-start">Title</th>
                                <th class="text-start">Client</th>
                                <th class="text-start">Item</th>
                                <th class="text-start">Total</th>
                                <th class="text-start">Due Date</th>
                                <th class="text-start">Status</th>
                                <th class="text-start">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="rows-proposals">
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>



    <div class="modal fade  active " id="new-proposal-modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <a class="cursor-pointer text-danger close-modal" data-modal="#new-proposal-modal">
                        <i class='bx bx-message-square-x fs-2qx'></i>
                    </a>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">New Proposal</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Create new Proposal for your <a href="{{route('Client')}}"
                                class="fw-bold link-primary">Clients</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    @include('proposals::new-form')

                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
</div>
@include('proposals::items-modal')

@endsection

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
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
    function fetchData() {
        jQuery('tbody#rows-proposals').html(' ');
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
                    jQuery('tbody#rows-proposals').html(xhr.responseText);
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
    $('#filter-date,.filter-on-change').on('change', function (ev, picker) {
        fetchData();
    });

</script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection