<?php
    require_once("servidor.php");
    $comando = "SELECT * FROM produtos ORDER BY Id DESC";
    $enviar = mysqli_query($conexao, $comando);
    $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);

?>
