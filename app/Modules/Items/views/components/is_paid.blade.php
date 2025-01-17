
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Is Paid</label>

                                <div class="fs-7 text-muted">Is this task Paid</div>
                            </div>
                            <!--end::Label-->
                            <div class="form-group w-full flex">
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="is_paid" value="1" class="form-check-input h-20px w-20px" type="radio" @if ($task->is_paid) checked @endif />
                                    <span class="form-check-label fw-semibold"> Yes </span>
                                </label>
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input name="is_paid" value="0"  class="form-check-input h-20px w-20px" type="radio" @if (!$task->is_paid) checked @endif />
                                    <span class="form-check-label fw-semibold"> No </span>
                                </label>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
