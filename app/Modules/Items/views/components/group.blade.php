
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="w-full fw-semibold me-5">
                                <label class="fs-6">Group</label>

                                <div class="fs-7 text-muted">Set this item to  related group</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="w-full d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <div class="select-placeholder w-full relative">
                                    <select id="group_id" name="group_id" placeholder="A"
                                        class="select-bootstrap border border-gray-300 form-control form-control-solid ">
                                        <option value="0"></option>
                                        @foreach ($groups as $group)
                                        <option value="{{$group->id}}" @if (isset($item) && $item->group_id == $group->id) selected @endif >
                                            {{$group->name}}</option>
                                        @endforeach
                                    </select>
                                    <a href="{{route('ItemGroup.create', $item->id ?? 0)}}" class="open-modal btn btn-light right-0 top-0 h-full pt-4 absolute "><i class="bx bx-message-square-add fs-1"></i></a>

                                </div>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->
