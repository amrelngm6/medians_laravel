@extends('layout.master')
@section('title', 'Ticket')
@section('css')
@endsection
@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Ticket Page</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="">Pages</a>
                    </li>
                    <li class="active">
                        <strong>Ticket</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="clearfix"></div>

    <div class='col-xs-12'>
        <div class="card">
            <div class="card-body pb-0">
                
                <div class="mb-10 flex">
                    <img class="w-50px h-50px rounded-circle" alt="image"
                        src="/{{ $ticket->client->picture ?? '' }}">
                    <div class=" mx-4">
                        <h5 class="text-primary mb-0 mt-1">{{ $ticket->client->name ?? '' }}</h5>
                        <p class="mb-0 ">{{ $ticket->created_at->format('M d, Y - H:i a') }}</p>
                    </div>
                </div>
                <div class="w-full">
                    <div class="block w-full">
                        <h4 class="mb-4 fs-1 block text-danger"> {{$ticket->subject}}</h4>
                        <p class="block fs-5 w-full"> {!! nl2br($ticket->message) !!}</p>
                    </div>
                </div>
                <div class=" mt-10">
                    <div class="flex align-items-center">
                        <div class="w-full flex gap-2">
                            <p class="pt-6 text-muted">Assigned to</p>
                            <div class="symbol-group symbol-hover flex-nowrap flex"
                                rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                data-content="Assign to another member" >
                                <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                    aria-label="Michael Eberon" data-bs-original-title="Michael Eberon"
                                    data-kt-initialized="1">
                                    <img alt="Pic" src="/{{$ticket->user->picture ?? ''}}">
                                </div>
                                <a class="pt-4 px-3 cursor-pointer open-modal" href="{{route('Ticket.edit_assignee_field', $ticket->id)}}"> 
                                    {{$ticket->user->name ?? ''}} 
                                    <p class="text-muted">{{$ticket->user->role->name ?? ''}} </p>
                                </a>
                            </div>
                        </div>
                        <span class="pt-2 block flex-none ">
                            <div class="flex items-center justify-end gap-4">
                                @foreach ($components as $component)
                                {!! $component !!}
                                @endforeach
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body py-5">
                <div class="media d-sm-flex d-block justify-content-between">
                    <div class="mb-3 flex">
                        <img class="w-50px h-50px rounded-circle" alt="image"
                            src="/{{ $ticket->client->picture ?? '' }}">
                        <div class=" mx-4">
                            <h5 class="text-primary mb-0 mt-1">{{ $ticket->client->name ?? '' }}</h5>
                            <p class="mb-0">{{ $ticket->created_at->format('M d, Y - H:i a') }}</p>
                        </div>
                    </div>
                    <div class="clearfix mb-3">
                        <div class="read-content-attachment">
                            <a href="#modal_new_comment_form"
                                onClick="jQuery('#modal_new_comment_form').toggleClass('hidden');"
                                class="btn btn-danger bg-danger btn-sm cursor-pointer text-danger "><i
                                    class="bx bx-message-rounded text-white me-1"></i>Reply</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="media mb-2 mt-3">
                    <div class="media-body">
                        <h4 class="my-1 text-primary">{{ $ticket->subject }}</h4>
                    </div>
                </div>
                <div class="read-content-body default-height">
                    <h5 class="mb-4">Hello {{ $ticket->user->name }},</h5>
                    <p class="mb-2">{!! nl2br($ticket->message) !!}</p>
                    <hr>
                </div>

                <div class="w-full pb-10">
                    @foreach ($ticket->comments as $comment)

                    <div class="media d-sm-flex d-block justify-content-between mt-20">
                        <div class="mb-3 flex">
                            <img class="w-50px h-50px rounded-circle" alt="image"
                                src="/{{ $comment->user->picture ?? '' }}">
                            <div class=" mx-4">
                                <h5 class="text-primary mb-0 mt-1">{{ $comment->user->name ?? '' }}</h5>
                                <p class="mb-0">{{ $comment->created_at->format('M d, Y - H:i a') }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="read-content-body default-height">
                        <p class="mb-2">{!! nl2br($comment->message) !!}</p>
                        <hr>
                    </div>
                    @endforeach
                </div>

                <!--begin:Form-->
                <form id="modal_new_comment_form" class="ajax-form form hidden" action="{{route('Comment.store')}}">
                    <input type="hidden" name="model_type" value="{{get_class($ticket)}}" />
                    <input type="hidden" name="model_id" value="{{$ticket->id}}" />
                    @csrf
                    <!--begin::Heading-->
                    <div class="text-start">
                        <!--begin::Title-->
                        <h1 class="mb-3">New Comment</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5 mb-6">
                            Add comment to ticket <a href="#!" class="fw-bold link-primary">{{ $ticket->title }}</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Comment</label>

                        <textarea class="form-control form-control-solid" rows="3" name="message"
                            placeholder="Type your Comment"></textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Add File</label>

                                <div class="fs-7 text-muted">Append files to this ticket</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row">
                                    <input class="form-control form-control-solid" name="file" type="file" />
                                </div>
                                <!--end::Input group-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">

                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->

            </div>
        </div>
    </div>
    <!-- MAIN CONTENT AREA ENDS -->
</div>

@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection