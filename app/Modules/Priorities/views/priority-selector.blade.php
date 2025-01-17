
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Priority</label>

                                <div class="fs-7 text-muted">Set this item priority</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <div class="select-placeholder w-full">
                                    <select id="priority_id" name="priority_id" placeholder="A"
                                        class="select-bootstrap border border-gray-300 form-control form-control-solid ">
                                        <option value="0"></option>
                                        @foreach ($priorities as $priority)
                                        <option value="{{$priority->priority_id}}" @if (isset($model) && $model->priority_id == $priority->priority_id) selected @endif >
                                            {{$priority->name}}</option>
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
