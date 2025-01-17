@extends('layout.master')
@section('title', 'Roles Permissions')
@section('css')
<link href="/assets/plugins/datatables/css/dataTables.tableTools.min.css" rel="stylesheet" type="text/css" />

@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Permissions list </h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="#">Roles</a>
                    </li>
                    <li class="active">
                        <strong>Permissions</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="card-header">
                    <div class="flex gap-4 card-title">
                        Role: 
                        <input class="form-control form-control-solid " disabled value="{{$role->name}}" />
                    </div>
                </div>
                <form class="form ajax-form" method="post" action="{{route('Permissions.update', $role->id)}}" id="permissions-form">
                    
                    <div class="accordion p-5">
                    @if  ($Permissions)
                    @foreach ($Permissions as $model => $modelPermissions )
                
                        <div class="accordion-item py-4 first:-mt-4 last:-mb-4 [&amp;:not(:last-child)]:border-b [&amp;:not(:last-child)]:border-slate-200/60 [&amp;:not(:last-child)]:dark:border-darkmode-400">
                            <div class="accordion-header" id="{{$model}}">
                                <button data-target="#{{$model}}-collapse" type="button" aria-expanded="true"  class="accordion-button outline-none py-4 -my-4 font-medium w-full text-start fw-bold fs-4 ">{{$model}}</button>
                            </div>
                            <div id="{{$model}}-collapse" aria-labelledby="{{$model}}" class="accordion-collapse collapse mt-3 text-slate-700 leading-relaxed dark:text-slate-400  show">
                                <div class="accordion-body flex gap-20 leading-relaxed text-slate-600 dark:text-slate-500">
                                    @foreach ($modelPermissions as $item)
                                    
                                        <label class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-20px w-20px" type="checkbox"
                                                name="permissions[{{$item->name}}]" value="{{$item->name}}" {{$role->hasPermissionTo($item->name) ? 'checked="checked"' : ''}} />

                                            <span class="form-check-label fw-semibold fs-5 ">
                                            <span class="text-body-secondary">{{str_replace($model, '', $item->name)}}</span>
                                            </span>
                                        </label>
                                        
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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