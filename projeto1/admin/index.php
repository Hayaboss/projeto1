<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Administrativo CRUD</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<?php

    echo "<h1>Painel administrativo</h1>";

    echo "<a href='?pg=clientes-admin'>Listar Clientes</a> | ";
    echo "<a href='?pg=produtos-admin'>Listar Produtos</a> | "; 


    if(empty($_SERVER['QUERY_STRING'])){
       echo "<h3>Bem-vindo ao painel admin <br> selecione alguma categoria acima ^-^</br>.</h3>";
    }else {
 
        $pg = $_GET['pg']; 
        

        include_once "{$pg}.php"; 
    }
?>

</body>
</html>