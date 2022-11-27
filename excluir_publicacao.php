<?php
    session_start();
    include('bd/verifica_login.php'); 
      
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUINDO PUBLICAÇÃO</title>
    <link rel = "stylesheet" href = "css/popup.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <?php
        $cod = $_GET['cod'];
        $selecionar = "SELECT * FROM publicacao WHERE cod = '$cod'";
        //cria uma variavel para pegar as informações
        $resultado = mysqli_query ($conexao, $selecionar);
                
        //variável para mostrar as informações se elas forem pegas com sucesso
        while($row_usuario = mysqli_fetch_assoc($resultado)){ 
    ?>
    
    <div class = "corpo">
        <h1>
            ATENÇÃO VOCÊ ESTÁ PRESTES A EXCLUIR UMA PUBLICAÇÃO, VOCÊ TEM CERTEZA DISSO?
        </h1>
        <div class = "botoes">
            <a href = "area_publicacao.php" class = "w-10 btn btn-lg btn-secondary rounded-5"> 
                Não, Voltar. 
            </a>
            <a href="bd/excluir_pub.php?cod=<?php echo $row_usuario['cod'];?>" name ="excluir" class = "w-10 btn btn-lg btn-danger rounded-5" >
                Sim, Excluir.
            </a>
        </div>
    </div>
    <?php } ?>
</body>
</html>