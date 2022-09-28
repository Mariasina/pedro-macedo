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
/*<!-- botao pop up-->
<div class="box">
  <!-- mudar o que esta escrito no botao -->
  <a href="#m1-o" class="link-1" id="m1-c">
    editar
  </a>
  
  <!-- Container para abrir o pop up -->
  <div class="modal-container" id="m1-o" style="--m-background: transparent;">
    
    <!--entra dentro do pop up -->
    
    <div class="modal">
      
      <!-- Titulo pop up -->
      
      <h1 class="modal__title">
        Excluir sla oq
      </h1>
      
      <!-- Texto sobre o que se trata o pop up  -->
      
      <p class="modal__text">
        visualizar o que voce quiser que apareça aqui, por sua conta maria
      </p>
      <!-- botao de X/sair -->
      <a href="#m1-c" class="link-2"></a>
    </div>
  </div>
</div>
<!-- /modal 1 -->




<!-- botao pop up-->
<div class="box">
  <!-- mudar o que esta escrito no botao -->
  <a href="#m1-o" class="link-1" id="m1-c">
    excluir
  </a>
  
  <!-- Container para abrir o pop up -->
  <div class="modal-container" id="m1-o" style="--m-background: transparent;">
    
    <!--entra dentro do pop up -->
    
    <div class="modal">
      
      <!-- Titulo pop up -->
      
      <h1 class="modal__title">
        Excluir sla oq
      </h1>
      
      <!-- Texto sobre o que se trata o pop up  -->
      
      <p class="modal__text">
        visualizar o que voce quiser que apareça aqui, por sua conta maria
      </p>
      <!-- botao de X/sair -->
      <a href="#m1-c" class="link-2"></a>
    </div>
  </div>
</div>
<!--/modal 1 -->*/
      ?>
          <button>Editar</button>
          <button>Excluir</button><hr><br>

        <?php
                }
            }   
        ?>
        </div>
        </article>

    </body>
</html>
