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

        $query = $conexao->prepare("SELECT * FROM publicacao ORDER BY cod DESC");
        $query->execute();
        $get = $query->get_result();
        $publicacao = $get->fetch_array();
        $cod = $_GET['cod'];
    
    ?>
    <div>
        <h1><?php echo $publicacao['titulo'];"</h1>"
        echo $publicacao['descricao'] . "<br>";
        echo $publicacao['imagem'] . "<br>";
        echo $publicacao['data'] . " - ";
        echo $publicacao['hora'];
        ?>
    </div>
</body>
</html>