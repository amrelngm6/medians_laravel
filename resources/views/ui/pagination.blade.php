@extends('layout.master')
@section('title', 'Pagination')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Pagination</h1>
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
                                    <strong>Pagination</strong>
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
                            <h3 class="">Pagination</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12">

                                    <div>
                                        <ul class="pagination pagination-lg">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li class="active"><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                    <div class="text-center my-10">
                                        <ul class="pagination">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li class="active"><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>

                                    <div class="col-xs-6">
                                        <nav>
                                            <ul class="pager">
                                                <li><a href="#">Previous</a></li>
                                                <li><a href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-xs-6 pt-6">
                                        <ul class="pagination pagination-sm pull-right">
                                            <li><a href="#">«</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="active"><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>

                                    <div class='w-full clearfix'>
                                        <div class="col-xs-12">

                                            <nav>
                                                <ul class="pager">
                                                    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span>
                                                            Older</a></li>
                                                    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <nav>
                                                <ul class="pager">
                                                    <li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span>
                                                            Older</a></li>
                                                    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a>
                                                    </li>
                                                </ul>
                                            </nav>

                                            <nav>
                                                <ul class="pager primary">
                                                    <li class="previous"><a href="#"><span aria-hidden="true">&larr;</span>
                                                            Older</a></li>
                                                    <li class="next"><a href="#">Newer <span aria-hidden="true">&rarr;</span></a>
                                                    </li>
                                                </ul>
                                            </nav>

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