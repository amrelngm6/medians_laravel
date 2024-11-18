@extends('layout.master')
@section('title', 'To Do APP')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">List To Do </h1>
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
                                    <strong>To-Do</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-3 ">
                    <!-- BEGIN: Inbox Menu -->
                    <div class="card  ">
                        <div class="card-body  ">
                            <button type="button" data-modal="#todo-task-modal"
                                class="open-modal w-full btn btn-primary transition duration-200  shadow-md cursor-pointer "><svg
                                    xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                    data-lucide="edit" class="lucide lucide-edit stroke-1.5 mr-2 h-4 w-4">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                                </svg>
                                New Task</button>
                            <div class="mt-4 border-t border-white/10 pt-4 text-white dark:border-darkmode-400">
                                <a class="flex items-center text-truncate px-3 py-2" href="">
                                    <div class="mr-5 w-15px h-15px  rounded-circle  bg-info"></div>
                                    Custom Work
                                </a>
                                <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                    <div class="mr-5 w-15px h-15px  rounded-circle  bg-success"></div>
                                    Important Meetings
                                </a>
                                <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                    <div class="mr-5 w-15px h-15px  rounded-circle  bg-warning"></div>
                                    Work
                                </a>
                                <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                    <div class="mr-5 w-15px h-15px  rounded-circle  bg-dark"></div>
                                    Design
                                </a>
                                <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                    <div class="mr-5 w-15px h-15px  rounded-circle  bg-danger"></div>
                                    Next Week
                                </a>
                                <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2" href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        data-lucide="plus" class="lucide lucide-plus stroke-1.5 mr-2 h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="M12 5v14"></path>
                                    </svg>
                                    Add New Label
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- END: Inbox Menu -->
                </div>

                <div class="col-lg-9 ">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <h2>To-do list</h2>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <ul class="todo-task-lists m-0 p-0">
                                <li class="d-flex align-items-center " id="task1">
                                    <label
                                        class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-2.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6 class="d-inline-block">Landing page for secret Project</h6><span
                                                class="badge bg-info mx-4 text-white">expirinq</span>
                                            <p class="mb-0">by Danlel Cllfferton</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <input class="form-check-input switch-class " data-class="active-task"
                                                data-target="#task1" name="todo-check[]" type="checkbox" value="1">
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center active-task " id="task2">
                                    <label
                                        class=" d-flex p-3  align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-1.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6>Fix Critical Crashes</h6>
                                            <p class="mb-0">by Cralg Danles</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task2" id="check2" checked="checked">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center " id="task3">
                                    <label
                                        class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-3.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6 class="d-inline-block">IOS App - Redesign the contact form screen</h6>
                                            <span class="badge bg-success mx-4 ">ending</span>
                                            <p class="mb-0">by Simona Gomez </p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task3" id="check3">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center " id="task4">
                                    <label
                                        class="d-flex p-3 align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-4.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6>Final Meetup for the Secrat Project Client</h6>
                                            <p class="mb-0">bt Serena Gemoz</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task4" id="check4">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center " id="task5">
                                    <label
                                        class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-5.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6>Code the Parsing Element</h6>
                                            <p class="mb-0">by Jeena Gaze</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task5" id="check5">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center " id="task6">
                                    <label
                                        class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/profile-blog.jpg" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6 class="d-inline-block">Test the Bug, that causes design troubleshooting
                                            </h6><span class="badge bg-danger mx-4">urgent</span>
                                            <p class="mb-0">by migule Slimmonas</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task6" id="check6">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center " id="task7">
                                    <label
                                        class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-1.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6>Android App Design</h6>
                                            <p class="mb-0">by Becky Dimes</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task7" id="check7">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                                <li class="d-flex align-items-center " id="task8">
                                    <label
                                        class="p-3 d-flex align-items-center w-full form-check form-check-custom form-check-inline form-check-solid me-5">
                                        <div class="user-img img-fluid"><img src="/data/profile/avatar-3.png" alt="story-img"
                                                class="rounded-circle w-50px h-50px"></div>
                                        <div class="media-support-info px-4 w-full">
                                            <h6>Skype Meetup with clients</h6>
                                            <p class="mb-0">by James Romero</p>
                                        </div>
                                        <div class="card-header-toolbar d-flex align-items-center">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="todo-check" class="form-check-input switch-class "
                                                    data-class="active-task" data-target="#task8" id="check8">
                                            </div>
                                        </div>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>



                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            @include('includes.modals.todo-task-modal')

@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection