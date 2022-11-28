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
        <title>Cadastros Pendendes</title>
        <link rel = "stylesheet" href = "css/cadastrospendentes.css">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
        <li>
            <a href="usuarios_cadastrados.php">Usuários Cadastrados</a>
        </li>
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
</div> </br>
<!-- Corpo da página -->
    <h1 class = "titulo">Cadastros Pendendes</h1>
<?php
    $pendencia = 1;
    $selecionar = "SELECT * FROM usuario WHERE pendencia = $pendencia";
    $resultado = mysqli_query ($conexao, $selecionar);
                
//variável para mostrar as informações se elas forem pegas com sucesso
    while($row_usuario = mysqli_fetch_assoc($resultado)){
?>
    <div class = "corpo">   
    <div class="d">    
<?php   
    echo "<b>Nome: </b>" . $row_usuario['nome'] . "<br>";
    echo "<b>E-mail: </b>" . $row_usuario['email'] . "<br><br>"; 
?> 
        <a href="bd/aceitar_cad.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
            Aceitar
        </a>
        <a href="bd/negar_cad.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
            Negar
        </a>
    
    </div>
    </div>
    
<?php }?>


</body>
</html>