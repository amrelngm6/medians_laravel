@extends('layout.master')
@section('title', 'Modals')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Modals</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#!">Components</a>
                                </li>
                                <li class="active">
                                    <strong>Modals</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Animated Modals</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">
                                <div class="col-xs-12">
                                    <div class="w-full">

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-10">Fade Down</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-11">Fade Up</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-12">Fade Left</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-13">Fade Right</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-14">Bounce Down</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-15">Bounce Up</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-16">Bounce Left</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-17">Bounce Right</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-18">Rotate Down Left</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-19">Rotate Down Right</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-20">Rotate Up Left</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-21">Rotate Up Right</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-22">Zoom Down</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-23">Zoom Up</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-24">Zoom Left</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-25">Zoom Right</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-26">Flip</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-27">Zoom</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-28">Swing</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-29">Shake</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-30">Flip X</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-31">Flip Y</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-32">Rubber Band</a>
                                            <br>
                                        </div>

                                        <div class="col-xs-6 col-md-4 col-lg-3 mb-10"><a class="btn btn-primary btn-block"
                                                data-toggle="modal" href="#cmpltadminModal-33">Light Speed</a>
                                            <br>
                                        </div>

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-10" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated fadeInDown">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Fade Down Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-11" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated fadeInUp">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Fade Up Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-12" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated fadeInLeft">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Fade Left Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-13" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated fadeInRight">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Fade Right Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-14" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated bounceInDown">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Bounce Down Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-15" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated bounceInUp">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Bounce Up Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-16" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated bounceInLeft">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Bounce Left Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-17" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated bounceInRight">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Bounce Right Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-18" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated rotateInDownLeft">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Rotate Down Left Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-19" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated rotateInDownRight">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Rotate Down Right Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-20" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated rotateInUpLeft">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Rotate Up Left Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-21" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated rotateInUpRight">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Rotate Up Right Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-22" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated zoomInDown">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Zoom Down Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-23" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated zoomInUp">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Zoom Up Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-24" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated zoomInLeft">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Zoom Left Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-25" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated zoomInRight">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Zoom Right Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-26" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated flip">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Flip Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-27" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated zoomIn">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Zoom Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-28" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated swing">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Swing Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-29" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated shake">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Shake Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-30" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated flipInX">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Flip X Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-31" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated flipInY">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Flip Y Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-32" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated rubberBand">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Rubber Band Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-33" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog animated lightSpeedIn">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Light Speed Modal</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Modals</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">
                                <div class="w-full">
                                    <div class="row modals-area">
                                        <div class="col-xs-12 col-md-4">
                                            <h4>Basic Dialogs</h4>
                                            <br>
                                            <a class="btn btn-success btn-block" data-toggle="modal"
                                                href="#cmpltadminModal-1">Dialog</a>
                                            <br><br>
                                            <a class="btn btn-warning btn-block" data-toggle="modal"
                                                href="#cmpltadminModal-2">Confirm</a>
                                            <br><br>
                                            <a class="btn btn-danger btn-block" data-toggle="modal" href="#cmpltadminModal-3">Alert
                                                !</a>
                                            <br><br>
                                            <a data-toggle="modal" href="#cmpltadminModal-4" class="btn btn-info btn-block">Confirm
                                                to Close</a>
                                            <br>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <h4>Responsive & Custom Width</h4>
                                            <br>
                                            <a data-toggle="modal" href="#cmpltadminModal-5"
                                                class="btn btn-primary btn-block">Custom Width</a>
                                            <br><br>
                                            <a data-toggle="modal" href="#cmpltadminModal-6" class="btn btn-primary btn-block">Full
                                                Width</a>
                                            <br><br>
                                            <a data-toggle="modal" href="#cmpltadminModal-7"
                                                class="btn btn-primary btn-block">Responsive Modal</a>
                                            <br>
                                        </div>
                                        <div class="col-xs-12 col-md-4">
                                            <h4>AJAX</h4>
                                            <br>
                                            <a data-toggle="modal" onclick="AjaxModalContent();"
                                                class="btn btn-purple btn-block">AJAX Modal</a>
                                            <br>
                                        </div>

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-1" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-success" type="button">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-2" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-default"
                                                            type="button">Close</button>
                                                        <button class="btn btn-warning" type="button"> Confirm</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-3" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Body goes here...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button data-dismiss="modal" class="btn btn-danger" type="button">
                                                            Ok</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->
                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-4" data-backdrop="static"
                                            tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        To close this modal, click on Close button...

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-5" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog" style="width: 65%">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Custom Width Modal. This modal is 65% in width. You can apply any width

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-6" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog" style="width: 96%">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Modal Tittle</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        Full Width Modal. This modal is almost 100% in width.

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-7" tabindex="-1" role="dialog"
                                            aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">Responsive Modal</h4>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="field-1" class="control-label">Name</label>

                                                                    <input type="text" class="form-control" id="field-1"
                                                                        placeholder="John">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-6">

                                                                <div class="form-group">
                                                                    <label for="field-2" class="control-label">Surname</label>

                                                                    <input type="text" class="form-control" id="field-2"
                                                                        placeholder="Doe">
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-4">

                                                                <div class="form-group">
                                                                    <label for="field-4" class="control-label">City</label>

                                                                    <input type="text" class="form-control" id="field-4"
                                                                        placeholder="Boston">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">

                                                                <div class="form-group">
                                                                    <label for="field-5" class="control-label">Country</label>

                                                                    <input type="text" class="form-control" id="field-5"
                                                                        placeholder="United States">
                                                                </div>

                                                            </div>

                                                            <div class="col-md-4">

                                                                <div class="form-group">
                                                                    <label for="field-6" class="control-label">Zip</label>

                                                                    <input type="text" class="form-control" id="field-6"
                                                                        placeholder="123456">
                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-info"
                                                            data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal end -->

                                        <!-- modal start -->
                                        <div class="modal fade col-xs-12" id="cmpltadminModal-8">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-hidden="true">&times;</button>
                                                        <h4 class="modal-title">AJAX Content</h4>
                                                    </div>

                                                    <div class="modal-body">

                                                        Content is loading...

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-white"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="button" class="btn btn-info">Save changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- modal end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <script>
                function AjaxModalContent() {
                    jQuery('#cmpltadminModal-8').modal('show', {
                        backdrop: 'static'
                    });

                    jQuery.ajax({
                        url: "/data/ajax-modal-content.txt",
                        success: function(response) {
                            jQuery('#cmpltadminModal-8 .modal-body').html(response);
                        }
                    });
                }
                </script>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')

@endsection