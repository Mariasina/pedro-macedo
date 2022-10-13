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

            <link rel = "stylesheet" href = "css/relatorio.css">
     
            
        
        <title>Usuários Cadastrados</title>
        
    </head>
    <body>
        <header>
        
        </header>
        <a href="perfil.php">Perfil</a>
        <!--css do título-->
        <div class = "centro">
            <article class="z"> 
                <div class="d ">

                    <h1>Usuários Cadastrados</h1>

                </div>
            </article>
        </div>

        <!--Pega as informações dos usuários cadastrados e cria uma variável para que sejam exibidos-->
        <?php

            /*if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }*/

            $selecionar = "SELECT * FROM usuario";
            $resultado = mysqli_query ($conexao, $selecionar);
            
            while($row_usuario = mysqli_fetch_assoc($resultado)){
        ?>
        <!--Mostra todos os usuários cadastrados e suas informações-->
        <article class="z"> 
        <div class="d">   
        <?php   
                echo "<hr>Nome:" . $row_usuario['nome'] . "<br>";
                echo "E-mail:" . $row_usuario['email'] . "<br><br>"; 
            
                //Todos os "if perfil 1" mostram informações que apenas o administrador vê.
                if($_SESSION['perfil'] == 1){

      ?>
          <button>Editar</button>
          <button>Inativar</button><hr><br>

        <?php
                }
            }   
        ?>
        </div>
        </article>

    </body>
</html>
