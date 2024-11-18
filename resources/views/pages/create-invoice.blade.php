@extends('layout.master')
@section('title', 'Create invoice')
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
                            <div class="w-full g-3">
                                <div class="col-sm-6 col-xl-3">
                                    <div class="mb-0">
                                        <label class="form-label fs-4">Invoice id</label>
                                        <input type="text" class="form-control form-control-solid" placeholder="#xxxx">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="mb-0">
                                        <label class="form-label fs-4">Status</label>
                                        <select class="form-select  form-select-solid" id="exampleFormControlSelect1">
                                            <option>Please Select</option>
                                            <option>Paid</option>
                                            <option>Unpaid</option>
                                            <option>Partial Paid</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="mb-0">
                                        <label class="form-label fs-4">Start Date</label>
                                        <input type="datetime-local" class="form-control py-1 form-control-solid">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xl-3">
                                    <div class="mb-0">
                                        <label class="form-label fs-4">Due Date</label>
                                        <input type="datetime-local" class="form-control py-1 form-control-solid">
                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                <div class="w-full flex gap-10 py-10">
                                    <div class="w-full">
                                        <div class="border rounded p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-0">From:</h6>
                                                <button class="btn btn-sm btn-light-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit_add-modal"><i
                                                        class="ph-duotone ph-pencil-simple-line"></i> Change</button>
                                            </div>
                                            <h5>Garcia-Cameron and Sons</h5>
                                            <p class="mb-0">8534 Saunders Hill Apt. 583</p>
                                            <p class="mb-0">(970) 982-3353</p>
                                            <p class="mb-0">brandon07@pierce.com</p>
                                        </div>
                                    </div>
                                    <div class="w-full">
                                        <div class="border rounded p-3">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <h6 class="mb-0">To:</h6>
                                                <button class="btn btn-sm btn-light-secondary" data-bs-toggle="modal"
                                                    data-bs-target="#address-edit_add-modal"><i
                                                        class="ph-duotone ph-pencil-simple-line"></i> Change</button>
                                            </div>
                                            <h5>Dickinson-Cummerata</h5>
                                            <p class="mb-0">55D Leatha Way Ernaburgh, NT 2146</p>
                                            <p class="mb-0">75-9079921</p>
                                            <p class="mb-0">kasandra.conn@borer.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="table-responsive mb-2">
                                        <table class="table table-hover mb-0 fs-4">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th><span class="text-danger">*</span>Name</th>
                                                    <th><span class="text-danger">*</span>Description</th>
                                                    <th><span class="text-danger">*</span>Qty</th>
                                                    <th>Total Amount</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="items-rows">
                                                <tr>
                                                    <td class="pt-8">1</td>
                                                    <td><input type="text" class="form-control" placeholder="Name"
                                                            value="Plan Subscription"></td>
                                                    <td><input type="text" class="form-control" placeholder="Description"
                                                            value="Beginner Plan Down Payment"></td>
                                                    <td><input type="number" class="form-control" placeholder="Qty" value="1"></td>
                                                    <td><input type="text" class="form-control" placeholder="Total Amount"
                                                            value="$80.00"></td>
                                                    <td class="text-center remove-parent"><a href="#!"
                                                            class=" avtar avtar-s text-danger"><i
                                                                class="bx bx-trash pt-5 fs-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-8">2</td>
                                                    <td><input type="text" class="form-control" placeholder="Name"
                                                            value="Extra 5GB"></td>
                                                    <td><input type="text" class="form-control" placeholder="Description"
                                                            value="Extra Storage for "></td>
                                                    <td><input type="number" class="form-control" placeholder="Qty" value="1"></td>
                                                    <td><input type="text" class="form-control" placeholder="Total Amount"
                                                            value="$40.00"></td>
                                                    <td class="text-center remove-parent"><a href="#!"
                                                            class=" avtar avtar-s text-danger"><i
                                                                class="bx bx-trash pt-5 fs-1"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td class="pt-8">3</td>
                                                    <td><input type="text" class="form-control" placeholder="Name"></td>
                                                    <td><input type="text" class="form-control" placeholder="Description"></td>
                                                    <td><input type="number" class="form-control" placeholder="Qty"> </td>
                                                    <td><input type="text" class="form-control" placeholder="Total Amount"></td>
                                                    <td class="text-center remove-parent"><a href="#!"
                                                            class=" avtar avtar-s text-danger"><i
                                                                class="bx bx-trash pt-5 fs-1"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-start">
                                        <button data-container="#items-rows" type="button" data-html='<tr>
                                            <td class="pt-8">4</td>
                                            <td><input type="text" class="form-control" placeholder="Name"></td>
                                            <td><input type="text" class="form-control" placeholder="Description"></td>
                                            <td><input type="number" class="form-control" placeholder="Qty"> </td>
                                            <td><input type="text" class="form-control" placeholder="Total Amount"></td>
                                            <td class="text-center remove-parent"><a href="#!" class=" avtar avtar-s text-danger"><i class="bx bx-trash pt-5 fs-1"></i></a></td>
                                        </tr>' class="append-html btn btn-lg btn-primary flex gap-2 fs-4"><i
                                                class="bx bx-plus fs-1 "></i> Add new item</button>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="invoice-total py-10 ms-auto d-lg-flex">
                                        <div class="w-full">
                                            <div class="px-10">
                                                <label class="form-label fs-2">Notes</label>
                                                <textarea class="form-control" rows="3" placeholder="Note"></textarea>
                                            </div>
                                        </div>
                                        <div class="w-50 flex flex-column fs-5">
                                            <div class="flex gap-10">
                                                <div class="w-full">
                                                    <div class="mb-3">
                                                        <label class="form-label fs-4">Discount</label>
                                                        <input type="text" class="form-control" value="10">
                                                    </div>
                                                </div>
                                                <div class="w-full">
                                                    <div class="mb-3">
                                                        <label class="form-label fs-4">Taxes</label>
                                                        <input type="text" class="form-control" value="5">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="flex gap-10 py-2">
                                                <div class="w-full">
                                                    <p class="text-muted mb-1 text-start">Sub Total :</p>
                                                </div>
                                                <div class="">
                                                    <p class="f-w-600 mb-1 text-end">$20.00</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-10 py-2">
                                                <div class="w-full">
                                                    <p class="text-muted mb-1 text-start">Discount :</p>
                                                </div>
                                                <div class="">
                                                    <p class="f-w-600 mb-1 text-end text-success">$10.00</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-10 py-2">
                                                <div class="w-full">
                                                    <p class="text-muted mb-1 text-start">Taxes :</p>
                                                </div>
                                                <div class="">
                                                    <p class="f-w-600 mb-1 text-end text-success">$5.000</p>
                                                </div>
                                            </div>
                                            <div class="flex gap-10 py-2">
                                                <div class="w-full">
                                                    <p class="text-muted mb-1 text-start">Grand Total :</p>
                                                </div>
                                                <div class="">
                                                    <p class="f-w-600 mb-1 text-end text-success">$25.00</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="w-full flex align-items-center justify-content-between g-3">
                                        <div class="w-full ">
                                            <select class="form-select w-auto">
                                                <option>USD (US Dollar)</option>
                                                <option>EUR (Euro)</option>
                                            </select>
                                        </div>
                                        <div class="flex-none">
                                            <a href="{{route(App::getLocale() . '.apps.invoice')}}" class="btn btn-danger">Preview</a>
                                            <button class="btn btn-info">Download</button>
                                            <button class="btn btn-primary">Update &amp; Send</button>
                                        </div>
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