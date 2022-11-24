<?php
    session_start();
    include('bd/verifica_login.php');

    //variáveis para mostrar as informações e edita-las
    $cod = $_GET['cod'];
    $query = $conexao->prepare("SELECT * FROM publicacao WHERE cod = ?");
    $query->bind_param('s', $cod);
    $query->execute();
    $get = $query->get_result();
    $publicacao = $get->fetch_assoc();  
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
    Editando Publicação
</div>
<div class = "corpo">

    <form action="bd/edit_pub.php?cod=<?php echo $cod;?>" method="post">

        <input type="hidden" value="<?=$cod;?>" name="cod" class = "form-control form-control-lg">    
    <!-- TITULO  -->
        <label><h1>Título:</h1></label>
        <input class = "form-control form-control-lg" type="text" name="titulo" placeholder="Título..." value="<?php echo $publicacao['titulo'];?>"> <br>
           
    <!-- IMAGEM  -->

        <div class="mb-3">

            <label for="formFile" class="form-label"></label>
        <h3 class = "texto">Adicione uma imagem para alteração:</h3>
            <input class="form-control" type="file" name="imagem" id="formFile"> <br> <br>
        </div>

     <!-- DESCRICAO  -->

     <h3 class = "texto"> Adicione uma descrição para alteração.</h3>
        <textarea class = "form-control form-control-lg" name="descricao" rows="5" cols = "150" placeholder="Descrição...">
            <?php echo $publicacao['descricao'];?>
        </textarea><br><br/>

    <!-- ENVIAR  -->

        <input class = "btn btn-primary" type="submit" value="Enviar Alterações" name="env" >
    
    </form> 

    <!-- Voltar  -->

    <a href = "area_publicacao.php" class = "voltar">
        <- Voltar
    </a>

</div>
    
</body>
</html>