<?php
    session_start();
    include("conexao.php");
    
    $cod = $_GET['cod'];

    $sql = "UPDATE usuario SET pendencia = 0 WHERE cod = '$cod'";

    $resultado = mysqli_query($conexao, $sql);

        if($resultado == true){
            header("Location:../aceitar_cadastro.php");
            
        }
?>