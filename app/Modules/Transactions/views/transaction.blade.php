@extends('layout.master')
@section('title', 'Transaction')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Transaction Page</h1>
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
                        <strong>Transaction</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-sm-12">
        <div class="card mb-0 bg-white">
            <div class="card-body">
                <div class="flex ">
                   <div class="flex-none flex-end px-4">
                        <div onClick="saveTransactionPDF('transaction', '{{$transaction->code ?? 'Transaction'}}') " class="text-base text-slate-500 cursor-pointer">
                            <i class='bx bxs-file-pdf'></i>  PDF
                        </div>
                    </div>
                    
                   <div class="flex-none flex-end px-4">
                        <div onClick="printTransaction('transaction', '{{$transaction->code ?? 'Transaction'}}') " class="text-base text-slate-500 cursor-pointer">
                            <i class='fa fa-print'></i>  Print
                        </div>
                    </div>
                </div>
                <div class="box mt-5 " id="transaction">
                    <div class="border-b text-start">
                        <div class="flex pb-10 ">
                            <div class="text-start w-full px-5 py-10 sm:px-20 sm:py-20">
                                <div class="fs-2hx font-semibold text-primary">TRANSACTION</div>
                                <div class="mt-2 fs-3">
                                    Receipt <span class="fw-bold">#{{ $transaction->id }}</span>
                                </div>
                                <div class="mt-1">Date: <b>{{ date('M d, Y', strtotime($transaction->date)) }}</b></div>
                            </div>
                            
                            <div class="flex-none flex-end pt-10">
                                <div class="text-base text-slate-500">Status</div>
                                <div class="mt-2 bg-{{$transaction->status->color ?? ''}} cursor-pointer show-modal fw-bold text-primary badge py-1 px-2" data-modal="#edit-transaction">
                                        {{ $transaction->status->name ?? '' }}
                                </div>
                            </div>
                        </div>
                        <div class="flex px-5 pb-10 ">
                            <div class="text-start w-full">
                                <div class="text-base text-slate-500">Client Details</div>
                                <div class="mt-2 fs-1 fw-bold text-primary">
                                    {{ $transaction->client->name ?? '' }}
                                </div>
                                <div class="mt-1">{{ $transaction->client->email ?? '' }}</div>
                                <div class="mt-1">
                                    {{ $transaction->client->address ?? '' }}
                                </div>
                            </div>
                            <div class="flex-none text-end">
                                <div class="text-base text-slate-500">Payment to</div>
                                <div class="mt-2 fs-1 fw-bold text-primary">
                                    {{$transaction->business->name ?? ''}}
                                </div>
                                <div class="mt-1">
                                    {{$transaction->business->email ?? ''}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 py-10 sm:px-16 sm:py-20">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap dark:border-darkmode-400">
                                            DESCRIPTION
                                        </th>
                                        <th class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap text-right dark:border-darkmode-400">
                                            AMOUNT
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-5 py-3 border-b dark:border-darkmode-400">
                                            <div class="whitespace-nowrap fw-bold">
                                                {{ $transaction->description }}
                                            </div>
                                        </td>
                                        <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                            ${{ number_format($transaction->amount, 2) }}
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex px-5 pb-10 sm:flex-row sm:px-20 sm:pb-20">
                        <div class="w-full text-start">
                            <div class="text-base text-slate-500">This Transaction For</div>
                            <div class="mt-2 fs-1 fw-bold text-primary"> {{$transaction->model->name ?? ''   }}</div>
                            <div class="mt-1">Payment method : {{$transaction->payment_method}}</div>
                            <div class="mt-1">Code : {{$transaction->code}}</div>
                        </div>
                        <div class="text-end min-w-100px">
                            <div class="text-base text-slate-500">Total Amount</div>
                            <div class="mt-2 fs-2 fw-bold text-primary">
                                ${{ number_format($transaction->amount, 2) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- MAIN CONTENT AREA ENDS -->
</div>

@include('transactions::edit-status')
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/plugins/jspdf/jspdf.umd.min.js')}}"></script>
<script src="{{asset('assets/plugins/dom-to-image/dom-to-image.min.js')}}"></script>

<script>
    function saveTransactionPDF(id, name='transaction') 
    {
        const { jsPDF } = window.jspdf;
        const doc = new jsPDF();
        domtoimage.toPng(document.getElementById(id))
        .then(function (dataUrl) {
            var pdfWidth = doc.internal.pageSize.getWidth();
            var pdfHeight = (jQuery('#'+id).height() / jQuery('#'+id).width()) * pdfWidth;

            doc.addImage(dataUrl, 'PNG', 0, 0,  pdfWidth, pdfHeight);
            doc.save(name+".pdf");
        })
        .catch(function (error) {
            console.error('Error capturing transaction:', error);
        });
    }

    function printTransaction(id, name='transaction') 
    {
        domtoimage.toPng(document.getElementById(id))
        .then(function (dataUrl) {
            var printWindow = window.open('', '', 'width=600,height=600');
            printWindow.document.open();
            printWindow.document.write('<html><body onload="window.print()"><img src="'+dataUrl+'"></body></html>');
            printWindow.document.close();
        })
        .catch(function (error) {
            console.error('Error capturing transaction:', error);
        });
    }

</script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection