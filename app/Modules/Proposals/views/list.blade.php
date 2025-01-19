@extends('layout.master')
@section('title', 'All Projects')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Proposals list</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
                <div class="card-title">
                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                </div>
                
                <a class="btn btn-md btn-primary me-2 show-modal" href="#!" data-modal="#new-proposal-modal">
                    New Proposal </a>
            </div>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="card w-full">

            <!--begin::Card body-->
            <div class="card-body  ">
                @foreach ($proposals as $proposal)
                <div class="mb-4  divide-y divide-gray-200 dark:divide-gray-700 w-full card card-flush mb-0 py-0">
                    <div class="flex  items-center gap-y-4 pt-4  w-full gap-1 ">
                        <dl class="min-w-100px">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">ID:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                <a href="#!" onClick="(function(){jQuery('#proposal-info-{{$proposal->id}}').toggle()})()"  class="hover:underline">#ES-{{$proposal->id}}</a>
                            </dd>
                        </dl>

                        <dl class="w-full">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Title:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">
                                {{$proposal->title}}
                            </dd>
                        </dl>

                        <dl class="min-w-100px">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Expiry Date:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{date('M d, Y', strtotime($proposal->expiry_date))}}</dd>
                        </dl>

                        <dl class="min-w-100px">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Total price:</dt>
                            <dd class="mt-1.5 text-base font-semibold text-gray-900 dark:text-white">{{$settings['currency_code']}}{{$proposal->total}}</dd>
                        </dl>

                        <dl class="min-w-150px">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Status:</dt>
                            <dd
                                class="me-2 mt-1.5 inline-flex items-center rounded px-2.5 py-0.5 text-sm font-medium text-white bg-{{$proposal->status->color ?? ''}}  dark:text-primary-300">
                                {{$proposal->status->name ?? ''}}
                            </dd>
                        </dl>
                        <dl class="">
                            <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Actions:</dt>
                            <dd
                                class="gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
                                <i onClick="(function(){jQuery('#proposal-info-{{$proposal->id}}').toggle()})()" class='cursor-pointer bx bx-show fs-3'></i>
                                <a href="{{route('Proposal.edit', $proposal->id)}}" class="open-modal"><i class='bx bx-edit fs-4'></i></a>
                            </dd>
                        </dl>
                    </div>
                    <div id="proposal-info-{{$proposal->id}}"  style="display:none">
                        <div class="card-body bg-gray-200 pt-4 pb-4 rounded">
                            <div class="w-full">
                                <div class="form-group">

                                    <div class="form-group d-flex  align-items-center gap-5 flex ">
                                        <span class="mw-100 min-w-200px"> Title</span>
                                        <span class="mw-100 w-full"> Quantity</span>
                                        <span class="mw-100 w-full"> Unit price</span>
                                        <span class="mw-100 w-full"> Tax</span>
                                        <span class="mw-100 w-full"> Subtotal</span>
                                        --
                                    </div>
                                    @foreach ($proposal->items as $item)
                                    @include('proposal::proposal-item-row')
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                @if (count($proposals) < 1) No data here yet @endif </div>
                    <!--end::Card body-->
            </div>
        </div>
    </div>



    <div class="modal fade  active " id="new-proposal-modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-1000px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <a class="cursor-pointer text-danger close-modal" data-modal="#new-proposal-modal">
                        <i class='bx bx-message-square-x fs-2qx'></i>
                    </a>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">New Proposal</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Create new Proposal for your <a href="{{route('Client')}}"
                                class="fw-bold link-primary">Clients</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    @include('proposal::new-form')

                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
</div>
@include('proposal::items-modal')

@endsection

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
@section('script')
    <script>
    jQuery(document).ready(function() {

        setInterval(calcTotal, 1000);
    })

</script>
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection