@extends('layout.master')
@section('title', 'Files Manager')
@section('css')

@endsection
@section('main-content')


        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Files manager </h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                    <div class="pull-right hidden-xs">
                        <ol class="breadcrumb">
                            <li>
                                <a href="/"><i class="fa fa-home"></i>Home</a>
                            </li>
                            <li class="">
                                <strong>APPs</strong>
                            </li>
                            <li class="active">
                                <strong>Files Manager</strong>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="col-12 file-manger-wrapper">
                <a class="px-5 h5 text-hover-primary my-3 d-block" href="javascript:;" role="button" aria-expanded="false">Quick
                    Filter</a>
                <div class="w-full">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="avtar bg-light-primary"><svg viewBox="0 0 24 24" class="pc-icon h-50px ">
                                        <path
                                            d="M22.0187 16.8203L18.8887 9.50027C18.3187 8.16027 17.4687 7.40027 16.4987 7.35027C15.5387 7.30027 14.6087 7.97027 13.8987 9.25027L11.9987 12.6603C11.5987 13.3803 11.0287 13.8103 10.4087 13.8603C9.77867 13.9203 9.14867 13.5903 8.63867 12.9403L8.41867 12.6603C7.70867 11.7703 6.82867 11.3403 5.92867 11.4303C5.02867 11.5203 4.25867 12.1403 3.74867 13.1503L2.01867 16.6003C1.39867 17.8503 1.45867 19.3003 2.18867 20.4803C2.91867 21.6603 4.18867 22.3703 5.57867 22.3703H18.3387C19.6787 22.3703 20.9287 21.7003 21.6687 20.5803C22.4287 19.4603 22.5487 18.0503 22.0187 16.8203Z"
                                            fill="currentcolor"></path>
                                        <path
                                            d="M6.96984 8.38109C8.83657 8.38109 10.3498 6.86782 10.3498 5.00109C10.3498 3.13437 8.83657 1.62109 6.96984 1.62109C5.10312 1.62109 3.58984 3.13437 3.58984 5.00109C3.58984 6.86782 5.10312 8.38109 6.96984 8.38109Z"
                                            fill="currentcolor"></path>
                                    </svg></div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h6 class="mb-1">Documents</h6>
                                        <p class="mb-0">100 files</p>
                                    </div><span class="badge bg-primary f-12">15 GB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="avtar bg-light-danger"><svg viewBox="0 0 24 24" class="pc-icon h-50px  ">
                                        <path d="M14.7295 2H9.26953V6.36H14.7295V2Z" fill="currentcolor"></path>
                                        <path d="M16.2305 2V6.36H21.8705C21.3605 3.61 19.3305 2.01 16.2305 2Z"
                                            fill="currentcolor"></path>
                                        <path
                                            d="M2 7.85938V16.1894C2 19.8294 4.17 21.9994 7.81 21.9994H16.19C19.83 21.9994 22 19.8294 22 16.1894V7.85938H2ZM14.44 16.1794L12.36 17.3794C11.92 17.6294 11.49 17.7594 11.09 17.7594C10.79 17.7594 10.52 17.6894 10.27 17.5494C9.69 17.2194 9.37 16.5394 9.37 15.6594V13.2594C9.37 12.3794 9.69 11.6994 10.27 11.3694C10.85 11.0294 11.59 11.0894 12.36 11.5394L14.44 12.7394C15.21 13.1794 15.63 13.7994 15.63 14.4694C15.63 15.1394 15.2 15.7294 14.44 16.1794Z"
                                            fill="currentcolor"></path>
                                        <path d="M7.76891 2C4.66891 2.01 2.63891 3.61 2.12891 6.36H7.76891V2Z"
                                            fill="currentcolor"></path>
                                    </svg></div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h6 class="mb-1">Videos</h6>
                                        <p class="mb-0">100 files</p>
                                    </div><span class="badge bg-danger f-12">2.4 GB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="avtar bg-light-success"><svg viewBox="0 0 24 24" class="pc-icon h-50px   ">
                                        <path
                                            d="M16 4.25C16 5.49 14.99 6.5 13.75 6.5H10.25C9.63 6.5 9.07 6.25 8.66 5.84C8.25 5.43 8 4.87 8 4.25C8 3.01 9.01 2 10.25 2H13.75C14.37 2 14.93 2.25 15.34 2.66C15.75 3.07 16 3.63 16 4.25Z"
                                            fill="currentcolor"></path>
                                        <path
                                            d="M18.83 5.02874C18.6 4.83874 18.34 4.68874 18.06 4.57874C17.77 4.46874 17.48 4.69874 17.42 4.99874C17.08 6.70874 15.57 7.99874 13.75 7.99874H10.25C9.25 7.99874 8.31 7.60874 7.6 6.89874C7.08 6.37874 6.72 5.71874 6.58 5.00874C6.52 4.70874 6.22 4.46874 5.93 4.58874C4.77 5.05874 4 6.11874 4 8.24874V17.9987C4 20.9987 5.79 21.9987 8 21.9987H16C18.21 21.9987 20 20.9987 20 17.9987V8.24874C20 6.61874 19.55 5.61874 18.83 5.02874ZM8 12.2487H12C12.41 12.2487 12.75 12.5887 12.75 12.9987C12.75 13.4087 12.41 13.7487 12 13.7487H8C7.59 13.7487 7.25 13.4087 7.25 12.9987C7.25 12.5887 7.59 12.2487 8 12.2487ZM16 17.7487H8C7.59 17.7487 7.25 17.4087 7.25 16.9987C7.25 16.5887 7.59 16.2487 8 16.2487H16C16.41 16.2487 16.75 16.5887 16.75 16.9987C16.75 17.4087 16.41 17.7487 16 17.7487Z"
                                            fill="currentcolor"></path>
                                    </svg></div>
                                <div class="d-flex align-items-end justify-content-between mt-4">
                                    <div>
                                        <h6 class="mb-1">Images</h6>
                                        <p class="mb-0">100 files</p>
                                    </div><span class="badge bg-success f-12">2.4 GB</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card border-0 shadow-none drp-upgrade-card">
                            <div class="card-body">
                                <h5 class="mb-0 text-muted">20.5GB of 50GB</h5>
                                <div class="row align-items-center my-2">
                                    <div class="col">
                                        <div class="progress" style="height: 6px">
                                            <div class="progress-bar bg-primary" style="width: 70%"></div>
                                        </div>
                                    </div>
                                    <div class="col-auto">
                                        <p class="mb-0 text-muted">70%</p>
                                    </div>
                                </div>
                                <button class="btn btn-warning mt-3">Want More Storage?</button>

                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-3 border border-secondary-subtle">
                <div class="col-md-12">
                    <div class="w-full card">
                        <div class="card-header ">
                            <div class="card-title w-full flex ">
                                <form action="{{route('Uploads.filter')}}" id="filter-form" data-element="files-list" class="w-full ajax-form flex gap-10">
                                    @csrf
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input type="text" placeholder="Find File by name" name="name" id="filter-name"  class="filter-on-change  form-control form-control-solid  w-200px" />
                                    </div>
                                    <div class="d-flex align-items-center position-relative my-1">
                                        <input value="{{date('01-01-Y')}} - {{date('m-d-Y')}}" type="text" name="date" id="filter-date" class="filter-on-change datepicker form-control form-control-solid  w-200px" />
                                    </div>
                                </form>
                                <a class="flex-none btn btn-md btn-primary me-2 open-modal" data-modal="#upload-modal"
                                    href="javascript:;">
                                    Upload File </a>
                            </div>
                            
                        </div>
                        <div class="flex flex-column gap-3 p-7" id="files-list">
                        </div>
                    </div>
                </div>
            </div>


            <!-- MAIN CONTENT AREA ENDS -->
        </div>
        @include('includes.modals.upload-modal')
@endsection



@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<script>
    jQuery('#filter-date,.filter-on-change').on('change', function (ev, picker) {
        jQuery('#files-list').empty()
        submitForm('filter-form', 'files-list');
    });
</script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection