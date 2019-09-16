<?php 

	$servername = "10.60.46.34";
	$username = "root";
	$password = "123";
	$dbname = "projeto";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error)
	{
		die ("Erro ao conectar no Banco de Dados" . $conn->connect_error);
	}
?>