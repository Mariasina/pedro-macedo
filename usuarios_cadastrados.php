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
            <link rel = "stylesheet" href = "css/popups.css">
            <script src="js/popups.js"></script>
        
        <title>Usuários Cadastrados</title>
    </head>
    <body>
        <header>
        
        </header>
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

            include("bd/conexao.php");

            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }

            $relatorio = "SELECT * FROM usuario";
            $resultado = mysqli_query ($conexao, $relatorio);
            
            while($row_usuario = mysqli_fetch_assoc($resultado)){
        ?>
        <!--Mostra todos os usuários cadastrados e suas informações-->
        <article class="z"> 
        <div class="d">   
        <?php   
                echo "Nome:" . $row_usuario['nome'] . "<br>";
                echo "E-mail:" . $row_usuario['email'] . "<br><br>"; 
            
                //Todos os "if perfil 1" mostram informações que apenas o administrador vê.
                if($_SESSION['perfil'] == 1){
        ?>
<!-- comeco do popup container que faz ele existir-->
<div class="container">
  <!-- usado para que o usuario saiba informações adicionais -->
  <details>
    <!-- existe para que apareça o botão dentro dos <details>, pois caso ele nao tivesse o <button> seria um >> saiba mais e nao um botão -->
 <!-- internet: O elemento HTML summary (<summary>) é utilizado como um sumário ou legenda para o conteúdo de um elemento <details>.-->
    <summary>
      <div class="button">

      <button>Editar</button>
      <button>Excluir</button><br><br>

      </div>
      <div class="details-modal-overlay"></div>
    </summary>
    <div class="details-modal">
      <div class="details-modal-close">
        <!-- abrindo o svg para criar formas bidimensionais e recursos extras como no bootstrap -->
        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
          <!-- adicionando o X no popup -->
          <path fill-rule="evenodd" clip-rule="evenodd" d="M13.7071 1.70711C14.0976 1.31658 14.0976 0.683417 13.7071 0.292893C13.3166 -0.0976311 12.6834 -0.0976311 12.2929 0.292893L7 5.58579L1.70711 0.292893C1.31658 -0.0976311 0.683417 -0.0976311 0.292893 0.292893C-0.0976311 0.683417 -0.0976311 1.31658 0.292893 1.70711L5.58579 7L0.292893 12.2929C-0.0976311 12.6834 -0.0976311 13.3166 0.292893 13.7071C0.683417 14.0976 1.31658 14.0976 1.70711 13.7071L7 8.41421L12.2929 13.7071C12.6834 14.0976 13.3166 14.0976 13.7071 13.7071C14.0976 13.3166 14.0976 12.6834 13.7071 12.2929L8.41421 7L13.7071 1.70711Z" fill="black" />
        </svg>
      </div>
      <div class="details-modal-content">
        <p>
         nomes era p estar aqui
        </p>
      </div>
    </div>
  </details>
</div>
  
                <a href="javascript: abrir();"><button>Editar</button></a>
                <a href="javascript: abrir();"><button>Excluir</button></a><br><br>

        <?php
                }
            }   
        ?>
        </div>
        </article>

    </body>
</html>
