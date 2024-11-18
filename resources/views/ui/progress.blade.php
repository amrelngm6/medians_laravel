@extends('layout.master')
@section('title', 'Progress')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Progress Bar</h1>
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
                                    <strong>Progress Bars</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Sizes</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="progress h-6px">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                            Small
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="30"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 30%;">
                                            Default
                                        </div>
                                    </div>

                                    <div class="progress progress-md">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="50"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                            Medium
                                        </div>
                                    </div>

                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="70"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                                            Large
                                        </div>
                                    </div>

                                    <div class="progress progress-xlg">
                                        <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="90"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                                            Extra Large
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Colors & Contextual</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">
                                <div class="col-xs-12">

                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 40%">
                                            Success
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 20%">
                                            Info
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 60%">
                                            Warning
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 80%">
                                            Danger
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-dark-blue" role="progressbar" aria-valuenow="60"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            Dark blue
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-accent" role="progressbar" aria-valuenow="70" aria-valuemin="0"
                                            aria-valuemax="100" style="width: 70%">
                                            Accent
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            Secondary
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Loading Animations (Duration & Delay)</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="progress">
                                                <div class="progress-bar animated fadeIn animated-duration-1s animated-delay-200ms"
                                                    role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 50%;">
                                                    Fade In
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success animated bounceInLeft animated-duration-1s animated-delay-400ms"
                                                    role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 70%;">
                                                    Bounce In Left
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info animated flipInY animated-duration-1s animated-delay-600ms"
                                                    role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 30%;">
                                                    Flip
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning animated rotateInUpLeft animated-duration-1s animated-delay-800ms"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;">
                                                    Rotate Up
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger animated rotateInDownLeft animated-duration-1s animated-delay-1000ms"
                                                    role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 50%;">
                                                    Rotate Down
                                                </div>
                                            </div>

                                        </div>

                                        <div class="col-md-6">

                                            <div class="progress">
                                                <div class="progress-bar animated slideInLeft animated-duration-1s animated-delay-1400ms"
                                                    role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 50%;">
                                                    Slide In Left
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-success animated lightSpeedIn animated-duration-1s animated-delay-1600ms"
                                                    role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 70%;">
                                                    Light Speed In
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-info animated zoomIn animated-duration-1s animated-delay-1800ms"
                                                    role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 30%;">
                                                    Zoom In
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-warning animated zoomInLeft animated-duration-1s animated-delay-2000ms"
                                                    role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 60%;">
                                                    Zoom In Left
                                                </div>
                                            </div>

                                            <div class="progress">
                                                <div class="progress-bar progress-bar-danger animated rollIn animated-duration-1s animated-delay-2200ms"
                                                    role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                    style="width: 80%;">
                                                    Roll In
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Stripped</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Animated Constantly </h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                            <span class="sr-only">45% Complete</span>
                                        </div>
                                    </div>

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success progress-bar-striped active"
                                            role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 40%">
                                            <span class="sr-only">40% Complete (success)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                            <span class="sr-only">20% Complete</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning progress-bar-striped active"
                                            role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                            style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                            <span class="sr-only">80% Complete (danger)</span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Stacked</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 35%">
                                            <span class="sr-only">35% Complete (success)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning" style="width: 20%">
                                            <span class="sr-only">20% Complete (warning)</span>
                                        </div>
                                    </div>

                                    <div class="progress progress-md">
                                        <div class="progress-bar progress-bar-danger" style="width: 10%">
                                            <span class="sr-only">10% Complete (danger)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-warning progress-bar-striped" style="width: 40%">
                                            <span class="sr-only">40% Complete (warning)</span>
                                        </div>
                                        <div class="progress-bar progress-bar-success" style="width: 25%">
                                            <span class="sr-only">25% Complete (success)</span>
                                        </div>
                                    </div>

                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-accent" style="width: 30%">
                                            30% Complete
                                        </div>
                                        <div class="progress-bar progress-bar-primary" style="width: 40%">
                                            40% Complete
                                        </div>
                                        <div class="progress-bar progress-bar-purple" style="width: 25%">
                                            20% Complete
                                        </div>
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