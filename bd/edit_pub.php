
    <?php
    session_start();
    include("conexao.php");

    if (isset($_POST['env'])){
        $cod = $_GET['cod'];
        $titulo = $_POST['titulo'];
        $descricao = $_POST['descricao'];
        $codi = $cod;

        $sql = "UPDATE publicacao SET titulo = '$titulo', descricao = '$descricao' WHERE cod = '$codi'";

        $resultado = mysqli_query($conexao, $sql);

        if($resultado == true){
            header("Location:../area_publicacao.php");
        }
    }
?>