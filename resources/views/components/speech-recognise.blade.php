
   

<script>
var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var SpeechGrammarList = SpeechGrammarList || webkitSpeechGrammarList;
var SpeechRecognitionEvent = SpeechRecognitionEvent || webkitSpeechRecognitionEvent;

    function testSpeech(elementId, micIcon = null) {
        jQuery(micIcon).toggleClass('text-danger')

        var recognition = new SpeechRecognition();
        // recognition.lang = 'en-US';
        recognition.interimResults = false;
        recognition.maxAlternatives = 1;

        recognition.start();

        recognition.onresult = function(event) {
            var speechResult = event.results[0][0].transcript.toLowerCase();
            jQuery(elementId).val(speechResult)
            jQuery(elementId).data('form') ? submitForm(jQuery(elementId).data('form'), jQuery(elementId).data('element')) : ''
            jQuery(micIcon).toggleClass('text-danger')
        }

        recognition.onspeechend = function() {
            recognition.stop();
        }

        recognition.onerror = function(event) {
            alert('Error occurred in recognition: ' + event.error);
        }
        
        recognition.onaudiostart = function(event) {
            //Fired when the user agent has started to capture audio.
        }
        
        recognition.onaudioend = function(event) {
            //Fired when the user agent has finished capturing audio.
        }
        
        recognition.onend = function(event) {
            //Fired when the speech recognition service has disconnected.
        }
    }

</script>