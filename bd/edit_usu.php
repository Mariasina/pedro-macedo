<?php
    session_start();
    include("conexao.php");

    //if para editar a publicação apenas se ela foi enviada
    if (isset($_POST['env'])){
        //criando as variáves para criar uma postagem
        $cod = $_GET['cod'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $codi = $cod;

        $sql = "UPDATE usuario SET nome = '$nome', email = '$email' WHERE cod = '$codi'";

        //variável para concluir a edição
        $resultado = mysqli_query($conexao, $sql);

        //redirecionamento se a pulicação for editada com sucesso
        if($resultado == true){
            header("Location:../usuarios_cadastrados.php");
            
        }
    }
?>