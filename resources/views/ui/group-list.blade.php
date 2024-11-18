@extends('layout.master')
@section('title', 'Group List')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Group Listing</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#!">Appearance</a>
                                </li>
                                <li class="active">
                                    <strong>Group Listing</strong>
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
                            <h2 class="title pull-left">Group List</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-8 col-sm-9 col-xs-10">

                                    <div class="list-group my-10">
                                        <li class="list-group-item">Cras justo odio</li>
                                        <li class="list-group-item">Dapibus ac facilisis in</li>
                                        <li class="list-group-item">Morbi leo risus</li>
                                        <li class="list-group-item">Porta ac consectetur ac</li>
                                        <li class="list-group-item">Vestibulum at eros</li>
                                        </ul>

                                        <div class="list-group my-10">
                                            <li class="list-group-item">
                                                <span class="badge">14</span> Cras justo odio
                                            </li>
                                            </ul>

                                            <div class="list-group my-10">
                                                <a href="#" class="list-group-item bg-dark-blue text-white"> Cras justo odio</a>
                                                <a href="#" class="list-group-item">Dapibus ac facilisis in</a>
                                                <a href="#" class="list-group-item">Morbi leo risus</a>
                                                <a href="#" class="list-group-item">Porta ac consectetur ac</a>
                                                <a href="#" class="list-group-item">Vestibulum at eros</a>
                                            </div>

                                            <div class="list-group my-10">
                                                <a href="#" class="list-group-item list-group-item-success">Dapibus ac facilisis
                                                    in</a>
                                                <a href="#" class="list-group-item list-group-item-info">Cras sit amet nibh
                                                    libero</a>
                                                <a href="#" class="list-group-item list-group-item-warning">Porta ac consectetur
                                                    ac</a>
                                                <a href="#" class="list-group-item list-group-item-danger">Vestibulum at eros</a>
                                            </div>

                                            <div class="list-group my-10">
                                                <a href="#" class="list-group-item bg-dark-blue text-white">
                                                    <h4 class="list-group-item-heading text-white">List group item heading</h4>
                                                    <p class="list-group-item-text">Dapibus ac facilisis in. Dapibus ac facilisis in
                                                    </p>
                                                </a>

                                                <a href="#" class="list-group-item">
                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                    <p class="list-group-item-text">Dapibus ac facilisis in. Dapibus ac facilisis in
                                                    </p>
                                                </a>

                                                <a href="#" class="list-group-item">
                                                    <h4 class="list-group-item-heading">List group item heading</h4>
                                                    <p class="list-group-item-text">Dapibus ac facilisis in. Dapibus ac facilisis in
                                                    </p>
                                                </a>

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