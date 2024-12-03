<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>BandsCloud | Albúns</title>
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
        <h3><i class="fas fa-music"></i> Albúns</h3>
        <div class="container container-card-play-bands-cloud">
                <div class="row">
                    <!-- Card -->
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
                                
                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">Título da Música</p>
                                    <p id="song-artist">Artista</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim da linha de cards -->
            </div> <!-- Fim do container de cards -->

            <div class="container container-card-play-bands-cloud">
                <div class="row">
                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim da linha de cards -->
            </div> <!-- Fim do container de cards -->

            <div class="container container-card-play-bands-cloud">
                <div class="row">
                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Card -->
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

                                <!-- Controlador de Volume -->
                                 <div class="volume-control d-flex justify-content-center align-items-center mt-3">
                                    <i class="fas fa-volume-down"></i>
                                    <input type="range" id="volume-control" class="volume-slider mx-2" min="0" max="100" value="50">
                                    <i class="fas fa-volume-up"></i>
                                </div>

                                <!-- Detalhes da música (opcional) -->
                                <div class="text-center mt-2">
                                    <p id="song-title">So Much To Me</p>
                                    <p id="song-artist">FKJ</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- Fim da linha de cards -->
            </div> <!-- Fim do container de cards -->
        </div>


        <div class="col-4">
        <h4><i class="fas fa-user"></i> PERFIL</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud"><i class="fas fa-user"></i> INFORMAÇÕES</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-user"></i> ATIVIDADES</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-user"></i> SEGURANÇA</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-user"></i> ASSINATURAS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-user"></i> CONFIGURAÇÕES</button>
        </div>

        <h4><i class="fas fa-leaf"></i> CARREIRA</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud"><i class="fas fa-leaf"></i> EVENTOS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-leaf"></i> PARCERIAS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-leaf"></i> DIVULGAÇÃO</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-leaf"></i> TRABALHOS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-leaf"></i> PAGAMENTOS</button>
        </div>

        <h4><i class="fas fa-music"></i> MÚSICAS</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud"><i class="fas fa-music"></i> ARTISTAS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-music"></i> ALBÚNS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-music"></i> MÚSICAS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-music"></i> VIDEOS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-music"></i> CONFIGURAÇÕES</button>
        </div>

        <h4><i class="fas fa-cloud"></i> CLOUD</h4>
        <div class="container-menu-restrito-bands-cloud">
            <button class="menu-restrito-bands-cloud"><i class="fas fa-cloud"></i> IMAGENS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-cloud"></i> MÚSICAS</button>
            <button class="menu-restrito-bands-cloud"><i Class="fas fa-cloud"></i> VIDEOS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-cloud"></i> CONTATOS</button>
            <button class="menu-restrito-bands-cloud"><i class="fas fa-cloud"></i> DOCUMENTOS</button>
        </div>

        </div>
   </div>

</div>
<!-- Fim da Seção de Perfil do Usuário -->
<script src="../../assets/js/control-sound-page-bands-cloud.js"></script>

</body>
</html>
