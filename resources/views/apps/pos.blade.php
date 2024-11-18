@extends('layout.master')
@section('title', 'POS')
@section('css')

@endsection
@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Point Of Sale </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li class="">
                                    <strong>APPs</strong>
                                </li>
                                <li class="active">
                                    <strong>POS</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 ">

                </div>

                <div class="clearfix"></div>

                <div class="col-xxl-9 col-xl-8 col-md-7 col-sm-12   post-wrapper">
                    <a class="px-5 h5 text-hover-primary my-3 d-block" href="javascript:;" role="button" aria-expanded="false">Categories</a>
                    <div class="w-full flex gap-10 overflow-auto h-125px mb-10">
                        <div class="min-w-200px">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex flex-">
                                        <div class="flex-shrink-0"><img class="w-50px" src="/data/icons/food-dish.svg" /></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Main Dishes</a></h5>
                                            <p class="mb-0"><small>24 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-w-200px">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="w-50px" src="/data/icons/food-meat.svg" /></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Meat</a>
                                            </h5>
                                            <p class="mb-0"><small>11 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-w-200px">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="w-50px" src="/data/icons/food-chicken.svg" /></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Chicken</a>
                                            </h5>
                                            <p class="mb-0"><small>16 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="min-w-200px">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="w-50px" src="/data/icons/food-fish.svg" /></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Fish</a>
                                            </h5>
                                            <p class="mb-0"><small>13 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-200px">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="w-50px" src="/data/icons/food-taco.svg" /></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Sandwiches</a></h5>
                                            <p class="mb-0"><small>23 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="min-w-200px">
                            <div class="card">
                                <div class="card-body p-2">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0"><img class="w-50px" src="/data/icons/food-cake.svg" /></div>
                                        <div class="flex-grow-1 mx-3">
                                            <h5 class="mb-1 d-grid"><a href="javascript:;" class="text-truncate w-100">Cake</a></h5>
                                            <p class="mb-0"><small>8 items</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/chicken-burger.png" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Chicken Wings</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer alert-success">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/beef-burger.png" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Beef Burger</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge position-absolute right-0 bottom-100  bg-danger f-12 cursor-pointer alert-error border-0">Stock-out</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/samosa.png" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Sambosa</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/meal1.png" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Combo Sandwich</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/chicken.jpg" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Combo Sandwich</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/fast-food.webp" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Combo Sandwich</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/turkey.png" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Turkey</h6>
                                        <div class="d-flex">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body p-0">
                                    <div class="avtar bg-light-primary"><img src="/data/products/burger.png" /></div>
                                    <div class="align-items-end justify-content-between mt-4  relative">
                                        <h6 class="mb-1">Combo Sandwich</h6>
                                        <div class="d-flex ">
                                            <p class="mb-0 text-muted w-full">Served with Fries</p>
                                            <span class="text-danger fw-bold">$14.99</span>
                                        </div>
                                        <span
                                            class="badge alert-success  position-absolute right-0 bottom-100  bg-success f-12 cursor-pointer">Order
                                            now</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-3 border border-secondary-subtle">

                </div>
                <div class="col-xxl-3 col-xl-4 col-md-5 col-sm-12   post-sidebar">

                    <div class="card mt-12">
                        <a class="gap-2 flex cursor-pointer items-center rounded-md bg-white p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:bg-darkmode-600 dark:hover:bg-darkmode-400"
                            data-tw-toggle="modal" data-tw-target="#add-item-modal" href="#">
                            <div class="mr-1 w-full truncate">
                                Chicken Wings
                            </div>
                            <div class="flex-none">x 1</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                data-lucide="edit" class="lucide lucide-edit stroke-1.5 ml-2 h-4 w-4 flex-none">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                            </svg>
                            <div class="ml-auto font-medium">
                                $48
                            </div>
                        </a>
                        <a class="gap-2 flex cursor-pointer items-center rounded-md bg-white p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:bg-darkmode-600 dark:hover:bg-darkmode-400"
                            data-tw-toggle="modal" data-tw-target="#add-item-modal" href="#">
                            <div class="mr-1 w-full truncate">
                                Curry Penne and Cheese
                            </div>
                            <div class="flex-none">x 1</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                data-lucide="edit" class="lucide lucide-edit stroke-1.5 ml-2 h-4 w-4 flex-none">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                            </svg>
                            <div class="ml-auto font-medium">
                                $26
                            </div>
                        </a>
                        <a class="gap-2 flex cursor-pointer items-center rounded-md bg-white p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:bg-darkmode-600 dark:hover:bg-darkmode-400"
                            data-tw-toggle="modal" data-tw-target="#add-item-modal" href="#">
                            <div class="mr-1 w-full truncate">
                                Root Beer
                            </div>
                            <div class="flex-none">x 1</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                data-lucide="edit" class="lucide lucide-edit stroke-1.5 ml-2 h-4 w-4 flex-none">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                            </svg>
                            <div class="ml-auto font-medium">
                                $58
                            </div>
                        </a>
                        <a class="gap-2 flex cursor-pointer items-center rounded-md bg-white p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:bg-darkmode-600 dark:hover:bg-darkmode-400"
                            data-tw-toggle="modal" data-tw-target="#add-item-modal" href="#">
                            <div class="mr-1 w-full truncate">
                                Root Beer
                            </div>
                            <div class="flex-none">x 1</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                data-lucide="edit" class="lucide lucide-edit stroke-1.5 ml-2 h-4 w-4 flex-none">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                            </svg>
                            <div class="ml-auto font-medium ">
                                $195
                            </div>
                        </a>
                        <a class="gap-2 flex cursor-pointer items-center rounded-md bg-white p-3 transition duration-300 ease-in-out hover:bg-slate-100 dark:bg-darkmode-600 dark:hover:bg-darkmode-400"
                            data-tw-toggle="modal" data-tw-target="#add-item-modal" href="#">
                            <div class="mr-1 w-full truncate">
                                Spaghetti Fettucine Aglio with Beef Bacon
                            </div>
                            <div class="flex-none">x 1</div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                data-lucide="edit" class="lucide lucide-edit stroke-1.5 ml-2 h-4 w-4 flex-none">
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                            </svg>
                            <div class="ml-auto font-medium">
                                $169
                            </div>
                        </a>
                    </div>
                    <div class="card mt-5 py-7">
                        <div class=" flex gap-2">
                            <input type="text" placeholder="Use coupon code..."
                                class=" transition duration-200 ease-in-out w-full text-sm shadow-sm rounded-md  px-4 py-3 pr-10">
                            <button
                                class="btn btn-primary transition duration-200 border shadow-sm inline-flex items-center justify-center py-2 px-3 rounded-md font-medium cursor-pointer  ml-2">Apply</button>
                        </div>
                    </div>
                    <div class="card mt-5 py-7">
                        <div class="flex w-full">
                            <div class="w-full">Subtotal</div>
                            <div class="font-medium">$250</div>
                        </div>
                        <div class="mt-4 flex">
                            <div class="w-full">Discount</div>
                            <div class="font-medium text-danger">-$20</div>
                        </div>
                        <div class="mt-4 flex">
                            <div class="w-full">Tax</div>
                            <div class="font-medium">15%</div>
                        </div>
                        <div class="mt-4 flex border-t border-slate-200/60 pt-4 dark:border-darkmode-400">
                            <div class="w-full text-base font-medium">
                                Total Charge
                            </div>
                            <div class="text-base font-medium">$220</div>
                        </div>
                    </div>
                    <div class=" text-end w-full">
                        <button class="btn btn-primary">Submit Order</button>
                    </div>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection