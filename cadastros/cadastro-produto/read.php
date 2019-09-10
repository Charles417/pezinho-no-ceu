<?php 

	require('conn.php');

	$sql = "SELECT * FROM blog";

	$resultado = $conn->query($sql);

	if ($resultado->num_rows > 0)
	{
		while ($row = $resultado->fetch_assoc())
		{
			echo "<h1>" . $row['titulo'] . "</h1>";
			echo "<p>" . $row['conteudo'] . "</p>";
			echo "<a href='delete.php?id=" .$row['id'] . "'>apagar</a><hr>";
		}
	}
	else
	{
		echo "Nenhum resultado!";
	}

?>