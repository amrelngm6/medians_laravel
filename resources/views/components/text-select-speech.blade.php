
    <div id="text-popover" class="text-popover">
        <!-- <button id="translateBtn">Translate</button> -->
        <div class=" flex">
            <button id="speechBtn">Speech</button>
            <select id="voices-select" class="form-control form-control-solid py-2 px-4"></select>

        </div>
    </div>
    <form class="flex gap-2 pt-4 ajax-form hidden" action="{{route('HuggFace.translate')}}" id="translate_text_form">
        @csrf
        <input name="model" value="Helsinki-NLP/opus-mt-en-ar">
        <textarea class="hidden" name="message" id="selected_text_content"></textarea>
    </form>

    <script>
        const popover = document.getElementById("text-popover");
        MediansSettings.text2speechEvent() 
        function handleEvent() {
            const selection = window.getSelection();
            const selectedText = selection.toString().trim();
            if (selectedText.length > 0) {
                const range = selection.getRangeAt(0);
                const rect = range.getBoundingClientRect();
                popover.style.top = `${rect.top + window.scrollY - 40}px`;
                popover.style.left = `${rect.left + window.scrollX}px`;
                popover.style.display = "block";
                jQuery('#selected_text_content').val(selectedText)

            } else {
                popover.style.display = "none";
            }
        }

        const speechBtn = document.getElementById("speechBtn");
        speechBtn.addEventListener("click", function () {
            const selection = window.getSelection();
            const selectedText = selection.toString().trim();
            window.getSelection().toString().trim() ? speak(selectedText) : ''
        });

        // const translateBtn = document.getElementById("translateBtn");
        // translateBtn.addEventListener("click", function () {
        //     window.getSelection().toString().trim() ? sendData('#translate_text_form') : ''
        // });

        document.addEventListener("click", function (event) {
            if (!popover.contains(event.target)) {
                popover.style.display = "none";
            }
        });


        async function sendData(formId) {
            const form = document.querySelector(formId);
            const formData = new FormData(form);
            try {
                const response = await fetch("{{route('HuggFace.translate')}}", {
                    method: "POST",
                    // Set the FormData instance as the request body
                    body: formData,
                });
                alert(await response.text());
            } catch (e) {
                console.error(e);
            }
        }



        /** 
         * Text To Speech
         */ 
        const synth = window.speechSynthesis;
        const voiceSelect = document.querySelector("#voices-select");
        const pitch = document.querySelector("#voices-pitch");
        const rate = document.querySelector("#voices-rate");

        let voices = [];

        function populateVoiceList() {
            voices = synth.getVoices().sort(function (a, b) {
                const aname = a.name.toUpperCase();
                const bname = b.name.toUpperCase();

                if (aname < bname) {
                    return -1;
                } else if (aname == bname) {
                    return 0;
                } else {
                    return +1;
                }
            });
            let selectedIndex = voiceSelect.selectedIndex < 0 ? 0 : voiceSelect.selectedIndex;
            voiceSelect.innerHTML = "";

            for (let i = 0; i < voices.length; i++) {
                const option = document.createElement("option");
                option.textContent = `${voices[i].name} (${voices[i].lang})`;

                if (voices[i].default) {
                    option.textContent += " -- DEFAULT";
                    option.setAttribute("selected", true);
                    selectedIndex = i
                }

                option.setAttribute("data-name", voices[i].name);
                voiceSelect.appendChild(option);
            }
            voiceSelect.selectedIndex = selectedIndex;
        }

        populateVoiceList();

        if (speechSynthesis.onvoiceschanged !== undefined) {
            speechSynthesis.onvoiceschanged = populateVoiceList;
        }

        function speak(words = "") {
            if (synth.speaking) {
                console.error("speechSynthesis.speaking");
                return;
            }

            if (words !== "") {
                const utterThis = new SpeechSynthesisUtterance(words);

                utterThis.onend = function (event) {
                    console.log("SpeechSynthesisUtterance.onend");
                };

                utterThis.onerror = function (event) {
                    console.error("SpeechSynthesisUtterance.onerror");
                };

                voiceSelect.value
                const selectedOption =  voiceSelect.selectedOptions[0].getAttribute("data-name");
                // const selectedOption = "Google UK English Female";

                for (let i = 0; i < voices.length; i++) {
                    console.log(voices[i])
                    if (voices[i].name === selectedOption) {
                        utterThis.voice = voices[i];
                        break;
                    }
                }
                utterThis.pitch = pitch && pitch.value ? pitch.value : 1;
                utterThis.rate = rate && rate.value ? rate.value : 1;
                synth.speak(utterThis);
            }
        }
    </script>