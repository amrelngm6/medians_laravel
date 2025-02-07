
<div class="modal fade show active" id="create-email-folder-modal" tabindex="-1" >
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#create-email-folder-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="create_email_account_form" class="ajax-form form" action="{{route('EmailAccount.storeFolder', $account->id)}}" method="POST">
                    @csrf
                    <input type="hidden" name="" value="{{$account->id}}" />
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Create folder</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Add enw Folder at your email <span class="text-danger">IMAP configuration </span> to start moving Emails.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack">
                            <div class="fw-semibold me-5">
                                <label class="fs-6  required">Folder name</label>
                                <div class="fs-7 text-muted">Add you folder in letters only without special characters  <br />ex: mail.domain.com </div>
                            </div>
                            <div class="d-flex align-items-center">
                                <div class="d-flex flex-column  fv-row">
                                    <input placeholder="Youe new folder name " name="name" value="CRM Emails" required class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->


                    
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