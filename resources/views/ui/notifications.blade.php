@extends('layout.master')
@section('title', 'Notifications')
@section('css')
    <link href="/assets/plugins/messenger/css/messenger.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/messenger/css/messenger-theme-future.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/assets/plugins/messenger/css/messenger-theme-flat.css" rel="stylesheet" type="text/css" media="screen" />
@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Notifications</h1>
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
                                    <strong>Notifications</strong>
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
                            <h3 class="">Messenger Notifications</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12 notification_btns">
                                    <p>
                                        <button type="button" class="btn btn-danger"
                                            onclick="showErrorMessage('Ops! Something went wrong')">Show Error Messsage</button>
                                        <button type="button" class="btn btn-primary"
                                            onclick="showSuccess('Your message has been succeeded')">Show Success Messsage</button>
                                        <button type="button" class="btn btn-success" onclick="progressMessage()">Inprogress
                                            Message</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div class="col-lg-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Sweet Alert</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12 notification_btns">
                                    <p>
                                        <button type="button" class="btn btn-danger"
                                            onclick="Swal.fire({title: 'Error', text:'Ops! Something went wrong', icon: 'error'})">Show
                                            Error Messsage</button>
                                        <button type="button" class="btn btn-primary"
                                            onclick="Swal.fire({title:'Thanks', text:'Wroking fine', icon: 'success'})">Show Success
                                            Messsage</button>
                                        <button type="button" class="btn btn-success"
                                            onclick="Swal.fire({title:'Confirm first', text: 'Are you sure to proceed', icon: 'info', showDenyButton: true,}).then(e => {Swal.fire({title:'Wroking fine', icon: 'success'})})">Inprogress
                                            Message</button>
                                    </p>

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
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

    <script src="{{asset('assets/plugins/messenger/js/messenger.min.js')}}"></script>
    <script src="{{asset('assets/plugins/messenger/js/messenger-theme-future.js')}}"></script>
    <script src="{{asset('assets/js/messenger.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

@endsection