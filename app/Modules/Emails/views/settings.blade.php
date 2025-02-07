
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
                        <div class="d-flex flex-stack w-full">
                            <div class="fw-semibold me-5 w-full">
                                <label class="fs-6  required">Last days </label>
                                <div class="fs-7 text-muted">Set the max days to load old emails  <br />(ex: 30 = last month, 7 = last week ) </div>
                            </div>
                            <div class="d-flex align-items-center w-full">
                                <div class="d-flex flex-column  fv-row w-full">
                                    <input placeholder="Load since x days" name="fields[since_days]" value="{{$account->field('since_days')->first()->value ?? 0}}" type="number" min="1" max="100" required class="form-control form-control-solid" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <div class="d-flex flex-stack w-full">
                            <div class="fw-semibold me-5 w-full">
                                <label class="fs-6  required">Load limit from Server </label>
                                <div class="fs-7 text-muted">Set the max emails to load from server  <br />(ex: 10 ) loads last 10 emails based on the selected days above </div>
                            </div>
                            <div class="d-flex align-items-center w-full">
                                <div class="d-flex flex-column  fv-row w-full">
                                    <input placeholder="Load since x days" name="fields[fetch_limit]" value="{{$account->field('fetch_limit')->first()->value ?? 0}}" type="number" min="1" max="100" required class="form-control form-control-solid" />
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