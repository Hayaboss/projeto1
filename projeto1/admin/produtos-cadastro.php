<?php
    require_once "config.inc.php";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $produto = $_POST["produto"];
        $preco = $_POST["preco"];
        $estoque = $_POST["estoque"];

        $sql = "INSERT INTO produtos (produto, preco, estoque)
                VALUES ('$produto', '$preco', '$estoque')";

        if(mysqli_query($conexao, $sql)){
            echo "<h3>Produto cadastrado com sucesso!</h3>";
            echo "<a href='?pg=produtos-admin'>Voltar</a>";
        } else{
            echo "<h3>Erro ao cadastrar produto!</h3>";
        }
    }else{
        echo "<h2>Acesso negado!</h2>";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }

    mysqli_close($conexao);
?>