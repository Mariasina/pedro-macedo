<?php

define('servidor', 'localhost:3306');
define('usuario', 'root');
define('senha', '');
define('banco', 'pedro_macedo');

$conexao = mysqli_connect(servidor, usuario, senha, banco) or die ('Não foi possível conectar');
?>  