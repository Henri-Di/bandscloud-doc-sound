// Função para formatar o tempo em minutos:segundos
function formatTime(time) {
    const minutes = Math.floor(time / 60);
    const seconds = Math.floor(time % 60);
    return `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
}

// Função para atualizar a porcentagem do volume
function updateVolumePercentage(audio, volumePercentage) {
    const volumePercentageValue = Math.round(audio.volume * 100); // Converte o valor do volume para porcentagem
    volumePercentage.textContent = `${volumePercentageValue}%`; // Exibe a porcentagem
}

// Função para configurar o player de áudio
function setupAudioPlayer(player) {
    const audio = player.querySelector('.audio');
    const playPauseBtn = player.querySelector('.play-pause-btn');
    const seekBar = player.querySelector('.seek-bar');
    const currentTimeEl = player.querySelector('.current-time');
    const durationEl = player.querySelector('.duration');
    const volumeControl = player.querySelector('#volumeControl'); // O controle de volume
    const volumePercentage = player.querySelector('#volumePercentage'); // O span para a porcentagem de volume

    // Play/Pause
    playPauseBtn.addEventListener('click', () => {
        if (audio.paused) {
            audio.play();
            playPauseBtn.textContent = '⏸'; // Pausa
        } else {
            audio.pause();
            playPauseBtn.textContent = '▶'; // Play
        }
    });

    // Atualiza o progresso do áudio
    audio.addEventListener('timeupdate', () => {
        const currentTime = audio.currentTime;
        const duration = audio.duration || 0;

        seekBar.value = (currentTime / duration) * 100 || 0;
        currentTimeEl.textContent = formatTime(currentTime);
    });

    // Atualiza a duração após o carregamento dos metadados
    audio.addEventListener('loadedmetadata', () => {
        durationEl.textContent = formatTime(audio.duration);
        seekBar.max = audio.duration;
        updateVolumePercentage(audio, volumePercentage); // Inicializa a porcentagem do volume
    });

    // Busca (seek) o ponto de reprodução
    seekBar.addEventListener('input', () => {
        const duration = audio.duration || 0;
        audio.currentTime = (seekBar.value / 100) * duration;
    });

    // Controle de volume
    volumeControl.addEventListener('input', () => {
        audio.volume = volumeControl.value; // Define o volume do áudio com base no controle
        updateVolumePercentage(audio, volumePercentage); // Atualiza a porcentagem do volume
    });

    // Atualiza a porcentagem do volume no carregamento inicial
    updateVolumePercentage(audio, volumePercentage); // Garante que a porcentagem esteja correta ao carregar
}

// Seleciona todos os players de áudio e configura-os
document.querySelectorAll('.audio-player').forEach(player => {
    setupAudioPlayer(player);
});
