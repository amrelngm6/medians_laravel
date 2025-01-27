<div class="d-flex justify-content-{!! (!$message->income ? 'start' : 'end')  !!} mb-10 ">
    <div class="d-flex flex-column align-items-start">

        <a title="{{ $message->message_text }}" href="{{ $message->media_path }}" class="glightbox tyn-video cursor-pointer" data-gallery="media-video">
            <div class="tyn-video-icon">
                <!-- play-fill -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                    <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393z" />
                </svg>
            </div>
        </a>
    </div>

    <!--begin::Text-->
    <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start">
        {{ $message->message_text }}
    </div>
    <!--end::Text-->

</div>
