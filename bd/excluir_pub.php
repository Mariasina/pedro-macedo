<?php
    session_start();
    include("conexao.php");
      
    if (isset($_POST['env'])){
    $cod = $_GET['cod'];
    $codi = $cod;

    $sql = "DELETE FROM publicacao WHERE cod = $codi ";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado == true){
        header("Location:../area_publicacao.php");
    }
}
?>