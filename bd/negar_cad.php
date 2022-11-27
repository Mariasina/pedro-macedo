<?php
    session_start();
    include("conexao.php");

    $cod = $_GET['cod'];
    $sql = "DELETE FROM usuario WHERE cod = $cod";

    //variável para concluir exclusão
    $resultado = mysqli_query($conexao, $sql);

    //redirecionamento se a pulicação for excluida com sucesso
    if($resultado == true){
        header("Location:../aceitar_cadastro.php");
        
    }
?>