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
    <link rel="shortcut icon" href="img/global/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title>Bem-vindo | Ebana Burger</title>
</head>
<body>
    <div class="logo"> <a href="painel.php"> <img src="img/global/logo.png" alt="logo"></a>
        <form action="connections/logout.php">
            <input type="submit" value="Sair" id="sair">
        </form>
    </div>
    <div class="frontDisplay">
        <h1>Olá, <?php 
       for( $j = 0; $j < strlen($nomeCategoria); $j++ ) {
           if ( $nomeCategoria[$j] != " ") {
            echo $nomeCategoria[$j];
           } else {
               break;
           }
       }
        ?>!</h1>
    </div>
    <div class="opcoes">
        <ul>
            <li>
                <a href="card.php"><img height="100px" width="100px" src="img/index/imenu.png" alt="Menu"></a>
                <p>Cardápio</p>
            </li>
            <li>
                <a href="opcDelivery.php"><img height="100px" width="100px" src="img/index/deli.png" alt="Dlivery"></a>
                <p>Opções de Delivery</p>
            </li>
            <li>
                <a href="contact.php"><img height="100px" width="100px" src="img/index/icontact.png" alt="Menu"></a>
                <p>Contatos</p>
            </li>
        </ul>
    </div>
</body>
</html>