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

            <div class="col-lg-12 ">

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
                <a class="px-5 h5 text-hover-primary my-3 d-block" href="javascript:;" role="button" aria-expanded="false">Folders</a>
                <div class="w-full">
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="d-flex flex-">
                                    <div class="flex-shrink-0"><svg viewBox="0 0 24 24"
                                            class="pc-icon h-50px  wid-40 hei-40 text-warning">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.35791 12.7787C2.74772 13.7201 2.99956 15.0291 3.50323 17.647C3.8658 19.5316 4.04709 20.4738 4.67523 21.0991C4.8382 21.2614 5.02054 21.4052 5.2186 21.5277C5.98195 21.9999 6.99539 21.9999 9.02227 21.9999H15.9777C18.0046 21.9999 19.0181 21.9999 19.7814 21.5277C19.9795 21.4052 20.1618 21.2614 20.3248 21.0991C20.9529 20.4738 21.1342 19.5316 21.4968 17.647C22.0004 15.0291 22.2523 13.7201 21.6421 12.7787C21.4864 12.5384 21.2943 12.321 21.0721 12.1332C20.2011 11.3975 18.7933 11.3975 15.9777 11.3975H9.02227C6.20667 11.3975 4.79888 11.3975 3.92792 12.1332C3.70566 12.321 3.51363 12.5384 3.35791 12.7787ZM9.69518 17.1806C9.69518 16.7814 10.0376 16.4577 10.4601 16.4577H14.5398C14.9622 16.4577 15.3047 16.7814 15.3047 17.1806C15.3047 17.5798 14.9622 17.9035 14.5398 17.9035H10.4601C10.0376 17.9035 9.69518 17.5798 9.69518 17.1806Z"
                                                fill="#1C274C" />
                                            <path opacity="0.5"
                                                d="M3.5762 12.4846C3.68271 12.3586 3.80034 12.241 3.92792 12.1332C4.79888 11.3975 6.20667 11.3975 9.02227 11.3975H15.9777C18.7933 11.3975 20.2011 11.3975 21.0721 12.1332C21.2 12.2413 21.3179 12.3592 21.4247 12.4857V9.75579C21.4247 8.84687 21.4247 8.09279 21.3394 7.49156C21.2494 6.85704 21.0531 6.29458 20.5839 5.83245C20.5074 5.75707 20.4266 5.68552 20.342 5.61807C19.8302 5.21023 19.2167 5.04345 18.5222 4.96608C17.8531 4.89155 17.0102 4.89157 15.9769 4.89158L15.6242 4.89158C14.6421 4.89158 14.29 4.88587 13.9711 4.80533C13.7837 4.75802 13.604 4.69195 13.4352 4.60878C13.151 4.46867 12.9033 4.25762 12.2077 3.64132L11.7336 3.22128C11.5345 3.04489 11.3987 2.9245 11.2531 2.81755C10.6284 2.35879 9.86779 2.08132 9.07145 2.01534C8.88602 1.99998 8.6968 1.99999 8.41356 2.00002L8.29714 2.00001C7.65647 1.9999 7.23365 1.99983 6.86652 2.0612C5.26167 2.32947 3.96392 3.45143 3.64782 4.93575C3.57591 5.27344 3.57602 5.66035 3.57619 6.21853L3.5762 12.4846Z"
                                                fill="#1C274C" />
                                        </svg></div>
                                    <div class="flex-grow-1 mx-3">
                                        <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Documents</a></h5>
                                        <p class="mb-0"><small>24 files</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><svg viewBox="0 0 24 24"
                                            class="pc-icon h-50px  wid-40 hei-40 text-warning">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.35791 12.7787C2.74772 13.7201 2.99956 15.0291 3.50323 17.647C3.8658 19.5316 4.04709 20.4738 4.67523 21.0991C4.8382 21.2614 5.02054 21.4052 5.2186 21.5277C5.98195 21.9999 6.99539 21.9999 9.02227 21.9999H15.9777C18.0046 21.9999 19.0181 21.9999 19.7814 21.5277C19.9795 21.4052 20.1618 21.2614 20.3248 21.0991C20.9529 20.4738 21.1342 19.5316 21.4968 17.647C22.0004 15.0291 22.2523 13.7201 21.6421 12.7787C21.4864 12.5384 21.2943 12.321 21.0721 12.1332C20.2011 11.3975 18.7933 11.3975 15.9777 11.3975H9.02227C6.20667 11.3975 4.79888 11.3975 3.92792 12.1332C3.70566 12.321 3.51363 12.5384 3.35791 12.7787ZM9.69518 17.1806C9.69518 16.7814 10.0376 16.4577 10.4601 16.4577H14.5398C14.9622 16.4577 15.3047 16.7814 15.3047 17.1806C15.3047 17.5798 14.9622 17.9035 14.5398 17.9035H10.4601C10.0376 17.9035 9.69518 17.5798 9.69518 17.1806Z"
                                                fill="#1C274C" />
                                            <path opacity="0.5"
                                                d="M3.5762 12.4846C3.68271 12.3586 3.80034 12.241 3.92792 12.1332C4.79888 11.3975 6.20667 11.3975 9.02227 11.3975H15.9777C18.7933 11.3975 20.2011 11.3975 21.0721 12.1332C21.2 12.2413 21.3179 12.3592 21.4247 12.4857V9.75579C21.4247 8.84687 21.4247 8.09279 21.3394 7.49156C21.2494 6.85704 21.0531 6.29458 20.5839 5.83245C20.5074 5.75707 20.4266 5.68552 20.342 5.61807C19.8302 5.21023 19.2167 5.04345 18.5222 4.96608C17.8531 4.89155 17.0102 4.89157 15.9769 4.89158L15.6242 4.89158C14.6421 4.89158 14.29 4.88587 13.9711 4.80533C13.7837 4.75802 13.604 4.69195 13.4352 4.60878C13.151 4.46867 12.9033 4.25762 12.2077 3.64132L11.7336 3.22128C11.5345 3.04489 11.3987 2.9245 11.2531 2.81755C10.6284 2.35879 9.86779 2.08132 9.07145 2.01534C8.88602 1.99998 8.6968 1.99999 8.41356 2.00002L8.29714 2.00001C7.65647 1.9999 7.23365 1.99983 6.86652 2.0612C5.26167 2.32947 3.96392 3.45143 3.64782 4.93575C3.57591 5.27344 3.57602 5.66035 3.57619 6.21853L3.5762 12.4846Z"
                                                fill="#1C274C" />
                                        </svg></div>
                                    <div class="flex-grow-1 mx-3">
                                        <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Uploads</a>
                                        </h5>
                                        <p class="mb-0"><small>50 files</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><svg viewBox="0 0 24 24"
                                            class="pc-icon h-50px  wid-40 hei-40 text-warning">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.35791 12.7787C2.74772 13.7201 2.99956 15.0291 3.50323 17.647C3.8658 19.5316 4.04709 20.4738 4.67523 21.0991C4.8382 21.2614 5.02054 21.4052 5.2186 21.5277C5.98195 21.9999 6.99539 21.9999 9.02227 21.9999H15.9777C18.0046 21.9999 19.0181 21.9999 19.7814 21.5277C19.9795 21.4052 20.1618 21.2614 20.3248 21.0991C20.9529 20.4738 21.1342 19.5316 21.4968 17.647C22.0004 15.0291 22.2523 13.7201 21.6421 12.7787C21.4864 12.5384 21.2943 12.321 21.0721 12.1332C20.2011 11.3975 18.7933 11.3975 15.9777 11.3975H9.02227C6.20667 11.3975 4.79888 11.3975 3.92792 12.1332C3.70566 12.321 3.51363 12.5384 3.35791 12.7787ZM9.69518 17.1806C9.69518 16.7814 10.0376 16.4577 10.4601 16.4577H14.5398C14.9622 16.4577 15.3047 16.7814 15.3047 17.1806C15.3047 17.5798 14.9622 17.9035 14.5398 17.9035H10.4601C10.0376 17.9035 9.69518 17.5798 9.69518 17.1806Z"
                                                fill="#1C274C" />
                                            <path opacity="0.5"
                                                d="M3.5762 12.4846C3.68271 12.3586 3.80034 12.241 3.92792 12.1332C4.79888 11.3975 6.20667 11.3975 9.02227 11.3975H15.9777C18.7933 11.3975 20.2011 11.3975 21.0721 12.1332C21.2 12.2413 21.3179 12.3592 21.4247 12.4857V9.75579C21.4247 8.84687 21.4247 8.09279 21.3394 7.49156C21.2494 6.85704 21.0531 6.29458 20.5839 5.83245C20.5074 5.75707 20.4266 5.68552 20.342 5.61807C19.8302 5.21023 19.2167 5.04345 18.5222 4.96608C17.8531 4.89155 17.0102 4.89157 15.9769 4.89158L15.6242 4.89158C14.6421 4.89158 14.29 4.88587 13.9711 4.80533C13.7837 4.75802 13.604 4.69195 13.4352 4.60878C13.151 4.46867 12.9033 4.25762 12.2077 3.64132L11.7336 3.22128C11.5345 3.04489 11.3987 2.9245 11.2531 2.81755C10.6284 2.35879 9.86779 2.08132 9.07145 2.01534C8.88602 1.99998 8.6968 1.99999 8.41356 2.00002L8.29714 2.00001C7.65647 1.9999 7.23365 1.99983 6.86652 2.0612C5.26167 2.32947 3.96392 3.45143 3.64782 4.93575C3.57591 5.27344 3.57602 5.66035 3.57619 6.21853L3.5762 12.4846Z"
                                                fill="#1C274C" />
                                        </svg></div>
                                    <div class="flex-grow-1 mx-3">
                                        <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Images</a>
                                        </h5>
                                        <p class="mb-0"><small>100 files</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-3">
                        <div class="card">
                            <div class="card-body p-2">
                                <div class="d-flex">
                                    <div class="flex-shrink-0"><svg viewBox="0 0 24 24"
                                            class="pc-icon h-50px  wid-40 hei-40 text-warning">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.35791 12.7787C2.74772 13.7201 2.99956 15.0291 3.50323 17.647C3.8658 19.5316 4.04709 20.4738 4.67523 21.0991C4.8382 21.2614 5.02054 21.4052 5.2186 21.5277C5.98195 21.9999 6.99539 21.9999 9.02227 21.9999H15.9777C18.0046 21.9999 19.0181 21.9999 19.7814 21.5277C19.9795 21.4052 20.1618 21.2614 20.3248 21.0991C20.9529 20.4738 21.1342 19.5316 21.4968 17.647C22.0004 15.0291 22.2523 13.7201 21.6421 12.7787C21.4864 12.5384 21.2943 12.321 21.0721 12.1332C20.2011 11.3975 18.7933 11.3975 15.9777 11.3975H9.02227C6.20667 11.3975 4.79888 11.3975 3.92792 12.1332C3.70566 12.321 3.51363 12.5384 3.35791 12.7787ZM9.69518 17.1806C9.69518 16.7814 10.0376 16.4577 10.4601 16.4577H14.5398C14.9622 16.4577 15.3047 16.7814 15.3047 17.1806C15.3047 17.5798 14.9622 17.9035 14.5398 17.9035H10.4601C10.0376 17.9035 9.69518 17.5798 9.69518 17.1806Z"
                                                fill="#1C274C" />
                                            <path opacity="0.5"
                                                d="M3.5762 12.4846C3.68271 12.3586 3.80034 12.241 3.92792 12.1332C4.79888 11.3975 6.20667 11.3975 9.02227 11.3975H15.9777C18.7933 11.3975 20.2011 11.3975 21.0721 12.1332C21.2 12.2413 21.3179 12.3592 21.4247 12.4857V9.75579C21.4247 8.84687 21.4247 8.09279 21.3394 7.49156C21.2494 6.85704 21.0531 6.29458 20.5839 5.83245C20.5074 5.75707 20.4266 5.68552 20.342 5.61807C19.8302 5.21023 19.2167 5.04345 18.5222 4.96608C17.8531 4.89155 17.0102 4.89157 15.9769 4.89158L15.6242 4.89158C14.6421 4.89158 14.29 4.88587 13.9711 4.80533C13.7837 4.75802 13.604 4.69195 13.4352 4.60878C13.151 4.46867 12.9033 4.25762 12.2077 3.64132L11.7336 3.22128C11.5345 3.04489 11.3987 2.9245 11.2531 2.81755C10.6284 2.35879 9.86779 2.08132 9.07145 2.01534C8.88602 1.99998 8.6968 1.99999 8.41356 2.00002L8.29714 2.00001C7.65647 1.9999 7.23365 1.99983 6.86652 2.0612C5.26167 2.32947 3.96392 3.45143 3.64782 4.93575C3.57591 5.27344 3.57602 5.66035 3.57619 6.21853L3.5762 12.4846Z"
                                                fill="#1C274C" />
                                        </svg></div>
                                    <div class="flex-grow-1 mx-3">
                                        <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Media</a></h5>
                                        <p class="mb-0"><small>100 files</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-3 border border-secondary-subtle">
                <div class="col-md-12">
                    <div class="w-full card">
                        <div class="card-header ">
                            <div class="card-title w-full flex ">
                                <h2 class="w-full">Files list</h2>
                                <a class="flex-none btn btn-md btn-primary me-2 open-modal" data-modal="#upload-modal"
                                    href="javascript:;">
                                    Upload File </a>
                            </div>
                        </div>
                        <div class="flex flex-column gap-3 p-7">
                            <div href="javascript:;"
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                                    <i class="bx bxs-file-doc fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>Preview-01.jpg</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>

                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-2.png"> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>

                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-danger shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-1.png"> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>



                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-primary shrink-0">
                                    <i class="bx bxs-file-pdf fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>Homepage-design.pdf</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-5.png"> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-warning shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-1.png"> <span class="pt-1"><b>Adam Smith</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-info shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-3.png"> <span class="pt-1"><b>Jhon Doe</b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


                            <div
                                class="flex items-center gap-10 !py-3 border-y border-dashed rounded-md card-body pb-0 border-slate-200 dark:border-zink-500 mb-10">
                                <div
                                    class="flex items-center justify-center text-sm font-semibold rounded-md size-9 text-warning shrink-0">
                                    <i class="bx bxs-file-txt fs-2hx"></i>
                                </div>
                                <div class="grow min-w-150px">
                                    <h6>changelog.txt</h6>
                                    <p class="text-slate-500 dark:text-zink-200">1.2 MB</p>
                                </div>
                                <div class="w-full">
                                    Uploaded at Nov 10, 2024
                                </div>
                                <div class="flex flex-none  gap-2">
                                    <span class="pt-1">By</span> <img class="rounded-circle w-30px h-30px"
                                        src="/data/profile/avatar-2.png"> <span class="pt-1"><b>Smith Adam </b></span>
                                </div>
                                <div class="flex items-center justify-end gap-2">
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="eye" class="lucide lucide-eye size-3">
                                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="arrow-down-to-line"
                                            class="lucide lucide-arrow-down-to-line size-3">
                                            <path d="M12 17V3"></path>
                                            <path d="m6 11 6 6 6-6"></path>
                                            <path d="M19 21H5"></path>
                                        </svg></a>
                                    <a href="javascript:;"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" data-lucide="trash-2" class="lucide lucide-trash-2 size-3">
                                            <path d="M3 6h18"></path>
                                            <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"></path>
                                            <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"></path>
                                            <line x1="10" x2="10" y1="11" y2="17"></line>
                                            <line x1="14" x2="14" y1="11" y2="17"></line>
                                        </svg></a>
                                </div>
                            </div>


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
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection