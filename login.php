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
    <link rel="stylesheet" href="opc/csspgs.css/logup.css">
    <title>Ebana | Entrar</title>
</head>
<body>
    <div id="logo">
        <a href="index.html"> <img src="img/Sem título.png" alt=""></a>
        </div>
    <fieldset>
        <form action="proc-login.php" method="POST">
        <h1 id="login_title"><strong>ENTRE COM SUA CONTA EBANA</strong></h1>
        <p>E-mail</p>
        <input type="email" name="email" class="campo" maxlength="50" required >
        <p>Senha</p>
        <input type="password" name="senha" class="campo" maxlength="20" required><br>
        <?php
        if(isset($_SESSION['nao_autenticado'])):
        ?>
        <p>Usuário ou senha inválida</p>
        <?php
        unset($_SESSION['nao_autenticado']);
        endif;
        ?>
        <input type="submit" value="Entrar" id="btn">
        </form>
    </fieldset>
</body>
</html>