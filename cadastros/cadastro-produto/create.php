<?php 

	require('../../conn.php');

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "images/";
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);

	$sql = "INSERT INTO produto (nome, descricao, preco, imagem) VALUES ( '$nome', '$descricao', '$preco', '$novo_nome')";

	if ($conn->query($sql) == true)
	{
		header('Location: http://localhost:8080/pezinho-no-ceu/cadastros/cadastro-produto/cadastro-produto.php');
	}
	else
	{
		echo "Erro: " . $conn->error;
	}

	$conn->close();

?>