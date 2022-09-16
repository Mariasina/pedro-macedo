<?php
    session_start();
    require_once ("conexao.php");

    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];

    $sql = "UPDATE publicacao 
            SET titulo = '$titulo', descricao = '$descricao', data = '$data'";

    echo $sql;
    $resultado = mysqli_query($con, $sql);

    if($resultado == true){
        header("Location:../area_publicacao.php");
    }
?>