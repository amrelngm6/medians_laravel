
<div class="modal fade show active" id="settings-email-account-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#settings-email-account-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="settings_email_account_form" class="ajax-form form" action="{{route('EmailAccount.updateSetting', $account->id)}}" method="POST">
                    @csrf
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Email settings ( IMAP )</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Add your email  <span class="text-danger">Settings & options </span> to query Emails.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack">
                            <div class="fw-semibold me-5">
                                <label class="fs-6  required">Last days </label>
                                <div class="fs-7 text-muted">Set the max days to load old emails  <br />(ex: 30 = last month ) </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column  fv-row">
                                    <input placeholder="IMAP host " name="imap_host" value="{{$account->imap_host}}" type="number" min="1" max="100" required class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack">
                            <div class="fw-semibold me-5">
                                <label class="fs-6  required">IMAP port</label>
                                <div class="fs-7 text-muted">IMAP port for your domain ex: 993 </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column  fv-row">
                                    <input placeholder="IMAP port " name="imap_port" value="{{$account->imap_port}}" type="number" required class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->
                    

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack">
                            <div class="fw-semibold me-5">
                                <label class="fs-6  required">IMAP Username</label>
                                <div class="fs-7 text-muted">IMAP username is your email <br />ex: admin@mediansai.com </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column  fv-row">
                                    <input placeholder="IMAP username (ex: email@domain.com)" name="imap_username" value="{{$account->imap_username}}" required class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    
                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack">
                            <div class="fw-semibold me-5">
                                <label class="fs-6  required">IMAP password</label>
                                <div class="fs-7 text-muted">IMAP password is your email login password  </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column  fv-row">
                                    <input placeholder="IMAP login password" name="imap_password" value="" required class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Notice-->
                    <div class="notice d-flex bg-light-warning rounded border-warning border border-dashed  p-6">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-grow-1 ">
                            <!--begin::Content-->
                            <div class=" fw-semibold">
                                <div class="fs-6 text-gray-700 "> We don't save the Password, you have to enter your password for each time you fetch your Email messages</div>
                            </div>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Notice-->
                    

                    <!--begin::Actions-->
                    <div class="text-center pt-10">
                        <button type="reset" id="modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>