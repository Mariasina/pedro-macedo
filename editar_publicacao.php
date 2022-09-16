<?php
    session_start();
    include('bd/verifica_login.php');

    $cod = $_GET['cod'];
    $sql = "SELECT * FROM publicacao where cod = $cod";
    $result_publicacao = mysqli_query($conexao, $sql);
    $publicacao = mysqli_fetch_array($result_publicacao);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label>Título</label>
        <input type="text" name="titulo" <?= $publicacao['titulo']?>><br>
    <label>Imagem</label>
        <input type="file" name="arquivo" <?= $publicacao['imagem']?>><br>
    <label>Publicação</label>
        <textarea name="descricao" rows="5" <?= $publicacao['descricao']?>></textarea><br> 
</body>
</html>