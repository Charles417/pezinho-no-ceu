<?php 

	require('../conn.php');

	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$preco = $_POST['preco'];
	$extensao = strtolower(substr($_FILES['imagem']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "images/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome); //efetua o upload

	$sql = "INSERT INTO produto (nome, descricao, preco, imagem) VALUES ( '$nome', '$descricao', '$preco', '$novo_nome')";

	if ($conn->query($sql) == true)
	{
		echo "Dado inserido no banco";
	}
	else
	{
		echo "Erro: " . $conn->error;
	}

	$conn->close();

?>