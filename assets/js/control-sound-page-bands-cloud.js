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
    {src: "../../assets/audio/Fkj & June Marieezy - Amsterjam (Offical Video).mp3", title: "Amsterjam", artist: "FKJ"},
    {src: "../../assets/audio/FKJ - Ylang Ylang.mp3", title: "Ylang Ylang", artist: "FKJ"}
];

// Função para carregar a música sem tocar
function loadTrack(index) {
    audio.src = tracks[index].src;
    songTitle.innerText = tracks[index].title;
    songArtist.innerText = tracks[index].artist;
    audio.load(); // Carrega a música
    // Não inicia a música aqui, apenas prepara
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
    audio.play(); // Inicia a reprodução da próxima faixa automaticamente
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>'; // Atualiza o ícone do botão
    isPlaying = true; // Marca que está tocando
}

// Função para voltar para a faixa anterior
function prevTrack() {
    currentTrackIndex = (currentTrackIndex - 1 + tracks.length) % tracks.length;
    loadTrack(currentTrackIndex);
    audio.play(); // Inicia a reprodução da faixa anterior automaticamente
    playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>'; // Atualiza o ícone do botão
    isPlaying = true; // Marca que está tocando
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

// Inicializa o player com a primeira música, mas não toca ainda
loadTrack(currentTrackIndex);
