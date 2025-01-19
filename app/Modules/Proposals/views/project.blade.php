@extends('projects::project')

@section('project-content')

<div class="col-lg-12">
    <div class="card w-full">
        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <!--begin::Card title-->
            <div class="card-title m-0 flex w-full">
                <h3 class="fw-bold m-0 w-full">Proposals list</h3>
                <span onClick="(function(){jQuery('#proposal-form').toggle()})()" class="fw-bold m-0 btn btn-md btn-primary ">Add Proposal
                        </span>
            </div>
            <!--end::Card title-->
        </div>
        <!--begin::Card header-->

        <form action="{{route('Proposal.store')}}" class="w-full ajax-form card-body " id="proposal-form"
            style="display:none">
            @csrf
            <input type="hidden" name="model_id" value="{{$project->project_id}}" />
            <input type="hidden" name="model_type" value="{{get_class($project)}}" />

            <div class="w-full flex gap-10">
                <div class="form-group w-full"><label for="name" class="control-label">Name</label>
                    <input type="text" placeholder="Proposal title" class=" form-control form-control-solid  "
                        id="name" name="title" class="form-control form-control-solid ">
                </div>

                <div class="form-group w-full"><label for="user_id" class="control-label">Client</label>
                    <input type="text" class=" form-control form-control-solid  " id="user_id"
                        class="form-control form-control-solid " value="{{$project->client->name ?? ''}}"
                        disabled />
                </div>
            </div>
            <div class="w-full flex gap-10">

                <div class="form-group w-full"><label for="date" class="control-label">Date </label>
                    <input type="date" class=" form-control form-control-solid  " id="date" name="date"
                        class="form-control form-control-solid ">
                </div>
                <div class="form-group w-full"><label for="expiry_date" class="control-label" rel="popover"
                        data-animate=" animated fadeIn " data-container="body" data-toggle="popover"
                        data-placement="top" data-content="Set the End date of the proposal to approve"
                        data-title="Expiry Date" data-trigger="hover" data-html="true">Expiry Date <i
                            class="bx bx-help-circle"></i></label>
                    <input type="date" class=" form-control form-control-solid  " min="{{date('Y-m-d')}}"
                        id="expiry_date" name="expiry_date" class="form-control form-control-solid ">
                </div>
            </div>
            <div class="w-full flex gap-10">
                <div class="form-group w-full"><label for="status_id" class="control-label">Status</label>
                    <select name="status_id" id="status_id" class="form-control form-control-solid">
                        @foreach ($statusList as $status)
                        <option value="{{ $status->status_id }}">{{ $status->name }}</option>
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
                                </div>
                                <div class="form-group mt-5">
                                    <a href="#!" data-modal="#items-modal"
                                        class="btn btn-sm btn-light-primary show-modal">
                                        <i class="bx bx-add-to-queue"></i>
                                        <span>Add new</span>
                                    </a>
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
                            placeholder="Type Details"></textarea>
                    </div>

                </div>
                <div class="w-50 flex flex-column fs-5">
                    <div class="flex gap-10">
                        <div class="w-full">
                            <div class="mb-3">
                                <label class="form-label fs-4">Discount</label>
                                <input type="text" name="discount_amount" class="form-control" value="0"
                                    id="discount_amount">
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-10 py-2">
                        <div class="w-full">
                            <p class="text-muted mb-1 text-start">Sub Total :</p>
                        </div>
                        <div class="">
                            <p class="f-w-600 mb-1 text-end">{{$settings['currency_code']}}<span id="subtotal">0.00</span></p>
                        </div>
                    </div>
                    <div class="flex gap-10 py-2">
                        <div class="w-full">
                            <p class="text-muted mb-1 text-start">Discount :</p>
                        </div>
                        <div class="">
                            <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="discount">0.00</span></p>
                        </div>
                    </div>
                    <div class="flex gap-10 py-2">
                        <div class="w-full">
                            <p class="text-muted mb-1 text-start">Taxes :</p>
                        </div>
                        <div class="">
                            <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="tax">0.00</span></p>
                        </div>
                    </div>
                    <div class="flex gap-10 py-2">
                        <div class="w-full">
                            <p class="text-muted mb-1 text-start">Grand Total :</p>
                        </div>
                        <div class="">
                            <p class="f-w-600 mb-1 text-end text-success">{{$settings['currency_code']}}<span id="total">0.00</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <input value="{{$project->user_id}}" name="user_id" type="hidden" />
            <input id="total_input" name="total" type="hidden" />
            <input id="subtotal_input" name="subtotal" type="hidden" />
            <input id="tax_input" name="tax_amount" type="hidden" />
            <input id="discount_input" name="discount" type="hidden" />
            <div class="text-center">
                <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                    Cancel
                </button>
                <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Submit
                    </span>
                </button>
            </div>
        </form>
        
        <!--begin::Card body-->
        <div class="card-body  ">
            @foreach ($proposals as $proposal)
            <hr />
            <div class="divide-y divide-gray-200 dark:divide-gray-700 w-full card card-flush mb-0 py-0">
                <div class="flex  items-center gap-y-4 pt-4  w-full gap-2">
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
                            class="me-2 mt-1.5 inline-flex items-center rounded bg-primary-100 px-2.5 py-0.5 text-sm font-medium text-white bg-{{$proposal->status->color ?? ''}} dark:bg-primary-900 dark:text-primary-300">
                            {{$proposal->status->name ?? ''}}
                        </dd>
                    </dl>
                    <dl class="">
                        <dt class="text-base font-medium text-gray-500 dark:text-gray-400">Actions:</dt>
                        <dd 
                            class=" gap-4 me-2 mt-1.5 inline-flex items-center rounded bg-primary-100  py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300">
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
                                    <span class="mw-100 w-full"> Total</span>
                                    --
                                </div>
                                @foreach ($proposal->items as $item)
                                @include('proposals::proposal-item-row')
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

    @include('proposals::items-modal')

    @endsection
    