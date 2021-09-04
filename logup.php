<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/global/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./styles/style-log.css">
    <title>Ebana | Cadastrar</title>
</head>
<body>
    <div id="logo">
        <a href="index.php"> <img src="img//global/logo.png" alt=""></a>
        </div>
    <fieldset>
        <form action="connections/syncDB.php" method="POST">
        <h1 id="logup_title"><strong>FAÇA O SEU CADASTRO</strong></h1>
        <p id="logup_sub">E APROVEITE VÁRIOS DESCONTOS!</p>
        <p>Nome</p> 
        <input type="text" name="nome" class="campo" maxlength="40" required autofocus>
        <p>E-mail</p>
        <input type="email" name="email" class="campo" maxlength="50" required >
        <p>Senha</p>
        <input type="password" name="senha" class="campo" maxlength="20" required><br>
        <?php
        if(isset($_SESSION['already_exist'])):
        ?>
        <p >E-mail já cadastrado, clique <a href="login.php" >aqui</a> para entrar</p>
        <?php
        unset($_SESSION['already_exist']);
        endif;
        ?>
        <input type="submit" value="Cadastrar" id="btn">
        </form>
    </fieldset>
</body>
</html>