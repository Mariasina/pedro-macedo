<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUINDO PUBLICAÇÃO</title>
    <link rel = "stylesheet" href = "css/popup.css">
</head>
<body>

    ATENÇÃO VOCÊ ESTÁ PRESTES A EXCLUIR UMA PUBLICAÇÃO, VOCÊ TEM CERTEZA DISSO?

    <a href = "area_publicacao.php"> 
        Não, Voltar. 
    <a href="bd/excluir_pub.php?cod=<?php echo $row_usuario['cod'];?>" name ="excluir" class = "w-10 btn btn-lg btn-primary rounded-5">
         Sim, Excluir.
    </a>
    
</body>
</html>