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
    if(isset($_GET['cod'])):
    endif;
    
        $cod = $_GET['cod'];
        $sql = "SELECT * FROM publicacao where cod = '$cod' ";
        $result_publicacao = mysqli_query($conexao, $sql);
        $publicacao = mysqli_fetch_array($result_publicacao);

        echo $cod;

    
    ?>
</body>
</html>