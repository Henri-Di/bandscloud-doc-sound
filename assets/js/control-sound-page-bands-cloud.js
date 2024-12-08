
const playPauseBtn = document.getElementById("play-pause");
const prevTrackBtn = document.getElementById("prev-track");
const nextTrackBtn = document.getElementById("next-track");
const progressBar = document.getElementById("progress-bar");
const songTitle = document.getElementById("song-title");
const songArtist = document.getElementById("song-artist");
const volumeControl = document.getElementById("volume-control");

let audio = new Audio(); 
let isPlaying = false; 
let currentTrackIndex = 0; 
let tracks = [
    {src: "../../assets/audio/FKJ - So Much to Me.mp3", title: "So Much To Me", artist: "FKJ"},
    {src: "../../assets/audio/Fkj & June Marieezy - Amsterjam (Offical Video).mp3", title: "Amsterjam", artist: "FKJ"},
    {src: "../../assets/audio/FKJ - Ylang Ylang.mp3", title: "Ylang Ylang", artist: "FKJ"}
];


function loadTrack(index) {
    audio.src = tracks[index].src;
    songTitle.innerText = tracks[index].title;
    songArtist.innerText = tracks[index].artist;
    audio.load(); 
  
}


function togglePlayPause() {
    if (isPlaying) {
        audio.pause();
        playPauseBtn.innerHTML = '<i class="fas fa-play"></i>';
    } else {
        audio.play();
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
    }
    isPlaying = !isPlaying;
}


function nextTrack() {
    currentTrackIndex = (currentTrackIndex + 1) % tracks.length;
    loadTrack(currentTrackIndex);
    audio.play(); 
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
    isPlaying = true; 
}


function prevTrack() {
    currentTrackIndex = (currentTrackIndex - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrackIndex);
    audio.play(); 
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>'; 
    isPlaying = true; 
}


audio.ontimeupdate = function() {
    let progress = (audio.currentTime / audio.duration) * 100;
    progressBar.style.width = progress + "%";
    progressBar.setAttribute('aria-valuenow', progress);
};


volumeControl.oninput = function() {
    audio.volume = volumeControl.value / 100; 
};


playPauseBtn.addEventListener('click', togglePlayPause);
prevTrackBtn.addEventListener('click', prevTrack);
nextTrackBtn.addEventListener('click', nextTrack);


loadTrack(currentTrackIndex);
