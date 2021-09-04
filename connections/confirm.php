<?php
include("connectDB.php");


$sql = "SELECT * from usuarios WHERE email = '{$_SESSION['email']}'";

if( $res=mysqli_query($connectDB,$sql)) {
    $nomeCategoria;
    $emailCategoria;
    $idCategoria;
    $i = 0;

    while ( $reg = mysqli_fetch_assoc($res)) {
        $nomeCategoria = $reg['nome'];
        $emailCategoria = $reg['email'];
        $idCategoria = $reg['id'];
    }
}

?>