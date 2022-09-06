<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel = "stylesheet" href = "css/relatorio.css" >
    
    <title>Usuários Cadastrados</title>
</head>
<body>
    <header>
    
    </header>
    <div class = "centro">
        <article class="z"> 
            <div class="d ">

                <h1>Usuários Cadastrados</h1>

            </div>
        </article>
    </div>

    <?php
    
        include("bd/conexao.php");

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }

        $relatorio = "SELECT * FROM usuario";
        $resultado = mysqli_query ($conexao, $relatorio);
        
        while($row_usuario = mysqli_fetch_assoc($resultado)){
    ?>
    <article class="z"> 
            <div class="d">   
    <?php   
            echo "Nome:" . $row_usuario['nome'] . "<br>";
            echo "E-mail:" . $row_usuario['email'] . "<br><br>"; 
        }

    ?>
            </div>
            
    </article>
    
</body>
</html>
