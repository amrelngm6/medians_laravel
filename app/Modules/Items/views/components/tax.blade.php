
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Tax</label>

                                <div class="fs-7 text-muted">Tax for item at invoices & estimates</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                
                                <!--begin::Input group-->
                                <div class="d-flex flex-column fv-row w-full ">
                                    <input class="form-control w-full  form-control-solid" placeholder="Item tax"
                                            name="tax" type="number"  value="{{$item->tax ?? 0}}" />
                                </div>
                                <!--end::Input group-->

                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
