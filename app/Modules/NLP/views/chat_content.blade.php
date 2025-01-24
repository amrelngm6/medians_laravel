
                        <!--begin::Messenger-->
                        <div class="card" id="chat_messenger">
                            <!--begin::Card header-->
                            <div class="card-header" id="chat_messenger_header">
                                <!--begin::Title-->
                                <div class="card-title">
                                    <!--begin::User-->
                                    <div class="d-flex justify-content-center flex-column me-3">
                                        <a href="#"
                                            class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">{{$conversation->contact->name ?? 'Bot'}}</a>

                                        <!--begin::Info-->
                                        <div class="mb-0 lh-1">
                                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                            <span class="fs-7 fw-semibold text-muted">Active</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Title-->

                                <!--begin::Card toolbar-->
                                <div class="card-toolbar">
                                    <!--begin::Menu-->
                                    <div class="me-n3 show-child">
                                        <button class="btn btn-sm btn-icon btn-active-light-primary"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            <i class="bx bx-dots-vertical-rounded fs-2"><span class="path1"></span><span
                                                    class="path2"></span><span class="path3"></span><span
                                                    class="path4"></span></i> </button>

                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Card toolbar-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body" id="chat_messenger_body">
                                <!--begin::Messages-->
                                <div class="scroll-y me-n5 pe-5 h-300px h-lg-auto" id="chat-container" style="max-height: 224px;">
                                    
                                </div>
                                <!--end::Messages-->
                            </div>
                            <!--end::Card body-->

                            <!--begin::Card footer-->
                            
                            <form class="flex gap-2 pt-4 ajax-form" action="{{route('DeepSeek.store')}}" id="wp_chat_messenger_form">
                                @csrf

                                <input type="text" class="form-control" name="model" >
                                
                                <textarea class="form-control form-control-solid mb-3" rows="1" name="message" data-kt-element="input"
                                    placeholder="Type a message" id="message-content"></textarea>
                                <!--end::Input-->

                                <!--begin:Toolbar-->
                                <div class="d-flex flex-stack">

                                    <!--begin::Send-->
                                    <a href="javascript:;" class="btn btn-primary " onClick="(function(){fetchData()})()">Send</a>
                                    <!--end::Send-->
                                </div>
                                <!--end::Toolbar-->
                            </form>
                            <!--end::Card footer-->
                            
                        </div>
                        <!--end::Messenger-->
                        <script>
                            var interval;
                            var position;
                            
                            
// Function to fetch and update table data
// function fetchData(startDate = '', endDate = '') {
function fetchData() {
    const form = document.getElementById('wp_chat_messenger_form');

    // Get the form data as a FormData object
    const formData = new FormData(form);

    // Send the form data via AJAX
    const xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);
    // xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            
                jQuery('#message-content').val('');
                jQuery('#chat-container').html(xhr.responseText);
        }
    };
    try {
        xhr.send(formData);
    } catch (error) {
        console.log(error)        
    }

}
</script>