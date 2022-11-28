<?php
    session_start();
    include("bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publicação</title>
    <link rel = "stylesheet" href = "css/vizupub.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
  <div class = "titulo">
  Visualizando Publicação
</div>
    <?php 

        $cod = $_GET['cod'];
        $query = $conexao->prepare("SELECT * FROM publicacao WHERE cod = ?");
        $query->bind_param('s', $cod);
        $query->execute();
        $get = $query->get_result();
        $publicacao = $get->fetch_assoc();
        $pagina = $publicacao['pagina'];
    
    ?>
    <div class = "corpo">
        <h1>Título: <?php echo $publicacao['titulo'];?></h1><div class = "desc">
       <h4><b> Descrição: </b></h4> <BR> <P>
        <?php echo $publicacao['descricao'] . "<br>";?> </div> </p> 
        <?php if  ((isset($publicacao['imagem'])) &&  (!empty($publicacao['imagem']))){ ?>
            <img src="pedro_macedo/<?php echo $publicacao['imagem'];?>"/><?php }?><br>
        
        <!--botões-->
        <?php
        if (isset($_SESSION['cod'])){ 
        ?>
		
        <div class = "acoes"> <br>
            <!--php para criar o cod da pub na url-->
            <a href="editar_publicacao.php?cod=<?php echo $publicacao['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
                Editar
            </a>
            <a href = "excluir_publicacao.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
               Excluir
            </a>    
        </div> <br>
        <div> <b>
        Essa publicação se encontra na página: 
        </b> 
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
    
          }
        }?>
         <br>
        <?php
    	echo  $publicacao['data'] . " - " ;  
      echo  $publicacao['hora'];
      
        ?>
       <button onclick ="history.go(-1);">
       Voltar 
      </button>
        </div>
    </div>
</body>
</html>