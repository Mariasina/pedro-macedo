<?php
    session_start();
    include('bd/conexao.php'); 
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
        <title>
            História Pedro Macedo
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
          <li class="nav-item"><a href= "https://www.areadoaluno.seed.pr.gov.br/" class="nav-link link-dark px-2 active" aria-current="page" target = "_blank">
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
<div class = "texto"> 
<p><b>
Apresentação:
</P></b>
<P>
No Governo do Sr. Moysés Lupion, pelo Decreto nº 264 de 10 de fevereiro de 1956, foi fundado o Ginásio Estadual do Portão. Ainda em 1956, pelo Decreto nº 6037/56 
o Ginásio Estadual do Portão passou a denominar-se Ginásio Estadual Nilo Cairo. Este nome foi conservado até 1959, quando houve nova alteração de nome, passando a denominar-se 
Ginásio Estadual Professor Pedro Macedo pelo Decreto nº 26950/59.
Em 1965 iniciaram-se no estabelecimento as atividades do 2º ciclo, ocasião em que passou a denominar-se, pelo Decreto nº 19252/65, como Ginásio Estadual Pedro Macedo. <br>
</p>
<p>

Desde a data de sua fundação até 1965, o estabelecimento funcionou no prédio pertencente ao Grupo Escolar Francisco Azevedo Macedo, 
situado na Travessa Augusto Marach, 224, com atividades somente no período noturno. Em fevereiro de 1965, instalou-se em sede própria, 
à Avenida República Argentina, 2376, no Bairro do Portão.
Com a implantação da Lei nº 5692/71, o estabelecimento sofre algumas modificações.  <br> 
Fica autorizado pelo Decreto nº 1394/75 o funcionamento do Complexo Escolar Portão, Ensino regular e Supletivo de 1º e 2º Graus, 
resultante da reorganização do Colégio Pedro Macedo, do Grupo Escolar Presidente Pedrosa, do Grupo Escolar Noturno Presidente Pedrosa e da Casa Escolar Fraternal.
Pelo mesmo decreto o Ginásio Estadual Pedro Macedo passou a denominar-se Colégio Estadual Pedro Macedo Ensino de 1º e 2º Graus,
tornando-se sede do Complexo Escolar Portão Ensino Regular e Supletivo de 1º e 2º Graus, responsabilizando-se pelo ensino de 5ª a 8ª série.<br> 

</p>
<p>

Implantam-se as habilitações profissionalizantes no ano de 1978 em nível técnico e de auxiliar, a saber: Técnico em Estatística, Técnico em Publicidade,
Técnico Assistente de Administração e Desenhista de Estrutura. Posteriormente a habilitação de Auxiliar de Escritório vem substituir a de Técnico em Estatística.
A habilitação de Técnico em Publicidade nunca chegou a funcionar em razão da falta de matrículas. <br>

</p>
<p>

Através da Resolução nº. 3437/81, fica reconhecido o Curso de 1º Grau Regular de 5ª a 8ª série e o Curso de 2º Grau Regular com as Habilitações plenas de Assistente de Administração 
e Auxiliar de Escritório. Mesmo após o desmembramento do Complexo Escolar Portão,
o estabelecimento continuou oferecendo apenas a 2ª fase do Ensino de 1º Grau, 
compromissando-se a atender a demanda das Escolas da região que oferecem apenas as quatro primeiras séries do 1º Grau. <br>

</p>
<p>

Com o advento da Lei nº. 7044/82 o Colégio Estadual Pedro Macedo, Ensino de 1º e 2º Graus implanta o curso de 2º Grau Propedêutico no ano de 1983,
autorizado pela Resolução nº. 2425/84 e reconhecido como curso de 2º Grau Regular Propedêutico através da Resolução nº. 3782/86.
Em razão das dificuldades em levar adiante a proposta do Ensino Profissionalizante, 
as habilitações profissionais em funcionamento na ocasião foram extintas pela Resolução nº 1491/85.
Por preencher os quesitos de demanda, recursos humanos e recursos físicos e reconhecendo a importância de profissionais em nível de 1ª a 4ª série 
compromissadas com a universalização da educação básica implantou-se a habilitação de Magistério no Curso de 2º Grau Regular pela Resolução nº 627/87, 
devidamente reconhecida pela Resolução nº. 16101/90. <br>

</p>
<p>


Pela Resolução nº. 3120/98 de 11/09//98 a denominação do Estabelecimento passou a ser: COLÉGIO ESTADUAL PEDRO MACEDO –
ENSINO FUNDAMENTAL E MÉDIO. Em 1999 formou-se a última turma da habilitação para o Magistério tendo a mesma sido extinta.
Ainda neste ano inicia-se a implantação gradativa para os turnos diurno e noturno do Ensino Médio (Lei nº. 9394/96 – DOU de 23/12/96). 
No ano de 2000 formam-se as últimas turmas de Educação Geral – Preparação Universal (Lei nº. 5692/71). <br>

</p>
<p>

O Ensino Fundamental, no ano de 2001, passou a trabalhar com nova Matriz Curricular, de acordo com a LDBEN (Lei 9394/96). <br>

</p>
<p>

No ano de 2005 foi autorizada pela SEED a implantação gradativa dos seguintes Cursos Profissionais Integrados: Informática e Secretariado, com a duração de quatro anos cada, 
para alunos que concluíram o Ensino Fundamental. Foi autorizada também a implantação dos seguintes Cursos Profissionalizantes Subseqüentes: 
Informática e Secretariado, com duração de um (01) ano e meio e o Técnico em Secretariado, com duração de 01 (um) ano, para alunos que concluíram o Ensino Médio.
Os cursos subseqüentes estão autorizados sob a resolução 3250/07 de 23/07/07 para o Secretariado e, para informática resolução 3277/07 de 23/07/07.
</p>



(Atualizado em 21/04/2015)
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

