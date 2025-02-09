@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">

    
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0 w-full flex">
                <h3 class="fw-bold m-0 w-full">Project Invoices</h3>
                
                <a class="btn btn-md btn-primary me-2 show-modal" href="#!" data-modal="#create-project-invoice">
                    New Invoice </a>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0 ">

            @foreach ($invoices as $invoice)
            <hr />
            <div class="divide-y divide-gray-200 dark:divide-gray-700 w-full card card-flush mb-0 py-0">
                <div class="flex  items-center gap-y-4 pt-4  w-full gap-2">
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">ID:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="{{route('Invoice.show', $invoice->id)}}"  class="hover:underline">#{{$invoice->code}}</a>
                        </dd>
                    </dl>

                    <dl class="w-full">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Client:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                           {{$invoice->client->name ?? ''}}
                        </dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Items:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{ count($invoice->items) }} </dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Tax amount:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{$settings['currency_code']}}{{ number_format($invoice->tax_amount, 2) }}</dd>
                    </dl>

                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Total:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{$settings['currency_code']}}{{ number_format($invoice->total, 2) }}</dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Due Date:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y', strtotime($invoice->due_date))}}</dd>
                    </dl>
                    <dl class="">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Actions:</dt>
                        <dd 
                            class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                            <a href="{{route('Invoice.show', $invoice->id)}}" class="text-primary"><i class='bx bx-show fs-4'></i></a>
                            <a href="javascript:;" data-path="{{route('Invoice.delete', $invoice->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                        </dd>
                    </dl>

                </div>
            </div>
            @endforeach
            @if (count($invoices) < 1)
            No date here yet
            @endif
        </div>
        <!--end::Card body-->
        @include('invoices::create-project-invoice')
    </div>
</div>
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script>
    jQuery(document).ready(function() {
        setInterval(calcTotal, 1000);
    })

</script>

    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection
