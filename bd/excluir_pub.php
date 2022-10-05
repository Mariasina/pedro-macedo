<?php
    session_start();
    include ("conexao.php");
        
    $cod = $_GET['cod'];

    $sql = "DELETE FROM publicacao WHERE cod = $cod ";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado == true){
        header("Location:../area_publicacao.php");
    }
    
?>