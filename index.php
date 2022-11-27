<?php
	session_start();
	include('bd/conexao.php');

?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
	<title>
		Colégio Estadual Pedro Macedo 
	</title>
	
	<link rel="stylesheet"  href="css/indeexcolegio.css">

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

<!-- primeiro cabeçalho -->
<div class = "cabeça">

	<!-- cor do primeiro cabeçalho-->
	<!-- Explicação das siglas: p = padding y = top, bottom 2 = padding para $spacer *.5 ou 1rem = tamanho de fonte do elemento raiz
	usado bastante para a acessibilidade de sites bg = background light = claro border-bottom = define as 
	propriedades da borda de baixo ao mesmo tempo que define a expessura e a cor da borda. -->

  <nav class="py-2 bg-light border-bottom">

    <div class="container d-flex flex-wrap">
      <ul class="nav me-auto">
		<div class="logocentro">
		<!-- logo e link da educação paraná-->
        <li class="nav-item">
			<a href= "https://www.educacao.pr.gov.br/desvio.html" class="nav-link link-dark px-2 active" aria-current="page">
				<img src = "img/logopres.jfif" class = "prlogo">
			</a>
		</li>
		</div>
      </ul>
	 </div>
  </nav>
  <!-- segundo cabeçalho-->
	<header class="py-3 mb-4 border-bottom" >
		<!-- alinhando imagens-->
		<div class="container d-flex flex-wrap justify-content-center">
		  <a href="index.php" class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
			<svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
			<!-- logo pedro macedo e links-->
			<img src = "img/pedromacedo.png" alt = "logo do colégio" class = "logo">
			<!-- tamanho -->
			<span class="fs-4">
				<!-- nome do colegio-->
				<!-- b = negrito -->
				<b class = "nome">Colégio Estadual</b> <br/> 
				<b class = "nome2">Pedro Macedo </b>
				<!-- Fim nome do colégio-->
			</span>
		  </a>
		</div>
		
	  </header>
</div>
	
<!-- fim cabeçalho duplo -->
	 
<!-- Começo Menu-->

<!-- link externo para funcionalidade do menu como um bootstrap (svg, que cria formas bidimensionais)  -->
<svg xmlns="http://www.w3.org/2000/svg"  hidden>
	<!-- função do js -->
	<symbol id="arrow" viewbox="0 0 16 16" >
		<!-- polilinha cria varias linhas retas que conecta varios pontos, comando do svg-->
		<polyline points="4 6, 8 10, 12 6" stroke="#000" stroke-width="2" fill="transparent" stroke-linecap="round" />
	</symbol>
