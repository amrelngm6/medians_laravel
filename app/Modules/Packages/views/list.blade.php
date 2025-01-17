@extends('packages::page')

@section('nav-title', 'Packages List')

@section('packages-page')

<div class="clearfix"></div>
<!-- MAIN CONTENT AREA STARTS -->
<div class="col-sm-12">
    <div class="card">
        <div
            class="card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
            <div class="card-title">
                <input data-form="change-date" data-element="data-rows" data-append="true" name="date"
                    class="datepicker submit-on-change form-control form-control-solid py-1 w-200px" />
            </div>
            <a class="btn btn-md btn-primary me-2 open-modal" href="{{route('Package.create')}}">
                                New Package </a>
        </dib>
    </div>
</div>
<div class="clearfix"></div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">

            <div class="table-responsive" data-pattern="priority-columns">
                <table id="tech-companies-1"
                    class="table datatable table-small-font no-mb table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-start">ID</th>
                            <th class="text-start">Name</th>
                            <th class="text-start">Is paid</th>
                            <th class="text-start">Status</th>
                            <th class="text-start">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="data-rows">
                        @foreach ($packages as $package)
                        <tr>
                            <td>{{$package->id}}</td>
                            <td>{{$package->name}}</td>
                            <td>{{$package->is_paid ? 'Paid' : 'Free'}}</td>
                            <td class=" status">
                                <div>
                                    <span class="badge round-{{$package->status ? 'success' : 'danger'}} px-2.5 py-0.5 inline-block text-xs font-medium rounded border ">
                                        {{$package->status ? 'Enabled' : 'Disabled'}}</span>
                                </div>
                            </td>
                            
                            <td class=" action">
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
                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                href="{{route('PackageFeatures', $package->id)}}">
                                                <span class="align-middle">Features</span></a>
                                        </li>
                                        <li>
                                            <a class="open-modal block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                href="{{route('Package.edit', $package->id)}}">
                                                <span class="align-middle">Edit</span></a>
                                        </li>
                                        <li>
                                            <a data-path="{{route('Package.delete', $package->id)}}" class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
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

@endsection