@extends('layout.master')
@section('title', 'Forms Validations')
@section('css')

@endsection
@section('main-content')


            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Form Validations</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-6">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Message Validations</h2>
                        </div>
                        <div class="card-body px-2">

                            <form id="msg_validate" action="javascript:;" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-xs-12">

                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <span class="desc">e.g. "Light Labs"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <span class="desc">e.g. "some@example.com"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield2">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Website</label>
                                            <span class="desc">e.g. "http://www.example.com"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield3">
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <button type="button" class="btn">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2">Iconic Validations</h2>
                        </div>
                        <div class="card-body px-2">
                            <form id="icon_validate" action="#">

                                <div class="row">
                                    <div class="col-xs-12">

                                        <div class="form-group">
                                            <label class="form-label">Name</label>
                                            <span class="desc">e.g. "Light Labs"</span>
                                            <div class="controls">
                                                <i class=""></i>
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <span class="desc">e.g. "some@example.com"</span>
                                            <div class="controls">
                                                <i class=""></i>
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield2">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Website</label>
                                            <span class="desc">e.g. "www.example.com"</span>
                                            <div class="controls">
                                                <i class=""></i>
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield3">
                                            </div>
                                        </div>

                                        <div class="pull-right">
                                            <button type="button" class="btn btn-default"><i class="fa fa-times"></i></button>
                                            <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i></button>
                                        </div>

                                    </div>
                                </div>
                            </form>

                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">General Field Validations</h2>
                        </div>
                        <div class="card-body px-2">
                            <form id="general_validate" action="javascript:;" novalidate="novalidate">
                                <div class="w-full">

                                    <div class="col-xs-6">

                                        <div class="form-group">
                                            <label class="form-label">Required Field</label>
                                            <span class="desc">e.g. "anything"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield1">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Email</label>
                                            <span class="desc">e.g. "some@example.com"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield2">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <span class="desc">e.g. "hello123"</span>
                                            <div class="controls">
                                                <input type="password" class="form-control form-control-solid py-3"
                                                    name="formfield8">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Confirm Password</label>
                                            <span class="desc">e.g. "hello123"</span>
                                            <div class="controls">
                                                <input type="password" class="form-control form-control-solid py-3"
                                                    name="formfield9">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">URL</label>
                                            <span class="desc">e.g. "www.example.com"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield3">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Credit Card</label>
                                            <span class="desc">e.g. "4029343843434"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield4">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xs-6">

                                        <div class="form-group">
                                            <label class="form-label">Numeric</label>
                                            <span class="desc">e.g. "3423"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield5">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Minimum Length</label>
                                            <span class="desc">e.g. "minimum 3 characters"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield6">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Maximum Length</label>
                                            <span class="desc">e.g. "maximum 5 characters"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" name="formfield7">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="formfield10">Upload File</label>
                                            <span class="desc">e.g. "character.jpg"</span>
                                            <div class="controls">
                                                <input type="file" class="" id="formfield10" name="formfield10">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label" for="formfield11">AlphaNumeric</label>
                                            <span class="desc">e.g. "hello123"</span>
                                            <div class="controls">
                                                <input type="text" class="form-control form-control-solid py-3" id="formfield11"
                                                    name="formfield11">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-xs-12">
                                        <div class="pull-right ">
                                            <button type="button" class="btn">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>

                                </div>

                            </form>

                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection