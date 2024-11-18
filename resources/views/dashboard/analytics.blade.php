@extends('layout.master')
@section('title', 'Analytics Dashboard')
@section('css')

@endsection

@section('main-content')

    <div class="wrapper main-wrapper row" style=''>

        <div class='col-xs-12'>
            <div class="page-title">

                <div class="pull-left">
                    <!-- PAGE HEADING TAG - START -->
                    <h1 class="title">Analytics Dashboard</h1>
                    <!-- PAGE HEADING TAG - END -->
                </div>

            </div>
        </div>


        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                <!--begin::Header-->
                <div class="card-header pt-5 mb-15">
                    <!--begin::Title-->
                    <div class="card-title ">
                        <!--begin::Amount-->
                        <h1 class="fs-bold fw-bold text-gray-900 me-2 lh-1 ls-n2">4,659</h1>
                        <!--end::Amount-->

                        <!--begin::Subtitle-->
                        <span class="text-gray-500 pt-1 fw-semibold fs-6">Unique visitors</span>
                        <!--end::Subtitle-->
                    </div>
                    <!--end::Title-->
                </div>
                <!--end::Header-->

                <!--begin::Card body-->
                <div class="card-body  justify-content-end pe-0">
                    <!--begin::Title-->
                    <p class="fs-6 fw-bolder text-gray-800 block mb-2">Today’s Heroes</p>
                    <!--end::Title-->

                    <!--begin::Users group-->
                    <div class="symbol-group symbol-hover flex-nowrap flex">
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Alan Warden" data-kt-initialized="1">
                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Michael Eberon"
                            data-bs-original-title="Michael Eberon" data-kt-initialized="1">
                            <img alt="Pic" src="/data/profile/avatar-1.png">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Melody Macy"
                            data-bs-original-title="Melody Macy" data-kt-initialized="1">
                            <img alt="Pic" src="/data/profile/avatar-2.png">
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                            data-bs-original-title="Perry Matthew" data-kt-initialized="1">
                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                        </div>
                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" aria-label="Barry Walter"
                            data-bs-original-title="Barry Walter" data-kt-initialized="1">
                            <img alt="Pic" src="/data/profile/avatar-3.png">
                        </div>
                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                            data-bs-target="#kt_modal_view_users">
                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                        </a>
                    </div>
                    <!--end::Users group-->
                </div>
                <!--end::Card body-->
            </div>
        </div>

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
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Invested</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">2,793</span>
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

            <div class="card ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                                <i class='bx bx-line-chart-down fs-2tx'></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Unique visits</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">1,023</span>
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
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Re-visits</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="2390.68">1,457</span>
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

            <div class="card ">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3 material-shadow">
                                <i class="bx bx-user fs-2tx"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1"> Total Pages</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="395">395</span>
                            </h4>
                        </div>
                        <div class="flex-shrink-0 align-self-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="clearfix"></div>
        <!-- MAIN CONTENT AREA STARTS -->

        <div class="col-lg-12 ">
            <div class="card" style="overflow:hidden">
                <div class="card-body">
                    <h2 class="title pull-left">Total Visits Statistics</h2>
                </div>
                <div class="card-body px-0 ">
                    <div id="demoarea-chart" class="pl-4">
                        <span id="hoverdata"></span>
                        <span id="clickdata"></span>
                        <div id="demoarea-container" style="width: 100%;height:330px; text-align: center; margin:0 auto;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-md-6 ">

            <div class="card card-flush ">
                <!--begin::Header-->
                <div class="card-header py-7">

                    <!--begin::Statistics-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Title-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                            <!--end::Title-->

                            <!--begin::Label-->
                            <span class="badge round-success fs-base">
                                <i class="bx bxs-up-arrow-alt"></i>
                                2.2%
                            </span>
                            <!--end::Label-->

                        </div>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
                        <!--end::Description-->
                    </div>
                    <!--end::Statistics-->


                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body card-body d-flex justify-content-between flex-column pt-3">

                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <i class='bx bxl-instagram fs-2hx me-4 text-sinata'></i>
                        <!--end::Flag-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Content-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                                <!--end::Number-->

                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge round-success fs-base">
                                        <i class="bx bxs-up-arrow-alt"></i>
                                        2.6%
                                    </span>
                                    <!--end::Label-->

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->


                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->


                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <i class='bx bxl-facebook fs-2hx me-4 text-dark-blue'></i>
                        <!--end::Flag-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Content-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>

                                <!--end::Number-->

                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge round-success fs-base">
                                        <i class="bx bxs-up-arrow-alt"></i>
                                        0.4%
                                    </span>
                                    <!--end::Label-->

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->


                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->


                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <i class='bx bxl-linkedin fs-2hx me-4 text-cyan '></i>
                        <!--end::Flag-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">Linked In</a>
                                <!--end::Title-->
                            </div>
                            <!--end::Content-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                                <!--end::Number-->

                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge round-danger fs-base">
                                        <i class="bx bxs-down-arrow-alt"></i>
                                        0.2%
                                    </span>
                                    <!--end::Label-->

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->


                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-3"></div>
                    <!--end::Separator-->


                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Flag-->
                        <i class='bx bxl-youtube fs-2hx me-4 red-text'></i>
                        <!--end::Flag-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                            <!--begin::Content-->
                            <div class="me-5">
                                <!--begin::Title-->
                                <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                <!--end::Title-->

                                <!--begin::Desc-->
                                <span class="text-gray-500 fw-semibold fs-7 d-block text-start ps-0">Video
                                    Channel</span>
                                <!--end::Desc-->
                            </div>
                            <!--end::Content-->

                            <!--begin::Wrapper-->
                            <div class="d-flex align-items-center">
                                <!--begin::Number-->
                                <span class="text-gray-800 fw-bold fs-4 me-3">978</span>

                                <!--end::Number-->

                                <!--begin::Info-->
                                <div class="m-0">
                                    <!--begin::Label-->
                                    <span class="badge round-success fs-base">
                                        <i class="bx bxs-up-arrow-alt"></i>
                                        4.1%
                                    </span>
                                    <!--end::Label-->

                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->


                </div>
                <!--end::Body-->
            </div>
        </div>


        <div class="col-xs-12 col-md-6 ">

            <div class="card card-flush ">
                <!--begin::Header-->
                <div class="card-header py-7">

                    <!--begin::Statistics-->
                    <div class="m-0">
                        <!--begin::Heading-->
                        <div class="d-flex align-items-center mb-2">
                            <!--begin::Title-->
                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                            <!--end::Title-->

                            <!--begin::Label-->
                            <span class="badge round-success fs-base">
                                <i class="bx bxs-up-arrow-alt"></i>
                                2.2%
                            </span>
                            <!--end::Label-->

                        </div>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <span class="fs-6 fw-semibold text-gray-500">Visits by Social Networks</span>
                        <!--end::Description-->
                    </div>
                    <!--end::Statistics-->


                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body card-body d-flex justify-content-between flex-column pt-0">

                    <div class="chart-container relative">
                        <canvas class="clean-bar-chartjs" width="600"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>


        <div class="col-sm-12 col-md-4">
            <div class="card overflow-hidden">
                <div class="card-body pb-7 bg-light-primary">
                    <div class="row align-items-center">
                        <div class="col-5">
                            <p class="text-muted mb-1">Total Visitors</p>
                            <div class="d-flex align-items-center mb-1">
                                <h4 class="mb-0">235</h4>
                                <span class="badge bg-primary ms-2">20%</span>
                            </div>
                            <p class="text-primary text-sm mb-0">More than last Month</p>
                        </div>
                        <div class="col-6">
                            <canvas class="clean-bar-chartjs w-125px h-50px" data-limit="8" width="50" height="20"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-body">

                    <div class="row align-items-center">
                        <div class="col-6">
                            <p class="mb-0"><i class="bx bx-circle text-warning me-2"></i> Parcel in the
                                way</p>
                            <div class="d-flex align-items-center my-2">
                                <h2 class="d-flex align-items-center m-b-0">25 <span class="text-muted">/40</span>
                                </h2>
                            </div>
                            <p class="mb-0">
                                <span class="text-success"><i class="bx bx-caret-up f-20 align-bottom"></i>
                                    +15%</span> last month
                            </p>
                        </div>
                        <div class="col-6">
                            <canvas class="clean-doughnut-chartjs h-80px " data-limit="8"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-4">
            <div class="card">
                <div class="card-body">

                    <div class="d-flex align-items-center justify-content-between">
                        <div class="col-6">
                            <div class="d-flex align-items-center justify-content-between">
                                <div>
                                    <h5>Product earn</h5>
                                    <p class="text-muted mb-0">Sale Product</p>
                                    <div class="d-flex align-items-end mt-1">
                                        <h4 class="mb-0">375</h4>
                                        <span class="badge bg-light-success ms-2">36%</span>
                                    </div>
                                </div>
                                <div class="avtar bg-brand-color-2 text-white">
                                    <i class="bx bx-cube f-26"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <canvas class="clean-pie-chartjs h-80px" data-limit="8"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="col-md-12">

            <div class="card ">
                <div class="card-body px-0 py-7">
                    <div id="world-map"></div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>

        <div class="col-lg-8">
            <div class="card">
                <div class="card-body px-0 py-7 ">
                    <div class="col-xs-12">
                        <h2 class="title mb-10">Latest Sent messages</h2>

                        <div class="table-responsive" data-pattern="priority-columns">
                            <table id="tech-companies-1"
                                class="table vm table-small-font no-mb table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Customer</th>
                                        <th>Email</th>
                                        <th>Time.</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="round">S</div>
                                            <div class="designer-info">
                                                <h6>Sunil Joshi</h6>
                                                <small class="text-muted">+020 109 876 5432</small>
                                            </div>
                                        </td>
                                        <td>Sunil@example.com</td>
                                        <td>06:34 PM</td>
                                        <td><span class="badge round-primary">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round round-success">V</div>
                                            <div class="designer-info">
                                                <h6>Messsy Adam</h6>
                                                <small class="text-muted">+044 109 876 5432</small>
                                            </div>
                                        </td>
                                        <td>Messsy@example.com</td>
                                        <td>04:21 PM</td>
                                        <td><span class="badge round-danger">Answered</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round round-warning">J</div>
                                            <div class="designer-info">
                                                <h6>John Richards</h6>
                                                <small class="text-muted">+020 109 876 5432</small>
                                            </div>
                                        </td>
                                        <td>John@example.com</td>
                                        <td>09:21 AM</td>
                                        <td><span class="badge round-primary">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round round-primary">P</div>
                                            <div class="designer-info">
                                                <h6>Peter Meggik</h6>
                                                <small class="text-muted">+020 109 876 5432</small>
                                            </div>
                                        </td>
                                        <td>Peter@example.com</td>
                                        <td>02:28 PM</td>
                                        <td><span class="badge round-primary">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="round round-danger">T</div>
                                            <div class="designer-info">
                                                <h6>Henry Tom</h6>
                                                <small class="text-muted">+020 109 876 5432</small>
                                            </div>
                                        </td>
                                        <td>Henry@example.com</td>
                                        <td>11:28 PM</td>
                                        <td><span class="badge round-danger">Answered</span></td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>


        </div>

        <div class="col-xs-12 col-md-6 col-lg-4">
            <div class="card " dir="ltr">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column flex-center px-0">
                    <!--begin::Heading-->
                    <div class="mb-2">
                        <!--begin::Title-->
                        <h1 class="fw-semibold text-gray-800 text-center lh-lg">
                            Quick form to <br>
                            <span class="fw-bolder"> Reply to sent messages</span>
                            from customers
                        </h1>
                        <!--end::Title-->

                        <!--begin::Illustration-->
                        <div class="py-10 text-center">
                            <img src="/assets/images/3.svg" class="theme-light-show w-200px" alt="">
                        </div>
                        <!--end::Illustration-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Links-->
                    <div class="text-center mb-1">
                        <!--begin::Link-->
                        <a class="btn btn-sm btn-primary me-2 open-modal" data-modal="#form-modal">
                            Start Now </a>
                        <!--end::Link-->

                        <!--begin::Link-->
                        <a class="btn btn-sm btn-light" href="javascript:;">
                            Quick Guide </a>
                        <!--end::Link-->
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Body-->
            </div>

        </div>


        <div class="clearfix"></div>

        <!-- MAIN CONTENT AREA ENDS -->
    </div>
    @include('includes.modals.send-message-modal')
    @endsection


    @section('script')

    <!-- FLOT Charts -->
    <script src="{{asset('assets/plugins/flot-chart/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot-chart/jquery.flot.time.js')}}"></script>
    <script src="{{asset('assets/js/chart-flot.js')}}"></script>

    <!-- HIGCHARTS JS ( Map ) -->
    <script src="{{asset('assets/plugins/highcharts/highmaps.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/exporting.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/data.js')}}"></script>
    <script src="{{asset('assets/plugins/highcharts/accessibility.js')}}"></script>
    <script src="{{asset('assets/js/chart-map.js')}}"></script>

    <!-- ChartJs Charts -->
    <script src="{{asset('assets/plugins/chartjs-chart/Chart.min.js')}}"></script>
    <script src="{{asset('assets/js/chart-chartjs.js')}}"></script>

    @endsection