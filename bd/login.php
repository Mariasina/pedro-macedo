<?php   
    session_start();
    include('conexao.php');
    
    /*//redireciona para área de login se nome e senha estiverem vazias
    if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
        header("Location:../login.html"); 
        exit();
    }*/

    //conecta as variaveis com o bd
    $email = mysqli_real_escape_string($conexao,$_POST['email']);
    $senha = mysqli_real_escape_string($conexao,md5($_POST['senha']));
    
    //validação para saber se o usuário existe no banco
    $query =  "select * from $banco.usuario where email = '".$email."' and senha = '".$senha."'";
    $result = mysqli_query($conexao, $query);

    //redirecionamento se o usuário for válido
    if(mysqli_num_rows($result) > 0)
    {
    //pega todas as informações de um usuário
        $dados = mysqli_fetch_array($result);
        $_SESSION['cod']   = $dados['cod'];
        $_SESSION['nome']   = $dados['nome'];
        $_SESSION['email']  = $dados['email'];
        $_SESSION['perfil'] = $dados['perfil_cod'];
        header('location:../perfil.php');
    } 
    //redirecionamento se o usuário for inválido  
    else {
        /*unset ($_SESSION['login']);
        unset ($_SESSION['senha']);
        echo $login;
        echo $senha;*/
        header('Location:login.html');
    exit();
    }

?>