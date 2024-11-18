@extends('layout.master')
@section('title', 'All Projects')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">All Projects ( List view ) </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex px-4">
                            <div class="card-title">
                                <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                            </div>
                            <a class="btn btn-md btn-primary me-2 open-modal" data-modal="#new-project-modal">
                                New Project </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive" data-pattern="priority-columns">
                                <table id="tech-companies-1" class="table vm table-small-font no-mb table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Project</th>
                                            <th>Team</th>
                                            <th>Due Date.</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">E-Commerce Website</a></h6>
                                                    <small class="text-muted block">45 / 50 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-2.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_view_users">
                                                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+3</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Dec 23, 2024</td>
                                            <td><span class="badge round-primary">Pending</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">Flutter Mobile APP</a></h6>
                                                    <small class="text-muted block">40 / 50 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dec 31, 2024</td>
                                            <td><span class="badge round-danger">Completed</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">Social Media Marketing</a></h6>
                                                    <small class="text-muted block">21 / 30 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Jan 15, 2024</td>
                                            <td><span class="badge round-primary">Pending</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">Server Maintenance</a></h6>
                                                    <small class="text-muted block">10 / 25 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Fab 15, 2024</td>
                                            <td><span class="badge round-primary">Pending</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">SEO Marketing</a></h6>
                                                    <small class="text-muted block">10 / 25 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_view_users">
                                                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+1</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Fab 15, 2024</td>
                                            <td><span class="badge round-danger">Answered</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <h6><a href="{{route(App::getLocale() . '.projects_project')}}">E-Commerce Website</a></h6>
                                                    <small class="text-muted block">45 / 50 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Melody Macy" data-bs-original-title="Melody Macy"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-2.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_view_users">
                                                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+3</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Dec 23, 2024</td>
                                            <td><span class="badge round-primary">Pending</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">Flutter Mobile APP</a></h6>
                                                    <small class="text-muted block">40 / 50 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Dec 31, 2024</td>
                                            <td><span class="badge round-danger">Completed</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">Social Media Marketing</a></h6>
                                                    <small class="text-muted block">21 / 30 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Jan 15, 2024</td>
                                            <td><span class="badge round-primary">Pending</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">SEO Marketing</a></h6>
                                                    <small class="text-muted block">10 / 25 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Barry Walter" data-bs-original-title="Barry Walter"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-3.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Alan Warden" data-kt-initialized="1">
                                                        <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                                    </div>
                                                    <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_view_users">
                                                        <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+1</span>
                                                    </a>
                                                </div>
                                            </td>
                                            <td>Fab 15, 2024</td>
                                            <td><span class="badge round-danger">Answered</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="designer-info px-0">
                                                    <a href="{{route(App::getLocale() . '.projects_project')}}">Server Maintenance</a></h6>
                                                    <small class="text-muted block">10 / 25 Tasks</small>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="symbol-group symbol-hover flex-nowrap flex">
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        data-bs-original-title="Susan Redwood" data-kt-initialized="1">
                                                        <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                    </div>
                                                    <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                                        aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                                        data-kt-initialized="1">
                                                        <img alt="Pic" src="/data/profile/avatar-1.png">
                                                    </div>
                                                </div>
                                            </td>
                                            <td>Fab 15, 2024</td>
                                            <td><span class="badge round-primary">Pending</span></td>
                                            <td><a href="#" class="btn btn-light btn-sm">View</a></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.new-project-modal')
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/calendar/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.min.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection