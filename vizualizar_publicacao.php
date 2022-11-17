<?php
    session_start();
    include("bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicação</title>
</head>
<body>
    <?php 

        $cod = $_GET['cod'];
        $query = $conexao->prepare("SELECT * FROM publicacao WHERE cod = ?");
        $query->bind_param('s', $cod);
        $query->execute();
        $get = $query->get_result();
        $publicacao = $get->fetch_assoc();
    
    ?>
    <div>
        <h1><?php echo $publicacao['titulo'];?></h1>
        <?php echo $publicacao['descricao'] . "<br>";
        if  ((isset($publicacao['imagem'])) &&  (!empty($publicacao['imagem']))){ ?>
            <img src="pedro_macedo/<?php echo $publicacao['imagem'];} ?>"/><br>
        
        <!--botões-->
        <div class = "acoes">
            <!--php para criar o cod da pub na url-->
            <a href="vizualizar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
                Visualizar
            </a>
            <a href="editar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
                Editar
            </a>
            <a href="bd/excluir_pub.php?cod=<?php echo $row_usuario['cod'];?>" name ="excluir" class = "w-10 btn btn-lg btn-primary rounded-5">
                Excluir
            </a>
        </div>
        <?php
        switch($publicacao){
            case "1":{echo "noticias"; break;}
        }
        echo $publicacao['data'] . " - ";
        echo $publicacao['hora'];
        ?>
    </div>
</body>
</html>