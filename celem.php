<?php
    session_start();
    include('bd/conexao.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <title>
            CELEM Pedro Macedo
        </title>
        <link rel="stylesheet" href="css/todaspagcolegio.css">
        
	<!-- Linkando css e js com Bootstrap -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
 crossorigin="anonymous"> </script>

    <!-- Fim do link do bootstrap -->
    </head>
    <body>
<!--Painel de edição-->
<?php if (isset($_SESSION['cod'])){?>
<div class = "cabeça">
        <nav class="bg-light border-bottom">
            <div class="">
                    Painel de Edição
            </div>
        </nav>
</div>
<div class="cor">
    <header class = "py-2 mg-2 border-bottom">
    	<nav id = "menu-h">
    		<ul>

        	<!--Mostra o nome do usuário cadastrado--> 
      			<span class = fs-6> <b> Olá, <?php echo $_SESSION['nome'];?>!<br/> </b>
       		<!--Todos os "if perfil 1" mostram informações que apenas o administrador vê."-->
        		<?php if($_SESSION['perfil'] == 1){?>
      				<b>  Você é um Administrador. </b> </span>
       			 <?php }?>
        	<!--Links-->
				<li class = "li">
					<a href = "perfil.php"> Perfil </a>
				</li>
				<li class = "li">
					<a href="index.php">Página inicial</a>
				</li>
				<li class = "li">
					<a href="area_publicacao.php">Área de publicação</a>
				</li>
				<?php if($_SESSION['perfil'] == 1){?>
				<li class = "li">
					<a href="usuarios_cadastrados.php">Usuários Cadastrados</a>
				</li>
				<?php }?>
				<?php if($_SESSION['perfil'] == 1){?>
				<li class = "li">
					<a href="aceitar_cadastro.php">Aceitar Cadastros Novos</a>
				</li>
				<?php }?>
				<li class = "li">
				<a href="bd/logout.php">Sair</a> 
				</li>
        	</ul>
    	</nav>
    </header> 
</div> <br/>
<?php } ?>
<!--Fim painel de edição-->
 <!-- Começo Cabeçalho Duplo -->

<div class = "cabeça">
    <nav class="py-2 bg-light border-bottom">
      <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
          <div class="logocentro">
          <li class="nav-item"><a href= "https://www.areadoaluno.seed.pr.gov.br/" class="nav-link link-dark px-2 active" aria-current="page">
              <img src = "img/logopres.jfif" class = "prlogo">
          </a></li>
          </div>
        </ul>
      </div>
    </nav>
      <header class="py-3 mb-4 border-bottom" >
          <div class="container d-flex flex-wrap justify-content-center">
            <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
              <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
              <img src = "img/pedromacedo.png" alt = "logo do colégio" class = "logo">
              <span class="fs-4">
                  <b class = "nome">Colégio Estadual</b> <br/> 
                  <b class = "nome2">Pedro Macedo </b>
              </span>
            </a>
            
          </div>
          
        </header>
      </div>
      
        <!-- fim cabeçalho duplo -->
         <!-- Começo Menu-->
<svg xmlns="http://www.w3.org/2000/svg"  hidden>
	<symbol id="arrow" viewbox="0 0 16 16" >
		<polyline points="4 6, 8 10, 12 6" stroke="#000" stroke-width="2" fill="transparent" stroke-linecap="round" />
	</symbol>
</svg>
<nav id="site-navigation" class="site-navigation" aria-label="Clickable Menu Demonstration">
	<ul class="main-menu clicky-menu no-js">
		<li>
			<a href="noticias.php">Notícias</a>
		</li>
		<li>
			<a href="historiacolegio.php">História</a>
		</li>
		<li>
			<a href="#">
				Modalidades de Ensino
				<svg aria-hidden="true" width="16" height="16">
					<use xlink:href="#arrow" />
				</svg>
			</a>
			<ul>
				<li><a href="fundamental.php">Fundamental</a></li>
				<li><a href="medio.php">Médio</a></li>
				<li><a href="profissionalizante.php">Profissionalizante</a></li>
				<li><a href="celem.php">CELEM</a></li>
			</ul>
		</li>
		<li>
			<a href="#">
				Equipe
				<svg aria-hidden="true" width="16" height="16">
					<use xlink:href="#arrow" />
				</svg>
			</a>
			<ul>
				<li><a href="direcao.php">Direção</a></li>
				<li><a href="secretaria.php">Secretaria</a></li>
				<li><a href="equipemultidisciplinar.php">Equipe Multidisciplinar</a></li>
				<li><a href="espacodoprofessor.php">Espaço do Professor</a></li>
			</ul>
		</li>
		<li>
			<a href="#">
				Fotos
				<svg aria-hidden="true" width="16" height="16">
					<use xlink:href="#arrow" />
				</svg>
			</a>
			<ul>
				<li><a href="colegio.php">Colégio</a></li>
				<li><a href="professores.php">Professores</a></li>
				<li><a href="eventos.php">Eventos</a></li>
				<li><a href="cursos.php">Cursos</a></li>
			</ul>
		</li>
		<li>
		<a href="#">
				Outros
				<svg aria-hidden="true" width="16" height="16">
					<use xlink:href="#arrow" />
				</svg>
		</a>
			<ul>
				<li><a href="calendario2022.php">Calendário 2022</a></li>
				<li><a href="materialpara6anos.php">Material Para 6º Anos</a></li>
				<li><a href="bibliotecacpm.php">Biblioteca CPM</a></li>
				<li>
			</ul>
		</li>
	</ul>
</nav>
<!-- Fim Menu-->
<!--Publicações-->
<div>
	<?php 
	 	
        //pega as informações do bd
		$pagina = 5;
        $selecionar = "SELECT * FROM publicacao WHERE pagina = $pagina ORDER BY cod DESC";
         //cria uma variavel para pegar as informações
         $resultado = mysqli_query ($conexao, $selecionar);
                
        //variável para mostrar as informações se elas forem pegas com sucesso
        while($row_usuario = mysqli_fetch_assoc($resultado)){ 
	?>

        <div class = "pub">
            <div class = "descricao">
    <?php
        echo "<h3>" . $row_usuario['titulo'] . "</h3>"; 
	?>
            </div>
            <div class = "descricao">
    <?php 
        echo "" . $row_usuario['descricao']; 
	?>
            </div>
    <?php
        if  ((isset($row_usuario['imagem'])) &&  (!empty($row_usuario['imagem']))){ 
	?>
        <img src="pedro_macedo/
		<?php echo $row_usuario['imagem']; } ?>  ">   <br/>

<!--botões-->
	<?php 
		if (isset($_SESSION['cod'])){
	?>
			<div class = "acoes">
<!--php para criar o cod da pub na url-->
				<a href="vizualizar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
				Visualizar
				</a>
				<a href="editar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
				Editar
				</a>
				<a href="bd/excluir_pub.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
				Excluir
				</a>
			</div>

			<div class = "hora">
    <?php }
                    
    	echo "" . $row_usuario['data'] . " - " ;
        echo "" . $row_usuario['hora'];
                
    ?>
            </div>
        </div>
    <?php
	}
		
    ?>  
</div>
<!-- Começo Rodapé-->
	<div class="container-fluid pb-0 mb-0 justify-content-center text-light ">
        <footer class = "pezin">
            <div class="row my-5 justify-content-center py-5">
                <div class="col-11">
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-12   my-auto mx-auto a">
							<h3 class="text-muted mb-md-0 mb-5 bold-text">
								Pedro<BR/>
								Macedo
							</h3>
						</div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12"><h6 class="mb-3 mb-lg-4 bold-text ">
							<b>MENU</b></h6>
							<ul class="list-unstyled text-decoration-none">
								<li class = "tira"><a href = "index.php">Página Inicial</a></li>
								<li class = "tira"><a href = "historiacolegio.php">História</a></li>
								<li class = "tira"><a href = "https://www.facebook.com/pages/Col%C3%A9gio-Estadual-Pedro-Macedo/124373407573346">Facebook</a></li>
								<li>
									<a href = "login.php" >
										Apenas moderador
									</a>
								</li>
							</ul>
						</div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12">
							<h6 class="mb-3 mb-lg-4 text-muted bold-text mt-sm-0 mt-5">
								<b>Endereço da escola:</b>
							</h6>
							<p class="mb-1">
								Av. República Argentina, 2376 - Portão (Curitiba, PR)
							</p>
						</div>
                    	</div>
                    <div class="row ">
                        <div class="col-xl-8 col-md-4 col-sm-4 col-auto  my-md-0 mt-5 order-sm-1 order-3 align-self-end">
							<p class="social text-muted mb-0 pb-0 bold-text">
								 <span  class="mx-2">
									<i class="fa fa-facebook" aria-hidden="true"></i>
								</span> 
								 <span class="mx-2">
									<i class="fa fa-linkedin-square" aria-hidden="true"></i>
								</span> 
								<span class="mx-2">
									<i class="fa fa-twitter" aria-hidden="true"></i>
								</span> 
								<span class="mx-2">
									<i class="fa fa-instagram" aria-hidden="true"></i>
								</span> 
							</p>
							<small class="rights">
								<span>&#174;</span>
								 Todos os direitos reservados.
							</small>
						</div>
                        <div class="col-xl-2 col-md-4 col-sm-4 col-auto order-1 align-self-end ">
							<h6 class="mt-55 mt-2 text-muted bold-text">
								<b>
									Fale conosco!
								</b>
							</h6>
							<small> 
								<span>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span> 
								ctapedromacedo@escola.pr.gov.br
							</small> <br/>
							<small> 
								<span>
									<i class="fa fa-envelope" aria-hidden="true"></i>
								</span> 
								3345-3993
							</small>
						</div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
	    <!-- Linkando JS-->
        <script src="js/todaspagcolegio.js"></script>
        <!-- ---------- -->
	<!-- Fim Rodapé -->
    </body>
</html>