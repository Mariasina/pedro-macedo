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
    <title>Criar Publicação</title>
</head>
<body>
    <form action="bd/criar_pub.php" method="post">
        <label>Título</label>
            <input type="text" name="titulo"><br>
        <label>Imagem</label>
            <input type="file" name="arquivo"><br>
        <label>Publicação</label>
            <textarea name="post" rows="5"></textarea><br> 
        <input type="submit" value="Enviar Publicação">
    </form>
</body>
</html>
