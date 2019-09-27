<link rel="stylesheet" href="../../css/geral.css">

<?php 

	require('../../conn.php');

	$sql = "SELECT * FROM usuario";

	$resultado = $conn->query($sql);

	if ($resultado->num_rows > 0)
	{	?>
		<table class="tabela" style="width:50%">
			<thead>
			<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>CPF</th>
			<th>Ação</th>
			</tr>
			</thead>
		<?php
			while ($row = $resultado->fetch_assoc())
			{?>
				<tr>
				<td><?= $row['id_usuario'];?></td>
				<td><?= $row['nome'];?></td>
				<td><?= $row['cpf'];?></td>
				<td><button><?= "<a href='delete.php?id=" .$row['id_usuario'] . "'>apagar</a><hr>";?></button>
				<button><?= "<a href='update-usuario.php?id=".$row['id_usuario'] . "'>editar</a><hr>";?></button></td>
				
				</tr>
		<?php
				
			}
		}
		else
		{
			echo "Nenhum resultado!";
		}
?>
	</table>