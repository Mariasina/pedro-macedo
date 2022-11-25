<?php
    session_start();
    include("conexao.php");

    //if para editar a publicção apenas se ela foi enviada
    if (isset($_POST['env'])){
        //criando as variáves para criar uma postagem
        $cod = $_GET['cod'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $codi = $cod;
        $img = $_FILES['imagem'];
        $pagina = $_POST['paginas'];

        $uploaddir = '../img/uploads/';		
        $uploaddirN = 'img/uploads/';
        
        if (isset($_FILES['imagem']) && !empty($_FILES['imagem']['name'])) {
        $criandoidimg = uniqid('img_').".".pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
        $uploadfile = $uploaddir.$criandoidimg;
        $uploadfileN = $uploaddir.$criandoidimg;
        }

        switch ($pagina) {
            case "1": {
              $sql = "INSERT INTO publicacao (pagina) VALUE '1'";
              break;
            }
            case "2": { 
                $sql = "INSERT INTO publicacao (pagina) VALUE '2'"; 
              break;
            }
            case "3": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '3'";
              break;
            }
            case "4": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '4'";
              break;
            }
            case "5": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '5'";
              break;
            }
            case "6": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '6'";
              break;
            }
            case "7": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '7'";
              break;
            }
            case "8": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '8'";
              break;
            }
            case "9": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '9'";
              break;
            }
            case "10": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '10'";
              break;
            }
            case "11": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '11'";
              break;
            }
            case "12": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '12'";
              break;
            }
            case "13": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '13'";
              break;
            }
            case "14": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '14'";
              break;
            }
            case "15": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '15'";
              break;
            }
            case "16": {
                $sql = "INSERT INTO publicacao (pagina) VALUE '16'";
              break;
            }
    
          }

        //pegando as informações do bd
        $sql = "UPDATE publicacao SET titulo = '$titulo', descricao = '$descricao', imagem = '$img', pagina = '$pagina' WHERE cod = '$codi'";

        //variável para concluir a edição
        $resultado = mysqli_query($conexao, $sql);

        //redirecionamento se a pulicação for editada com sucesso
        if($resultado == true){
            header("Location:../area_publicacao.php");
            
        }
    }
?>