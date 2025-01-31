@extends('layout.master')
@section('title', 'Deals list')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

<link href="/assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Deals list </h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="javascript:;">Deals</a>
                    </li>
                    <li class="active">
                        <strong>All</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-md-12">

        <div class="card">
            <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                <div class="card-title fw-bold">
                    Deals
                </div>

                <a class="btn btn-md btn-primary me-2 open-modal " href="{{route('Deal.create')}}">
                    New deal </a>
            </div>
            <nav aria-label="Progress" class="mt-5">
                <ol
                    class="divide-y divide-neutral-300 overflow-hidden rounded-md border border-neutral-300 dark:divide-neutral-500/30 dark:border-neutral-500/30 lg:flex lg:flex-wrap lg:divide-y-0">
                    
                    <li class="relative overflow-hidden truncate bg-neutral-50 dark:bg-neutral-800 lg:flex lg:flex-1"><a
                            class="group flex w-full items-center" tabindex="-1" href="#"
                            v-tooltip="Been here for a few seconds" v-tooltip-placement="top"
                            v-tooltip-variant="dark"><span
                                class="flex items-center px-4 py-2 text-base font-medium sm:text-sm"><span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full bg-success-500 group-hover:bg-success-700 dark:bg-success-400 dark:group-hover:bg-success-500"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                        class="size-6 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5">
                                        </path>
                                    </svg></span><span
                                    class="ml-4 text-base font-medium text-neutral-900 dark:text-neutral-200 sm:text-sm">Contact
                                    Made</span></span></a>
                        <div class="absolute right-0 top-0 hidden h-full w-5 bg-neutral-50 dark:bg-neutral-800 lg:block"
                            aria-hidden="true"><svg class="h-full w-full text-neutral-300 dark:text-neutral-500/30"
                                viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                                    stroke-linejoin="round"></path>
                            </svg></div>
                    </li>
                    <li class="relative overflow-hidden truncate bg-neutral-50 dark:bg-neutral-800 lg:flex lg:flex-1"><a
                            class="flex items-center px-4 py-2 font-medium" aria-current="step" tabindex="-1" href="#"
                            v-tooltip="Been here for a few seconds" v-tooltip-placement="top"
                            v-tooltip-variant="dark"><span
                                class="flex size-7 shrink-0 items-center justify-center rounded-full border-2 border-success-500 dark:border-success-400"><span
                                    class="text-success-500 dark:text-success-400"><svg
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon"
                                        class="size-6 text-success-500 dark:text-success-400">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5">
                                        </path>
                                    </svg></span></span><span
                                class="ml-4 text-base font-medium text-success-500 dark:text-success-400 sm:text-sm">Presentation
                                Scheduled</span></a>
                        <div class="absolute right-0 top-0 hidden h-full w-5 bg-neutral-50 dark:bg-neutral-800 lg:block"
                            aria-hidden="true"><svg class="h-full w-full text-neutral-300 dark:text-neutral-500/30"
                                viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                                    stroke-linejoin="round"></path>
                            </svg></div>
                    </li>
                    <li class="relative overflow-hidden truncate bg-neutral-50 dark:bg-neutral-800 lg:flex lg:flex-1"><a
                            class="group flex items-center" tabindex="-1" href="#" v-tooltip="Been here for 2 hours"
                            v-tooltip-placement="top" v-tooltip-variant="dark"><span
                                class="flex items-center px-4 py-2 text-base font-medium sm:text-sm"><span
                                    class="flex size-7 shrink-0 items-center justify-center rounded-full border-2 border-neutral-300 group-hover:border-neutral-400 dark:border-neutral-500 dark:group-hover:border-neutral-100">
                                    <!----><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"
                                        fill="currentColor" aria-hidden="true" data-slot="icon"
                                        class="size-5 text-neutral-500 dark:text-neutral-100">
                                        <path
                                            d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z">
                                        </path>
                                    </svg>
                                </span><span
                                    class="ml-4 text-base font-medium text-neutral-500 group-hover:text-neutral-900 dark:text-neutral-400 dark:group-hover:text-neutral-100 sm:text-sm">Proposal
                                    Made</span></span></a>
                        <div class="absolute right-0 top-0 hidden h-full w-5 bg-neutral-50 dark:bg-neutral-800 lg:block"
                            aria-hidden="true"><svg class="h-full w-full text-neutral-300 dark:text-neutral-500/30"
                                viewBox="0 0 22 80" fill="none" preserveAspectRatio="none">
                                <path d="M0 -2L20 40L0 82" vector-effect="non-scaling-stroke" stroke="currentcolor"
                                    stroke-linejoin="round"></path>
                            </svg></div>
                    </li>
                </ol>
            </nav>
            <div class="card-body">

                <div class="table" data-pattern="deal-columns">
                    <table
                        class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped"
                        id="productTable">
                        <thead class="text-start bg-slate-100 dark:bg-zink-600">
                            <tr>
                                <th class="text-start w-20" data-sort="id">Id</th>
                                <th class="text-start Lead_name" data-sort="name">Name</th>
                                <th class="text-start model" data-sort="model">Module</th>
                                <th class="text-start ">Color</th>
                                <th class="text-start sort" data-sort="sort">sort</th>
                                <th class="text-start action">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            @if ($Deals)
                            @foreach ($Deals as $Deal )
                            <tr>
                                <td class="">
                                    {{$Deal->id}}
                                </td>
                                <td class=" ">
                                    <h6 class="">{{$Deal->name}} </h6>
                                </td>
                                <td class=" ">{{ class_basename($Deal->model) }} </td>
                                <td class=" ">
                                    <span
                                        class="block fw-semibold bg-{{ $Deal->color }} w-20px h-20px rounded-circle">
                                    </span>
                                </td>
                                <td class=" ">
                                    <h6 class="">{{$Deal->sort}} </h6>
                                </td>
                                <td class=" action">
                                    <div class="relative show-child">
                                        <button
                                            class="flex items-center justify-center size-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                            id="productAction1" data-bs-toggle="dropdown">
                                            <i class='bx bx-dots-vertical'></i>
                                        </button>
                                        <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                            aria-labelledby="productAction1">
                                            <li>
                                                <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                    href="{{route('Deal.edit', $Deal->id)}}">
                                                    <span class="align-middle">Edit</span></a>
                                            </li>
                                            <li>
                                                <a data-path="{{route('Deal.delete', $Deal->id)}}"
                                                    class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                    href="#!">
                                                    <span class="align-middle">Delete</span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            @endif

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>


    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>


<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection