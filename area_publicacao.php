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
        <a href="perfil.php">Perfil</a>
        <a href="criar_publicacao.php">Criar uma nova publicação</a>
        <div> 
            <h1>Publicações</h1>
            <?php
                $selecionar = "SELECT * FROM publicacao ORDER BY cod DESC";
                $resultado = mysqli_query ($conexao, $selecionar);
            
                while($row_usuario = mysqli_fetch_assoc($resultado)){

                echo "<hr><h3>" . $row_usuario['titulo'] . "</h3>";
                echo "" . $row_usuario['descricao'] . "<br>"; 
                echo "<img src = '/img/'>" . $row_usuario['imagem'] . "<br>";
                echo "" . $row_usuario['data'] . " - " ;
                echo "" . $row_usuario['hora'];
                
            ?>
                <br><br>
                <button><a href="vizualizar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>">Visualizar</a></button>
                <button><a href="editar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>">Editar</a></button>
                <button><a href="bd/excluir_pub.php?cod=">Inativar</a></button>
                <hr><br>
            <?php
            ;}
            ?>  
        </div>
    </body>
</html>