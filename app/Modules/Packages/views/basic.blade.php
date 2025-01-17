<div class="card mb-5 mb-xl-10 w-full" id="profile_details_view">
    <form action="{{route('SystemSetting.update')}}" class="ajax-form  w-full" id="custom_field-form">
        @csrf

        <!--begin::Card header-->
        <div class="card-header cursor-pointer">
            <ul class="nav nav-pills nav-pills-custom position-relative mb-4 gap-5" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="tab-li nav-link btn bnt-color-gray-600 btn-active-color-primary d-flex active justify-content-center w-100 border-0 h-100 px-0"
                        data-container="#tabContainer" data-tab="#basic-tab" href="#!" aria-selected="true"
                        role="tab">
                        <span class="nav-text text-gray-600 fw-bold fs-6 mb-3">
                            Basic
                        </span>
                        <span class="bullet-custom position-absolute z-index-2 bottom-0 w-100 h-1px bg-primary rounded"></span>
                    </a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="tab-li nav-link btn btn-color-600 btn-active-color-primary d-flex justify-content-center px-0 w-100 border-0 h-100"
                        data-container="#tabContainer" data-tab="#logo-tab" href="#!" aria-selected="false" tabindex="-1" role="tab">
                        <span class="nav-text text-gray-600 fw-bold fs-6 mb-3">
                            Logos
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
                    <label for="sitename" class=" control-label">Sitename </label>
                    <input type="text" required placeholder="System name" class=" form-control form-control-solid  "
                        id="sitename" name="sitename" class="form-control form-control-solid " value="{{$settings['sitename']}}">
                </div>

            </div>
            <div class="w-full tab-element hidden" id="logo-tab">

                <div class="form-group w-full">
                    <label for="default_language" class=" control-label">Default language </label>
                    <input type="text"  placeholder="System name" class=" form-control form-control-solid  "
                        id="default_language" name="default_language" class="form-control form-control-solid " value="{{$settings['default_language']}}">
                </div>

            </div>


            <div class="text-end">
                <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                    Cancel
                </button>

                <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                    <span class="indicator-label">
                        Submit
                    </span>
                </button>
            </div>
        </div>
    </form>
</div>