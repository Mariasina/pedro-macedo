<?php
    session_start();
    include('bd/verifica_login.php');

    //variáveis para mostrar as informações e edita-las
    $cod = $_GET['cod'];
    $query = $conexao->prepare("SELECT * FROM publicacao WHERE cod = ?");
    $query->bind_param('s', $cod);
    $query->execute();
    $get = $query->get_result();
    $publicacao = $get->fetch_assoc();  

    // $sql = "SELECT * FROM publicacao";
    // $cod = $_SESSION['cod'];
    // //$cod = $_GET['cod'];
    // $sql2 = "SELECT * FROM publicacao where cod = '$cod'";
    // $result_publicacao = mysqli_query($conexao, $sql2);
    // $publicacao = mysqli_fetch_array($result_publicacao);

    // $explode = explode('/', $url);
    // $cod_pub = addslashes($explode['1']);
	// $query = $conexao->prepare("SELECT * FROM publicacao WHERE cod = ?");
	// $query->bind_param("s", $cod_pub);
	// $query->execute();
	// $get = $query->get_result();
	// $dados = $get->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <form action="edit_pub.php" method="post">
        <input type="hidden" value="<?=$cod;?>" name="cod">
        <label>Título</label>
            <input type="text" name="titulo" value="<?php echo $publicacao['titulo'];?>"><br>
        <label>Imagem</label>
            <input type="file" name="imagem" ><br>
        <label>Publicação</label>
            <textarea name="descricao" rows="5" ><?php echo $publicacao['descricao'];?></textarea><br>
        <input type="submit" value="Enviar Publicação" name="env">
        
    </form> 

    
</body>
</html>