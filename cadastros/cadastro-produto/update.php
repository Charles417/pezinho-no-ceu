<?php 
    
    require('../../conn.php');
    
    $id = $_POST['id_produto'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $extensao = strtolower(substr($_FILES['imagem']['name'], -4));
    $novo_nome = md5(time()) . $extensao;
    $diretorio = "images/";
    move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome);
	
	$sql = "UPDATE `produto` 
		SET `id_produto`= $id,
		`nome`='$nome',
		`descricao`='$descricao',
		`preco`= $preco,
        `imagem` = '$novo_nome'
        WHERE `id_produto`= $id";	
        
	if ($conn->query($sql) == true)
	{
		header('Location: http://localhost:8080/pezinho-no-ceu/cadastros/cadastro-produto/read.php');
		echo "Dado atualizado com sucesso";
	}
	else
	{
		echo "Error: " . $conn->error;
	}

	$conn->close();

?>