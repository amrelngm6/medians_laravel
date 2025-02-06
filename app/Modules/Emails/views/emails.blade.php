@extends('layout.master')
@section('title', 'To Do APP')
@section('css')

@endsection
@section('main-content')

<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">
            <div class="pull-left">
                <h1 class="title">List To Do </h1>
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
        <div class="card">
            <div class="card-body">
                <a href="{{route('Email.create')}}" data-modal="#email-task-modal"
                    class="open-modal w-full btn btn-primary transition duration-200 shadow-md cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        data-lucide="edit" class="lucide lucide-edit stroke-1.5 mr-2 h-4 w-4">
                        <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                        <path d="M18.5 2.5a2.12 2.12 0 0 1 3 3L12 15l-4 1 1-4Z"></path>
                    </svg>
                    New Task
                </a>
                <div class="mt-4 border-t border-white/10 pt-4 text-white fs-5 dark:border-darkmode-400">
                    @foreach($priorities as $priority)
                    <a class="flex items-center text-truncate px-3 py-2" href="?priority_id={{$priority->priority_id}}">
                        <div class="mr-5 w-15px h-15px rounded-circle bg-{{$priority->color}}"></div>
                        {{$priority->name}}
                    </a>
                    @endforeach
                    
                    <a class="mt-2 flex items-center  rounded-md px-3 py-2 " href="{{route('EmailAccount')}}?date=today">
                        Show Today only
                    </a>
                    
                    <a class="mt-2 flex items-center  rounded-md px-3 py-2 " href="{{route('EmailAccount')}}">
                        Show ALL
                    </a>
                    <a class="mt-2 flex items-center text-truncate rounded-md px-3 py-2 open-modal" href="{{route('Priority.create')}}?model=Email">
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
    </div>

    <div class="col-lg-9 ">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h2>To-do list</h2>
                </div>
            </div>
            <div class="card-body p-0">
                <ul class="email-task-lists m-0 p-0">
                    @foreach($emails as $email)
                    @include('emails::row')
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

</div>

@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection