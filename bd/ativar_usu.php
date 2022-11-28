<?php
    session_start();
    include("conexao.php");

    $cod = $_GET['cod'];

    $sql = "UPDATE usuario SET status = 0 WHERE cod = '$cod'";

    $resultado = mysqli_query($conexao, $sql);

        if($resultado == true){
            header("Location:../usuarios_cadastrados.php");
            
        }
?>