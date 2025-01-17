@extends('modules.modules_page')

@section('modules-list')
                <div class="col-md-12">

                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                                </div>
                            </div>

                            <a class="btn btn-md btn-primary  open-modal" href="{{route('Modules.upload')}}">
                                New Module </a>
                        </div>

                        <div class="card-body">

                            <div class="table" data-pattern="priority-columns">
                                <table
                                    class="w-full whitespace-nowrap table datatable table-small-font no-mb table-bordered table-striped"
                                    id="taskTable">
                                    <thead class="text-start bg-slate-100 dark:bg-zink-600">
                                        <tr>
                                            <th class="text-start task_code" data-sort="task_code">ID</th>
                                            <th class="text-start task_name" data-sort="task_name">Module</th>
                                            <th class="text-start  status" data-sort="status">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="list">
                                        @foreach ($modules as $module)
                                        <tr>
                                            <td class="">
                                                <a href="#!"
                                                    class="transition-all duration-150 ease-linear task_code text-custom-500 hover:text-custom-600">#{{$module->id}}</a>
                                            </td>
                                            
                                            <td class=" ">{{$module->name}}</td>
                                            <td class=" status">
                                                <a href="{{route('Modules.update', $module->id)}}?is_enabled={{$module->is_enabled ? '0' : 1}}&_token={{@csrf_token()}}" class="ajax-link" ><span class="badge round-{{$module->is_enabled ? 'success' : 'danger'}} px-2.5 py-0.5 inline-block text-xs font-medium rounded border "
                                                
                                                rel="popover" data-animate=" animated fadeIn " data-container="body"
                                                data-toggle="popover" data-placement="top"
                                                data-content="{{$module->name}}"
                                                data-title="{{$module->is_enabled ? 'Disable Module' : 'Enable Module'}}" data-trigger="hover" data-html="true"
                                                 >{{$module->is_enabled ? 'Enabled' : 'Disabled'}}</span></a>
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

