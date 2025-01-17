
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Milestone</label>

                                <div class="fs-7 text-muted">Set this item milestone</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <div class="select-placeholder w-full">
                                    <select id="milestone_id" name="milestone_id" placeholder="A"
                                        class="select-bootstrap border border-gray-300 form-control form-control-solid ">
                                        <option value="0"></option>
                                        @foreach ($milestones as $milestone)
                                        <option value="{{$milestone->id}}" @if (isset($model) && $model->milestone_id == $milestone->id) selected @endif >
                                            {{$milestone->name}}</option>
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
