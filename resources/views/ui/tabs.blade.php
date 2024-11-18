@extends('layout.master')
@section('title', 'Tabs')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper w-full" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Tabs</h1>
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
                                    <strong>Tabs</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-lg-12">

                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Tabs</h2>
                        </div>
                        <div class="card-body px-2">

                            <!-- Horizontal - start -->
                            <div class="w-full">
                                <div class="col-md-12 mb-10">
                                    <h4>Primary</h4>

                                    <ul class="nav nav-tabs primary">
                                        <li class="active">
                                            <a href="#home-1" data-toggle="tab">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#profile-1" data-toggle="tab">
                                                <i class="fa fa-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#messages-1" data-toggle="tab">
                                                <i class="fa fa-envelope"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings-1" data-toggle="tab">
                                                <i class="fa fa-cog"></i> Settings
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content primary">
                                        <div class="tab-pane fade in active" id="home-1">

                                            <div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure molestias, in
                                                    perspiciatis quibusdam consequuntur modi beatae omnis architecto tempora.
                                                    Dolorum fugiat obcaecati atque suscipit dolor quam a ipsam architecto
                                                    reprehenderit.</p>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile-1">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure molestias, in
                                                perspiciatis quibusdam consequuntur modi beatae omnis architecto tempora. Dolorum
                                                fugiat obcaecati atque suscipit dolor quam a ipsam architecto reprehenderit.</p>


                                        </div>
                                        <div class="tab-pane fade" id="messages-1">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure molestias, in
                                                perspiciatis quibusdam consequuntur modi beatae omnis architecto tempora. Dolorum
                                                fugiat obcaecati atque suscipit dolor quam a ipsam architecto reprehenderit.</p>

                                        </div>

                                        <div class="tab-pane fade" id="settings-1">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio cupiditate, asperiores
                                                voluptatibus possimus libero reiciendis in tempora officia aut, quas saepe ad error
                                                earum, aliquid, eum voluptatum provident labore facilis.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo itaque maiores
                                                commodi velit excepturi autem ipsam optio, at cum fuga voluptate ipsum minima
                                                reiciendis. Debitis odio minus facere explicabo animi.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix">
                                    <br>
                                </div>
                                <div class="col-md-12 mb-10">
                                    <div class="clearfix"></div>
                                    <br>

                                    <h4>Transparent</h4>

                                    <ul class="nav nav-tabs transparent">
                                        <li class="active">
                                            <a href="#home-2" data-toggle="tab">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#profile-2" data-toggle="tab">
                                                <i class="fa fa-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#messages-2" data-toggle="tab">
                                                <i class="fa fa-envelope"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings-2" data-toggle="tab">
                                                <i class="fa fa-cog"></i> Settings
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content transparent">
                                        <div class="tab-pane fade in active" id="home-2">

                                            <div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, ducimus
                                                    fugiat laudantium commodi aut, dolorum odio numquam atque illum rerum,
                                                    accusamus. Non, numquam, inventore! Totam earum doloremque explicabo ullam
                                                    nesciunt.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid numquam harum
                                                    animi corrupti porro consequuntur consequatur vel deleniti modi nam odio ducimus
                                                    cumque, dolores obcaecati eaque reprehenderit, excepturi velit officia. </p>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile-2">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. In dignissimos quis, est. Autem perspiciatis
                                                blanditiis, a sunt, esse facilis labore consequatur atque voluptatibus doloribus
                                                voluptate commodi ullam, nobis eligendi. Quam?</p>

                                        </div>
                                        <div class="tab-pane fade" id="messages-2">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. In dignissimos quis, est. Autem perspiciatis
                                                blanditiis, a sunt, esse facilis labore consequatur atque voluptatibus doloribus
                                                voluptate commodi ullam, nobis eligendi. Quam?</p>

                                        </div>

                                        <div class="tab-pane fade" id="settings-2">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in,</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in onsequatur atque voluptatibus doloribus voluptate commodi
                                                ullam, nobis eligendi. Quam?</p>

                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix spacer20"></div>

                                <div class="col-md-12 mb-10">
                                    <h4>Horizontal Left Aligned</h4>

                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#home-3" data-toggle="tab">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#profile-3" data-toggle="tab">
                                                <i class="fa fa-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#messages-3" data-toggle="tab">
                                                <i class="fa fa-envelope"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings-3" data-toggle="tab">
                                                <i class="fa fa-cog"></i> Settings
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home-3">

                                            <div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore molestias harum
                                                    assumenda minima tempora ullam aliquam officia tenetur quaerat, dolore laborum
                                                    ipsum incidunt quia voluptatem, iusto sed iure ipsam voluptates.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero vel debitis sed,
                                                    distinctio aliquam expedita, nobis natus possimus impedit id doloribus
                                                    laboriosam eius praesentium accusantium quae ipsum, enim numquam alias.</p>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile-3">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam deleniti debitis eius
                                                accusantium minima. Neque facilis sed ducimus inventore quaerat, dolorum suscipit,
                                                tenetur, aliquam reiciendis aliquid ipsam doloremque quasi, expedita?</p>

                                        </div>
                                        <div class="tab-pane fade" id="messages-3">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis doloremque
                                                eligendi placeat cupiditate rem quasi delectus excepturi possimus fuga laboriosam
                                                expedita voluptatem, consequuntur nam nostrum tempora tempore iste ab fugiat!</p>

                                        </div>

                                        <div class="tab-pane fade" id="settings-3">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci corrupti dolor
                                                perferendis ipsam eius totam provident velit, amet fugiat suscipit maiores quisquam
                                                pariatur doloribus aliquid iure, architecto veritatis similique sunt.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto harum sapiente, nemo
                                                cumque iste enim sed sunt quo excepturi ea unde expedita corporis impedit eius.
                                                Tempore possimus nemo consequatur assumenda.</p>

                                        </div>
                                    </div>

                                </div>
                                <div class="clearfix">
                                    <br>
                                </div>
                                <div class="col-md-12 mb-10">
                                    <div class="clearfix"></div>
                                    <br>

                                    <h4>Horizontal Right Aligned</h4>

                                    <ul class="nav nav-tabs right-aligned">
                                        <li class="active">
                                            <a href="#home-4" data-toggle="tab">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#profile-4" data-toggle="tab">
                                                <i class="fa fa-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#messages-4" data-toggle="tab">
                                                <i class="fa fa-envelope"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings-4" data-toggle="tab">
                                                <i class="fa fa-cog"></i> Settings
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home-4">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam ipsa numquam, saepe
                                                nobis aspernatur odit quas. Quam velit blanditiis rem ullam ad ex at excepturi.
                                                Totam, obcaecati est hic consequuntur!</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem error, vel velit
                                                repellat nemo perferendis quae accusamus officia fugit labore deserunt, dolores enim
                                                numquam, nulla consectetur, voluptas aliquam itaque temporibus. </p>

                                        </div>
                                        <div class="tab-pane fade" id="profile-4">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. In dignissimos quis, est. Autem perspiciatis
                                                blanditiis, a sunt, esse facilis labore consequatur atque voluptatibus doloribus
                                                voluptate commodi ullam, nobis eligendi. Quam?</p>

                                        </div>
                                        <div class="tab-pane fade" id="messages-4">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, qui. Sed, in.
                                                Dolorem facere qui explicabo repudiandae saepe ex necessitatibus, itaque laudantium,
                                                maxime suscipit nostrum ea nobis beatae voluptate soluta.</p>

                                        </div>

                                        <div class="tab-pane fade" id="settings-4">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum vitae iusto
                                                accusantium, alias voluptatum delectus totam eveniet incidunt, corrupti numquam
                                                explicabo veritatis necessitatibus officiis quisquam veniam cum animi inventore
                                                deserunt.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti ex hic deserunt
                                                similique excepturi at iusto consectetur nesciunt dolor illo. Nemo sit consequuntur
                                                esse iure eveniet accusamus, eius iste, voluptatibus.</p>

                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix spacer20"></div>

                            </div>

                            <!-- Horizontal - end -->

                            <div class="clearfix hidden-md hidden-lg">
                                <br>
                            </div>
                            <!-- Vertical - start -->

                            <div class="w-full">

                                <div class="col-md-12 mb-10">

                                    <!-- <div class="tabs-vertical-env"> -->
                                    <h4>Vertical Left Aligned</h4>
                                    <div class="w-full tabs-area">
                                        <ul class="nav nav-tabs vertical col-xs-4 col-md-3 left-aligned primary">
                                            <li class="active">
                                                <a href="#home-5" data-toggle="tab">
                                                    <i class="fa fa-home"></i> Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#profile-5" data-toggle="tab">
                                                    <i class="fa fa-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#messages-5" data-toggle="tab">
                                                    <i class="fa fa-envelope"></i> Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#settings-5" data-toggle="tab">
                                                    <i class="fa fa-cog"></i> Settings
                                                </a>
                                            </li>
                                        </ul>

                                        <div class="tab-content vertical col-xs-8 col-md-9 left-aligned primary">
                                            <div class="tab-pane fade in active" id="home-5">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus eligendi,
                                                    inventore. Perspiciatis in quam, quas, molestias laboriosam quisquam harum fuga
                                                    consectetur numquam ratione, neque nihil error itaque voluptatem maxime? Eaque.
                                                </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, dolorem esse
                                                    expedita ducimus voluptatum delectus voluptatibus omnis aliquid, quibusdam in,
                                                    non. Ut libero facere quae voluptatem quibusdam obcaecati modi ullam.</p>

                                            </div>
                                            <div class="tab-pane fade" id="profile-5">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde vero rerum
                                                    accusamus est adipisci tempore labore delectus voluptate praesentium expedita
                                                    magnam cum inventore, mollitia dicta excepturi deleniti sunt. Laboriosam, saepe.
                                                </p>

                                            </div>
                                            <div class="tab-pane fade" id="messages-5">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis ipsam quaerat
                                                    nobis alias, praesentium nisi dolores quidem molestias, maiores natus itaque.
                                                    Perspiciatis eaque cumque facere, ullam dolorum necessitatibus tempore
                                                    voluptate.</p>

                                            </div>

                                            <div class="tab-pane fade" id="settings-5">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni odio rem,
                                                    ducimus, possimus voluptas consequuntur recusandae iste illum qui accusamus
                                                    ipsam dolores, repellendus pariatur aut, quae doloribus nulla magnam repellat!
                                                </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deserunt sint
                                                    iure at voluptatum suscipit, voluptatibus tempore, quisquam odit nulla rerum
                                                    voluptas ducimus consequuntur explicabo saepe maiores ipsum minima debitis.</p>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- </div>  -->

                                </div>
                                <div class="clearfix">
                                    <br>
                                </div>
                                <div class="col-md-12 mb-10">
                                    <div class="clearfix"></div>
                                    <br>

                                    <!-- <div class="tabs-vertical-env"> -->
                                    <h4>Vertical Right Aligned</h4>
                                    <div class="w-full tabs-area">
                                        <div class="tab-content vertical col-xs-8 col-md-9 right-aligned">
                                            <div class="tab-pane fade in active" id="home-6">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est maiores repudiandae
                                                    nulla vel laudantium ea ducimus iusto voluptates. Aperiam porro quos, ratione
                                                    ipsam, ut architecto cumque. Distinctio saepe, vero porro.</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae, minus!
                                                    Sequi atque quaerat velit? Ut officia recusandae similique nostrum vero totam
                                                    illo eligendi commodi reprehenderit ad animi mollitia, quam voluptates.</p>

                                            </div>
                                            <div class="tab-pane fade" id="profile-6">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere!
                                                    Ut quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas,
                                                    iste culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum
                                                    dolor sit amet, consectetur adipisicing elit. In dignissimos quis, est. Autem
                                                    perspiciatis blanditiis, a sunt, esse facilis labore consequatur atque
                                                    voluptatibus doloribus voluptate commodi ullam, nobis eligendi. Quam?</p>

                                            </div>
                                            <div class="tab-pane fade" id="messages-6">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere!
                                                    Ut quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas,
                                                    iste culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum
                                                    dolor sit amet, consectetur adipisicing elit. In dignissimos quis, est. Autem
                                                    perspiciatis blanditiis, a sunt, esse facilis labore consequatur atque
                                                    voluptatibus doloribus voluptate commodi ullam, nobis eligendi. Quam?</p>

                                            </div>

                                            <div class="tab-pane fade" id="settings-6">

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere!
                                                    Ut quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas,
                                                    iste culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum
                                                    dolor sit amet, consectetur adipisicing elit. In dignissimos quis, est. Autem
                                                    perspiciatis blanditiis, a sunt, esse facilis labore consequatur atque
                                                    voluptatibus doloribus voluptate commodi ullam, nobis eligendi. Quam?</p>

                                            </div>
                                        </div>

                                        <ul class="nav nav-tabs vertical col-xs-4 col-md-3 right-aligned">
                                            <li class="active">
                                                <a href="#home-6" data-toggle="tab">
                                                    <i class="fa fa-home"></i> Home
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#profile-6" data-toggle="tab">
                                                    <i class="fa fa-user"></i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#messages-6" data-toggle="tab">
                                                    <i class="fa fa-envelope"></i> Messages
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#settings-6" data-toggle="tab">
                                                    <i class="fa fa-cog"></i> Settings
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- </div>  -->

                                </div>

                                <div class="clearfix spacer20"></div>
                            </div>

                            <!-- Vertical - end -->

                        </div>
                    </section>
                </div>

                <div class="col-lg-12">

                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="fs-2 ">Justified & Dropdown Tabs</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">

                                <div class="mb-10">

                                    <h4>Justified Tabs</h4>

                                    <ul class="nav nav-tabs  primary">
                                        <li class="active">
                                            <a href="#home-7" data-toggle="tab">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#profile-7" data-toggle="tab">
                                                <i class="fa fa-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#messages-7" data-toggle="tab">
                                                <i class="fa fa-envelope"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings-7" data-toggle="tab">
                                                <i class="fa fa-cog"></i> Settings
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content primary">
                                        <div class="tab-pane fade in active" id="home-7">

                                            <div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere!
                                                    Ut quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas,
                                                    iste culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum
                                                    dolor sit amet, consectetur adipisicing elit. In dignissimos quis, est. Autem
                                                    perspiciatis blanditiis, a sunt, esse facilis labore consequatur atque
                                                    voluptatibus doloribus voluptate commodi ullam, nobis eligendi. Quam?</p>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile-7">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. In dignissimos quis, est. Autem perspiciatis
                                                blanditiis, a sunt, esse facilis labore consequatur atque voluptatibus doloribus
                                                voluptate commodi ullam, nobis eligendi. Quam?</p>

                                        </div>
                                        <div class="tab-pane fade" id="messages-7">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. In dignissimos quis, est. Autem perspiciatis
                                                blanditiis, a sunt, esse facilis labore consequatur atque voluptatibus doloribus
                                                voluptate commodi ullam, nobis eligendi. Quam?</p>

                                        </div>

                                        <div class="tab-pane fade" id="settings-7">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, excepturi facere! Ut
                                                quaerat consequatur obcaecati, voluptatum fugiat ex corrupti quas voluptas, iste
                                                culpa doloremque magni in, aspernatur tenetur iusto possimus Lorem ipsum dolor sit
                                                amet, consectetur adipisicing elit. In dignissimos quis, est. Autem perspiciatis
                                                blanditiis, a sunt, esse facilis labore consequatur atque voluptatibus doloribus
                                                voluptate commodi ullam, nobis eligendi. Quam?</p>

                                        </div>
                                    </div>

                                </div>

                                <div class="clearfix spacer20"></div>

                                <div class="col-md-12 mb-10">
                                    <h4>Dropdown Menu as Tab</h4>

                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="#home-8" data-toggle="tab">
                                                <i class="fa fa-home"></i> Home
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#profile-8" data-toggle="tab">
                                                <i class="fa fa-user"></i> Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#messages-8" data-toggle="tab">
                                                <i class="fa fa-envelope"></i> Messages
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#settings-8" data-toggle="tab">
                                                <i class="fa fa-cog"></i> Settings
                                            </a>
                                        </li>

                                        <li role="presentation" class="dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                                                aria-expanded="false">
                                                Dropdown <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </li>

                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane fade in active" id="home-8">

                                            <div>

                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum sint, dolor
                                                    similique inventore eligendi quod officiis iste, dignissimos distinctio quisquam
                                                    nisi nam accusamus excepturi labore ex quasi commodi voluptatibus laudantium.
                                                </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos in vel cupiditate
                                                    nostrum quo, repellendus itaque amet nesciunt corporis magni minima. Eaque et
                                                    amet quia consequuntur reprehenderit ratione sapiente unde!</p>

                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile-8">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias provident commodi
                                                tenetur possimus harum soluta beatae saepe, iusto quis unde incidunt dolores ipsam
                                                autem esse magni perspiciatis eius porro nesciunt.</p>

                                        </div>
                                        <div class="tab-pane fade" id="messages-8">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi cupiditate aliquam
                                                quas deserunt in perferendis aspernatur nesciunt, consequuntur vitae voluptas. Nemo
                                                aliquam placeat totam vel, deleniti earum ut molestias tenetur.</p>

                                        </div>

                                        <div class="tab-pane fade" id="settings-8">

                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci sapiente aperiam
                                                magnam incidunt, fugit ipsum facere dignissimos. Voluptates velit, nostrum
                                                recusandae laudantium quia labore dolorem totam accusamus, necessitatibus numquam
                                                cupiditate.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa fuga, sapiente
                                                inventore reprehenderit harum adipisci, molestias? Nobis error, iure id, architecto
                                                quae accusamus laudantium, necessitatibus assumenda ullam, asperiores similique
                                                quos.</p>

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