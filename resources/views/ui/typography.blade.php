@extends('layout.master')
@section('title', 'Typography')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Typography</h1>
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
                                    <strong>Typography</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12 col-md-8">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Typography</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">
                                <h3>Headings</h3>
                                <br>
                                <h2 class="h1">h1. Heading 1 <small>Secondary text</small></h2>
                                <h2>h2. Heading 2 <small>Secondary text</small></h2>
                                <h3>h3. Heading 3 <small>Secondary text</small></h3>
                                <h4>h4. Heading 4 <small>Secondary text</small></h4>
                                <h5>h5. Heading 5 <small>Secondary text</small></h5>
                                <h6>h6. Heading 6 <small>Secondary text</small></h6>
                            </div>

                            <div class="w-full">
                                <br>
                                <h3>Text Styles & Tags</h3>
                                <br>
                                <p class="lead">
                                    In design, space is concerned with the area <del>deep within the moment</del> of
                                    designated design.
                                </p>
                                <p>
                                    For a two-dimensional design space concerns <ins>creating the illusion</ins> of a
                                    third dimension on <em>a flat surface</em>. Overlap is the effect where objects
                                    appear to be on top of each other. This illusion makes the top element look closer
                                    to the observer.
                                </p>
                                <p>
                                    Shading adds gradation marks <abbr title="HyperText Markup Language"
                                        class="initialism">HTML</abbr> to make an object of a two-dimensional
                                    <mark>surface seem three-dimensional</mark>. Highlight, Transitional Light, Core of
                                    the Shadow, Reflected Light, and Cast Shadow give an object a three-dimensional
                                    look.
                                </p>

                                <br>

                                <h4>Visual unity is a main goal of graphic design</h4>
                                <br>
                                <h2>Perspective, Similarity <span class="semi-bold">& Contrast</span>, <i>Rhythm</i>
                                </h2>
                                <h4><span class="semi-bold">Semi Bold</span>, Light , <span class="semi-bold">Bold</span> ,
                                    <i>Italics</i></h4>
                                <p>A good design contains elements that lead the reader through each element in order of
                                    its significance. The type and images should be expressed starting from most
                                    important to the least important.</p>
                                <br>
                                <h3><span class="semi-bold">Numerics</span> stuff! - 1234<span class="semi-bold">56</span>78<span
                                        class="bold">9</span>0</h3>
                                <h3>Some more text addons <span class="semi-bold">640.54<sup>USD</sup></span></h3>
                                <h3>Decimals <span class="semi-bold">3432.<sup><u>10</u></sup></span></h3>

                            </div>

                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-4">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Unordered Lists</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">

                                <ul>
                                    <li>
                                        Lorem ipsum dolor sit amet
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Facilisis in pretium nisl aliquet
                                    </li>
                                    <li>
                                        Nulla volutpat aliquam velit
                                        <ul>
                                            <li>
                                                Phasellus iaculis neque
                                            </li>
                                            <li>
                                                Purus sodales ultricies
                                            </li>
                                            <li>
                                                Ac tristique libero volutpat at
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Aenean sit amet erat nunc
                                    </li>
                                    <li>
                                        Faucibus porta lacus fringilla vel
                                    </li>
                                    <li>
                                        Eget porttitor lorem ipsum nunc erat sit
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-4">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Ordered Lists</h2>
                        </div>
                        <div class="card-body py-2">
                            <div class="w-full">

                                <ol>
                                    <li><span>Lorem ipsum dolor sit amet</span></li>
                                    <li><span>Consectetur adipiscing elit</span></li>
                                    <li><span>Integer molestie lorem at massa</span></li>
                                    <li><span>Facilisis in pretium nisl aliquet</span></li>
                                    <li><span>Nulla volutpat aliquam velit</span></li>
                                    <li><span>Faucibus porta lacus fringilla vel</span></li>
                                    <li><span>Aenean sit amet erat nunc</span></li>
                                    <li><span>Eget porttitor lorem</span></li>
                                    <li><span>Nulla volutpat aliquam velit</span></li>
                                    <li><span>Faucibus porta lacus fringilla vel</span></li>
                                </ol>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-4">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Inline Lists</h2>
                        </div>
                        <div class="card-body py-0">
                            <div class="w-full">

                                <ul class="list-inline">
                                    <li>1. Welcome</li>
                                    <li>2. To</li>
                                    <li>3. Complete</li>
                                    <li>4. Admin</li>
                                    <li>5. Premium</li>
                                    <li>6. Theme</li>
                                    <li>7. Built</li>
                                    <li>8. With</li>
                                    <li>9. <i class='fa fa-heart'></i> Love</li>
                                </ul>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-8">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Blockquote & Well</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">

                                <h3>Blockquotes</h3>
                                <br>
                                <blockquote>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit voluptatibus.</p>
                                    <small>Thomas A. Edison</small>
                                </blockquote>

                                <blockquote class="accent pull-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error eveniet fugiat.
                                    </p>
                                    <small>Bob Marley</small>
                                </blockquote>
                                <div class='clearfix'></div>
                                <br>

                                <blockquote class="purple background">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam quasi </p>
                                    <small>Thomas A. Edison</small>
                                </blockquote>

                                <blockquote class="background pull-right">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, aperiam.
                                        Alias.</p>
                                    <small>Bob Marley</small>
                                </blockquote>

                                <div class='clearfix'></div>
                                <br>

                                <h3>Wells</h3>
                                <br>
                                <div class="well">
                                    <h3>consectetur adipisicing <span class="semi-bold">ipsum dolor </span>, <i> sit
                                            amet</i> </h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repellendus laborum explicabo voluptatum.
                                </div>

                                <div class="well transparent">
                                    <h3>consectetur adipisicing<span class="semi-bold">ipsum dolor</span>, <i> sit
                                            amet</i> </h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repellendus laborum explicabo voluptatum.
                                </div>

                                <div class="well primary">
                                    <h3>consectetur adipisicing <span class="semi-bold">ipsum dolor</span>, <i> sit
                                            amet</i> </h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                    Repellendus laborum explicabo voluptatum.
                                </div>

                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-4">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Text Colors</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xs-12">
                                    <p class="text-muted">
                                        Muted text Sample
                                    </p>
                                    <p class="text-primary">
                                        Primary text Sample
                                    </p>
                                    <p class="text-success">
                                        Success text Sample
                                    </p>
                                    <p class="text-info">
                                        Info text Sample
                                    </p>
                                    <p class="text-warning">
                                        Warning text Sample
                                    </p>
                                    <p class="text-danger">
                                        Danger text Sample
                                    </p>
                                    <br>
                                    <p class="bg-muted">
                                        Muted text Sample
                                    </p>
                                    <p class="bg-primary">
                                        Primary text Sample
                                    </p>
                                    <p class="bg-success">
                                        Success text Sample
                                    </p>
                                    <p class="bg-info">
                                        Info text Sample
                                    </p>
                                    <p class="bg-warning">
                                        Warning text Sample
                                    </p>
                                    <p class="bg-danger">
                                        Danger text Sample
                                    </p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-4">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Address</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">
                                <address class="margin-bottom-20 margin-top-10">
                                    <strong>Triangles, Inc.</strong><br>
                                    140 Zamalek, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-7890
                                </address>
                                <address>
                                    <strong>Email</strong><br>
                                    <a href="mailto:#">email@example.com</a>
                                </address>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-4">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Transform & Align</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">
                                <p class="text-left">Left aligned text.</p>
                                <p class="text-center">Center aligned text.</p>
                                <p class="text-right">Right aligned text.</p>
                                <p class="text-justify">Justified text.</p>
                                <p class="text-nowrap">No wrap text.</p>
                                <p class="text-lowercase">Lowercased text.</p>
                                <p class="text-uppercase">Uppercased text.</p>
                                <p class="text-capitalize">Capitalized text.</p>
                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')

@endsection