@extends('layout.master')
@section('title', 'Pipelines list')
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
                            <h1 class="title">Pipelines list </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Pipelines</a>
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
                                Pipelines
                            </div>

                            <a class="btn btn-md btn-primary me-2 open-modal " href="{{route('Pipeline.create')}}">
                                New pipeline </a>
                        </div>

                        <div class="card-body">

                            <div class="table" data-pattern="pipeline-columns">
                                <table
                                    class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped"
                                    id="productTable">
                                    <thead class="text-start bg-slate-100 dark:bg-zink-600">
                                        <tr>
                                            <th class="text-start w-20" data-sort="id">Id</th>
                                            <th class="text-start Lead_name" data-sort="name">Name</th>
                                            <th class="text-start model" data-sort="model">Module</th>
                                            <th class="text-start " >Color</th>
                                            <th class="text-start sort" data-sort="sort">sort</th>
                                            <th class="text-start action">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @if  ($Pipelines)
                                        @foreach ($Pipelines as $Pipeline )
                                        <tr>
                                            <td class="">
                                                {{$Pipeline->id}} 
                                            </td>
                                            <td class=" ">
                                                <h6 class="">{{$Pipeline->name}} </h6>
                                            </td>
                                            <td class=" ">{{ class_basename($Pipeline->model) }}  </td>
                                            <td class=" ">
                                                <span class="block fw-semibold bg-{{ $Pipeline->color }} w-20px h-20px rounded-circle"> </span>
                                            </td>
                                            <td class=" ">
                                                <h6 class="">{{$Pipeline->sort}} </h6>
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
                                                                href="{{route('Pipeline.edit', $Pipeline->id)}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a data-path="{{route('Pipeline.delete', $Pipeline->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
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