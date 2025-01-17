
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Sort</label>

                                <div class="fs-7 text-muted">Sort of the task</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row w-full ">
                                    <input class="form-control w-full  form-control-solid" placeholder="Task sort"
                                            name="sort" type="number"  value="{{$task->sort}}" />
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
