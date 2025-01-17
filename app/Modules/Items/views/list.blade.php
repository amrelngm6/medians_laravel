@extends('layout.master')
@section('title', 'Items')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

@endsection

@section('main-content')
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Items</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                                </div>
                            </div>

                            <a class="btn btn-md btn-primary  open-modal" href="{{route('Item.create')}}">
                                New Item </a>
                        </div>

                        <div class="card-body">

                            <div class="table" data-pattern="priority-columns">
                                <table
                                    class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped"
                                    id="taskTable">
                                    <thead class="text-start bg-slate-100 dark:bg-zink-600">
                                        <tr>
                                            <th class="text-start task_code" data-sort="task_code">ID</th>
                                            <th class="text-start task_name" data-sort="task_name">Item</th>
                                            <th class="text-start task_name" data-sort="task_name">Group</th>
                                            <th class="text-start task_name" data-sort="task_name">Price</th>
                                            <th class="text-start task_name" data-sort="task_name">Tax</th>
                                            <th class="text-start  status" data-sort="status">Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($items as $item)
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#{{$item->id}}</a>
                                            </td>
                                            
                                            <td class=" ">{{$item->name}}</td>
                                            <td class=" ">{{$item->group->name ?? ''}}</td>
                                            <td class=" ">{{$item->price}}</td>
                                            <td class=" ">{{$item->tax}}</td>
                                            <td class=" status">
                                                
                                            <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center size-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="productAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal size-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="productAction1">
                                                        <li>
                                                            <a class="open-modal block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route('Item.edit', $item->id)}}?_token={{csrf_token()}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a data-path="{{route('Item.delete', $item->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!">
                                                                <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                
                                            </td>
                                        </tr>
                                        @endforeach

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
    
    

    <script src="{{asset('assets/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection