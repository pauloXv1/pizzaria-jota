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
    <link rel="stylesheet" href="st.css">
    <title>CADASTRO</title>
</head>
<body>
    <form action="formulario.php" method="get">
        <fieldset>
        <h3>FORMULÁRIO</h3>
            NOME:<input type="text" name="nomecliente"><br><br>
            ENDEREÇO:<input type="text" name="endereco"><br><br>
            EMAIL:<input type="text" name="email"><br><br>
            TELEFONE:<input type="tel" name="telefone"><br><br>
            SENHA:<input type="password" name="senha"><br><br>
            <input type="submit" name="enviar" class="enviar">

        </fieldset>

    </form>
    
    <a href="../login/index.php">Já tem conta? Acesse aqui</a>
</body>
</html>

