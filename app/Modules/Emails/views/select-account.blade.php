@extends('layout.master')
@section('title', 'Inbox')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Email accounts </h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#">Emails</a>
                    </li>
                    <li class="active">
                        <strong>Select Account</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <div class="col-lg-12 ">
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Heading-->
                <div class="card-px text-center pt-15 pb-15">
                    <!--begin::Title-->
                    <h2 class="fs-2x fw-bold mb-0">Manage Email Account ( IMAP )</h2>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <p class="text-gray-500 fs-4 fw-semibold py-7">
                        Click on the below buttons to add <br> your business email to read its messages. </p>
                    <!--end::Description-->

                    <!--begin::Action-->
                    <a href="{{route('EmailAccount.create')}}" class="btn btn-primary er fs-6 px-8 py-4 open-modal" >
                        Add Email Account </a>
                    <!--end::Action-->
                </div>
                <!--end::Heading-->

                <!--begin::Illustration-->
                <div class="text-center pb-15 px-5">
                    <img src="/metronic8/demo1/assets/media/illustrations/sketchy-1/1.png" alt=""
                        class="mw-100 h-200px h-sm-325px">
                </div>
                <!--end::Illustration-->
            </div>
            <!--end::Card body-->
        </div>
    </div>

    <!-- MAIN CONTENT AREA ENDS -->
</div>
@include('includes.modals.mail-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection