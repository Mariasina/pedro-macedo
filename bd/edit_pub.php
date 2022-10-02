<?php
    session_start();
    include ("conexao.php");

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE publicacao 
            SET titulo = '$titulo', descricao = '$descricao'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado == true){
        header("Location:../area_publicacao.php");
    }

?>