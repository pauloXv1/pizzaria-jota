<?php
session_start();
require_once("servidor.php");

if (isset($_POST['enviar'])) {
    if (!empty($_POST['nomeproduto']) && !empty($_POST['preco']) && !empty($_POST['descricao'])) {
        $nome = $_POST['nomeproduto'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $imagem_tmp_nome = $_FILES['imagem']['tmp_name'];
        $imagem_folder = '../img_update/'.$imagem;
        

    
        $comando = "INSERT INTO produtos(nome, preco, descricao, imagem) VALUES('$nome', '$preco', '$descricao', '$imagem')";
        $enviar = mysqli_query($conexao, $comando);

        if($comando){
            move_uploaded_file($imagem_tmp_nome, $imagem_folder);
            $_SESSION['mensagem'] = 'produto adicionado com sucesso';
         }else{
            $_SESSION['mensagem'] = 'o produto não pode ser adicionado';
         }

        if ($enviar && mysqli_affected_rows($conexao) > 0) {
            $_SESSION['mensagem'] = "Produto cadastrado";
            header("location: index.php");
            exit;
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar o produto";
            header("location: index.php");
            exit;
    }  
}
}
?>
