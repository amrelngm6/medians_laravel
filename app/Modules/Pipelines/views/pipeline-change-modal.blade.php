
<div class="modal fade  active show" id="new-pipeline-change-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#new-pipeline-change-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="modal_new_pipeline_form" method="POST" class="ajax-form form" action="{{route('Pipeline.change')}}">
                    @csrf
                    <input type="hidden" name="model_id" value="{{$model->id}}" />
                    <input type="hidden" name="model_type" value="{{get_class($model)}}" />
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Change pipeline</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Choose another Pipeline to use at <a href="javascript:;">{{$model->name}}</a>
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row w-full">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Pipeline</span>
                        </label>
                        <!--end::Label-->
                        <div class="select-placeholder w-full" 
                            rel="popover" data-toggle="popover" data-placement="top" data-trigger="hover" data-content="Select Pipeline" >
                            <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                            <select id="name-pipeline" name="pipeline_id" placeholder="A" data-live-search="true" 
                                class=" border border-gray-300 form-control form-control-solid ">
                                @foreach ($pipelines as $pipeline)
                                <option value="{{$pipeline->id}}" @if ($selectedStage &&  $pipeline->id == $selectedStage->pipeline_id) selected @endif >{{$pipeline->name}} ({{count($pipeline->stages)}} Stages) </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
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
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<script> 
    MediansSettings.dropdownWidget() 
</script>