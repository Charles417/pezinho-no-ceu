<?php 

	require('../../conn.php');

	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$login = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];

	$sql = "INSERT INTO usuario (nome, usuario, cpf, senha, email, telefone, cep, cidade, uf) VALUES ( '$nome', '$login', $cpf, md5('$senha'), '$email', '$telefone', '$cep', '$cidade', '$uf')";

	if ($conn->query($sql) == true)
	{
		header ('Location: http://localhost:8080/pezinho-no-ceu/home.php');
	}
	else
	{
		echo "Erro: " . $conn->error;
	}

	$conn->close();

?>