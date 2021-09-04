<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style-log.css">
    <title>Ebana | Entrar</title>
</head>
<body>
    <div id="logo">
        <a href="index.php"> <img src="img/global/logo.png" alt=""></a>
        </div>
    <fieldset>
        <form action="connections/procLogin.php" method="POST">
        <h1 id="login_title"><strong>ENTRE COM SUA CONTA EBANA</strong></h1>
        <?php
        if(isset($_SESSION['logup_done'])):
        ?>
        <h2 id="cadsu">Cadastro feito com sucesso!</h2>
        <h3 id="cadde">Agora é só entrar e aproveitar nossos descontos</h3>
        <?php
        unset($_SESSION['logup_done']);
        endif;
        ?>
        <p>E-mail</p>
        <input type="email" name="email" class="campo" maxlength="50" required >
        <p>Senha</p>
        <input type="password" name="senha" class="campo" maxlength="20" required><br>
        <?php
        if(isset($_SESSION['unauthenticated'])):
        ?>
        <p>Usuário ou senha inválida</p>
        <?php
        unset($_SESSION['unauthenticated']);
        endif;
        ?>
        <input type="submit" value="Entrar" id="btn">
        </form>
    </fieldset>
</body>
</html>