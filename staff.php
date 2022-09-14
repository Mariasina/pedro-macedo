<?php
    session_start();
        include('bd/verifica_login.php');   
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Painel do Administrador</title>
    </head>
    <body>
        
        <!--Mostra o nome do usuário cadastrado--> 
        Olá, <?php echo $_SESSION['nome'];?><br>
        <!--Todos os "if perfil 1" mostram informações que apenas o administrador vê."-->
        <?php if($_SESSION['perfil'] == 1){?>
        Você é um Administrador.<br>
        <?php }?>
        <!--Links-->
        <a href="area_publicacao.php">Área de publicação</a>
        <a href="usuarios_cadastrados.php">Usuários Cadastrados</a>
        <?php if($_SESSION['perfil'] == 1){?>
        <a href="aceitar_cadastro.php">Aceitar Cadastros Novos</a>
        <?php }?>
        <a href="bd/logout.php">Sair</a> 
    </body>
</html>