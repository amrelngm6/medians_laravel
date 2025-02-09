@extends('layout.master')
@section('title', 'Clients')
@section('css')

@endsection

@section('main-content')


            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Clients </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="javascript:;">Customers</a>
                                </li>
                                <li class="active">
                                    <strong>Clients</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12 ">

                </div>

                <div class="clearfix"></div>

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-header align-items-center  gap-2 gap-md-5 w-full flex">
                            <div class="card-title">
                                <div class="d-flex align-items-center position-relative my-1">
                                    <input type="date" class="datepicker form-control form-control-solid py-1 w-200px" />
                                </div>
                            </div>

                            <a class="btn btn-md btn-primary me-2 open-modal " data-modal="#new-user-modal" href="{{route('Client.create')}}">
                                New Client </a>
                        </div>

                    </div>
                </div>
                <div class="w-full">

                    @foreach ($clients as $client)
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xxl-3">
                        <div class="card ">
                            <div class="card-body p-0">
                                <div class="flex  items-center border-b border-slate-200/60 p-5 dark:border-darkmode-400 gap-4">
                                    <div class="w-auto">
                                        <img class="rounded-circle w-50px h-50px" src="{{url($client->picture)}}" alt="">
                                    </div>
                                    <div class="mt-3 text-start user-info">
                                        <a class="font-medium user" href="{{route('Client.overview', $client->id())}}">
                                            {{$client->name}}
                                        </a>
                                        <div class=" text-xs text-slate-500">
                                            {{$client->type}}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-wrap items-center justify-center p-5 lg:flex-nowrap">
                                    <div class="mb-4 mr-auto w-full lg:mb-0 lg:w-1/2">
                                        <div class="flex text-xs text-slate-500">
                                            <div class="w-full">Progress</div>
                                            <div>0%</div>
                                        </div>
                                        <div class="w-full bg-dark-subtle rounded  mt-2 h-1">
                                            <div role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                aria-valuemax="100"
                                                class="bg-primary h-full rounded text-xs text-white flex justify-center items-center w-1/4">
                                            </div>
                                        </div>
                                    </div>
                                    <a href="javascript:;" data-name="{{$client->name}}" data-img="{{url($client->picture)}}"
                                        data-user-id="{{$client->client_id}}"
                                        class="msg-user transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed bg-primary border-primary text-white dark:border-primary mr-2 px-2 py-1">Message</a>

                                    <a href="{{route(App::getLocale() . '.profile_overview')}}"
                                        class="transition duration-200 border shadow-sm inline-flex items-center justify-center rounded-md font-medium cursor-pointer focus:ring-4 focus:ring-primary focus:ring-opacity-20 focus-visible:outline-none dark:focus:ring-slate-700 dark:focus:ring-opacity-50 [&amp;:hover:not(:disabled)]:bg-opacity-90 [&amp;:hover:not(:disabled)]:border-opacity-90 [&amp;:not(button)]:text-center disabled:opacity-70 disabled:cursor-not-allowed border-secondary text-slate-500 dark:border-darkmode-100/40 dark:text-slate-300 [&amp;:hover:not(:disabled)]:bg-secondary/20 [&amp;:hover:not(:disabled)]:dark:bg-darkmode-100/10 px-2 py-1">Profile</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection


@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection