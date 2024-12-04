<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>BandsCloud | Feed</title>
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
    <link rel="stylesheet" href="../../assets/css/painel-controle-usuario-feed-bg-color-bands-cloud-art.css">

            <!-- Estilo do Loader (CSS) -->
    <style>
/* Loader CSS */
#loader {
    position: fixed; /* Fixa o loader no centro da tela */
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 9999; /* Coloca o loader à frente de todos os outros elementos */
    background: #fff; /* Fundo branco */
    display: flex; /* Usa Flexbox para centralizar o conteúdo */
    align-items: center; /* Centraliza verticalmente */
    justify-content: center; /* Centraliza horizontalmente */
    gap: 10px;
}

/* Cada spinner será uma div com animação */
.loader-spinner {
    width: 20px; /* Largura fixa para a barra */
    height: 80px; /* Altura inicial do loader */
    background: #f3f3f3; /* Cor de fundo cinza */
    border-radius: 10px; /* Bordas arredondadas para parecer uma barra */
    animation: grow-shrink 3s ease-in-out infinite, rainbow 4s linear infinite; /* Animações para crescimento e mudança de cor */
}

/* Atraso escalonado para os elementos do loader (7 divs) */
.loader-spinner:nth-child(1) {
    animation-delay: 0s;
}

.loader-spinner:nth-child(2) {
    animation-delay: 0.2s;
}

.loader-spinner:nth-child(3) {
    animation-delay: 0.4s;
}

.loader-spinner:nth-child(4) {
    animation-delay: 0.6s;
}

.loader-spinner:nth-child(5) {
    animation-delay: 0.8s;
}

.loader-spinner:nth-child(6) {
    animation-delay: 1s;
}

.loader-spinner:nth-child(7) {
    animation-delay: 1.2s;
}

/* Animação de crescimento e encolhimento vertical (ajustado para uma variação mais suave) */
@keyframes grow-shrink {
    0% { height: 80px; transform: scaleY(1); }  /* Tamanho inicial */
    25% { height: 100px; transform: scaleY(1.1); } /* Aumento suave */
    50% { height: 120px; transform: scaleY(1.2); } /* Máximo de altura */
    75% { height: 100px; transform: scaleY(1.1); } /* Retorna para um tamanho menor */
    100% { height: 80px; transform: scaleY(1); } /* Retorna ao tamanho original */
}

/* Animação de arco-íris (mudança de cor entre BlueViolet e Laranja) */
@keyframes rainbow {
    0% { background-color: #8a2be2; }   /* BlueViolet - cor inicial */
    16% { background-color: #7a3fbe; }  /* Variante mais escura de BlueViolet */
    33% { background-color: #6a1d9e; }  /* Variante roxa escura */
    50% { background-color: #ff7f00; }  /* Laranja */
    66% { background-color: #ff4500; }  /* Laranja avermelhado */
    83% { background-color: #ff6347; }  /* Tom de laranja mais suave */
    100% { background-color: #8a2be2; } /* Retorna ao BlueViolet original */
}

    </style>
</head>

<body>
    <!-- Loader: Elemento de carregamento exibido até que a página seja totalmente carregada -->
    <div id="loader">
        <div class="loader-spinner"></div>
        <div class="loader-spinner"></div>
        <div class="loader-spinner"></div>
        <div class="loader-spinner"></div>
        <div class="loader-spinner"></div>
        <div class="loader-spinner"></div>
        <div class="loader-spinner"></div>
    </div>
    <!-- Scripts JavaScript -->
        <!-- JavaScript para gerenciar o loader -->
        <script>
        // Executa quando o DOM estiver carregado
        document.addEventListener("DOMContentLoaded", function() {
            // Após todos os elementos da página estarem carregados
            window.onload = function() {
                // Definir um tempo para o loader desaparecer, mesmo que a página esteja carregada
                setTimeout(function() {
                    var loader = document.getElementById("loader");
                    loader.style.display = "none"; // Esconde o loader
                }, 3000); 
            }
        });
    </script>
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
            <h3><i class="fas fa-music"></i> Feed BandsCloud</h3>

            <h5>Novos Artistas</h5>
            <div class="box-new-artistas-feed-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>

                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
            </div>

            <h5>Nova Publicação</h5>
            <div class="publicacao-feed-bands-cloud">
            <textarea placeholder="Compartilhe no bandscloud"></textarea>

            <div class="box-btn-publicacao-feed-bands-cloud">
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            </div>

            <div class="box-btn-publicacao-feed-bands-cloud">
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            <button class="btn-publicacao-feed-bands-cloud"><i class="fas fa-music"></i></button>
            </div>
        </div>

            <h5>Linha do Tempo</h5>
            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 1</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-comment"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>

            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 2</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>

            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 3</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>

            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 4</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>

            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 5</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>


            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 6</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>

            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 7</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>


            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 8</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>

            <div class="publicacao-feed-linha-tempo-bands-cloud">
                <div class="card-box-new-artistas-feed-bands-cloud">
                    <img src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                </div>
                <p id="title-name-user-feed-linha-tempo-bands-cloud">Artista 9</p>
            </div>

            <div class="publicacao-feed-linha-tempo-artista-bands-cloud">
                <div class="box-publicacao-feed-linha-tempo-bands-cloud">
                    <div class="row">
                        <div class="col" id="col-publicacao-feed-linha-tempo-bands-cloud">
                            <img  class="img-publicacao-feed-bands-cloud" src="../../assets/images/banner-img-color-linha-tempo-bands-cloud-1.jpg"/>
                        </div>
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>

                        
                        <div class="col" id="col-2-publicacao-feed-linha-tempo-bands-cloud">
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                            <div class="line-publicacao-feed-bands-cloud"></div>
                        </div>
                    </div>
                </div>
                <div class="box-btn-publicacao-feed-bands-cloud">
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-up"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-thumbs-down"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-beam"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-hearts"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-grin-squint-tears"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-surprise"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-tired"></i></button>
                    <button class="btn-bg-publicacao-feed-bads-cloud"><i class="fas fa-angry"></i></button>
                </div>
            </div>
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
            <button class="menu-restrito-bands-cloud"><i class="fas fa-music"></i> PLAYLISTS</button>
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


</body>
</html>
