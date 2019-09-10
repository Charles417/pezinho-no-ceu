<?php 

	require('conn.php');

	$id = $_GET['id'];

	$sql = "DELETE FROM usuario WHERE id_usuario=$id";

	if ($conn->query($sql) == true)
	{
		echo "Dado excluido com sucesso";
	}
	else
	{
		echo "Erro: " . $conn->error;
	}

	$conn->close();

?>