<?php
    session_start();
    include("conexao.php");

    date_default_timezone_set('America/Sao_Paulo');
    $data = date('d/m/Y');

    //criando as variáves para criar uma postagem
    $titulo = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $data = $_POST['data'];
    $cod_usuario = $_SESSION['cod'];

    $uploaddir = '../images/uploads/';		
    $uploaddirN = 'images/uploads/';
	$uploadfile = $uploaddir.basename($_FILES['arquivo']['name']);
	$uploadfileN = $uploaddirN.basename($_FILES['arquivo']['name']);

    //gravando no bd as informações digitadas
    $sql = "INSERT INTO 
            publicacao (titulo, descricao, data)
            VALUES
            ('$titulo', '$descricao', '$data')";
    echo $sql;
    $resultado = mysqli_query($conexao, $sql);
    
    if($resultado == true){
        header("Location:../area_publicacao.php");
    }
?>