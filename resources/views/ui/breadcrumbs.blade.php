@extends('layout.master')
@section('title', 'Breadcrumbs')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Breadcrumbs</h1>
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
                                    <strong>Breadcrumbs</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Breadcrumbs</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-10 col-sm-8">

                                    <h4>Styles</h4>

                                    <ol class="breadcrumb">
                                        <li>
                                            <a href="/"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>

                                    <ol class="breadcrumb primary">
                                        <li>
                                            <a href="/"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>

                                    <ol class="breadcrumb bg">
                                        <li>
                                            <a href="/"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>
                                    <ol class="breadcrumb border">
                                        <li>
                                            <a href="/"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                    <br>
                                    <h4>Auto Hidden</h4>

                                    <ol class="breadcrumb auto-hidden">
                                        <li>
                                            <a href="/" class="collapsed"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="" class="collapsed">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>

                                    <ol class="breadcrumb auto-hidden primary">
                                        <li>
                                            <a href="/" class="collapsed"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="" class="collapsed">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>

                                    <ol class="breadcrumb auto-hidden bg">
                                        <li>
                                            <a href="/" class="collapsed"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="" class="collapsed">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>

                                    <ol class="breadcrumb auto-hidden border">
                                        <li>
                                            <a href="/" class="collapsed"><i class="fa fa-home"></i>Home</a>
                                        </li>
                                        <li>

                                            <a href="" class="collapsed">Form Elements</a>
                                        </li>
                                        <li class="active">

                                            <strong>Fields</strong>
                                        </li>
                                    </ol>

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