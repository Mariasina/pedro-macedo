<?php   
    session_start();
    include('conexao.php');
    
    /*//redireciona para área de login se nome e senha estiverem vazias
    if (!empty($_POST) AND (empty($_POST['email']) OR empty($_POST['senha']))) {
        header("Location:../login.php"); 
        exit();
    }*/
    if (isset($_POST['env'])){
        //conecta as variaveis com o bd
        $email = mysqli_real_escape_string($conexao,$_POST['email']);
        $senha = mysqli_real_escape_string($conexao,md5($_POST['senha']));
        
        //validação para saber se o usuário existe no banco
        $query =  "select * from usuario where email = '".$email."' and senha = '".$senha."'";
        $result = mysqli_query($conexao, $query);

        //redirecionamento se o usuário for válido
    

        //================================

        if(mysqli_num_rows($result) > 0)
        {
            $dados = mysqli_fetch_array($result);
            $codbanco = $dados['pendencia'];
            $sta = $dados['status'];

            if ($codbanco != 0){
                echo "Cadastro em pendência, aguarde um administrador resolver";
            
            } else {
                if ($sta != 0){
                    echo "Usuário inativado, entre em contato com um administrador";
                } else {
                    //pega todas as informações de um usuário
                    
                    $_SESSION['cod']   = $dados['cod'];
                    $_SESSION['nome']   = $dados['nome'];
                    $_SESSION['email']  = $dados['email'];
                    $_SESSION['perfil'] = $dados['perfil_cod'];
                    header('location:perfil.php');
                }
            }
        }

        //redirecionamento se o usuário for inválido  
        else {
            echo "Informações incorretas ou usuário inexistente";
        exit();
        }
    }

?>