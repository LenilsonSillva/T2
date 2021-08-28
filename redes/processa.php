<?php
session_start();
include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select id, nome, email from usuarios where email = '{$email}'";

$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row == 0) {

    $sql = "insert into usuarios (nome,email,senha) values ('$nome','$email',md5('$senha'))";
    $salvar = mysqli_query($conexao,$sql);

    $_SESSION['cadastro_feito'] = true;
    header('Location: ../login.php');

    exit();
} else {

    $_SESSION['conta_existe'] = true;
    header('Location: ../logup.php');
    
    exit();
}

mysqli_close($conexao);

?>