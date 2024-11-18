@extends('layout.master')
@section('title', 'Invoice')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Create Invoice</h1>
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
                                    <strong>Create Invoice</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->



                <div class="col-sm-12">

                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="intro-y box mt-5 overflow-hidden">
                                <div class="border-b text-start">
                                    <div class="px-5 py-10 sm:px-20 sm:py-20">
                                        <div class="fs-2hx font-semibold text-primary">INVOICE</div>
                                        <div class="mt-2 fs-3">
                                            Receipt <span class="fw-bold">#001023194</span>
                                        </div>
                                        <div class="mt-1">Nov 02, 2024</div>
                                    </div>
                                    <div class="flex  px-5 pb-10 pt-10 ">
                                        <div class="text-start w-full">
                                            <div class="text-base text-slate-500">Client Details</div>
                                            <div class="mt-2 fs-1 fw-bold text-primary">
                                                Adam Smith
                                            </div>
                                            <div class="mt-1">mail@example.com</div>
                                            <div class="mt-1">
                                                140 W. Storm Street New York, NY 10025.
                                            </div>
                                        </div>
                                        <div class="flex-none text-end">
                                            <div class="text-base text-slate-500">Payment to</div>
                                            <div class="mt-2 fs-1 fw-bold text-primary">
                                                Medians
                                            </div>
                                            <div class="mt-1">info@example.com</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="px-5 py-10 sm:px-16 sm:py-20">
                                    <div class="overflow-x-auto">
                                        <table class="w-full text-left">
                                            <thead class="">
                                                <tr class="">
                                                    <th
                                                        class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap dark:border-darkmode-400">
                                                        DESCRIPTION
                                                    </th>
                                                    <th
                                                        class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap text-right dark:border-darkmode-400">
                                                        QTY
                                                    </th>
                                                    <th
                                                        class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap text-right dark:border-darkmode-400">
                                                        PRICE
                                                    </th>
                                                    <th
                                                        class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap text-right dark:border-darkmode-400">
                                                        SUBTOTAL
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="">
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-400">
                                                        <div class="whitespace-nowrap fw-bold">
                                                            Midone - Tailwind Admin Dashboard Template
                                                        </div>
                                                        <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                                            Regular License
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                                        2
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                                        $25
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right fw-bold dark:border-darkmode-400">
                                                        $50
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-400">
                                                        <div class="whitespace-nowrap fw-bold">
                                                            Vuejs Admin Template
                                                        </div>
                                                        <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                                            Regular License
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                                        1
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                                        $25
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right fw-bold dark:border-darkmode-400">
                                                        $25
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-400">
                                                        <div class="whitespace-nowrap fw-bold">
                                                            React Admin Template
                                                        </div>
                                                        <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                                            Regular License
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                                        1
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                                        $25
                                                    </td>
                                                    <td class="px-5 py-3 border-b w-32 text-right fw-bold dark:border-darkmode-400">
                                                        $25
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-300">
                                                        <div class="whitespace-nowrap fw-bold">
                                                            Laravel Admin Template
                                                        </div>
                                                        <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                                            Regular License
                                                        </div>
                                                    </td>
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-300 w-32 text-right">
                                                        3
                                                    </td>
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-300 w-32 text-right">
                                                        $25
                                                    </td>
                                                    <td class="px-5 py-3 border-b dark:border-darkmode-300 w-32 text-right fw-bold">
                                                        $75
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="flex  px-5 pb-10 sm:flex-row sm:px-20 sm:pb-20">
                                    <div class="w-full  text-start">
                                        <div class="text-base text-slate-500">Bank Transfer</div>
                                        <div class="mt-2 fs-1 fw-bold text-primary">
                                            Triangles Agency
                                        </div>
                                        <div class="mt-1">Bank Account : 098347234832</div>
                                        <div class="mt-1">Code : LFT133243</div>
                                    </div>
                                    <div class="text-end min-w-100px">
                                        <div class="text-base text-slate-500">Total Amount</div>
                                        <div class="mt-2 fs-1 fw-bold text-primary">
                                            $175.00
                                        </div>
                                        <div class="mt-1">Taxes included</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>





                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection