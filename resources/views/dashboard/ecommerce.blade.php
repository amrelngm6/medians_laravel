@extends('layout.master')
@section('title', 'E-Commerce Dashboard')
@section('css')

@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">E-Commerce Dashboard</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>

    <div class="clearfix"></div>

    <!-- begin:Wlecome  -->
    <!-- end:Wlecome  -->

    <div class="col-xs-12 col-md-6 col-lg-4">

        <div class="card mb-5">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                            <i class="bx bxs-pie-chart-alt fs-2tx"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Sales</p>
                        <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">$18,751</span>
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
                            <i class="bx bxs-cart-add fs-2tx"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Tax amount</p>
                        <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">$1,023</span>
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

        <div class="card ">
            <div class="card-body">
                <div class="d-flex align-items-center">
                    <div class="avatar-sm flex-shrink-0">
                        <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                            <i class="bx bx-line-chart-down fs-2tx"></i>
                        </span>
                    </div>
                    <div class="flex-grow-1 ms-3">
                        <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Net Earnings</p>
                        <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">$8,423</span>
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



    <div class="clearfix"></div>


    <div class="col-md-12  col-lg-6">
        <div class="card">
            <div class="flex border-0 p-7">
                <div class="w-full">
                    <h2 class="title ">Orders charts</h2>
                    <p class="mb-0">Monthly Orders stats over the Year</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>
            <div class="card-body">
                <canvas class="bar-chartjs w-full " data-label="Tasks"></canvas>
            </div>
        </div>
    </div>


    <div class="col-md-12  col-lg-6">
        <div class="card">

            <div class="flex border-0 p-7">
                <div class="w-full">
                    <h2 class="title ">Stock charts</h2>
                    <p class="mb-0">Stock log stats</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>

            <div class="card-body">
                <canvas class="line-chartjs w-full" data-fill="true" data-label="Tasks"></canvas>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-md-12  col-lg-8">
        <div class="card pb-0">

            <!--begin::Header-->
            <div class="flex border-0 p-7">
                <div class="w-full">
                    <h2 class="title ">Orders Derlivery</h2>
                    <p class="mb-0">Latest delivery orders with details</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>
            <!--end::Header-->

            <div class="card-body pt-2">

                <div class="table-responsive">
                    <table class="table mb-0 table-borderless">
                        <thead>
                            <tr>
                                <th scope="col" class="fw-bold">Package No.</th>
                                <th scope="col" class="fw-bold">Date</th>
                                <th scope="col" class="fw-bold">Delivery</th>
                                <th scope="col" class="fw-bold">Status</th>
                                <th scope="col" class="fw-bold">Location</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#0879985</td>
                                <td>26/12/2024</td>
                                <td>30/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-success">Moving</div>
                                </td>
                                <td>Victoria 8007 Australia</td>
                            </tr>
                            <tr>
                                <td>#0879984</td>
                                <td>23/12/2024</td>
                                <td>27/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-warning text-white">Pending</div>
                                </td>
                                <td>Athens 2745 Greece</td>
                            </tr>
                            <tr>
                                <td>#0879983</td>
                                <td>18/12/2024</td>
                                <td>21/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-danger">Canceled</div>
                                </td>
                                <td>Victoria 8007 Australia</td>
                            </tr>
                            <tr>
                                <td>#0879982</td>
                                <td>14/12/2024</td>
                                <td>20/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-info">Working</div>
                                </td>
                                <td>Delhi 0014 India</td>
                            </tr>
                            <tr>
                                <td>#0879981</td>
                                <td>10/12/2024</td>
                                <td>18/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-success">Moving</div>
                                </td>
                                <td>Alabama 2741 USA</td>
                            </tr>
                            <tr>
                                <td>#0879984</td>
                                <td>23/12/2024</td>
                                <td>27/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-warning text-white">Pending</div>
                                </td>
                                <td>Athens 2745 Greece</td>
                            </tr>
                            <tr>
                                <td>#0879983</td>
                                <td>18/12/2024</td>
                                <td>21/12/2024</td>
                                <td>
                                    <div class="badge badge-pill bg-danger">Canceled</div>
                                </td>
                                <td>Victoria 8007 Australia</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card p-7">
            <div class="w-full flex gap-2">

                <div class="w-full p-7">
                    <h2 class="title ">Orders Status</h2>
                    <p class="mb-0">Stats of orders by status</p>
                </div>

            </div>

            <div class="card-body pb-4 px-0 d-flex flex-column gap-6 align-items-center">
                <!--begin::Chart-->
                <canvas class="clean-doughnut-chartjs w-200px h-200px" data-label="Orders"></canvas>
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
    <div class="clearfix"></div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body p-0">
                <div class=" align-items-center justify-content-center">
                    <div class="col-md-6 col-xl-4 my-2">
                        <div class="mt-1 row align-items-center">
                            <div class="w-full">
                                <p class="mb-0 me-1">Sales</p>
                                <h5 class="mb-0">£ 5678.09</h5>
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
                                <h5 class="mb-0">£ 5678.09</h5>
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
                                <h5 class="mb-0">$ 5678.09</h5>
                                <p class="text-muted mb-0">Total Income</p>
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
    </div>
    <div class="clearfix"></div>

    <div class="col-md-12  col-lg-5">
        <div class="card card-flush ">
            <!--begin::Header-->
            <div class="flex border-0 p-7">
                <div class="w-full">
                    <h2 class="title ">Top rated products</h2>
                    <p class="mb-0">Top products with high rating</p>
                </div>
                <a href="javascript:void(0);" class="d-block pt-2 w-60px">View All</a>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-3 pb-4">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
                                <th class="p-0 min-w-200px"></th>
                                <th class="p-0 min-w-125px"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40px me-3">
                                            <img src="/data/products/1.png" class="" alt="">
                                        </div>

                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#!"
                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                Simmons</a>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                Area</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="float-end text-end border-0">
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning fs-6 "></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                    </div>

                                    <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40px me-3">
                                            <img src="/data/products/2.png" class="" alt="">
                                        </div>

                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#!"
                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                Black</a>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                Area</span>
                                        </div>
                                    </div>
                                </td>


                                <td class="float-end text-end border-0">
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning fs-6 "></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star-half text-warning fs-6"></i>
                                        </div>
                                    </div>

                                    <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40px me-3">
                                            <img src="/data/products/3.png" class="" alt="">
                                        </div>

                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#!"
                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                Howard</a>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                Area</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="float-end text-end border-0">
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning fs-6 "></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bx-star fs-6"></i>
                                        </div>
                                    </div>

                                    <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40px me-3">
                                            <img src="/data/products/4.png" class="" alt="">
                                        </div>

                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#!" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                Hawkins</a>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                Area</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="float-end text-end border-0">
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning fs-6 "></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bx-star fs-6"></i>
                                        </div>
                                    </div>

                                    <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                </td>

                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div class="symbol symbol-circle symbol-40px me-3">
                                            <img src="/data/products/5.png" class="" alt="">
                                        </div>

                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#!"
                                                class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                McKinney</a>
                                            <span class="text-gray-500 fw-semibold d-block fs-7">Zuid
                                                Area</span>
                                        </div>
                                    </div>
                                </td>

                                <td class="float-end text-end border-0">
                                    <div class="rating">
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning fs-6 "></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star text-warning  fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bxs-star-half text-warning fs-6"></i>
                                        </div>
                                        <div class="rating-label checked">
                                            <i class="bx bx-star fs-6"></i>
                                        </div>
                                    </div>

                                    <span class="text-gray-500 fw-semibold d-block fs-7 mt-1">Rating</span>
                                </td>

                            </tr>
                        </tbody>
                        <!--end::Table body-->
                    </table>
                </div>
                <!--end::Table container-->
            </div>
            <!--end: Card Body-->
        </div>
    </div>

    <div class="col-md-12 col-lg-7 ">
        <div class="card">
            <div class="card-body">
                <div id="world-map"></div>
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

    <script src="{{asset('assets/plugins/vis-timeline/vis-timeline-graph2d.min.js')}}"></script>
    <script src="{{asset('assets/js/timeline.js')}}"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection