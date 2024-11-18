@extends('layout.master')
@section('title', 'Labels & Badges')
@section('css')

@endsection
@section('main-content')


            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Labels & Badges</h1>
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
                                    <strong>Labels & Badges</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Labels</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">

                                <p class="uilabels">
                                    <span class="label label-default">Default</span>
                                    <span class="label label-primary">Primary</span>
                                    <span class="label label-success">Success</span>
                                    <span class="label label-info">Info</span>
                                    <span class="label label-warning">Warning</span>
                                    <span class="label label-danger">Danger</span>
                                    <span class="label label-purple">Purple</span>
                                    <span class="label label-accent">Accent</span>
                                    <span class="label label-secondary">Secondary</span>
                                </p>

                                <p class="uilabels text-md">
                                    <span class="label label-default"><i class='fa fa-rocket'></i> Default</span>
                                    <span class="label label-primary"><i class='fa fa-glass'></i> Primary</span>
                                    <span class="label label-success"><i class='fa fa-thumbs-up'></i> Success</span>
                                    <span class="label label-info"><i class='fa fa-info'></i> Info</span>
                                    <span class="label label-warning"><i class='fa fa-clock-o'></i> Warning</span>
                                    <span class="label label-danger"><i class='fa fa-times'></i> Danger</span>
                                    <span class="label label-purple"><i class='fa fa-dashboard'></i> Purple</span>
                                    <span class="label label-accent"><i class='fa fa-car'></i> Accent</span>
                                    <span class="label label-secondary"><i class='fa fa-pencil'></i>
                                        Secondary</span>
                                </p>

                                <p class="uilabels text-lg">
                                    <span class="label label-default"><i class='fa fa-rocket'></i> Default</span>
                                    <span class="label label-primary"><i class='fa fa-glass'></i> Primary</span>
                                    <span class="label label-success"><i class='fa fa-thumbs-up'></i> Success</span>
                                    <span class="label label-info"><i class='fa fa-info'></i> Info</span>
                                    <span class="label label-warning"><i class='fa fa-clock-o'></i> Warning</span>
                                    <span class="label label-danger"><i class='fa fa-times'></i> Danger</span>
                                    <span class="label label-purple"><i class='fa fa-dashboard'></i> Purple</span>
                                    <span class="label label-accent"><i class='fa fa-car'></i> Accent</span>
                                    <span class="label label-secondary"><i class='fa fa-pencil'></i>
                                        Secondary</span>
                                </p>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Badges</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full">

                                <p class="uibadges">
                                    <span class="badge">42</span>
                                    <span class="badge badge-success">22</span>
                                    <span class="badge badge-info">46</span>
                                    <span class="badge badge-warning">72</span>
                                    <span class="badge badge-purple">12</span>
                                    <span class="badge badge-accent"><i class='fa fa-clock-o'></i></span>
                                    <span class="badge badge-danger"><i class='fa fa-dashboard'></i></span>
                                    <span class="badge badge-secondary"><i class='fa fa-rocket'></i></span>
                                    <span class="badge badge-primary"><i class='fa fa-star'></i></span>
                                </p>

                                <p class="uibadges">
                                    <span class="badge badge-md">42</span>
                                    <span class="badge badge-md badge-success">22</span>
                                    <span class="badge badge-md badge-info">46</span>
                                    <span class="badge badge-md badge-warning">72</span>
                                    <span class="badge badge-md badge-purple">12</span>
                                    <span class="badge badge-md badge-accent"><i class='fa fa-clock-o'></i></span>
                                    <span class="badge badge-md badge-danger"><i class='fa fa-dashboard'></i></span>
                                    <span class="badge badge-md badge-secondary"><i class='fa fa-rocket'></i></span>
                                    <span class="badge badge-md badge-primary"><i class='fa fa-star'></i></span>
                                </p>

                                <p class="uibadges">
                                    <span class="badge badge-lg badge-md">42</span>
                                    <span class="badge badge-lg badge-success">22</span>
                                    <span class="badge badge-lg badge-info">46</span>
                                    <span class="badge badge-lg badge-warning">72</span>
                                    <span class="badge badge-lg badge-purple">12</span>
                                    <span class="badge badge-lg badge-accent"><i class='fa fa-clock-o'></i></span>
                                    <span class="badge badge-lg badge-danger"><i class='fa fa-dashboard'></i></span>
                                    <span class="badge badge-lg badge-secondary"><i class='fa fa-rocket'></i></span>
                                    <span class="badge badge-lg badge-primary"><i class='fa fa-star'></i></span>
                                </p>

                                <br>
                                <div class="row">
                                    <div class="col-md-5">
                                        <ul class="nav nav-pills" role="tablist">
                                            <li role="presentation" class="active"><a href="#">Home <span
                                                        class="badge">42</span></a></li>
                                            <li role="presentation"><a href="#">Profile</a></li>
                                            <li role="presentation"><a href="#">Messages <span class="badge">3</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <a href="#">Inbox <span class="badge">42</span></a> &nbsp; &nbsp;

                                        <button class="btn btn-primary" type="button">
                                            Messages <span class="badge">4</span>
                                        </button>
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