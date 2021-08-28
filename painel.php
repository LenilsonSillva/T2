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
    <title>Bem-vindo | Ebana Burger</title>
</head>
<body>
    <h1>Olá, <?php echo $_SESSION['email']; ?> </h1>
    <a href="logout.php">sair</a>
</body>
</html>