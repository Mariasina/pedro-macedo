<?php
    session_start();
    include("conexao.php");

    //if para editar a publicção apenas se ela foi enviada
    if (isset($_POST['env'])){
        //criando as variáves para criar uma postagem
        $cod = $_GET['cod'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $codi = $cod;

        //pegando as informações do bd
        $sql = "UPDATE publicacao SET titulo = '$titulo', descricao = '$descricao' WHERE cod = '$codi'";

        //variável para concluir a edição
        $resultado = mysqli_query($conexao, $sql);

        //redirecionamento se a pulicação for editada com sucesso
        if($resultado == true){
            header("Location:../area_publicacao.php");
            
        }
    }
?>