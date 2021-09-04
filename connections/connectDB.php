<?php

$hostname = "localhost";
$username = "306598";
$password = "sinho123";
$database = "306598";
$connectDB = mysqli_connect($hostname,$username,$password,$database);

if ($connectDB -> connect_error) {
    die('conexão falhou: ') . $connectDB -> connect_error;
}
?>