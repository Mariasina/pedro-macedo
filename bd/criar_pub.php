<?php
    session_start();
    include("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');
    $hora = date('H:i');

    //criando as variáves para criar uma postagem
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $usuario_cod = $_SESSION['cod'];

    $uploaddir = '../img/uploads/';		
    $uploaddirN = 'img/uploads/';
    if (isset($_FILES['imagem']) && !empty($_FILES['imagem']['name'])) {
    $criandoidimg = uniqid('img_').".".pathinfo($_FILES['imagem']['name'], PATHINFO_EXTENSION);
	$uploadfile = $uploaddir.$criandoidimg;
    $uploadfileN = $uploaddir.$criandoidimg;
    }
    
    
    //gravando no bd as informações digitadas
    $sql = "INSERT INTO 
            publicacao (titulo, descricao, imagem, data, hora, usuario_cod)
            VALUES
            ('$titulo', '$descricao', '$uploadfileN', '$data',  '$hora', '$usuario_cod')";
    
    echo $sql;
    //variável para concluiro cadastro
    $resultado = mysqli_query($conexao, $sql);

    //redirecionamento se publicação for cadstrada com sucesso
    if($resultado == true){
        move_uploaded_file($_FILES['imagem']['tmp_name'], $uploadfileN);
        header("Location:../area_publicacao.php");
    }
?>