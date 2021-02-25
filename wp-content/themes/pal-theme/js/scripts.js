document.getElementById('play').addEventListener('click', e => {
  e.preventDefault();
  e.target.classList.add('video-btn__hide');
  document.getElementById('video').muted = false;
});