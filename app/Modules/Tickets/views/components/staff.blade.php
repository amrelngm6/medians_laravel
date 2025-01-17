
                        <div class="d-flex flex-column w-full mb-8 fv-row">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Assigned to</span>
                            </label>
                            <!--end::Label-->
                            <select class="form-control form-control-solid select-bootstrap" data-control="select2"
                                data-hide-search="true" data-placeholder="Select a Team member"
                                name="assigned_to" required>
                                @foreach ($staff as $member)
                                <option value="{{$member->id()}}" @if ($member->id() == ($ticket->assigned_to ?? 0)) selected @endif >{{$member->name}}</option>
                                @endforeach
                            </select>
                        </div>