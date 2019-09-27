<?php
    require '../../conn.php';
    require '../../logado.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/geral.css">
    <link rel="stylesheet" href="../cadastro-css/produto.css">
    <?php require_once "../../header.php"?> 
</head>
<body>

    <div class="produtos">
        <h2>Cadastro de Produtos</h2>

        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="campo">
                <label>Nome: </label>
                <input type="text" name="nome">
            </div>
            
            <div class="campo">
                <label>Descrição: </label>
                <textarea name="descricao"></textarea>
            </div>

            <div class="campo">
                <label>Preço: </label>
                <input type="text" name="preco">
            </div>


            <div class="campo">
                <label>Imagem do produto: </label>
                <input multiple type="file" name="imagem">
            </div>

            <div class="cadastro">
                <button type="submit" name="cadastrar">Cadastrar Produto</button>
            </div>
        </form>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/geral.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>


