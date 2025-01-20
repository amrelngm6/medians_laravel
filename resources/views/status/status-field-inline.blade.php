

                                <div class="select-placeholder w-full">
                                    <!-- <label for="assigned" class="control-label">Assigned To</label> -->
                                    <select id="status_id" name="status_id" placeholder="A"
                                        class="filter-on-change select-bootstrap border border-gray-300 form-control form-control-solid ">
                                        <option value="0"></option>
                                        @foreach ($statusList as $status)
                                        <option value="{{$status->status_id}}" @if (isset($model) && $model->status_id == $status->status_id) selected @endif >
                                            {{$status->name}}</option>
                                        @endforeach
                                    </select>
                                </div>