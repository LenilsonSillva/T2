<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nome,email,senha) values ('$nome','$email',md5('$senha'))";
$salvar = mysqli_query($conexao,$sql);

header('Location: ../painel.php');

mysqli_close($conexao);

?>