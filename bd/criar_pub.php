<?php
    session_start();
    include("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y H:i');

    //criando as variáves para criar uma postagem
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    //$data = $_POST['data'];
    $usuario_cod = $_SESSION['cod'];

    /*$uploaddir = '../img/uploads/';		
    $uploaddirN = 'img/uploads/';
	$uploadfile = $uploaddir.basename($_FILES['arquivo']['name']);
	$uploadfileN = $uploaddirN.basename($_FILES['arquivo']['name']);*/

    //gravando no bd as informações digitadas
    $sql = "INSERT INTO 
            publicacao (titulo, descricao, data, usuario_cod)
            VALUES
            ('$titulo', '$descricao', '$data', '$usuario_cod')";
    echo $sql;
    $resultado = mysqli_query($conexao, $sql);

    //redirecionamento se publicação for cadstrada com sucesso
    if($resultado == true){
        header("Location:../area_publicacao.php");
    }
?>