@extends('layout.master')
@section('title', 'Alerts')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Alerts</h1>
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
                                    <strong>Alerts</strong>
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
                            <h3 class="">Alerts</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="text-white alert bg-primary fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <strong class="text-primary">Holy guacamole!</strong> Best check yo self, you're not looking
                                        too good.
                                    </div>

                                    <div class="text-white alert bg-warning fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <strong>Warning:</strong> Better check yourself, you're not looking too good.
                                    </div>
                                    <div class="text-white alert bg-success fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <strong>Success:</strong> Well done! You successfully read this important alert message.
                                    </div>
                                    <div class="text-white alert bg-info fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <strong>Info:</strong> Heads up! This alert needs your attention, but it's not super
                                        important.
                                    </div>
                                    <div class="text-white alert bg-dark fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <strong>Danger:</strong> Oh snap! Change a few things up and try submitting again.
                                    </div>
                                    <div class="text-white alert bg-primary fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <strong>Primary:</strong>&nbsp;Your server is working at optimum speed.
                                    </div>

                                    <div class="text-white alert bg-info fade in" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                                aria-hidden="true">×</span></button>
                                        <h4>Your server is working at optimum speed.</h4>
                                        <p>Alter few settings to reboot your server. To decrease some load and fast processing your
                                            project click on a action button below.</p>
                                        <p>
                                            <button type="button" class="btn btn-default">Reboot</button>
                                            <button type="button" class="btn btn-default">Cancel</button>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>

@endsection

@section('script')

@endsection