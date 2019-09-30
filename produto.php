<?php session_start(); ?>

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
            <th>IMG</th>
			<th>Nome</th>
			<th>Preço</th>
			<th>Descrição</th>
			</tr>
			</thead>
		<?php
			while ($row = $resultado->fetch_assoc())
			{?>
				<tr>
				<td><?= $row['id_produto'];?></td>
                <td><?= $row['imagem'];?></td>
				<td><?= $row['nome'];?></td>
				<td><?= $row['preco'];?></td>
                <td><?= $row['descricao'];?></td>
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

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Produto</title>
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/layout.css">
        <?php require_once "header.php"?>
    </head>
    <body>

    <div class="borda">
        <div class="container">
            <div class="corpo row">
                <section class="col-md-8">
                    <article class="artigo">
                        <img class="galeria" src="slider-imagens/cap.PNG" alt="">
                    </article>
                </section>
                <aside class="nome col-md-4">
                    <div class="descricao-produto">
                        <p class="nome">Nome do produto</p>
                        <p class="preco">R$: </p> 
                        <button type="button" class="btn btn-primary">Comprar</button>
                        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </div>
                </aside>
            </div><hr><div class="descricao">Descrição: </div><hr>
        </div>
    </div>
</body>
</html>