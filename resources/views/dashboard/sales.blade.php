@extends('layout.master')
@section('title', 'Sales Dashboard')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Sales Dashboard</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- [ Row 1 ] start -->
                <div class="col-sm-6 col-xl-4">
                    <div class="card statistics-card-1">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Online Orders</h5>
                            <div class="relative show-child">
                                <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                <div class="dropdown-menu show-on-hover">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body overflow-hidden relative">
                            <img src="/data/dashboard/img-status-1.svg" alt="img"
                                class="bottom-25 h-100 img-bg rounded-circle position-absolute right-0 w-50px">
                            <div class="d-flex align-items-center">
                                <h3 class="f-w-300 d-flex align-items-center m-b-0 fs-2hx">237 <small
                                        class="text-muted">/400</small></h3>
                                <span class="badge bg-light-success ms-2">36%</span>
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-brand-color-2" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card statistics-card-1">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Pending Orders</h5>
                            <div class="relative show-child">
                                <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                <div class="dropdown-menu show-on-hover">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body relative">
                            <img src="/data/dashboard/img-status-2.svg" alt="img"
                                class="h-100 img-bg rounded-circle position-absolute right-0 w-60px top-0">
                            <div class="d-flex align-items-center">
                                <h3 class="f-w-300 d-flex align-items-center m-b-0 fs-2hx">349 <small
                                        class="text-muted">/500</small></h3>
                                <span class="badge bg-light-primary ms-2">20%</span>
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">Delivery Orders</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-brand-color-1" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-4">
                    <div class="card statistics-card-1">
                        <div class="card-header d-flex align-items-center justify-content-between py-3">
                            <h5>Return Orders</h5>
                            <div class="relative show-child">
                                <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                <div class="dropdown-menu show-on-hover">
                                    <a class="dropdown-item" href="#">View</a>
                                    <a class="dropdown-item" href="#">Edit</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body relative">
                            <img src="/data/dashboard/img-status-1.svg" alt="img"
                                class="bottom-25 h-100 img-bg rounded-circle position-absolute right-0 w-50px">
                            <div class="d-flex align-items-center">
                                <h3 class="f-w-300 d-flex align-items-center m-b-0 fs-2hx">57 <small class="text-muted">/400</small>
                                </h3>
                                <span class="badge bg-light-danger ms-2">10%</span>
                            </div>
                            <p class="text-muted mb-2 text-sm mt-3">Return Orders</p>
                            <div class="progress" style="height: 7px">
                                <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Row 1 ] end -->
                <div class="clearfix"></div>


                <div class="col-md-4">
                    <div class="card p-7">
                        <div class="w-full flex gap-2">

                            <div class="w-full p-7">
                                <h2 class="title ">Orders Status</h2>
                                <p class="mb-0">Stats of orders by status</p>
                            </div>

                        </div>

                        <div class="card-body  px-0 d-flex flex-column gap-6 align-items-center">
                            <!--begin::Chart-->
                            <canvas class="clean-doughnut-chartjs w-200px h-200px" data-limit="6" data-label="Orders"></canvas>
                            <!--end::Chart-->

                            <!--begin::Labels-->
                            <div class="w-full">
                                <!--begin::Label-->
                                <div class="col-lg-6 pb-4 d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Completed</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">416</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-6 pb-4 d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Prnding</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">129</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-6  d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-warning me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Refunded</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">25</div>
                                </div>
                                <!--end::Label-->

                                <!--begin::Label-->
                                <div class="col-lg-6 d-flex fw-bold align-items-center">
                                    <div class="bullet w-8px h-3px rounded-2 bg-danger me-3"></div>
                                    <div class="text-gray-500 flex-grow-1 me-4">Canceled</div>
                                    <div class="fw-bolder text-gray-700 text-xxl-end">17</div>
                                </div>
                                <!--end::Label-->

                            </div>
                            <!--end::Labels-->
                        </div>
                    </div>

                </div>

                <div class="col-md-8  ">

                    <div class="card bg-dark-blue earning-card statistics-card-1">
                        <div class="card-body overflow-hidden relative">
                            <ul class="mt-3 nav nav-fill nav-pills align-items-center justify-content-center mb-5" id="pills-tab"
                                role="tablist">
                                <li class="nav-item active" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-mon" data-toggle="tab"
                                        href="#earnings-mon" role="tab" aria-controls="earnings-mon" aria-selected="true">Mon</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-tue" data-toggle="tab"
                                        href="#earnings-tue" role="tab" aria-controls="earnings-tue" aria-selected="false"
                                        tabindex="-1">Tue</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-wed" data-toggle="tab"
                                        href="#earnings-wed" role="tab" aria-controls="earnings-wed" aria-selected="false"
                                        tabindex="-1">Wed</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-thu" data-toggle="tab"
                                        href="#earnings-thu" role="tab" aria-controls="earnings-thu" aria-selected="false"
                                        tabindex="-1">Thu</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-fri" data-toggle="tab"
                                        href="#earnings-fri" role="tab" aria-controls="earnings-fri" aria-selected="false"
                                        tabindex="-1">Fri</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-sat" data-toggle="tab"
                                        href="#earnings-sat" role="tab" aria-controls="earnings-sat" aria-selected="false"
                                        tabindex="-1">Sat</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link fw-bold text-white" id="pills-earnings-sun" data-toggle="tab"
                                        href="#earnings-sun" role="tab" aria-controls="earnings-sun" aria-selected="false"
                                        tabindex="-1">Sun</a>
                                </li>
                            </ul>
                            <div class="mb-3 tab-content px-0" id="tabContent-pills">
                                <div class="tab-pane fade active in " id="earnings-mon" role="tabpanel">
                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="earnings-tue" role="tabpanel" aria-labelledby="pills-earnings-tue">

                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="earnings-wed" role="tabpanel" aria-labelledby="pills-earnings-wed">
                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="earnings-thu" role="tabpanel" aria-labelledby="pills-earnings-thu">

                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="earnings-fri" role="tabpanel" aria-labelledby="pills-earnings-fri">
                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="earnings-sat" role="tabpanel" aria-labelledby="pills-earnings-sat">
                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="earnings-sun" role="tabpanel" aria-labelledby="pills-earnings-sun">
                                    <div class="w-full">
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-bar-chart text-white fs-1"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">984,632</h3>
                                                        <span class="badge badge-sm h-15px bg-danger ms-2">10%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Earnings</p>
                                                </div>
                                                <canvas class="clean-bar-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="d-flex align-items-center">
                                                <div class="avtar  bg-opacity-50 flex-shrink-0">
                                                    <i class="bx bx-line-chart fs-1 text-white f-30"></i>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="d-inline-flex align-items-center mb-1">
                                                        <h3 class="mb-0 text-white">134,276</h3>
                                                        <span class="badge badge-sm h-15px bg-success ms-2">12%</span>
                                                    </div>
                                                    <p class="mb-0 text-white text-opacity-75">Total Expenses</p>
                                                </div>
                                                <canvas class="clean-line-chartjs w-150px h-50px" data-limit="10" data-color="white"
                                                    data-fill="true" width="50" height="20"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-body p-0">
                            <div class=" align-items-center justify-content-center">
                                <div class="col-md-6 col-xl-4 my-2">
                                    <div class="mt-1 row align-items-center">
                                        <div class="w-full">
                                            <p class="mb-0 me-1">Sales</p>
                                            <h5 class="mb-0">$6780.09</h5>
                                            <p class="text-muted mb-0">Total Sales</p>
                                        </div>
                                        <div class="col-4">
                                            <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="7" height="30"
                                                width="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 my-2">
                                    <div class="mt-1 row align-items-center">
                                        <div class="w-full">
                                            <p class="mb-0 me-1">Tax</p>
                                            <h5 class="mb-0">$178.09</h5>
                                            <p class="text-muted mb-0">Total Tax</p>
                                        </div>
                                        <div class="col-6">
                                            <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="7" height="30"
                                                width="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4 my-2">
                                    <div class="mt-1 row align-items-center">
                                        <div class="w-full">
                                            <p class="mb-0 me-1">Revenue</p>
                                            <h5 class="mb-0">$678.09</h5>
                                            <p class="text-muted mb-0">Profit</p>
                                        </div>
                                        <div class="col-6">
                                            <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="5" height="30"
                                                width="100"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full flex gap-10">

                        <div class="w-full">
                            <div class="widget-stat pb-0 card bg-info">
                                <div class="card-body p-0 ">
                                    <div class="media flex gap-4">
                                        <div class="flex-none flex-end text-white ">
                                            <p class="mb-1">Sales</p>
                                            <h3 class="text-white">$341.73K</h3>
                                        </div>
                                        <span class="w-full">
                                            <canvas class="clean-line-chartjs relative" data-fill="true" data-color="white"
                                                data-label="Sales" height="40" width="100%"></canvas>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="widget-stat pb-0 card bg-primary">
                                <div class="card-body p-0 ">
                                    <div class="media  flex gap-4">
                                        <div class="pt-2 flex-none text-white ">
                                            <p class="mb-1">Referrals</p>
                                            <h3 class="text-white mb-0 pb-0">16.57K</h3>
                                        </div>
                                        <span class="w-full ">
                                            <canvas class="clean-bar-chartjs relative" data-color="white" data-label="Sales"
                                                height="40" width="100%"></canvas>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="clearfix"></div>


                <div class="col-md-12 col-lg-7  ">
                    <div class="card">
                        <div class="card-body">
                            <div id="us-map"></div>

                        </div>
                    </div>


                    <div class="w-full flex gap-10 ">

                        <div class="card w-full">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Featured Users</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div class="block w-full">
                                    <div class="d-flex align-items-end my-3">
                                        <div class="d-flex align-items-end ">
                                            <h1 class="mb-0">416</h1>
                                            <span class="badge bg-success py-1 mx-2">14%</span>
                                        </div>
                                        <p class="text-muted mb-0">Yearly Increase</p>
                                    </div>
                                    <canvas class="clean-bar-chartjs" data-limit="8" width="300" height="100"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="card w-full">
                            <div class="card-header d-flex align-items-center justify-content-between py-3">
                                <h5>Featured Users</h5>
                                <div class="relative show-child">
                                    <a class="avtar avtar-xs btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false"><i class=" bx bx-dots-vertical"></i></a>
                                    <div class="dropdown-menu show-on-hover">
                                        <a class="dropdown-item" href="#">View</a>
                                        <a class="dropdown-item" href="#">Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body py-2">
                                <div class="block w-full">
                                    <div class="d-flex align-items-end my-3">
                                        <div class="d-flex align-items-end ">
                                            <h1 class="mb-0">416</h1>
                                            <span class="badge bg-success py-1 mx-2">14%</span>
                                        </div>
                                        <p class="text-muted mb-0">Yearly Increase</p>
                                    </div>
                                    <canvas class="clean-line-chartjs" data-color="#f23f3f" data-limit="8" width="300"
                                        height="100"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-body py-0">

                            <div class="d-flex  rounded  ">
                                <!--begin::Block-->
                                <div class="d-flex align-items-center flex-grow-1 me-2 me-sm-5">
                                    <!--begin::Symbol-->
                                    <div class="symbol symbol-50px me-4">
                                        <span class="symbol-label">
                                            <i class="bx bx-rocket fs-2qx text-primary"><span class="path1"></span><span
                                                    class="path2"></span></i>
                                        </span>
                                    </div>
                                    <!--end::Symbol-->

                                    <!--begin::Section-->
                                    <div class="me-2">
                                        <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">Tests</a>

                                        <span class="text-gray-500 fw-bold d-block fs-7">You take 12 subjects at this
                                            semester</span>
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Block-->

                                <!--begin::Info-->
                                <div class="d-flex align-items-center">
                                    <span class="text-gray-900 fw-bolder fs-2x">27</span>

                                    <span class="fw-semibold fs-2 text-gray-600 mx-1 pt-1">/</span>

                                    <span class="text-gray-600 fw-semibold fs-2 me-3 pt-2">38</span>

                                    <span class="badge badge-lg badge-light-warning align-self-center px-2">80%</span>
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-lg-5 ">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex align-items-center">
                                <h5 class="mb-0 w-full">Conversion Rate</h5>
                                <i class="bx bx-line-chart fs-1 ms-1" data-bs-toggle="tooltip" data-bs-title="Conversion Rate"></i>
                            </div>
                            <div class="d-flex align-items-start my-4">
                                <h2>5.63</h2>
                                <p>%</p>
                                <span class="badge bg-light-success ms-2"><i class="bx bx-up-arrow-alt me-1"></i>
                                    3.4%</span>
                            </div>
                        </div>
                        <div class="table-body card-body py-0 ">
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <h6 class="f-w-500 mb-0">Added to Cart</h6>
                                                <span class="d-block text-muted">5 visits</span>
                                            </td>
                                            <td class="text-end">7.04</td>
                                            <td class="text-end"><i class="bx bx-up-arrow-alt text-success"></i>
                                                4.0%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="f-w-500 mb-0">Reached Checkout</h6>
                                                <span class="d-block text-muted">5 visits</span>
                                            </td>
                                            <td class="text-end">7.04</td>
                                            <td class="text-end"><i class="bx bx-up-arrow-alt text-success"></i>
                                                2.0%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="f-w-500 mb-0">Purchased</h6>
                                                <span class="d-block text-muted">4 orders</span>
                                            </td>
                                            <td class="text-end">5.63</td>
                                            <td class="text-end"><i class="bx bx-arrow-down text-danger"></i> 1.4%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <h6 class="f-w-500 mb-0">Purchased</h6>
                                                <span class="d-block text-muted">4 orders</span>
                                            </td>
                                            <td class="text-end">5.63</td>
                                            <td class="text-end"><i class="bx bx-arrow-down text-danger"></i> 1.4%
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header py-7">
                            <h5>Visits by Location</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                            <div class="dropdown show-child relative">
                                <a class="avtar avtar-s btn-link-secondary  arrow-none" href="#" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical f-18"></i>
                                </a>
                                <div class="dropdown-menu show-on-hover">
                                    <a class="dropdown-item" href="#">Today</a>
                                    <a class="dropdown-item" href="#">Weekly</a>
                                    <a class="dropdown-item" href="#">Monthly</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body py-3">
                            <div class="table-responsive">
                                <table class="table table-hover table-striped table-borderless text-center mb-0">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/data/flags/egypt.svg" alt=""
                                                        class="rounded-circle w-30px h-30px rounded-circle">
                                                    <h6 class="mb-0 ms-2">Egypt</h6>
                                                </div>
                                            </td>
                                            <td class="text-end">38</td>
                                            <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                5.8%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/data/flags/united-states.svg" alt=""
                                                        class="rounded-circle w-30px h-30px rounded-circle">
                                                    <h6 class="mb-0 ms-2">USA</h6>
                                                </div>
                                            </td>
                                            <td class="text-end">928</td>
                                            <td><i class="bx bx-arrow-down text-danger f-18 align-text-bottom"></i>
                                                51.2%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/data/flags/spain.svg" alt=""
                                                        class="rounded-circle w-30px h-30px rounded-circle">
                                                    <h6 class="mb-0 ms-2">Spain</h6>
                                                </div>
                                            </td>
                                            <td class="text-end">674</td>
                                            <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                17.1%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/data/flags/ar.svg" alt=""
                                                        class="rounded-circle w-30px h-30px rounded-circle">
                                                    <h6 class="mb-0 ms-2">UK</h6>
                                                </div>
                                            </td>
                                            <td class="text-end">1,438</td>
                                            <td><i class="bx bx-arrow-down text-danger f-18 align-text-bottom"></i>
                                                15.8%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/data/flags/en.svg" alt=""
                                                        class="rounded-circle w-30px h-30px rounded-circle">
                                                    <h6 class="mb-0 ms-2">Brazil</h6>
                                                </div>
                                            </td>
                                            <td class="text-end">90</td>
                                            <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                9.8%</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <img src="/data/flags/spain.svg" alt=""
                                                        class="rounded-circle w-30px h-30px rounded-circle">
                                                    <h6 class="mb-0 ms-2">Germany</h6>
                                                </div>
                                            </td>
                                            <td class="text-end">123</td>
                                            <td><i class="bx bx-up-arrow-alt text-success f-18 align-text-bottom"></i>
                                                5.8%</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/chart-chartjs.js')}}"></script>


    <script src="{{asset('assets/plugins/highcharts/highmaps.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/exporting.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/data.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/accessibility.js')}}"></script>
    <script src="{{asset('assets/js/chart-map.js')}}"></script>


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection