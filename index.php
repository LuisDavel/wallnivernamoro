<?php
  include('php/conexao.php');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/favicon.gif">
    <title>Charada</title>
</head>
<body>
    <header class="cabecalho">
        <div class="logo">
            <p>LOGO</p>
        </div>
        <nav class="navbar">
            <ul class="menu">
                <li class="menu__item"><a class="socorro" href="">Inicio</a></li>
                <li class="menu__item"><a class="socorro" href="">Sobre</a></li>
                <li class="menu__item"><a class="socorro" href="https://api.whatsapp.com/send?1=pt_BR&phone=5548998447068">Socorro</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <section class="container__card">
            <section class="menu-login">
                <div class="menu-login__menu"></div>
                <form class="form" method="post" action="php/login-db.php">
                    <div class="form__card">
                        <label for="login">Login >:<abbr title="required">*</abbr></label>
                        <input class="form__card__input" name="nome_login" type="text">
                    </div>
                    <div class="form__card">
                        <label for="login">Senha >:<abbr title="required">*</abbr></label>
                        <input class="form__card__input form__card__input--ultimo" name="password" type="text">
                    </div>
                    <div class="form__card form__card--btt">
                        <button class="btt n"></button>
                    </div>
                    <p class="form__card form__card--white" style="text-decoration: underline;"> <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5548998447068">Ajuda ?</a></p>
<?php
                if(@$_GET['retorno'] == 'erro') {
?>      
                    <p class="form__card form__card--danger" style=" text-decoration: underline;">Errou a senha</p>
<?php
                }
?>
                </form>
            </section>
        </section>
    </main>
</body>
</html>