<?php
session_start();
include_once('redes/conexao.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: login.php');
    exit();
}

$nome = mysqli_real_escape_string($conexao,$_POST['nome']);
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select id, nome, email from usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    $_SESSION['nome'] = $nome;
    header('Location: painel.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: login.php');
    exit();
}

?>