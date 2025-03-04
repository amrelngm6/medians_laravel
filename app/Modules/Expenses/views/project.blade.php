@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">

    
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0 w-full flex">
                <h3 class="fw-bold m-0 w-full">Project Expenses</h3>
                
                <a class="btn btn-md btn-primary me-2 show-modal" href="#!" data-modal="#add-expense-modal">
                    New Expense </a>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0 ">

            @foreach ($expenses as $expense)
            <hr />
            <div class="divide-y divide-gray-200 dark:divide-gray-700 w-full card card-flush mb-0 py-0">
                <div class="flex  items-center gap-y-4 pt-4  w-full gap-2">
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">ID:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            <a href="javascript:;"  class="hover:underline">#{{$expense->code}}</a>
                        </dd>
                    </dl>

                    <dl class="w-full">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Staff:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                            <img alt="Pic" src="/{{ $expense->user->picture ?? '' }}" class="w-6 symbol me-1 symbol-circle">

                           {{$expense->user->name ?? ''}} <small class="fs-7 text-gray-600">{{$expense->description ?? ''}}</small>
                        </dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Category:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{$expense->category->category->name ?? '' }}</dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Total:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{$settings['currency_code']}}{{ number_format($expense->amount, 2) }}</dd>
                    </dl>
                    <dl class="min-w-100px">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Date:</dt>
                        <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y', strtotime($expense->date))}}</dd>
                    </dl>
                    <dl class="">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Actions:</dt>
                        <dd 
                            class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                            <!-- <a href="{{route('Expense.show', $expense->id)}}" class="text-primary"><i class='bx bx-show fs-4'></i></a> -->
                            <a href="javascript:;" data-path="{{route('Expense.delete', $expense->id)}}" class="delete-item " ><i class='bx bx-trash fs-4'></i></a>
                        </dd>
                    </dl>

                </div>
            </div>
            @endforeach
            @if (count($expenses) < 1)
            No date here yet
            @endif
        </div>
        <!--end::Card body-->
        @include('expenses::create-project-expense')
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
