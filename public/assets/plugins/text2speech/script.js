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
  const selectedIndex = voiceSelect.selectedIndex < 0 ? 0 : voiceSelect.selectedIndex;
  voiceSelect.innerHTML = "";

  for (let i = 0; i < voices.length; i++) {
    const option = document.createElement("option");
    option.textContent = `${voices[i].name} (${voices[i].lang})`;

    if (voices[i].default) {
      option.textContent += " -- DEFAULT";
    }

    option.setAttribute("data-lang", voices[i].lang);
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

    // const selectedOption =  voiceSelect.selectedOptions[0].getAttribute("data-name");
    const selectedOption =  "Google UK English Female";

    for (let i = 0; i < voices.length; i++) {
      console.log(voices[i])
      if (voices[i].name === selectedOption) {
        utterThis.voice = voices[i];
        break;
      }
    }
    
    utterThis.pitch = pitch.value ?? 1;
    utterThis.rate = rate.value ?? 1;
    synth.speak(utterThis);
  }
}
