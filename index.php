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
            <h3>Acessar</h3>
                <div class="container form-login-bands-cloud">
                <form>
                    <label>E-mail</label>
                    <input type="email" name="email" id="input-form-bands-cloud" required>

                    <label>Senha</label>
                    <input type="password" name="email" id="input-form-bands-cloud" required>

                    <button type="submit" id="btn-color-form-bands-cloud">Acessar</button>
                </form>

                    <h4>OU ACESSE</h4>
                     
                    <div class="container icons-login-bands-cloud"> 
                    <i class="fab fa-facebook-f" id="icon-login-form-bands-cloud"></i>
                    <i class="fab fa-instagram" id="icon-login-form-bands-cloud"></i>
                    <i class="fab fa-google" id="icon-login-form-bands-cloud"></i>
                    <i class="fab fa-linkedin-in" id="icon-login-form-bands-cloud"></i>
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