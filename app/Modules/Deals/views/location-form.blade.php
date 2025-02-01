<div class="card-body">
                            <div class="mb-2 text-start">
                                <h3 class="mb-3">Location Info</h3>
                                <div class="text-muted fw-semibold fs-5">
                                    <p class="fw-semibold">Information about the Deal location</p>.
                                </div>
                            </div>
                            <div class="w-full flex gap-10">

                                <div class="form-group w-full"><label for="address" class="control-label">Address</label><input
                                        type="text" id="address" name="location_info[address]"
                                        class="form-control form-control-solid "
                                        value="{{$deal->location_info->address ?? ''}}"></div>

                                <div class="form-group w-full"><label for="city" class="control-label">City</label><input
                                        type="text" id="city" name="location_info[city]"
                                        class="form-control form-control-solid " value="{{$deal->location_info->city ?? ''}}">
                                </div>

                            </div>
                            <div class="w-full flex gap-10">

                                <?php $countriyService = new App\Modules\Countries\Services\CountryService; ?>

                                <div class="w-full form-group"><label for="state" class="control-label">State</label><input
                                        type="text" id="state" name="location_info[state]"
                                        class="form-control form-control-solid " value="{{$deal->location_info->state ?? ''}}">
                                </div>
                                <div class="w-full">
                                    <div class="select-placeholder form-group" app-field-wrapper="country"><label for="country"
                                            class="control-label">Country</label><select id="country"
                                            name="location_info[country]"
                                            class="select-bootstrap form-control form-control-solid py-2">
                                            <option value=""></option>

                                            @foreach ($countriyService->list() as $country)
                                            <option value="{{$country->id}}" @if ($deal->location_info && $country->id ==
                                                $deal->location_info->country)
                                                selected @endif data-subtext="{{$country->code}}">{{$country->name}}</option>
                                            @endforeach
                                        </select></div>
                                </div>

                            </div>
                            <div class="w-full flex gap-10">

                                <div class=" w-full">
                                    <div class="form-group" app-field-wrapper="zip"><label for="zip" class="control-label">Zip
                                            Code</label><input type="text" id="zip" name="location_info[zip]"
                                            class="form-control form-control-solid "
                                            value="{{$deal->location_info->zip ?? ''}}"></div>
                                </div>
                                <div class=" w-full">
                                    <div class="form-group" app-field-wrapper="website"><label for="website"
                                            class="control-label">Website</label><input type="text" id="website"
                                            name="location_info[website]" class="form-control form-control-solid "
                                            value="{{$deal->location_info->website ?? ''}}">
                                    </div>
                                </div>

                            </div>
                        </div>