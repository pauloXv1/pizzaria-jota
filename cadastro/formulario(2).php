<?php
session_start();
require_once("servidor.php");

if (isset($_GET['enviar'])) {
    if (!empty($_GET['nomecliente']) && !empty($_GET['endereco']) && !empty($_GET['email']) && !empty($_GET['telefone']) && !empty($_GET['senha'])) {
        $nome = $_GET['nomecliente'];
        $endereco = $_GET['endereco'];
        $email = $_GET['email'];
        $telefone = $_GET['telefone'];
        $senha = $_GET['senha'];
        
        

        $comando = "INSERT INTO cliente(nome, endereco, telefone, email, senha) VALUES('$nome', '$endereco', '$telefone', '$email', '$senha')";
        $enviar = mysqli_query($conexao, $comando);

        if ($enviar && mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem'] = "cliente cadastrado";
            header("location: index.php");
            exit;
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar o cliente";
            header("location: index.php");
            exit;
        }
    }  
}
?>
