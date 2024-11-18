@extends('layout.master')
@section('title', 'Popovers')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">PopOvers</h1>
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
                                    <strong>Popovers</strong>
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
                            <h3 class="">Popover Placements</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-xs-12 text-center">

                                    <div class="w-full">
                                        <div class="col-md-6 mb-10">
                                            <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                                data-toggle="popover" data-placement="top"
                                                data-content="Test content of the popover details ! It can handle HTML content too !"
                                                data-title="Top popover" data-trigger="hover" data-html="true"
                                                data-original-title="" title=""><u class='text-dark'>Top Placed
                                                    Popover</u></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                                data-toggle="popover" data-placement="left"
                                                data-content="Test content of the popover details ! It can handle HTML content too !"
                                                data-title="Left popover" data-trigger="hover" data-html="true"
                                                data-original-title="" title=""><u class='text-dark'>Left Placed
                                                    Popover</u></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                                data-toggle="popover" data-placement="right"
                                                data-content="Test content of the popover details ! It can handle HTML content too !"
                                                data-title="Right Placed popover" data-trigger="hover" data-html="true"
                                                data-original-title="" title=""><u class='text-dark'>Right placed
                                                    Popover</u></div>
                                            <div class="clearfix"></div>
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                                data-toggle="popover" data-placement="bottom"
                                                data-content="Test content of the popover details ! It can handle HTML content too !"
                                                data-title="Bottom popover" data-trigger="hover" data-html="true"
                                                data-original-title="" title=""><u class='text-dark'>Bottom placed
                                                    Popover</u></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Popover Animations</h3>
                        </div>
                        <div class="card-body ">
                            <div class="col-xs-12 text-center">

                                <div class="w-full">
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Fading popover" data-trigger="hover" data-html="true" data-original-title=""
                                            title=""><u class='text-dark'>Fading Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated bounce" data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Bouncing popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Bouncing Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated flip " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Fliping popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Fliping Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated flash " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Flashing popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Flashing Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated pulse " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Pulse effect popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Pulse effect
                                                Popover</u></div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated swing " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Swinging popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Swinging Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated shake " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Shaking popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Shaking Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated wobble " data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Wobbling popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Wobbling Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated tada" data-container="body" data-toggle="popover"
                                            data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Tada effect popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Tada effect Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated rubberBand" data-container="body"
                                            data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Rubber Band effect popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title=""><u class='text-dark'>Rubber
                                                Band effect Popover</u></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Popover Colors</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full text-center">
                                <div class="w-full">
                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="success" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Success popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title="">
                                            <u class='text-dark'>Success Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="primary" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Primary popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title="">
                                            <u class='text-dark'>Primary Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="accent" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Accent popover" data-trigger="hover" data-html="true" data-original-title=""
                                            title="">
                                            <u class='text-dark'>Accent Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="purple" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Purple popover" data-trigger="hover" data-html="true" data-original-title=""
                                            title="">
                                            <u class='text-dark'>Purple Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="warning" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Warning popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title="">
                                            <u class='text-dark'>Warning Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="info" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Info popover" data-trigger="hover" data-html="true" data-original-title=""
                                            title="">
                                            <u class='text-dark'>Info Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="danger" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Danger popover" data-trigger="hover" data-html="true" data-original-title=""
                                            title="">
                                            <u class='text-dark'>Danger Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>

                                    <div class="col-md-6 mb-10">
                                        <div rel="popover" data-animate=" animated fadeIn " data-container="body"
                                            data-color-class="secondary" data-toggle="popover" data-placement="top"
                                            data-content="Test content of the popover details ! It can handle HTML content too !"
                                            data-title="Secondary popover" data-trigger="hover" data-html="true"
                                            data-original-title="" title="">
                                            <u class='text-dark'>Secondary Popover</u>
                                        </div>
                                        <div class="clearfix"></div>
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