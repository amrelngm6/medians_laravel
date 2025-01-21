
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Status</label>

                                <div class="fs-7 text-muted">Set this item status</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <div class="select-placeholder w-full">
                                    <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                                    <select id="assigned" name="status_id" placeholder="A"
                                        class="select-bootstrap border border-gray-300 form-control form-control-solid ">
                                        <option value="0"></option>
                                        @foreach ($statusList as $status)
                                        <option value="{{$status->status_id}}" @if (isset($model->status_id) && $model->status_id == $status->status_id) selected @endif >
                                            {{$status->name}}</option>
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
