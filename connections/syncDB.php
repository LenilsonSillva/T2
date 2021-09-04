<?php

session_start();

include_once("connectDB.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select id, nome, email from usuarios where email = '{$email}'";

$result = mysqli_query($connectDB,$query);
$row = mysqli_num_rows($result);

if ($row == 0) {

    $sql = "insert into usuarios (nome,email,senha) values ('$nome','$email',md5('$senha'))";
    $salvar = mysqli_query($connectDB,$sql);

    $_SESSION['logup_done'] = true;
    header('Location: ../login.php');

    exit();
} else{

    $_SESSION['already_exist'] = true;
    header('Location: ../logup.php');

    exit();
}

mysqli_close($connectDB);

?>