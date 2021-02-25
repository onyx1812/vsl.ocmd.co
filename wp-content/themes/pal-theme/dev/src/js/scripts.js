document.getElementById('play_vimeo').addEventListener('click', e => {
  e.preventDefault();
  e.target.classList.add('video-btn__hide');
  const player = new Vimeo.Player(document.getElementById('video_vimeo'));
  player.play();
});