</svg>
<!-- navegação do menu em si -->
<nav id="site-navigation" class="site-navigation" aria-label="Clickable Menu Demonstration">
	<ul class="main-menu clicky-menu no-js">
		<li>
			<a href="noticias.php">Notícias</a>
		</li>
		<li>
			<a href="historiacolegio.php">História</a>
		</li>
		<!-- dropdown das modalidades de ensino-->
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
		<!-- dropdown da equipe-->
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
		<!-- dropdown fotos -->
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
		<!-- dropdown outros -->
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
<!-- Começo Carrossel -->
<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://img.cancaonova.com/cnimages/canais/uploads/sites/6/2014/12/formacao_como-escolher-a-melhor-escola-para-os-filhos.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Primeira imagem do carrossel</h5>
        <p>Texto para a primeira imagem do carrossel.</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="https://www.hypeness.com.br/1/2019/09/escla4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Segunda imagem do carrossel</h5>
        <p>algum texto pra segunda imagem do carrossel.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://img.freepik.com/vetores-gratis/mao-desenhada-de-volta-ao-fundo-da-escola_23-2149056177.jpg?w=2000" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>terceira imagem do carrossel</h5>
        <p>alguma descricao para a terceira imagem do carrossel.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- Fim Carrossel -->
	<!-- Começo 3 Colunas / Notícias -->
	<div class="wrapper">

		<header>
			<h1>Notícias Quentes!	</h1>
		</header>
			
	<section class="columns">
		
		<div class="column1">
			<?php  
                //pega as informações do bd
                $selecionar = "SELECT * FROM publicacao WHERE cod = 41";
                //cria uma variavel para pegar as informações
                $resultado = mysqli_query ($conexao, $selecionar);
                
                //variável para mostrar as informações se elas forem pegas com sucesso
                while($row_usuario = mysqli_fetch_assoc($resultado)){ ?>
            <div class = "pub">
            <div class = "descricao">
            <?php

                echo "<h3>" . $row_usuario['titulo'] . "</h3>"; ?>
            </div>
                <div class = "descricao">
                <?php 
                echo "" . $row_usuario['descricao']; ?>
                </div>
                <?php
                if  ((isset($row_usuario['imagem'])) &&  (!empty($row_usuario['imagem']))){ ?>
                <img src="pedro_macedo/<?php echo $row_usuario['imagem'];?>">  <?php }?>  
            
                    <br/>
                    <div>
                    <?php $pagina = $row_usuario['pagina'];?>
                    Essa publicação se encontra na página: 
                    <?php
                    switch ($pagina) {
                        case "1": {
                        echo "Noticias <br>";
                        break;
                        }
                        case "2": { 
                            echo "Fundamental <br>";
                            break;
                        }
                        case "3": {
                            echo "Médio <br>";
                        break;
                        }
                        case "4": {
                            echo "Profissionalizante <br>";
                        break;
                        }
                        case "5": {
                            echo "CELEM <br>";
                        break;
                        }
                        case "6": {
                            echo "Direção <br>";
                        break;
                        }
                        case "7": {
                            echo "Secretaria <br>";
                        break;
                        }
                        case "8": {
                            echo "Equipe Multidisciplinar <br>";
                        break;
                        }
                        case "9": {
                            echo "Espaço do Professor <br>";
                        break;
                        }
                        case "10": {
                            echo "Colégio <br>";
                        break;
                        }
                        case "11": {
                            echo "Professores <br>";
                        break;
                        }
                        case "12": {
                            echo "Eventos <br>";
                        break;
                        }
                        case "13": {
                            echo "Cursos <br>";
                        break;
                        }
                        case "14": {
                            echo "Calendario 2022 <br>";
                        break;
                        }
                        case "15": {
                            echo "Material para 6º anos <br>";
                        break;
                        }
                        case "16": {
                            echo "Biblioteca CPM <br>";
                        break;
                        }
                
                    }?>
                    </div>
                    <div class = "hora">
                <?php
                    
                echo "" . $row_usuario['data'] . " - " ;
                echo "" . $row_usuario['hora'];
                
            ?>
                    </div>
            </div>
            <?php
            ;}
            ?>  
		</div>
		
		<div class="column2">
			<h2>2º Titulo de uma noticiazinha</h2>
			<p> comecinho da segunda noticiazinha</p>
		</div>
	  
	  <div class="column3">
			<h2>3º Titulo de uma outra noticiazinha </h2>
			<p> comecinho da terceira noticiazinha e final das noticias que aparecem</p>
		</div>
		
	</section>	
	</div>
	<!-- Fim 3 Colunas / Notícias -->
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
                        <div class="col-xl-2 col-md-4 col-sm-4 col-12"><h6 class="mb-3 mb-lg-4 bold-text">
							<b>MENU</b></h6>
							<ul class="list-unstyled text-decoration-none">
								<li><a href = "index.php">Página Inicial</a></li>
								<li><a href = "historiacolegio.php">História</a></li>
								<li><a href = "https://www.facebook.com/pages/Col%C3%A9gio-Estadual-Pedro-Macedo/124373407573346">Facebook</a></li>
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
	  
	<!-- Fim Rodapé -->

	  <!-- Linkando JS-->
	  <script src="js/index.js"></script>
	  <!-- ---------- -->
</body>
</html>