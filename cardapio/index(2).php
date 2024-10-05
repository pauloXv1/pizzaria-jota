<?php
include 'servidor.php';

$query = "SELECT * FROM produtos";
$result = $conexao->query($query);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sua Loja</title>
    <link rel="stylesheet" href="carda.css">
</head>
<body>

    <h1>CARDÁPIO</h1>
    <div class="principal">
    <?php
    while ($row = $result->fetch_assoc()) {
        echo "<div class='produto'>";
        echo "<div class='card'><img src='../img_update/{$row['imagem']}' alt='{$row['nome']}'> </div>";
        echo "<div class='card'><h3>{$row['nome']}</h3> </div>";
        echo "<div class='card'><p>{$row['descricao']}</p> </div>";
        echo "<p>Preço: R$ {$row['preco']}</p>";
        echo "<button>Adicionar ao Carrinho</button>";
        echo "</div>";
        echo "<hr>";
    }
    ?>
    </div>

</body>
</html>
