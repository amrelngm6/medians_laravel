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
                <h1 class="title">Proposal details</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>
            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{route('Proposal')}}">Proposals</a>
                    </li>
                    <li class="active">
                        <strong>{{$proposal->title ?? ''}}</strong>
                    </li>
                </ol>
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">
        <div class="card w-full">

                <form action="{{route('Proposal.update', $proposal->id)}}" class="w-full ajax-form fs-5 card-body " data-append="true"
                        data-element="variants-container" id="edit-proposal-form">
                        @csrf

                        <div class="w-full flex gap-10">
                            <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                                <input type="text" placeholder="Proposal title" class=" form-control form-control-solid  "
                                    id="name" name="title" class="form-control form-control-solid " value="{{$proposal->title}}">
                            </div>

                            <div class="form-group w-full"><label for="user_id" class="control-label">Client</label>
                                <select name="user_id" id="user_id" class="form-control form-control-solid">
                                    @foreach ($clients as $client)
                                    <option value="{{ $client->client_id }}" @if($proposal->user_id == $client->client_id) selected @endif >{{ $client->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="w-full flex gap-10">

                            <div class="form-group w-full"><label for="date" class="control-label">Date </label>
                                <input type="date" class=" form-control form-control-solid  " id="date" name="date"
                                    class="form-control form-control-solid " value="{{$proposal->date}}" >
                            </div>
                            <div class="form-group w-full"><label for="expiry_date" class="control-label" rel="popover"
                                    data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                                    data-placement="top" data-content="Set the End date of the proposal to approve"
                                    data-title="Expiry Date" data-trigger="hover" data-html="true">Expiry Date <i
                                        class="bx bx-help-circle"></i></label>
                                <input type="date" class=" form-control form-control-solid  "
                                    id="expiry_date" name="expiry_date" class="form-control form-control-solid " value="{{$proposal->expiry_date}}" >
                            </div>
                        </div>
                        <div class="w-full flex gap-10">
                            <div class="form-group w-full"><label for="status_id" class="control-label">Status</label>
                                <select name="status_id" id="status_id" class="form-control form-control-solid">
                                    @foreach ($statusList as $status)
                                    <option value="{{ $status->status_id }}"  @if($proposal->status_id == $status->status_id) selected @endif>{{ $status->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-7 gap-lg-10">

                            <div class="card card-flush py-4">
                                <div class="card-header mb-10">
                                    <div class="card-title block">
                                        <h2>Items</h2>
                                        <div class="form-text">Pick from your current <a href="{{route('Item')}}">Services /
                                                Items</a> list</div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="w-full">
                                        <label class="form-label fw-bold pb-4">Proposal items</label>
                                        <div>
                                            <div class="form-group" id="variants-container">

                                                <div class="form-group d-flex  align-items-center gap-5 flex ">

                                                    <span class="mw-100 min-w-200px"> Title</span>
                                                    <span class="mw-100 w-full"> Quantity</span>
                                                    <span class="mw-100 w-full"> Unit price</span>
                                                    <span class="mw-100 w-full"> Tax</span>
                                                    <span class="mw-100 w-full"> Subtotal</span>
                                                    --
                                                </div>
                                                @foreach ( $proposal->items as $item)
                                                @include('proposals::proposal-item-row')
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="invoice-total py-10 ms-auto d-lg-flex gap-20">
                            <div class="w-full">

                                <div class="d-flex flex-column my-10">
                                    <label class="fs-6 fw-semibold mb-2">Details</label>
                                    <textarea class="form-control form-control-solid" rows="3" name="content"
                                        placeholder="Type Details">{{$proposal->content}}</textarea>
                                </div>

                            </div>
                            <div class="w-50 flex flex-column fs-5">
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Sub Total :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end">{{$settings['currency_code']}}<span id="">{{$proposal->subtotal}}</span></p>
                                    </div>
                                </div>
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Discount :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="">{{$proposal->discount_amount}}</span></p>
                                    </div>
                                </div>
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Taxes :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="">{{$proposal->tax_amount}}</span></p>
                                    </div>
                                </div>
                                <div class="flex gap-10 py-2">
                                    <div class="w-full">
                                        <p class="text-muted mb-1 text-start">Grand Total :</p>
                                    </div>
                                    <div class="">
                                        <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="">{{$proposal->total}}</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--begin::Actions-->
                        <div class="text-center py-10">

                            <button type="submit" id="modal_edit_target_submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Submit
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <!-- MAIN CONTENT AREA ENDS -->
</div>
@include('proposals::items-modal')

@endsection

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->


 
<script>
    jQuery(document).ready(function () {
        setInterval(calcTotal, 1000);
    });
</script>  

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection