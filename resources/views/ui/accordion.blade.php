@extends('layout.master')
@section('title', 'Accordions')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Accordions</h1>
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
                                    <strong>Accordions</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">


                    <section class="card py-10">
                        <div class="card-body">
                            <div class="w-full">
                                <div class="col-xs-12">

                                    <div class="w-full">

                                        <!-- Accordion START -->
                                        <div class="col-md-6 col-xs-12">

                                            <h4>Default</h4>

                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne1">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseOne" aria-expanded="false"
                                                                data-target="#collapseOne">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse " role="tabpanel"
                                                        aria-labelledby="headingOne1">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed nesciunt
                                                            corporis libero dolorum tempore aperiam assumenda ex aliquid, nisi
                                                            sequi? Ex molestias debitis qui quaerat error, asperiores aliquid quasi
                                                            magni.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo1">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseTwo" aria-expanded="false"
                                                                data-target="#collapseTwo">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo1">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos modi ut
                                                            distinctio nihil expedita, quibusdam ab reiciendis officiis ipsa minima!
                                                            Ab reiciendis commodi officiis quos, necessitatibus unde illo temporibus
                                                            itaque.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree1">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                                                                data-target="#collapseThree">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingThree1">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum
                                                            necessitatibus cupiditate possimus commodi, quis, dolore officiis
                                                            inventore perferendis ducimus fuga fugit, eligendi consequuntur! Alias
                                                            sequi vel, ullam. Vitae, quo, voluptates!
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion END -->
                                        <div class="clearfix hidden-md hidden-lg">
                                            <br>
                                        </div>
                                        <!-- Accordion START -->
                                        <div class="col-md-6 col-xs-12">

                                            <h4>Primary</h4>

                                            <div class="panel-group primary" id="accordion-2" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne2">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-2" href="#collapseOne-2"
                                                                aria-expanded="false" data-target="#collapseOne-2">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne-2" class="panel-collapse collapse " role="tabpanel"
                                                        aria-labelledby="headingOne2">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque
                                                            quasi maiores reprehenderit perferendis nostrum enim molestiae
                                                            voluptatem voluptates. Aperiam nihil voluptas adipisci! Sed aut facere
                                                            qui, id in cumque vero.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo2">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-2" href="#collapseTwo-2"
                                                                aria-expanded="false" data-target="#collapseTwo-2">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo-2" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo2">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati
                                                            fugit similique enim ipsum? Obcaecati inventore possimus, nihil
                                                            asperiores minus sed id animi odit sapiente recusandae, doloribus enim
                                                            ipsam modi beatae.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree2">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-2" href="#collapseThree-2"
                                                                aria-expanded="false" data-target="#collapseThree-2">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree-2" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingThree2">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti
                                                            voluptate libero ab optio nulla, placeat sit at perspiciatis eum
                                                            obcaecati nostrum quis non. Assumenda maxime delectus porro, enim,
                                                            tempora doloremque?
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion END -->

                                        <div class="clearfix spacer20"></div>

                                        <!-- Accordion START -->
                                        <div class="col-md-6 col-xs-12">

                                            <h4>Transparent</h4>

                                            <div class="panel-group transparent" id="accordion-3" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne3">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-3" href="#collapseOne-3"
                                                                aria-expanded="false" data-target="#collapseOne-3">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne-3" class="panel-collapse collapse " role="tabpanel"
                                                        aria-labelledby="headingOne3">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex quos, magni
                                                            blanditiis consectetur, odio sequi fuga consequatur. Iste itaque
                                                            necessitatibus optio magni quae explicabo veritatis. Natus in
                                                            consectetur sit ad.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo3">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-3" href="#collapseTwo-3"
                                                                aria-expanded="false" data-target="#collapseTwo-3">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo-3" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo3">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis
                                                            reiciendis perspiciatis voluptatem a nesciunt, delectus, non commodi
                                                            hic, dolor, nam rem ipsa distinctio optio accusantium doloribus
                                                            laboriosam quod maxime similique?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree3">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-3" href="#collapseThree-3"
                                                                aria-expanded="false" data-target="#collapseThree-3">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree-3" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingThree3">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam placeat
                                                            tempora, provident! Nemo, itaque. Delectus quo natus repudiandae maxime
                                                            tenetur necessitatibus, ad possimus. Iste aperiam velit quaerat aliquid
                                                            voluptatem, possimus.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion END -->

                                        <div class="clearfix hidden-md hidden-lg">
                                            <br>
                                        </div>
                                        <!-- Accordion START -->
                                        <div class="col-md-6 col-xs-12">

                                            <h4>Collapsed</h4>

                                            <div class="panel-group collapsed" id="accordion-4" role="tablist"
                                                aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne4">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-4" href="#collapseOne-4"
                                                                aria-expanded="false" data-target="#collapseOne-4">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #1
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne-4" class="panel-collapse collapse " role="tabpanel"
                                                        aria-labelledby="headingOne4">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum
                                                            consequuntur expedita odit, soluta, corporis minima quod nam! Iusto
                                                            cumque blanditiis rerum. Id repudiandae molestiae, quidem enim neque
                                                            quos corporis blanditiis?
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo4">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-4" href="#collapseTwo-4"
                                                                aria-expanded="false" data-target="#collapseTwo-4">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #2
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo-4" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingTwo4">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus
                                                            nihil tempore sint quod at nesciunt ut ducimus, pariatur perspiciatis
                                                            vero? Soluta autem molestiae eveniet ipsam amet deleniti provident,
                                                            aspernatur enim.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree4">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed accordion-button" data-toggle="collapse"
                                                                data-parent="#accordion-4" href="#collapseThree-4"
                                                                aria-expanded="false" data-target="#collapseThree-4">
                                                                <i class='fa fa-check'></i> Collapsible Group Item #3
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree-4" class="panel-collapse collapse" role="tabpanel"
                                                        aria-labelledby="headingThree4">
                                                        <div class="panel-body">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam
                                                            possimus ex rerum sequi hic blanditiis maiores molestiae est, architecto
                                                            voluptas labore iste excepturi fuga quam sit, dignissimos quae sunt
                                                            aliquam.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- Accordion END -->

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