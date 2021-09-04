<?php
session_start();
include('connections/checkLogin.php');
include('connections/confirm.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css">
    <title>Ebana Burger</title>
</head>
<body>
<div class="logo"> <a href="painel.php"> <img src="img/global/logo.png" alt="logo"></a>
        <form action="connections/logout.php">
            <input type="submit" value="Sair" id="sair">
        </form>
    </div>
    <div class="frontDisplay">
        <h1><strong>OPÇÕES DE DELIVERY</strong></h1>
    </div>
</body>
</html>