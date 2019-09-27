<link rel="stylesheet" href="../../css/geral.css">

<?php 

	require('../../conn.php');

	$sql = "SELECT * FROM produto";

	$resultado = $conn->query($sql);

	if ($resultado->num_rows > 0)
	{	?>
		<table class="tabela" style="width:50%">
			<thead>
			<tr>
			<th>ID</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Ação</th>
			</tr>
			</thead>
		<?php
			while ($row = $resultado->fetch_assoc())
			{?>
				<tr>
				<td><?= $row['id_produto'];?></td>
				<td><?= $row['nome'];?></td>
				<td><?= $row['preco'];?></td>
				<td><button><?= "<a href='delete.php?id=" .$row['id_produto'] . "'>apagar</a><hr>";?></button>
				<button><?= "<a href='update-produto.php?id=" .$row['id_produto'] . "'>editar</a><hr>";?></button></td>
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