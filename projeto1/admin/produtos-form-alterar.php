<?php
    require_once 'config.inc.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM produtos WHERE id2 = '$id'";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_num_rows($resultado) > 0){
        while($dados = mysqli_fetch_array($resultado)){
            $produto = $dados['produto'];
            $preco = $dados['preco'];
            $estoque = $dados['estoque'];
            $id_produto = $dados['id2'];
        }
?>

<h2>Alteração de Produto</h2>
<form action="?pg=produtos-alterar" method="post">
    <input type="hidden" name="id2" value="<?=$id_produto?>">

    <label>Nome do Produto:</label>
    <input type="text" name="produto" value="<?=$produto?>"><br>
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>"><br>
    <label>Estoque:</label>
    <input type="text" name="estoque" value="<?=$estoque?>"><br>
    <input type="submit" value="Alterar Produto">

</form>

<?php
    }else{
        echo "<h2>Nenhum produto encontrado!</h2>";
    }
?>