
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Pipeline</label>

                                <div class="fs-7 text-muted">Set this item pipeline</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <div class="select-placeholder w-full">
                                    <select id="pipeline_id" name="pipeline_id" placeholder="A"
                                        class="select-bootstrap border border-gray-300 form-control form-control-solid ">
                                        <option value="0"></option>
                                        @foreach ($pipelines as $pipeline)
                                        <option value="{{$pipeline->pipeline_id}}" @if (isset($model) && $model->pipeline_id == $pipeline->pipeline_id) selected @endif >
                                            {{$pipeline->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->