
                    
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="flex flex-column">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5 flex gap-10">
                                <label class="fs-6">Color</label>

                                <div class="pt-1 fs-7 text-muted">Select pipeline color</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center pt-6">
                                @foreach (['primary', 'success', 'info', 'accent', 'dark'] as $color )
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="radio" required
                                        name="color" value="{{$color}}" @if ($color == ($model->color ?? '') ) checked @endif />

                                    <span class="form-check-label fw-semibold bg-{{$color}} w-20px h-20px"> </span>
                                </label>
                                <!--end::Checkbox-->
                                @endforeach
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->