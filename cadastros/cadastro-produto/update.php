<?php 

	require('../../conn.php');

	$id = $_POST['id_produto'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];

	$sql = "UPDATE 'produto' SET
		'nome'= '$nome',
		'descricao'= '$descricao',
		'preco'= '$preco';
		WHERE id_produto = $id";
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Editar Produto</title>
    </head>
    <body>

        <h1>Produto Atualizado</h1>
        <a href="read.php">Voltar</a>
    
    </body>
    </html>