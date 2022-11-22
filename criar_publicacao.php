<?php
    session_start();
    include('bd/verifica_login.php');  

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Publicação</title>
    <!-- css -->
    <link rel = "stylesheet" href = "css/pubarea.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
    crossorigin="anonymous">
    <!-- icones -->
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
    <!--foruláio para cadastro da publicação -->
    <div class = "teste">
        <form action="bd/criar_pub.php" method="post" enctype="multipart/form-data">
            <label></label>
                <input class = "form-control form-control-lg" type="text" name="titulo" placeholder="Título..."><br/>
            <div class = "titulo">
            </div><br/>
            <label class = "img">
                <input class="form-control" type="file" name="imagem" id="formFile"><br>
            <label class = "pub"></label>
                    <textarea class = "form-control form-control-lg" name="descricao" rows="5" cols = "150" placeholder="Descrição..."></textarea><br><br/>
                <div>Selecione a página onde a publicação será cadastrada:</div>
                <select name="paginas">
                    <option value="1"><a>Notícias</a></option>
                    <option value="2"><a>Fundamental</a></option>
                    <option value="3"><a>Médio</a></option>
                    <option value="4"><a>Profissionalizante</a></option>
                    <option value="5"><a>CELEM</a></option>
                    <option value="6"><a>Direção</a></option>
                    <option value="7"><a>Secretaria</a></option>
                    <option value="8"><a>Equipe Multidisciplinar</a></option>
                    <option value="9"><a>Espaço do Professor</a></option>
                    <option value="10"><a>Colégio</a></option>  
                    <option value="11"><a>Professores</a></option>
                    <option value="12"><a>Eventos</a></option> 
                    <option value="13"><a>Cursos</a></option>
                    <option value="14"><a>Calendario 2022</a></option>
                    <option value="15"><a>Material para 6º anos</a></option>
                    <option value="16"><a>Biblioteca CPM</a></option>
                </select><br><br>
            <input class="btn btn-primary" value="Enviar Publicação" type = "submit" name="env">
        </form>
        <a href = "area_publicacao.php" class = "volta">
                voltar
         </a>    
    </div>

</body>
</html>
