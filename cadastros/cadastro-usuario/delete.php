<link rel="stylesheet" href="../css/geral.css">

<?php 

	require('../../conn.php');

	$id = $_GET['id'];

	$sql = "DELETE FROM usuario WHERE id_usuario=$id";

	if ($conn->query($sql) == true)
	{
		header('Location: read.php');
	}
	else
	{
		echo "Erro: " . $conn->error;
	}

	$conn->close();

?>