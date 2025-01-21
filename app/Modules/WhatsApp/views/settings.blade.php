<div class="card mb-5 mb-xl-10 w-full" id="profile_details_view">
    <form action="{{route('SystemSetting.update')}}" class="ajax-form  w-full" id="custom_field-form">
        @csrf

        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <ul class="nav nav-pills nav-pills-custom position-relative mt-4 w-full gap-5" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="tab-li nav-link btn bnt-color-gray-600 btn-active-color-primary d-flex active justify-content-center w-100 border-0 h-100 px-0"
                        data-container="#tabContainer" data-tab="#basic-tab" href="#!" aria-selected="true"
                        role="tab">
                        <span class="nav-text text-gray-600 fw-bold fs-6 mb-3">
                            WhatsApp API Credentials
                        </span>
                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-1px bg-primary rounded"></span>
                    </a>
                </li>
                <span class="position-absolute z-index-1 bottom-0 w-100 h-1px bg-gray-300 rounded"></span>
            </ul>
        </div>
        <!--begin::Card header-->
        <div class="card-body" id="tabContainer">
            <div class="w-full tab-element " id="basic-tab">

                <div class="form-group w-full">
                    <label for="whatsapp_baid" class=" control-label">Business Account ID </label>
                    <input type="text" required placeholder="Business Account ID (BAID)" class=" form-control form-control-solid  "
                        id="whatsapp_baid" name="whatsapp_baid" class="form-control form-control-solid " value="{{$settings['whatsapp_baid'] ?? ''}}">
                </div>

                <div class="form-group w-full">
                    <label for="whatsapp_pnid" class=" control-label">Phone Number ID </label>
                    <input type="text" required placeholder="Phone number ID (PNID)" class=" form-control form-control-solid  "
                        id="whatsapp_pnid" name="whatsapp_pnid" class="form-control form-control-solid " value="{{$settings['whatsapp_pnid'] ?? ''}}">
                </div>

                <div class="form-group w-full">
                    <label for="system_user_token" class=" control-label">System User Token </label>
                    <input type="text" required placeholder="System User Token" class=" form-control form-control-solid  "
                        id="system_user_token" name="system_user_token" class="form-control form-control-solid " value="{{$settings['system_user_token'] ?? ''}}">
                </div>

            </div>


            <div class="text-end">

                <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Submit
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>