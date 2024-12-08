<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>BandsCloud | Portal de Música</title>
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
    <link rel="stylesheet" href="./assets/css/index-bands-cloud.css">
</head>
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
            <h3>Acessar</h3>
                <div class="container form-login-bands-cloud">
                <form>
                    <label>E-mail</label>
                    <input type="email" name="email" id="input-form-bands-cloud" required>

                    <label>Senha</label>
                    <input type="password" name="email" id="input-form-bands-cloud" required>

                    <button type="submit" id="btn-color-form-bands-cloud" onclick="window.location.href='./pages/painel-controle/painel-controle-usuario-page-feed-bands-cloud.php';">Acessar</button>
                </form>

                    <h4>OU ACESSE</h4>
                     
                    <div class="container icons-login-bands-cloud"> 
                    <i class="fab fa-facebook-f" id="icon-login-form-bands-cloud" onclick="window.location.href='./pages/painel-controle/painel-controle-usuario-page-feed-bands-cloud.php';"></i>
                    <i class="fab fa-instagram" id="icon-login-form-bands-cloud" onclick="window.location.href='./pages/painel-controle/painel-controle-usuario-page-feed-bands-cloud.php';"></i>
                    <i class="fab fa-google" id="icon-login-form-bands-cloud" onclick="window.location.href='./pages/painel-controle/painel-controle-usuario-page-feed-bands-cloud.php';"></i>
                    <i class="fab fa-linkedin-in" id="icon-login-form-bands-cloud" onclick="window.location.href='./pages/painel-controle/painel-controle-usuario-page-feed-bands-cloud.php';"></i>
                    </div>
                </div>
        </div>

        <div class="col-4">
            <h3>Cadastre-se</h3>
            <div class="container form-login-bands-cloud">
                <form>
                    <label>Nome Completo</label>
                    <input type="text" name="nome" id="input-form-bands-cloud" required>

                    <label>E-mail</label>
                    <input type="email" name="email" id="input-form-bands-cloud" required>

                    <label>Senha</label>
                    <input type="password" name="senha" id="input-form-bands-cloud" required>

                    <label>Confirmar Senha</label>
                    <input type="password" name="confirmarsenha" id="input-form-bands-cloud" required>

                    <button type="submit" id="btn-color-form-bands-cloud">Cadastrar</button>
                </form>
                </div>
        </div>
    </div>
</div>