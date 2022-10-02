<?php
    session_start();
    include("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i');

    //criando as variáves para criar uma postagem
    $imagem = $_FILES['imagem'];
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    //$data = $_POST['data'];
    $usuario_cod = $_SESSION['cod'];

    if($imagem != NULL) {
        $nomeFinal = time().'.jpg';
        if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
            $tamanhoImg = filesize($nomeFinal);
    
            $mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));
    
            mysql_connect($conexao) or die("Impossível Conectar");
    
            @mysql_select_db($conexao) or die("Impossível Conectar");
    
            mysql_query("INSERT INTO publicacao (imagem) VALUES ('$mysqlImg')") or
            die("O sistema não foi capaz de executar a query");
    
            unlink($nomeFinal);
    
            header("location:../area_publicacao.php");
        }
    }

    /*$uploaddir = '../img/uploads/';		
    $uploaddirN = 'img/uploads/';
	$uploadfile = $uploaddir.basename($_FILES['arquivo']['name']);
	$uploadfileN = $uploaddirN.basename($_FILES['arquivo']['name']);*/

    //gravando no bd as informações digitadas
    $sql = "INSERT INTO 
            publicacao (titulo, descricao, data, hora, usuario_cod)
            VALUES
            ('$titulo', '$descricao', '$data', '$hora', '$usuario_cod')";
    echo $sql;
    $resultado = mysqli_query($conexao, $sql);

    //redirecionamento se publicação for cadstrada com sucesso
    if($resultado == true){
        header("Location:../area_publicacao.php");
    }
?>