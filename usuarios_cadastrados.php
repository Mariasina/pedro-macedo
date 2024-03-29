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

        <link rel = "stylesheet" href = "css/usuariocadastro.css">     
        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
            
        
        <title>Usuários Cadastrados</title>
        
    </head>
<body>
    <div class = "cabeça">
        <nav class="bg-light border-bottom">
            <div class="">
                    Painel de Edição
            </div>
        </nav>
    </div>
    <div class="cor">
    <header class = "py-2 mg-2 border-bottom">
    <nav id = "menu-h">
    <ul>

        <!--Mostra o nome do usuário cadastrado--> 
      <span class = fs-4> <b> Olá, <?php echo $_SESSION['nome'];?>!<br/> </b>
        <!--Todos os "if perfil 1" mostram informações que apenas o administrador vê."-->
        <?php if($_SESSION['perfil'] == 1){?>
      <b>  Você é um Administrador. </b> </span>
        <?php }?>
        <!--Links-->
            <li>
                <a href = "perfil.php"> Perfil </a>
            </li>
            <li>
                <a href="index.php">Página inicial</a>
            </li\>
            <li>
                <a href="area_publicacao.php">Área de publicação</a>
            </li>
            <?php if($_SESSION['perfil'] == 1){?>
            <li>
                <a href="usuarios_cadastrados.php">Usuários Cadastrados</a>
            </li>
            <?php }?>
            <?php if($_SESSION['perfil'] == 1){?>
            <li>
                <a href="aceitar_cadastro.php">Aceitar Cadastros Novos</a>
            </li>
            <?php }?>
            <li>
            <a href="bd/logout.php">Sair</a> 
            </li>
        </ul>
    </nav>
    </header> 
    </div> 
           <!--Pega as informações dos usuários cadastrados e cria uma variável para que sejam exibidos-->
<div class = "corpo">
        <h1 class = "titulo">Usuários Cadastrados</h1>
        <?php

            $selecionar = "SELECT * FROM usuario WHERE pendencia = 0";
            $resultado = mysqli_query ($conexao, $selecionar);

            while($row_usuario = mysqli_fetch_assoc($resultado)){
            $status = $row_usuario['status'];
        ?>
        <!--Mostra todos os usuários cadastrados e suas informações-->
    <div class="d">   
        <div class = ""> 
        <?php   
            echo "<b>Nome: </b>" . $row_usuario['nome'] . "<br>";
            echo "<b>E-mail: </b>" . $row_usuario['email'] . "<br>"; 
            if ($status == 1){
                echo "Inativado";
            }
            ?> 
    </div>
        <?php

        //Todos os "if perfil 1" mostram informações que apenas o administrador vê.
            if($_SESSION['perfil'] == 1){

        ?>
    
        <a href="editar_usuario.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
            Editar
        </a>
        <?php if ($status == 0){?>
        <a href = "bd/inativar_usu.php?cod=<?php echo $row_usuario['cod'];?>" class = " w-10 btn btn-lg btn-primary rounded-5">
            Inativar
        </a>
        <?php }?>

        <?php if ($status == 1){?>
        <a href = "bd/ativar_usu.php?cod=<?php echo $row_usuario['cod'];?>" class = " w-10 btn btn-lg btn-primary rounded-5">
            Ativar
        </a>
        <?php }?>
    </div><br>

    <?php
    }
    }   
    ?>
    
</div>
</body>
</html>
