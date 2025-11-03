<?php
    require_once "config.inc.php";
    $id = $_GET["id"];

    $sql = "DELETE FROM produtos WHERE id = '$id'";

    if(mysqli_query($conexao, $sql)){
        echo "Registro excluido com sucesso!";
        echo "<a href='?pg=produtos-admin'>Voltar</a>";
    }else{
        echo "Erro ao excluir registro!";
    }

    mysqli_close($conexao);
?>