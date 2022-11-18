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
</head>
<body>
    <?php 

        $cod = $_GET['cod'];
        $query = $conexao->prepare("SELECT * FROM publicacao WHERE cod = ?");
        $query->bind_param('s', $cod);
        $query->execute();
        $get = $query->get_result();
        $publicacao = $get->fetch_assoc();
        $pagina = $publicacao['pagina'];
    
    ?>
    <div>
        <h1><?php echo $publicacao['titulo'];?></h1>
        <?php echo $publicacao['descricao'] . "<br>";
        if  ((isset($publicacao['imagem'])) &&  (!empty($publicacao['imagem']))){ ?>
            <img src="pedro_macedo/<?php echo $publicacao['imagem'];} ?>"/><br>
        
        <!--botões-->
        <div class = "acoes">
            <!--php para criar o cod da pub na url-->
            <a href="editar_publicacao.php?cod=<?php echo $row_usuario['cod'];?>" class = "w-10 btn btn-lg btn-primary rounded-5">
                Editar
            </a>
            <a href="bd/excluir_pub.php?cod=<?php echo $row_usuario['cod'];?>" name ="excluir" class = "w-10 btn btn-lg btn-primary rounded-5">
                Excluir
            </a>
        </div>
        <div>
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
        <?php
        echo $publicacao['data'] . " - ";
        echo $publicacao['hora'];
        ?>
    </div>
</body>
</html>