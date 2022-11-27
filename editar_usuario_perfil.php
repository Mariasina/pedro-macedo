<?php
    session_start();
    include('bd/verifica_login.php');

    //variáveis para mostrar as informações e edita-las
    $cod = $_GET['cod'];
    $query = $conexao->prepare("SELECT * FROM usuario WHERE cod = ?");
    $query->bind_param('s', $cod);
    $query->execute();
    $get = $query->get_result();
    $usuario = $get->fetch_assoc();  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <link rel = "stylesheet" href = "css/edit_pub.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous">
</head>
<body> 
<div class = "titulo">
    Editando Seu Perfil
</div>
<div class = "corpo">

    <form action="bd/edit_usu_perfil.php?cod=<?php echo $cod;?>" method="post">

        <input type="hidden" value="<?=$cod;?>" name="cod" class = "form-control form-control-lg">    
    <!-- nome  -->
        <label><h1>Nome:</h1></label>
        <input class = "form-control form-control-lg" type="text" name="nome" placeholder="Nome..." value="<?php echo $usuario['nome'];?>"> <br>
    
    <!-- email  -->
        <label><h1>E-mail:</h1></label>
        <input class = "form-control form-control-lg" type="email" name="email" placeholder="E-mail..." value="<?php echo $usuario['email'];?>"> <br>
        <div>
        Obs: Você precisará relogar para os dados atualizarem.
        </div><br>

    <!-- ENVIAR  -->

        <input class = "btn btn-primary" type="submit" value="Enviar Alterações" name="env" >
    
    </form> 

    <!-- Voltar  -->

    <a href = "perfil.php" class = "voltar">
        <- Voltar
    </a>

</div>
    
</body>
</html>