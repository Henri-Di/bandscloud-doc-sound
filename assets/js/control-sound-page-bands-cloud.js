// Definições iniciais do player
const playPauseBtn = document.getElementById("play-pause");
const prevTrackBtn = document.getElementById("prev-track");
const nextTrackBtn = document.getElementById("next-track");
const progressBar = document.getElementById("progress-bar");
const songTitle = document.getElementById("song-title");
const songArtist = document.getElementById("song-artist");
const volumeControl = document.getElementById("volume-control");

let audio = new Audio(); // Instancia o objeto de áudio
let isPlaying = false; // Controle se a música está tocando
let currentTrackIndex = 0; // Índice da faixa atual
let tracks = [
    {src: "../../assets/audio/FKJ - So Much to Me.mp3", title: "So Much To Me", artist: "FKJ"},
    {src: "path/to/song2.mp3", title: "Música 2", artist: "Artista 2"},
    {src: "path/to/song3.mp3", title: "Música 3", artist: "Artista 3"}
];

// Função para carregar e tocar a música
function loadTrack(index) {
    audio.src = tracks[index].src;
    songTitle.innerText = tracks[index].title;
    songArtist.innerText = tracks[index].artist;
    audio.load();
    audio.play();
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
    isPlaying = true;
}

// Função para alternar entre play e pause
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

// Função para avançar para a próxima faixa
function nextTrack() {
    currentTrackIndex = (currentTrackIndex + 1) % tracks.length;
    loadTrack(currentTrackIndex);
}

// Função para voltar para a faixa anterior
function prevTrack() {
    currentTrackIndex = (currentTrackIndex - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrackIndex);
}

// Função para atualizar a barra de progresso da música
audio.ontimeupdate = function() {
    let progress = (audio.currentTime / audio.duration) * 100;
    progressBar.style.width = progress + "%";
    progressBar.setAttribute('aria-valuenow', progress);
};

// Função para controlar o volume
volumeControl.oninput = function() {
    audio.volume = volumeControl.value / 100;  // Ajusta o volume
};

// Adicionando eventos para os botões
playPauseBtn.addEventListener('click', togglePlayPause);
prevTrackBtn.addEventListener('click', prevTrack);
nextTrackBtn.addEventListener('click', nextTrack);

// Inicializa o player com a primeira música
loadTrack(currentTrackIndex);
