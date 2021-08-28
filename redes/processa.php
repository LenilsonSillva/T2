<?php
session_start();
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nome,email,senha) values ('$nome','$email',md5('$senha'))";
$salvar = mysqli_query($conexao,$sql);

$row = mysqli_num_rows($salvar);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../login.php');
    exit();
} else {

    $_SESSION['conta_existe'] = true;

    header('Location: ../logup.php');
    exit();
}

mysqli_close($conexao);

?>