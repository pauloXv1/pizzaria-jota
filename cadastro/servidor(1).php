<?php
	
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="pizzaria";
	

	$conexao = mysqli_connect($hostname,$username, $password) or die 
	("<html><script language='JavaScript'>alert('Não foi possível conectar ao Banco de Dados! 
	Por favor tente novamente.')</script></html>");
	

	mysqli_select_db($conexao, $dbname);
	
    if (!$conexao) {
        die("Não foi possível conectar ao Banco de Dados! Erro: " . mysqli_connect_error());
    }
    

?>

