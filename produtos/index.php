<?php
session_start();
require_once("servidor.php");

if (!empty($_SESSION['mensagem'])){
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
}

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="produtos.css">
    <title>Document</title>
</head>
<body>
     <form action="listar.php" method="post" enctype="multipart/form_data">
        <fieldset>
        <h3>CADASTRO DE PRODUTOS</h3>
            NOME:<input type="text" name="nomeproduto"><br><br>
            PREÇO:<input type="text" name="preco"><br><br>
            DESCRIÇÃO:<input type="text" name="descricao"><br><br>
            <input type="file" name="imagem" accept="imagem/png, imagem/jpg, imagem/jpeg" required>
            <input type="submit" name="enviar" class="enviar">

        </fieldset>

     </form>
     
     <?php
    require_once("servidor.php");
    $comando = "SELECT * FROM produtos ORDER BY Id DESC";
    $enviar = mysqli_query($conexao, $comando);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);

?>
<table border="1">
    <tr>
        <th>NOME</th>
        <th>PREÇO</th>
        <th>DESCRIÇÃO</th>
        <th>IMAGEM</th>
    </tr>

<?php
foreach ($resultado as $produto){
    $nome=$produto['nome'];
    $preco=$produto['preco'];
    $descricao=$produto['descricao'];
    $imagem=$produto['imagem'];
?>
    <tr>
        <th><?=$nome?></th>
        <th><?=$preco?></th>
        <th><?=$descricao?></th>
        <td><img src="../img_update/<?php echo $row['imagem']; ?>" height="100" alt=""></td>
    </tr>
<?php
}
?>



</table>
    
</body>
</html>

