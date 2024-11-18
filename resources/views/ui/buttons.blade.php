@extends('layout.master')
@section('title', 'Buttons')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Buttons</h1>
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
                                    <strong>Buttons</strong>
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
                            <h3 class="">Colors</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row btn-colors">
                                <div class="col-md-12">
                                    <button class="btn btn-default">Default</button>
                                    <button class="btn btn-primary">Primary</button>
                                    <button class="btn btn-success">Success</button>
                                    <button class="btn btn-info">Info</button>

                                    <button class="btn btn-warning">Warning</button>
                                    <button class="btn btn-danger">Danger</button>
                                    <button class="btn btn-purple">Purple</button>
                                    <button class="btn btn-accent">Accent</button>

                                    <button class="btn btn-secondary">Secondary</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Sizes</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full py-10">
                                <div class="col-xs-12">

                                    <div class="btn-sizes">
                                        <p>
                                            <button class="btn btn-success btn-xs">Extra small button</button>
                                        </p>
                                        <p>
                                            <button class="btn btn-warning btn-sm">Small size button</button>
                                        </p>
                                        <p>
                                            <button class="btn btn-danger">Default size button</button>
                                        </p>
                                        <p>
                                            <button class="btn btn-info btn-lg">Large size button</button>
                                        </p>
                                        <p>
                                            <button class="btn btn-primary btn-block">Block button</button>
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Button Groups & Justified</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full py-10">
                                <div class="col-xs-12">

                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-success bg-lg">Top</a>
                                    </div>

                                    <br>

                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-primary">Left</a>
                                        <a class="btn btn-red">Right</a>
                                    </div>

                                    <br>

                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-black btn-sm">Left</a>
                                        <a class="btn btn-purple btn-sm">Middle</a>
                                        <a class="btn btn-info btn-sm">Right</a>
                                    </div>

                                    <br>

                                    <div class="btn-group btn-group-justified">
                                        <a class="btn btn-blue btn-xs">One</a>
                                        <a class="btn btn-success btn-xs">Two</a>
                                        <a class="btn btn-warning btn-xs">Three</a>
                                        <a class="btn btn-purple btn-xs">Four</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="clearfix"></div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Iconic</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full py-10">
                                <div class="col-xs-12 btn-iconic">
                                    <button class="btn btn-primary"><i class="fa fa-dashboard"></i></button>
                                    <button class="btn btn-primary"><i class="fa fa-arrows"></i></button>
                                    <button class="btn btn-primary"><i class="fa fa-bell"></i></button>
                                    <button class="btn btn-purple"><i class="fa fa-book"></i></button>
                                    <button class="btn btn-purple"><i class="fa fa-bank"></i></button>
                                    <button class="btn btn-purple"><i class="fa fa-car"></i></button>
                                    <button class="btn btn-warning"><i class="fa fa-magic"></i></button>
                                    <button class="btn btn-warning"><i class="fa fa-rocket"></i></button>
                                    <button class="btn btn-warning"><i class="fa fa-camera"></i></button>
                                    <button class="btn btn-accent"><i class="fa fa-comment"></i></button>
                                    <button class="btn btn-accent"><i class="fa fa-database"></i></button>
                                    <button class="btn btn-accent"><i class="fa fa-envelope"></i></button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Social Media</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full py-10">
                                <div class="col-xs-12 btn-social">
                                    <button class="btn btn-primary facebook"><i class="fa fa-facebook"></i></button>
                                    <button class="btn btn-primary twitter"><i class="fa fa-twitter"></i></button>
                                    <button class="btn btn-primary google-plus"><i class="fa fa-google-plus"></i></button>
                                    <button class="btn btn-primary dribbble"><i class="fa fa-dribbble"></i></button>
                                    <button class="btn btn-primary youtube"><i class="fa fa-youtube"></i></button>
                                    <button class="btn btn-primary vimeo"><i class="fa fa-vimeo-square"></i></button>
                                    <button class="btn btn-primary flickr"><i class="fa fa-flickr"></i></button>
                                    <button class="btn btn-primary rss"><i class="fa fa-rss"></i></button>
                                    <button class="btn btn-primary skype"><i class="fa fa-skype"></i></button>
                                    <button class="btn btn-primary linkedin"><i class="fa fa-linkedin"></i></button>
                                    <button class="btn btn-primary android"><i class="fa fa-android"></i></button>
                                    <button class="btn btn-primary apple"><i class="fa fa-apple"></i></button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">States</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full py-10">

                                <div class="col-md-6">
                                    <button class="btn btn-primary active">Active State</button>
                                </div>
                                <div class="col-md-6">
                                    <button class="btn btn-primary" disabled="disabled">Disabled State</button>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Styles</h3>
                        </div>
                        <div class="card-body ">
                            <div class="w-full py-10">
                                <div class="col-md-3 bottom15 right15">
                                    <button class="btn btn-primary">Square</button>
                                </div>
                                <div class="col-md-3 bottom15 right15">
                                    <button class="btn btn-primary btn-corner">Cornered</button>
                                </div>
                                <div class="col-md-3 bottom15 right15">
                                    <button class="btn btn-primary btn-border">Bordered</button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">Text & Icons</h3>
                        </div>
                        <div class="card-body ">
                            <div class="row btn-texticons">
                                <div class="col-md-12">
                                    <button class="btn btn-secondary btn-icon bottom15 right15">
                                        <i class="fa fa-heart"></i> &nbsp; <span>Like</span>
                                    </button>

                                    <button class="btn btn-accent btn-icon bottom15 right15">
                                        <i class="fa fa-car"></i> &nbsp; <span>Launch</span>
                                    </button>

                                    <button class="btn btn-purple btn-icon bottom15 right15">
                                        <i class="fa fa-shopping-cart"></i> &nbsp; <span>Buy</span>
                                    </button>

                                    <button class="btn btn-success btn-icon bottom15 right15">
                                        <i class="fa fa-road"></i> &nbsp; <span>Success</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-header pt-5">
                            <h3 class="">DropDowns</h3>
                        </div>
                        <div class="card-body ">
                            <div class="btn-texticons">

                                <div class="btn-group bottom15 right15">
                                    <div class="dropdown">
                                        <button class="btn btn-default dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown"
                                            aria-expanded="true">
                                            Dropdown
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a>
                                            </li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else
                                                    here</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Separated link</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="btn-group bottom15 right15">
                                    <button class="btn btn-primary">Menu</button>
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->

                                <div class="btn-group bottom15 right15">
                                    <button class="btn btn-primary">Download</button>
                                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="fa fa-download"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something else here</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Separated link</a></li>
                                    </ul>
                                </div>
                                <!-- /btn-group -->

                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>

@endsection

@section('script')

@endsection