@extends('layout.master')
@section('title', 'Pipelines list')

@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Pipelines list </h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

            <div class="pull-right hidden-xs">
                <ol class="breadcrumb">
                    <li>
                        <a href="/"><i class="fa fa-home"></i>Home</a>
                    </li>
                    <li>
                        <a href="{{route('Pipeline')}}">Pipelines</a>
                    </li>
                    <li class="active">
                        <strong>{{$pipeline->name}}</strong>
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <?php $Modules = \App\Models\Module::get(); ?>

    <div class="col-xs-4">
        <div class="card">
            <div class="card-body">
                <!--begin:Form-->
                <form id="modal_edit_pipeline_form" method="POST" class="ajax-form form"
                    action="{{route('Pipeline.update', $pipeline->id)}}">
                    @csrf
                    <input type="hidden" name="model" value="" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Update Pipeline</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Update <span class="text-danger">{{$pipeline->name}}</span> Models Pipeline list.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Name</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" placeholder="Pipeline name "
                            value="{{$pipeline->name}}" name="name" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Description</span>
                        </label>
                        <!--end::Label-->
                        <textarea class="form-control form-control-solid"
                            name="description">{{$pipeline->description}}</textarea>
                    </div>
                    <!--end::Input group-->


                    <!--begin::Actions-->
                    <div class="text-center">
                        <a href="{{route('Pipeline')}}" id="cancel_edit_pipeline_form" class="btn btn-light me-3">
                            Cancel
                        </a>

                        <button type="submit" id="modal_edit_pipeline_form_submit" class="btn btn-primary">
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

    <div class="col-xs-8">
        <div class="card">
            <div class="card-body">
                <!--begin:Form-->

                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <!--begin::Title-->
                    <h1 class="mb-3">Pipeline Stages</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        Update <span class="text-danger">{{$pipeline->name}}</span> Stages to use for Models.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <div class="timeline timeline-border-dashed">

                    @if (!count($pipeline->stages))
                    <p>There is no stages added yet</p>
                    @endif

                    @foreach ($pipeline->stages as $stage)
                    <div class="timeline-item">
                        <!--begin::Timeline line-->
                        <div class="timeline-line"></div>
                        <!--end::Timeline line-->

                        <!--begin::Timeline icon-->
                        <div class="timeline-icon">
                            <i class="bx bx-task fs-3 text-{{$stage->color}}"></i>
                        </div>
                        <!--end::Timeline icon-->

                        <!--begin::Timeline content-->
                        <div class="timeline-content mb-10 mt-n1">
                            <!--begin::Timeline heading-->
                            <div class="pe-3 mb-5">
                                <div class="pull-right flex gap-6">
                                    
                                    <a href="{{route('PipelineStage.edit', $stage->id)}}" data-modal="#add-task-modal"
                                        rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Edit this stage"
                                        class="open-modal flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                        <i class="bx bx-edit fs-4"></i></a>
                                    <a href="javascript:;" data-path="{{route('PipelineStage.delete', $stage->id)}}"
                                        rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="Delete"
                                        class="delete-item flex items-center justify-center transition-all duration-150 ease-linear rounded-md size-8 bg-slate-100 hover:bg-slate-200 dark:bg-zink-600 dark:hover:bg-zink-500">
                                        <i class="bx bx-trash fs-4"></i> 
                                    </a>
                                </div>
                                <!--begin::Title-->
                                <div class="fs-5 fw-bold mb-2 text-{{$stage->color}}">{{$stage->name}}</div>
                                <div class="fs-6 text-muted mb-2">{{$stage->description}}</div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="d-flex align-items-center mt-1 fs-6">
                                    <!--begin::Info-->
                                    <div class="text-muted me-2 fs-7">Added at {{date('M d, Y H:i a',strtotime($stage->created_at)) }} by</div>
                                    <!--end::Info-->

                                    <!--begin::User-->
                                    <div class="symbol symbol-circle symbol-25px" 
                                        rel="popover"  data-toggle="popover" data-placement="top" data-trigger="hover"
                                        data-content="{{$stage->author->name ?? ''}}">
                                        <img src="/{{$stage->author->picture ?? ''}}" alt="img">
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Timeline heading-->
                        </div>
                        <!--end::Timeline content-->
                    </div>
                    @endforeach
                </div>
                <!--begin::Actions-->
                <div class="">
                    <a href="{{route('Pipeline.addStage', $pipeline->id)}}" id="modal_create_pipeline_stage"
                        class="btn btn-primary open-modal">
                        <span class="indicator-label">
                            Add Stage
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <!-- MAIN CONTENT AREA ENDS -->
</div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
@endsection