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

// Função para avançar para a próxima música
function nextTrack() {
    currentTrackIndex = (currentTrackIndex + 1) % tracks.length; // Vai para o próximo, e reinicia se chegar ao fim
    loadTrack(currentTrackIndex);
}

// Função para retroceder para a música anterior
function prevTrack() {
    currentTrackIndex = (currentTrackIndex - 1 + tracks.length) % tracks.length; // Vai para a música anterior, e vai para o final se estiver no começo
    loadTrack(currentTrackIndex);
}

// Atualiza a barra de progresso durante a reprodução
audio.addEventListener("timeupdate", () => {
    const progress = (audio.currentTime / audio.duration) * 100;
    progressBar.style.width = progress + "%";
});

// Atualiza o volume conforme o controle deslizante é movido
volumeControl.addEventListener("input", () => {
    audio.volume = volumeControl.value / 100;
});

// Função para permitir que o usuário avance ou retroceda pela barra de progresso
progressBar.addEventListener("click", (e) => {
    const rect = progressBar.getBoundingClientRect(); // Obtém as dimensões da barra de progresso
    const clickPosition = e.clientX - rect.left; // Posição do clique dentro da barra
    const progress = (clickPosition / rect.width) * 100; // Percentual de onde o clique aconteceu
    audio.currentTime = (progress / 100) * audio.duration; // Altera o tempo de reprodução
});

// Carrega a primeira faixa ao iniciar a página
loadTrack(currentTrackIndex);

// Event listeners para os botões de controle
playPauseBtn.addEventListener("click", togglePlayPause);
nextTrackBtn.addEventListener("click", nextTrack);
prevTrackBtn.addEventListener("click", prevTrack);
