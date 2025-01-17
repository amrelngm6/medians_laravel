@extends('tasks.tasks_page')
@section('tasks-views-menu')
<!--begin::Nav item-->
<li class="nav-item mt-2">
    <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('tasks_list')}}">
        List </a>
</li>
<!--end::Nav item-->
@endsection

@section('tasks-list')
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                                </div>
                            </div>

                            <a class="btn btn-md btn-primary  " href="{{route(App::getLocale() . '.ecommerce_new')}}">
                                New Task </a>
                        </div>

                        <div class="card-body">

                            <div class="table" data-pattern="priority-columns">
                                <table
                                    class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped"
                                    id="taskTable">
                                    <thead class="text-start bg-slate-100 dark:bg-zink-600">
                                        <tr>
                                            <th class=" task_code" data-sort="task_code">Task ID</th>
                                            <th class="text-start task_name" data-sort="task_name">Task Name</th>
                                            <th class="text-start" data-sort="client">Client</th>
                                            <th class="text-start ">Assignees</th>
                                            <th class="text-start  start" data-sort="start">Start</th>
                                            <th class="text-start  end" data-sort="end">Deadline</th>
                                            <th class="text-start  status" data-sort="status">Status</th>
                                            <th class="text-start  action">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100083</a>
                                            </td>
                                            <td class=" task_name">
                                                <a href="{{route(App::getLocale() . '.ecommerce_edit')}}" class="flex items-center gap-2">
                                                    <img src="/data/tasks/6.jpg" alt="Task images" class="h-40px w-40px">
                                                    <h6 class="pt-4 task_name">BBow polka-dot </h6>
                                                </a>
                                            </td>
                                            <td class=" ">
                                                <span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                                            </td>
                                            <td class=" price">$79.99</td>
                                            <td class=" stock">500</td>
                                            <td class=" revenue">$24,365</td>
                                            <td class=" status">
                                                <span
                                                    class="badge round-danger px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Unpublish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center size-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
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
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!">
                                                                <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100071</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/2.png" alt="Task images" class="h-40px w-40px">
                                                    <h6 class="task_name">Z Task 360</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                                            </td>
                                            <td class=" price">$79.99</td>
                                            <td class=" stock">500</td>
                                            <td class=" revenue">$24,365</td>
                                            <td class=" status"><span
                                                    class="badge round-danger px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Unpublish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100084</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/3.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Mesh Ergonomic Black Chair</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Furniture</span>
                                            </td>
                                            <td class=" price">$214.47</td>
                                            <td class=" stock">400</td>
                                            <td class=" revenue">$1,24,365</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!">
                                                                <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100095</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/4.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Fastcolors Typography Men</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                                            </td>
                                            <td class=" price">$119.12</td>
                                            <td class=" stock">600</td>
                                            <td class=" revenue">$80,321</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">Inactive</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100086</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/1.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Techel Black Bluetooth Soundbar</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Electronics</span>
                                            </td>
                                            <td class=" price">$452.99</td>
                                            <td class=" stock">300</td>
                                            <td class=" revenue">$49,234</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100087</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/5.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Bovet Fleurier AIFSQ029</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Home
                                                    Decor</span></td>
                                            <td class=" price">$119.99</td>
                                            <td class=" stock">240</td>
                                            <td class=" revenue">$20,784</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100081</a>
                                            </td>
                                            <td class=" task_name">
                                                <a href="{{route(App::getLocale() . '.ecommerce_edit')}}" class="flex items-center gap-2">
                                                    <img src="/data/tasks/6.jpg" alt="Task images" class="h-40px w-40px">
                                                    <h6 class="pt-4 task_name">Printed T-shirt With Picture</h6>
                                                </a>
                                            </td>
                                            <td class=" ">
                                                <span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                                            </td>
                                            <td class=" price">$79.99</td>
                                            <td class=" stock">500</td>
                                            <td class=" revenue">$24,365</td>
                                            <td class=" status">
                                                <span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center size-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
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
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!">
                                                                <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100082</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/2.png" alt="Task images" class="h-40px w-40px">
                                                    <h6 class="task_name">Smartest Printed T-shirt</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                                            </td>
                                            <td class=" price">$79.99</td>
                                            <td class=" stock">500</td>
                                            <td class=" revenue">$24,365</td>
                                            <td class=" status"><span
                                                    class="badge round-danger px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Unpublish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100072</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/3.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Mesh Ergonomic Black Chair</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Furniture</span>
                                            </td>
                                            <td class=" price">$214.47</td>
                                            <td class=" stock">400</td>
                                            <td class=" revenue">$1,24,365</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}">
                                                                <span class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!">
                                                                <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100073</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/4.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Fastcolors Typography Men</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Fashion</span>
                                            </td>
                                            <td class=" price">$119.12</td>
                                            <td class=" stock">600</td>
                                            <td class=" revenue">$80,321</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-red-100 border-transparent text-red-500 dark:bg-red-500/20 dark:border-transparent">Inactive</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100089</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/1.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Bonorum et Malorum</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Electronics</span>
                                            </td>
                                            <td class=" price">$84.99</td>
                                            <td class=" stock">110</td>
                                            <td class=" revenue">$15,493</td>
                                            <td class=" status"><span
                                                    class="badge round-danger px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Unpublish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative  show-child p-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" data-lucide="more-horizontal"
                                                        class="lucide lucide-more-horizontal w-3 h-3">
                                                        <circle cx="12" cy="12" r="1"></circle>
                                                        <circle cx="19" cy="12" r="1"></circle>
                                                        <circle cx="5" cy="12" r="1"></circle>
                                                    </svg>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100074</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/1.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Fox sake withe</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Electronics</span>
                                            </td>
                                            <td class=" price">$452.99</td>
                                            <td class=" stock">300</td>
                                            <td class=" revenue">$49,234</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100075</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/5.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Bovet Fleurier AIFSQ029</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Home
                                                    Decor</span></td>
                                            <td class=" price">$119.99</td>
                                            <td class=" stock">240</td>
                                            <td class=" revenue">$20,784</td>
                                            <td class=" status"><span
                                                    class="badge round-success px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-green-100 border-transparent text-green-500 dark:bg-green-500/20 dark:border-transparent">Publish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1" data-bs-toggle="dropdown"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                            stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600"><a
                                                        href="#!"
                                                        class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#P-232100099</a></a>
                                            </td>
                                            <td class=" task_name"><a href="{{route(App::getLocale() . '.ecommerce_edit')}}"
                                                    class="flex items-center gap-2">
                                                    <img src="/data/tasks/1.png" alt="Task images"
                                                        class="h-30px w-30px rounded-circle">
                                                    <h6 class="task_name">Iron 1000 W Dry</h6>
                                                </a></td>
                                            <td class=" category"><span
                                                    class="category px-2.5 py-0.5 text-xs inline-block font-medium rounded border bg-slate-100 border-slate-200 text-slate-500 dark:bg-slate-500/20 dark:border-slate-500/20 dark:text-zink-200">Electronics</span>
                                            </td>
                                            <td class=" price">$84.99</td>
                                            <td class=" stock">110</td>
                                            <td class=" revenue">$15,493</td>
                                            <td class=" status"><span
                                                    class="badge round-danger px-2.5 py-0.5 inline-block text-xs font-medium rounded border bg-orange-100 border-transparent text-orange-500 dark:bg-orange-500/20 dark:border-transparent">Unpublish</span>
                                            </td>
                                            <td class=" action">
                                                <div class="relative show-child">
                                                    <button
                                                        class="flex items-center justify-center w-[30px] h-[30px]  p-0 text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20"
                                                        id="taskAction1"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                            data-lucide="more-horizontal"
                                                            class="lucide lucide-more-horizontal w-3 h-3">
                                                            <circle cx="12" cy="12" r="1"></circle>
                                                            <circle cx="19" cy="12" r="1"></circle>
                                                            <circle cx="5" cy="12" r="1"></circle>
                                                        </svg></button>
                                                    <ul class="show-on-hover absolute   z-50  py-2 mt-0 text-start list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600"
                                                        aria-labelledby="taskAction1">
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Overview</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="{{route(App::getLocale() . '.ecommerce_edit')}}"> <span
                                                                    class="align-middle">Edit</span></a>
                                                        </li>
                                                        <li>
                                                            <a class="delete-item block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 "
                                                                href="#!"> <span class="align-middle">Delete</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
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