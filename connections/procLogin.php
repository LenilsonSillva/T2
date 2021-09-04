<?php
session_start();
include_once('connectDB.php');

if(empty($_POST['email']) || empty($_POST['senha'])) {
    header('Location: ../login.php');
    exit();
}

$email = mysqli_real_escape_string($connectDB,$_POST['email']);
$senha = mysqli_real_escape_string($connectDB,$_POST['senha']);

$query = "select id,nome,email from usuarios where email = '{$email}' and senha = md5('{$senha}')";

$result = mysqli_query($connectDB,$query);
$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email'] = $email;
    header('Location: ../painel.php');
    exit();
} else {
    $_SESSION['unauthenticated'] = true;
    header('Location: ../login.php');
    exit();
}

?>