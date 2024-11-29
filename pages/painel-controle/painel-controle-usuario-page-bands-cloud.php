<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>BandsCloud | Painel Usuário</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Links para as bibliotecas externas -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baumans&family=Sofia+Sans+Extra+Condensed:ital,wght@0,1..1000;1,1..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/painel-controle-usuario-bg-color-bands-cloud-art.css">
</head>

<body>

<!-- Início da Seção de Logo -->
<div class="container">
    <div class="box-logo-bands-cloud">
        <span id="logo-bands-cloud-page-art">
            BandsCloud
            <i class="fa fa-cloud" id="icon-bands-cloud-page-art"></i>
        </span>
    </div>
</div>
<!-- Fim da Seção de Logo -->

<!-- Início da Seção de Perfil do Usuário -->
<div class="container">
   <div class="row">
        <!-- Seção de Menu do Perfil -->
        <div class="col-8">
        <div class="container container-card-play-bands-cloud">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim da linha de cards -->
            </div> <!-- Fim do container de cards -->

            <div class="container container-card-play-bands-cloud">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim da linha de cards -->
            </div> <!-- Fim do container de cards -->

            <div class="container container-card-play-bands-cloud">
                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="col-3">
                        <div class="card">
                            <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg" alt="Imagem 1" class="card-img-top" />
                            <div class="box-player-music-bands-cloud">
                                <div class="d-flex justify-content-center align-items-center">
                                    <button class="btn btn-light mx-2" id="prev-track">
                                        <i class="fas fa-backward"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="play-pause">
                                        <i class="fas fa-play"></i>
                                    </button>
                                    <button class="btn btn-light mx-2" id="next-track">
                                        <i class="fas fa-forward"></i>
                                    </button>
                                </div>

                                <!-- Barra de Progresso da Música -->
                                <div class="progress mt-3">
                                    <div id="progress-bar" class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim da linha de cards -->
            </div> <!-- Fim do container de cards -->
        </div>
        <!-- Fim da Seção de Menu do Perfil -->

        <!-- Seção de Cards de Música -->
        <div class="col-4">
        <h4><i class="fas fa-user"></i> PERFIL</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
        </div>

        <h4><i class="fas fa-user"></i> PERFIL</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
        </div>

        <h4><i class="fas fa-user"></i> PERFIL</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
        </div>

        <h4><i class="fas fa-user"></i> PERFIL</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
            <button class="menu-restrito-bands-cloud">MEU PERFIL</button>
        </div>


        </div>
        <!-- Fim da Seção de Cards de Música -->

   </div>

</div>
<!-- Fim da Seção de Perfil do Usuário -->

<!-- Início do Script de Funcionalidade do Player de Música -->
<script>
    // Definições iniciais do player
    const playPauseBtn = document.getElementById("play-pause");
    const prevTrackBtn = document.getElementById("prev-track");
    const nextTrackBtn = document.getElementById("next-track");
    const progressBar = document.getElementById("progress-bar");
    const songTitle = document.getElementById("song-title");
    const songArtist = document.getElementById("song-artist");

    let audio = new Audio(); // Instancia o objeto de áudio
    let isPlaying = false; // Controle se a música está tocando
    let currentTrackIndex = 0; // Índice da faixa atual
    let tracks = [
        {src: "../../assets/audio/FKJ - So Much to Me.mp3", title: "Titulo: So Much To Me", artist: "Artista: FKJ"},
        {src: "path/to/song2.mp3", title: "Música 2", artist: "Artista 2"},
        {src: "path/to/song3.mp3", title: "Música 3", artist: "Artista 3"}
    ];

    // Função para carregar e tocar a música
    function loadTrack(index) {
        audio.src = tracks[index].src;
        songTitle.innerText = tracks[index].title;
        songArtist.innerText = tracks[index].artist;
        audio.load();
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
        audio.play();
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        isPlaying = true;
    }

    // Função para retroceder para a música anterior
    function prevTrack() {
        currentTrackIndex = (currentTrackIndex - 1 + tracks.length) % tracks.length; // Vai para a música anterior, e vai para o final se estiver no começo
        loadTrack(currentTrackIndex);
        audio.play();
        playPauseBtn.innerHTML = '<i class="fas fa-pause"></i>';
        isPlaying = true;
    }

    // Atualiza a barra de progresso durante a reprodução
    audio.addEventListener("timeupdate", () => {
        const progress = (audio.currentTime / audio.duration) * 100;
        progressBar.style.width = progress + "%";
    });

    // Carrega a primeira faixa ao iniciar a página
    loadTrack(currentTrackIndex);

    // Event listeners para os botões de controle
    playPauseBtn.addEventListener("click", togglePlayPause);
    nextTrackBtn.addEventListener("click", nextTrack);
    prevTrackBtn.addEventListener("click", prevTrack);
</script>
<!-- Fim do Script de Funcionalidade do Player de Música -->

</body>
</html>
