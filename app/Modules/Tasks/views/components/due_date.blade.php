
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Due date</label>

                                <div class="fs-7 text-muted">Max date to finish this task</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row w-full ">
                                    <input class="form-control w-full  form-control-solid" placeholder="Task deadline date"
                                            name="due_date" type="date"  value="{{$task->due_date ?? date('Y-m-d')}}" />
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
