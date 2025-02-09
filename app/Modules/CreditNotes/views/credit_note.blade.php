@extends('layout.master')
@section('title', 'Credit Note')
@section('css')

@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Credit Note Page</h1>
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
                        <strong>Credit Note</strong>
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
                        <div onClick="saveCreditNotePDF('credit_note', '{{$credit_note->code ?? 'CreditNote'}}') "
                            class="text-base text-slate-500 cursor-pointer">
                            <i class='bx bxs-file-pdf'></i> PDF
                        </div>
                    </div>

                    <div class="flex-none flex-end px-4">
                        <div onClick="printCreditNote('credit_note', '{{$credit_note->code ?? 'CreditNote'}}') "
                            class="text-base text-slate-500 cursor-pointer">
                            <i class='fa fa-print'></i> Print
                        </div>
                    </div>


                </div>
                <div class="box mt-5 " id="credit_note">
                    <div class="border-b text-start">
                        <div class="flex pb-10 ">
                            <div class="text-start w-full px-5 py-10 sm:px-20 sm:py-20">
                                <div class="fs-2hx font-semibold text-primary">Credit Note / Refund</div>
                                <div class="mt-2 fs-3">
                                    Receipt <span class="fw-bold">#{{ $credit_note->code }}</span>
                                </div>
                                <div class="mt-1">Date: <b>{{ date('M d, Y', strtotime($credit_note->date)) }}</b> </div>
                                <div class="mt-1">Main Invoice : <a class="fw-bold" href="{{route('Invoice.show', $credit_note->model_id)}}">{{$credit_note->model->code ?? ''}}</a> </div>

                            </div>

                            <div class="flex-none flex-end pt-10">
                                <div class="text-base text-slate-500">Status</div>
                                <div class="mt-2 bg-{{$credit_note->status->color ?? ''}} cursor-pointer show-modal fw-bold text-primary badge py-1 px-2"
                                    data-modal="#edit-credit_note">
                                    {{ $credit_note->status->name ?? '' }}
                                </div>
                            </div>
                        </div>
                        <div class="flex px-5 pb-10 ">
                            <div class="text-start w-full">
                                <div class="text-base text-slate-500">Client Details</div>
                                <div class="mt-2 fs-1 fw-bold text-primary">
                                    {{ $credit_note->model->client->name ?? '' }}
                                </div>
                                <div class="mt-1">{{ $credit_note->model->client->email ?? '' }}</div>
                                <div class="mt-1">
                                    {{ $credit_note->model->client->address ?? '' }}
                                </div>
                            </div>
                            <div class="flex-none text-end">
                                <div class="text-base text-slate-500">Payment to</div>
                                <div class="mt-2 fs-1 fw-bold text-primary">
                                    {{$credit_note->model->business->name ?? ''}}
                                </div>
                                <div class="mt-1">
                                    {{$credit_note->model->business->email ?? ''}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="px-5 py-10 sm:px-16 sm:py-20">
                        <div class="overflow-x-auto">
                            <table class="w-full text-left">
                                <thead>
                                    <tr>
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
                                        <th
                                            class="fw-bold px-5 py-3 border-b-2 whitespace-nowrap text-right dark:border-darkmode-400">
                                            TOTAL
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($credit_note->items as $item)
                                    <tr>
                                        <td class="px-5 py-3 border-b dark:border-darkmode-400">
                                            <div class="whitespace-nowrap fw-bold">
                                                {{ $item->item->item_name }}
                                            </div>
                                            <div class="mt-0.5 whitespace-nowrap text-sm text-slate-500">
                                                {{ $item->type }}
                                            </div>
                                        </td>
                                        <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                            {{ $item->quantity }}
                                        </td>
                                        <td class="px-5 py-3 border-b w-32 text-right dark:border-darkmode-400">
                                            ${{ number_format($item->unit_price, 2) }}
                                        </td>
                                        <td class="px-5 py-3 border-b w-32 text-right fw-bold dark:border-darkmode-400">
                                            ${{ number_format($item->subtotal, 2) }}
                                        </td>
                                        <td class="px-5 py-3 border-b w-32 text-right fw-bold dark:border-darkmode-400">
                                            ${{ number_format($item->total, 2) }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="flex px-5 pb-10 sm:flex-row sm:px-20 sm:pb-20">
                        <div class="w-full text-start">
                            <div class="text-base text-slate-500">Terms of the Credit Note</div>
                            <div class="my-2 text-sm"> {{$credit_note->terms ?? ''   }}</div>
                            <div class="text-base text-slate-500">Admin Notes</div>
                            <div class="my-2 text-sm"> {{$credit_note->admin_notes ?? ''   }}</div>
                            <div class="text-base text-slate-500">Admin Notes</div>
                            <div class="my-2 text-sm"> {{$credit_note->client_notes ?? ''   }}</div>
                        </div>
                        <div class="text-end min-w-200px ">
                            <div class="mt-2 fs-4 fw-bold text-primary flex-end flex gap-4">
                                <span class="text-base text-slate-500">SubTotal</span>
                                ${{ number_format($credit_note->subtotal, 2) }}
                            </div>
                            <div class="mt-2 fs-4 fw-bold text-primary flex-end flex gap-4">
                                <span class="text-base text-slate-500 ">
                                    Total Discount
                                </span>
                                ${{ number_format($credit_note->discount_amount, 2) }}
                            </div>
                            <div class="mt-2 fs-4 fw-bold text-primary flex-end flex gap-4">
                                <span class="text-base text-slate-500">Total Tax</span>
                                ${{ number_format($credit_note->tax_amount, 2) }}
                            </div>
                            <div class="mt-2 fs-2 fw-bold text-primary flex-end flex gap-4">
                                <span class="text-base text-slate-500">Total Amount</span>
                                ${{ number_format($credit_note->total, 2) }}
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

@include('credit_notes::edit-status')
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
<script src="{{asset('assets/plugins/jspdf/jspdf.umd.min.js')}}"></script>
<script src="{{asset('assets/plugins/dom-to-image/dom-to-image.min.js')}}"></script>

<script>
function saveCreditNotePDF(id, name = 'credit_note') {
    const {
        jsPDF
    } = window.jspdf;
    const doc = new jsPDF();
    domtoimage.toPng(document.getElementById(id))
        .then(function(dataUrl) {
            var pdfWidth = doc.internal.pageSize.getWidth();
            var pdfHeight = (jQuery('#' + id).height() / jQuery('#' + id).width()) * pdfWidth;

            doc.addImage(dataUrl, 'PNG', 0, 0, pdfWidth, pdfHeight);
            doc.save(name + ".pdf");
        })
        .catch(function(error) {
            console.error('Error capturing credit_note:', error);
        });
}

function printCreditNote(id, name = 'credit_note') {
    domtoimage.toPng(document.getElementById(id))
        .then(function(dataUrl) {
            var printWindow = window.open('', '', 'width=600,height=600');
            printWindow.document.open();
            printWindow.document.write('<html><body onload="window.print()"><img src="' + dataUrl +
                '"></body></html>');
            printWindow.document.close();
        })
        .catch(function(error) {
            console.error('Error capturing credit_note:', error);
        });
}

jQuery(document).ready(function() {
    setInterval(calcTotalCreditNote, 1000);
})
</script>


<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection