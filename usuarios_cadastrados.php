<?php
    session_start();
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
        <div class = "centro">
            <article class="z"> 
                <div class="d ">

                    <h1>Usuários Cadastrados</h1>

                </div>
            </article>
        </div>

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
        <article class="z"> 
        <div class="d">   
        <?php   
                echo "Nome:" . $row_usuario['nome'] . "<br>";
                echo "E-mail:" . $row_usuario['email'] . "<br><br>"; 
            
                if($_SESSION['perfil'] == 1){
        ?>
                <!-- title -->
<div class="box">
  <h1 class="box__title">Modals</h1>
  <p class="box__p">Click / Enter the buttons to open modals.</p>
</div>
<!-- /title -->


<!-- modal 1 -->
<div class="box">
  <a href="#m1-o" class="link-1" id="m1-c">Modal 1</a>
  <p class="box__info">Without Background</p>

  <div class="modal-container" id="m1-o" style="--m-background: transparent;">
    <div class="modal">
      <h1 class="modal__title">Modal 1 Title</h1>
      <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
      <button class="modal__btn">Button &rarr;</button>
      <a href="#m1-c" class="link-2"></a>
    </div>
  </div>
</div>
<!-- /modal 1 -->


<!-- modal 2 -->
<div class="box">
  <a href="#m2-o" class="link-1" id="m2-c">Modal 2</a>
  <p class="box__info">With Background (Opacity .4)</p>

  <div class="modal-container" id="m2-o" style="--m-background: hsla(0, 0%, 0%, .4);">
    <div class="modal">
      <h1 class="modal__title">Modal 2 Title</h1>
      <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
      <button class="modal__btn">Button &rarr;</button>
      <button class="modal__btn">Button &rarr;</button>
      <a href="#m2-c" class="link-2"></a>
    </div>
  </div>
</div>
<!-- /modal 2 -->


<!-- modal 3 -->
<div class="box">
  <a href="#m3-o" class="link-1" id="m3-c">Modal 3</a>
  <p class="box__info">With Background Full Opacity</p>

  <div class="modal-container" id="m3-o" style="--m-background: var(--global-background);">
    <div class="modal" style="--m-shadow: 0 0 10rem 0">
      <h1 class="modal__title">Modal 3 Title</h1>
      <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
      <button class="modal__btn">Button &rarr;</button>
      <button class="modal__btn">Button &rarr;</button>
      <a href="#m3-c" class="link-2"></a>
    </div>
  </div>
</div>
<!-- /modal 3 -->


<!-- Note(s) -->
<div class="box">
  <p class="box__note">For users using a mouse, they have to close the modal to be able to click on something else, but for users using a keyboard, they can navigate outside of the modal (when modal is opened). Still need JavaScript for certain <em>things</em> but the pen is about what we can achieve using CSS only, so... and about why I gave the open modal link a unique id(m$-c) is because, when our users will click/enter the close link, I want to send them back to that open link rather than sending them on the top of the page(by setting href="#"). <em>Might</em> be not an issue for users using a mouse <em>(if I am the user, yes it definitely is)</em>, but for users using the keyboard, it definitely is; me just preventing that.</p>
</div>
<!-- /Note(s) -->

<a href="https://abubakersaeed.netlify.app/designs/d8-modals" class="abs-site-link" rel="nofollow noreferrer" target="_blank">abs/designs/d8-modals</a>
                <a href="javascript: abrir();"><button>Editar</button></a>
                <a href="javascript: abrir();"><button>Excluir</button></a><br><br>.

        <?php
                }
            }   
        ?>
        </div>
        </article>

    </body>
</html>
