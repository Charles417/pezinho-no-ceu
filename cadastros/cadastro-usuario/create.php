<?php 

	require('../conn.php');

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];

	$sql = "INSERT INTO usuario (nome, cpf, login, senha, email, telefone, cep, cidade, uf) VALUES ( '$nome', $cpf, '$login', md5('$senha'), '$email', '$telefone', '$cep', '$cidade', '$uf')";

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