var myAudio = document.getElementById('myAudio');
var muteButton = document.getElementById('mute');

function toggleMute() {
  if (myAudio.muted) {
    muteButton.innerHTML = '<i class="fa-solid fa-volume-high"></i>';
    myAudio.muted = false;
  } else {
    muteButton.innerHTML = '<i class="fa-solid fa-volume-xmark"></i>';
    myAudio.muted = true;
  }
}

window.addEventListener('click', function() {
    myAudio;
    myAudio.play();
});
