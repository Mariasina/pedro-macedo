<?php
    session_start();

    //termina a sessão do usuário e redireciona para a página de login
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    unset($_SESSION['perfil']);
    session_destroy();

    header('location:../login.php');
    
?>