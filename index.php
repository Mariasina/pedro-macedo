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
	
	<link rel = "stylesheet" href = "css/perfil.css">
	<link rel="stylesheet"  href="css/indexcolegio.css">

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
      <span class = fs-4> <b> Olá, <?php echo $_SESSION['nome'];?>!<br/> </b>
        <!--Todos os "if perfil 1" mostram informações que apenas o administrador vê."-->
        <?php if($_SESSION['perfil'] == 1){?>
      <b>  Você é um Administrador. </b> </span>
        <?php }?>
        <!--Links-->
            <li>
                <a href = "perfil.php"> Perfil </a>
            </li>
            <li>
                <a href="index.php">Página inicial</a>
            </li>
            <li>
                <a href="area_publicacao.php">Área de publicação</a>
            </li>
            <li>
                <a href="usuarios_cadastrados.php">Usuários Cadastrados</a>
            </li>
            <?php if($_SESSION['perfil'] == 1){?>
            <li>
                <a href="aceitar_cadastro.php">Aceitar Cadastros Novos</a>
            </li>
            <?php }?>
            <li>
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
        <li class="nav-item"><a href= "https://www.educacao.pr.gov.br/desvio.html" class="nav-link link-dark px-2 active" aria-current="page">
			<img src = "img/logopres.jfif" class = "prlogo">
		</a></li>
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
		  <!-- barra de pesquisa-->
		  <form class="col-12 col-lg-auto mb-3 mb-lg-0" role="search">
			<input type="search" class="form-control" placeholder="Busca..." aria-label="Search">
		  </form>
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
<div class="carousel" duration="7000">
	<ul>
	  <li id="c1_slide1"><div>gatito 1<br /><a href="https://www.google.com">ir para o post</a></div></li>  
	  <li id="c1_slide2"><div>gatito 2<br /><a href="https://www.google.com">ir para o post</a></div></li>  
	  <li id="c1_slide3"><div>gatito 3<br /><a href="https://www.google.com">ir para o post</a></div></li>  
	  <li id="c1_slide4"><div>gatito 4<br /><a href="https://www.google.com">ir para o post</a></div></li>  
	</ul>
	<ol>
	  <li><a href="#c1_slide1"></a></li>
	  <li><a href="#c1_slide2"></a></li>
	  <li><a href="#c1_slide3"></a></li>
	  <li><a href="#c1_slide4"></a></li>
	</ol>
	<div class="prev">&lsaquo;</div>
	<div class="next">&rsaquo;</div>
  </div>
	<!-- Fim Carrossel -->
	<!-- Começo 3 Colunas / Notícias -->
	<div class="wrapper">

		<header>
			<h1>Notícias Quentes!	</h1>
		</header>
			
	<section class="columns">
		
		<div class="column1">
			<h2>1º Titulo de noticiazinha</h2>
			<p> comecinho da noticia</p>
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
									<a href = "login.html" >
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