<?php 

	require('../../conn.php');

	$id = $_GET['id'];

	$sql = "UPDATE usuario SET titulo='Teste Atualizado' WHERE id=$id ";

	if ($conn->query($sql) == true)
	{
		echo "Dado atualizado com sucesso";
	}
	else
	{
		echo "Error: " . $conn->error;
	}

	$conn->close();

?>