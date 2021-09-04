<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "cadastro";
$connectDB = mysqli_connect($hostname,$username,$password,$database);

if ($connectDB -> connect_error) {
    die('conexão falhou: ') . $connectDB -> connect_error;
}
?>