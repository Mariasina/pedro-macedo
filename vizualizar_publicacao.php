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
        <?php
        echo $publicacao['data'] . " - ";
        echo $publicacao['hora'];
        ?>
    </div>
</body>
</html>