@extends('layout.master')
@section('title', 'Forms Premade')
@section('css')

@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Form - Premade Forms</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">Ui Elements</a>
                                </li>
                                <li>
                                    <a href="">Form Elements</a>
                                </li>
                                <li class="active">
                                    <strong>Pre Made Forms</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12 col-md-6">
                    <section class="card ">
                        <div class="card-body">
                            <div class="col-xs-12">

                                <!--begin:Form-->
                                <form id="modal_new_target_form" class="form" action="#">
                                    <!--begin::Heading-->
                                    <div class="mb-13 text-center">
                                        <!--begin::Title-->
                                        <h1 class="mb-3">Reply to message</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-5">
                                            SMTP confguration is required, please check <a href="#!"
                                                class="fw-bold link-primary">Settings / SMTP</a>.
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                            <span class="required">User</span>
                                        </label>
                                        <!--end::Label-->
                                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                            data-placeholder="Select a Team Member" name="target_assign">
                                            <option value="">Select user...</option>
                                            <option value="1">Karina Clark</option>
                                            <option value="2">Robert Doe</option>
                                            <option value="3">Niel Owen</option>
                                            <option value="4">Olivia Wild</option>
                                            <option value="5">Sean Bean</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-8">
                                        <label class="fs-6 fw-semibold mb-2">Message</label>

                                        <textarea class="form-control form-control-solid" rows="3" name="message"
                                            placeholder="Type Message Details"></textarea>
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-15 fv-row">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="fw-semibold me-5">
                                                <label class="fs-6">Notifications</label>

                                                <div class="fs-7 text-muted">Allow Notifications by Phone or Email
                                                </div>
                                            </div>
                                            <!--end::Label-->

                                            <!--begin::Checkboxes-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid me-10">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        name="communication[]" value="email" checked="checked" />

                                                    <span class="form-check-label fw-semibold">
                                                        Email
                                                    </span>
                                                </label>
                                                <!--end::Checkbox-->

                                                <!--begin::Checkbox-->
                                                <label class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox"
                                                        name="communication[]" value="phone" />

                                                    <span class="form-check-label fw-semibold">
                                                        Phone
                                                    </span>
                                                </label>
                                                <!--end::Checkbox-->
                                            </div>
                                            <!--end::Checkboxes-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Actions-->
                                    <div class="text-center">
                                        <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                                            Cancel
                                        </button>

                                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                                            <span class="indicator-label">
                                                Submit
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                    </div>
                                    <!--end::Actions-->
                                </form>
                                <!--end:Form-->

                            </div>
                        </div>
                    </section>

                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Modal Forms</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-md-8 col-sm-9 col-xs-10">

                                    <!-- START -->
                                    <div class="position-center ">
                                        <div class="w-full flex gap-10">
                                            <a href="#new-project-modal" data-modal="#new-project-modal"
                                                class="open-modal btn btn-lg btn-primary ">
                                                Project Modal
                                            </a>
                                            <a href="#new-user-modal" data-modal="#new-user-modal"
                                                class="open-modal btn btn-lg btn-primary">
                                                User Modal
                                            </a>
                                        </div>
                                        <br />

                                        <div class="w-full flex gap-10">
                                            <a href="#form-modal" data-modal="#form-modal"
                                                class="open-modal btn btn-lg btn-primary">
                                                Send Message Modal
                                            </a>
                                            <a href="#upload-modal" data-modal="#upload-modal"
                                                class="open-modal btn btn-lg btn-primary">
                                                Upload Modal
                                            </a>
                                        </div>

                                        @include('includes.modals.new-project-modal')
                                        @include('includes.modals.send-message-modal')
                                        @include('includes.modals.new-user-modal')
                                        @include('includes.modals.upload-modal')

                                    </div>
                                    <!-- END -->

                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="col-xs-12 col-md-6">

                    <section class="card ">
                        <div class="card-body">
                            <form id="modal_new_target_form" class="form" action="#">
                                <!--begin::Heading-->
                                <div class="mb-13 text-center">
                                    <!--begin::Title-->
                                    <h1 class="mb-3">New Task</h1>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="text-muted fw-semibold fs-5">
                                        Add new task to project <a href="#!" class="fw-bold link-primary">Flutter Mobile
                                            APP</a>.
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">User</span>
                                    </label>
                                    <!--end::Label-->
                                    <select class="form-select form-select-solid " data-control="select2" data-hide-search="true"
                                        data-placeholder="Select a Team Member" name="target_assign">
                                        <option value="">Select user...</option>
                                        <option value="1">Karina Clark</option>
                                        <option value="2">Robert Doe</option>
                                        <option value="3">Niel Owen</option>
                                        <option value="4">Olivia Wild</option>
                                        <option value="5">Sean Bean</option>
                                    </select>
                                </div>
                                <!--end::Input group-->


                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Name</span>
                                    </label>
                                    <!--end::Label-->
                                    <input class="form-control form-control-solid" placeholder="Task name " name="title" />
                                </div>
                                <!--end::Input group-->

                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8">
                                    <label class="fs-6 fw-semibold mb-2">Task Description</label>

                                    <textarea class="form-control form-control-solid" rows="3" name="message"
                                        placeholder="Type Description / Details"></textarea>
                                </div>
                                <!--end::Input group-->


                                <!--begin::Input group-->
                                <div class="mb-15 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="fw-semibold me-5">
                                            <label class="fs-6">Due date</label>

                                            <div class="fs-7 text-muted">Max date to finish this task</div>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Checkboxes-->
                                        <div class="d-flex align-items-center">

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column  fv-row">
                                                <input class="form-control form-control-solid" placeholder="Project name "
                                                    name="date" type="date" />
                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->




                                <!--begin::Input group-->
                                <div class="mb-15 fv-row">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Label-->
                                        <div class="fw-semibold me-5">
                                            <label class="fs-6">Add File</label>

                                            <div class="fs-7 text-muted">Append files to this task</div>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Checkboxes-->
                                        <div class="d-flex align-items-center">

                                            <!--begin::Input group-->
                                            <div class="d-flex flex-column  fv-row">
                                                <input class="form-control form-control-solid" placeholder="Project name "
                                                    name="file" type="file" />
                                            </div>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Checkboxes-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Input group-->




                                <!--begin::Actions-->
                                <div class="text-center">
                                    <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Submit
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </form>


                        </div>
                    </section>

                </div>

                <div class="col-xs-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center justify-content-between ">
                            <h5>User Setting Form</h5><a class="avtar avtar-s btn-link-secondary" href="#"><i
                                    class="ti ti-bookmarks f-18"></i></a>
                        </div>
                        <div class="w-full">
                            <div class="card shadow-none ">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <img src="/data/profile/avatar-1.png" class="w-30px  h-30px  rounded-circle" />
                                        </div>
                                        <div class="flex-grow-1 mx-3">
                                            <h6 class="mb-0">Airi Satou</h6>
                                            <p class="mb-0">Maiduguri, Borno State</p>
                                        </div>
                                        <div class="flex-shrink-0"><button class="btn btn-sm btn-light-secondary"><i
                                                    class="ti ti-edit"></i> Edit</button></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="flex gap-10">
                                        <div class="w-full">
                                            <div class="card shadow-none border mb-0 h-100">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 me-3">
                                                            <h6 class="mb-0">Full Name</h6>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 mt-3"><label class="form-label">Your Full Name
                                                            is</label> <input type="text" class="form-control"
                                                            placeholder="Enter name" value="Adam Smith"></div>
                                                </div>

                                                <div class="card-body pt-0">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-grow-1 me-3">
                                                            <h6 class="mb-0">Email Address</h6>
                                                        </div>
                                                        <div class="flex-shrink-0"><button class="btn btn-sm btn-light-secondary"><i
                                                                    class="ti ti-edit"></i> Edit</button></div>
                                                    </div>
                                                    <div class="mb-3 mt-3"><label class="form-label">Your email address
                                                            is</label> <input type="email" class="form-control"
                                                            placeholder="Enter email" value="emailis@private.com"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="w-full">
                                            <div class="card shadow-none border mb-0 h-100">
                                                <div class="card-body">
                                                    <h6 class="mb-4 mt-2">Password</h6>
                                                    <div class="flex gap-4">
                                                        <div class="w-full">
                                                            <div class="mb-3"><label class="form-label">New
                                                                    Password</label> <input type="password" class="form-control"
                                                                    placeholder="Enter New Password" value="emailis">
                                                            </div>
                                                        </div>
                                                        <div class="w-full">
                                                            <div class="mb-3"><label class="form-label">Current
                                                                    Password</label> <input type="password" class="form-control"
                                                                    placeholder="Enter Current Password" value="emailis"></div>
                                                        </div>
                                                    </div>
                                                    <p class="text-muted py-4">Can’t Remember your current password? <a href="#"
                                                            class="link-primary text-decoration-underline">Reset your
                                                            password</a></p><button class="btn btn-primary">Save
                                                        Password</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" g-3">
                                <div class="col-md-6 col-xl-4">
                                    <div class="card shadow-none border mb-0">
                                        <div class="card-body">
                                            <h6 class="mb-3 fw-medium">Membership Plan</h6>
                                            <h4 class="mb-3 fw-normal text-muted">Addicted $150</h4><a href="#"
                                                class="link-primary d-flex align-items-center gap-2">See more Plan <i
                                                    class="ti ti-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-4">
                                    <div class="card shadow-none border mb-0">
                                        <div class="card-body">
                                            <h6 class="mb-3 fw-medium">Manage</h6>
                                            <h4 class="mb-3 fw-normal text-muted">Membership</h4><a href="#"
                                                class="link-primary d-flex align-items-center gap-2">Update, Cancel and
                                                more <i class="ti ti-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4">
                                    <div class="card shadow-none border mb-0">
                                        <div class="card-body">
                                            <h6 class="mb-3 fw-medium">Renewal Date</h6>
                                            <h4 class="mb-3 fw-normal text-muted">120 November, 2024</h4><a href="#"
                                                class="link-primary d-flex align-items-center gap-2">View payment method
                                                <i class="ti ti-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection