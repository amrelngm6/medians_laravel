@extends('layout.master')
@section('title', 'Forms Wizard')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Form Wizard</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="card block">
                        <div class="clearfix p-7 text-center">
                            <h3 class="fs-4 ">Form Wizard with validations</h3>
                        </div>
                        <div class="clearfix content-body">
                            <div class="w-full">
                                <div class="col-xs-12">

                                    <form id="commentForm">

                                        <div id="pills" class='wizardpills'>
                                            <ul class="form-wizard">
                                                <li><a href="#pills-tab1" data-toggle="tab"><span>Basic</span></a></li>
                                                <li><a href="#pills-tab2" data-toggle="tab"><span>Profile</span></a></li>
                                                <li><a href="#pills-tab3" data-toggle="tab"><span>Address</span></a></li>
                                                <li><a href="#pills-tab4" data-toggle="tab"><span>Settings</span></a></li>
                                            </ul>
                                            <div id="bar" class="progress active">
                                                <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="0"
                                                    aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane" id="pills-tab1">

                                                    <h4 class="pt-10">Basic Information</h4>
                                                    <br>
                                                    <div class="form-group">
                                                        <label class="form-label">Full Name</label>
                                                        <div class="controls">
                                                            <input type="text" placeholder="Full Name"
                                                                class="form-control form-control-solid py-3" name="txtFullName"
                                                                id="txtFullName">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Email</label>
                                                        <div class="controls">
                                                            <input type="text" placeholder="Email"
                                                                class="form-control form-control-solid py-3" name="txtEmail"
                                                                id="txtEmail">
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="form-label">Phone</label>
                                                        <div class="controls">
                                                            <input type="text" placeholder="Phone"
                                                                class="form-control form-control-solid py-3" name="txtPhone"
                                                                id="txtPhone">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="pills-tab2">
                                                    <h4>Profile Information</h4>
                                                    <br>
                                                    <p>Form goes here</p>
                                                </div>
                                                <div class="tab-pane" id="pills-tab3">
                                                    <h4>Contact Information</h4>
                                                    <br>
                                                    <p>Form goes here</p>
                                                </div>
                                                <div class="tab-pane" id="pills-tab4">
                                                    <h4>Settings Information</h4>
                                                    <br>
                                                    <p>Form goes here</p>
                                                </div>
                                                <div class="tab-pane" id="pills-tab5">
                                                    <h4>Portfolio Information</h4>
                                                    <br>
                                                    <p>Form goes here</p>
                                                </div>

                                                <div class="clearfix"></div>

                                                <ul class="pager wizard">
                                                    <li class="previous first" style="display:none;"><a
                                                            href="javascript:;">First</a></li>
                                                    <li class="previous"><a href="javascript:;">Previous</a></li>
                                                    <li class="next last" style="display:none;"><a href="javascript:;">Last</a></li>
                                                    <li class="next"><a href="javascript:;">Next</a></li>
                                                    <li class="finish"><a href="javascript:;">Finish</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>

@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js')}}"></script>
    <script src="{{asset('assets/js/form-validation.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection