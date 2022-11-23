<?php
    session_start();
    include('bd/verifica_login.php'); 
      
?>
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
    <div class = "corpo">
    <h1>
    ATENÇÃO VOCÊ ESTÁ PRESTES A EXCLUIR UMA PUBLICAÇÃO, VOCÊ TEM CERTEZA DISSO?
    </h1>

    <a href = "area_publicacao.php" class = "btn btn-primary"> 
        Não, Voltar. 
    <a href="bd/excluir_pub.php?cod=<?php echo $row_usuario['cod'];?>" name ="excluir" class = "w-10 btn btn-lg btn-primary rounded-5" class = "btn btn-primary">
         Sim, Excluir.
    </a>
    
    </div>
    
</body>
</html>