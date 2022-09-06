<?php 
    include("conexao.php");
    
    //verifica se o usuário está logado, se não, bloqueia o accesso a páginas reestritas
    if(!isset($_SESSION['email']) and !isset($_SESSION['perfil'])){
        header("Location:login.html");
    }
    
    
?>