<?php
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="pizzaria";

	$mysqli = new mysqli($hostname, $username, $password, $dbname);

	if ($mysqli->error) {
		die("Falha ao conectar ao banco de dados" . $mysqli->error);
	}
?>