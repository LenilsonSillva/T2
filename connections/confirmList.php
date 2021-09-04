<?php
include("connectDB.php");


$sql = "SELECT * from usuarios WHERE email = '{$_SESSION['email']}'";

if( $res=mysqli_query($connectDB,$sql)) {
    $nomeCategoria = array();
    $emailCategoria = array();
    $idCategoria = array();
    $i = 0;

    while ( $reg = mysqli_fetch_assoc($res)) {
        $nomeCategoria[$i] = $reg['nome'];
        $emailCategoria[$i] = $reg['email'];
        $idCategoria[$i] = $reg['id'];
    }
}

?>