<?php
session_start();
include('veryf_login.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Ebana Burger</title>
</head>
<body>
    <div class="logo"> <a href="index.html"> <img src="img/Sem título.png" alt=""></a>
        <ul>
            <li><form action="login.php">
                    <input type="submit" value="Entrar">
                </form>
            <li><form action="logup.php">
                    <input type="submit" value="Cadastrar">
                </form>
        </ul>
    </div>
    <div class="frontDisplay">
        <h1>Olá, <?php echo $_SESSION['nome'] ?>!</h1>
    </div>
    <div class="opcoes">
        <ul>
            <li>
                <a href="card.html"><img height="100px" width="100px" src="img/imenu.png" alt="Menu"></a>
                <p>Cardápio</p>
            </li>
            <li>
                <a href="delive.html"><img height="100px" width="100px" src="img/deli.png" alt="Dlivery"></a>
                <p>Opções de Delivery</p>
            </li>
            <li>
                <a href="contact.html"><img height="100px" width="100px" src="img/icontact.png" alt="Menu"></a>
                <p>Contatos</p>
            </li>
        </ul>
    </div>
</body>
</html>