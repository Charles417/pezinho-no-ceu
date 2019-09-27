<?php 

	require('../../conn.php');
	$id = $_POST['id_usuario'];
	$nome = $_POST['nome'];
	$cpf = $_POST['cpf'];
	$login = $_POST['usuario'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$cidade = $_POST['cidade'];
	$uf = $_POST['uf'];

	$sql = "UPDATE `usuario` 
		SET `id_usuario`= $id,
		`nome`='$nome',
		`cpf`='$cpf',
		`usuario`='$login',
		`senha`= md5('$senha'),
		`email`='$email',
		`telefone`='$telefone',
		`cep`='$cep',
		`cidade`='$cidade',
		`uf`='$uf' 
		WHERE `id_usuario`= $id";	

	if ($conn->query($sql) == true)
	{
		echo "Dado atualizado com sucesso";
	}
	else
	{
		echo "Error: " . $conn->error;
	}

	$conn->close();

?>