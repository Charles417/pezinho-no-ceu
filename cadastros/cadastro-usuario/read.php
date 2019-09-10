<?php 

	require('../conn.php');

	$sql = "SELECT * FROM usuario";

	$resultado = $conn->query($sql);

	if ($resultado->num_rows > 0)
	{
		while ($row = $resultado->fetch_assoc())
		{
			echo "<h1>" . $row['id_usuario'] . "</h1>";
			echo "<p>" . $row['nome'] . "</p>";
			echo "<a href='delete.php?id=" .$row['id_usuário'] . "'>apagar</a><hr>";
		}
	}
	else
	{
		echo "Nenhum resultado!";
	}

?>