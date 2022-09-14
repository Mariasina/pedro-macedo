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
        <title>Área de publicação</title>
    </head>
    <body>
        <a href="criar_publicacao.php">Criar uma nova publicação</a>
        <hr>
        <div> 
            <h4>Título</h4>
            <img>
            <div>
                Descrição da publicação. Descrição da publicação. Descrição da publicação. Descrição da publicação. Descrição da publicação. Descrição da publicação. Descrição da publicação. Descrição da publicação. 
            </div><br>
            <div>
                <button>Leia mais</button>
            </div>
        </div>
        <hr>
    </body>
</html>