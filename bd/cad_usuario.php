<?php

    session_start();
    include("conexao.php");

    //cria as variáveis para cadastrar no bd
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);
    $perfil = 2;

    //cadastra as informações no bd
    $sql = "INSERT INTO 
                usuario (nome, email, senha, perfil_cod)
                VALUES
                ('$nome', '$email', '$senha', '$perfil')
            ";
    
    //variável para redirecionar o usuário se o cadastro for feito com sucesso
    $resultado = mysqli_query($conexao, $sql);

    //redirecionamento
    if($resultado == true){
        header("Location:../login.html");
    }

?>
