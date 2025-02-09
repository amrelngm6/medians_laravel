@extends('layout.master')
@section('title', 'WhatsApp Conversations')
@section('css')

@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Chat </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/index.html"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="javascript:;">APPs</a>
                                </li>
                                <li class="active">
                                    <strong>Chat</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-lg-4 ">

                    <div class="card" style="padding: 0px;">
                        <div class=" " >
                            <form class="w-100 position-relative" autocomplete="off">	
                                <!--begin::Icon-->
                                <i class="bx bx-search fs-3 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><span class="path1"></span><span class="path2"></span></i>            <!--end::Icon-->
                    
                                <!--begin::Input-->
                                <input type="text" class="form-control form-control-solid px-13" name="search" value="" placeholder="Search by username or email...">
                                <!--end::Input-->
                            </form>
                            <div class="card-body gap-1 h-500px mb-10 overflow-auto " >
                                <div class=" px-2">
                                    <p class="mb-1 text-muted dark:text-zink-200">Chat AI Models</p>
                                </div>
                                <p class="py-2"> <a class="fs-5" href="{{route('HuggFace')}}?type=chat_content">Default</a></p>
                                <p class="py-2"> <a class="fs-5" href="{{route('HuggFace')}}?type=text-chat">Text generation</a></p>
                                <p class="py-2"> <a class="fs-5" href="{{route('HuggFace')}}?type=translate">Translate</a></p>
                                <p class="py-2"> <a class="fs-5" href="{{route('HuggFace')}}?type=img2img-chat">Img 2 Img</a></p>
                                <p class="py-2"> <a class="fs-5" href="{{route('HuggFace')}}?type=image-text">Image text</a></p>
                                
                                <div class="px-2">
                                    <p class="mb-1 text-muted dark:text-zink-200">All Conversations</p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-8 ">
                    <div class="w-full" id="chat_content">
                        @include('nlp::'.(request()->get('type') ?? 'text-chat'))
                    </div>
                </div>
                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection



@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection