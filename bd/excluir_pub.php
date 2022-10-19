<?php
    session_start();
    include("conexao.php");
      
    //if para excluir publicação apenas se ela foi enviada
    if (isset($_POST['env'])){
        //variáveis para excluir 
        $cod = $_GET['cod'];
        $codi = $cod;

        //deletando o cod da publicação no bd
        $sql = "DELETE FROM publicacao WHERE cod = $codi ";

        //variável para concluir exclusão
        $resultado = mysqli_query($conexao, $sql);

        //redirecionamento se a pulicação for excluida com sucesso
        if($resultado == true){
            echo "foi";
            //header("Location:../area_publicacao.php");
        }
    }
?>