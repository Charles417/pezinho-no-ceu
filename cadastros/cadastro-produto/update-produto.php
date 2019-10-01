<?php
    session_start();
    require "../../conn.php";
    $id = $_GET['id'];
    $select = "SELECT * FROM `produto` WHERE `id_produto` = $id";
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
    <link rel="stylesheet" href="../cadastro-css/usuario.css">
    <?php require_once "../../header.php"?> 
</head>
<body>

    <div class="produto">
        <h2>Atualizar Produto</h2>

        <form action="update.php" method="post" enctype="multipart/form-data">

        <?php 
        
        $resultado = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_array($resultado) )
            {
                $id = $row['id_produto'];
                $nome = $row['nome'];
                $descricao = $row ['descricao'];
                $preco = $row ['preco'];
                $imagem = $row['imagem'];
            }
        ?>

            <div class="campo">
                <input type="hidden" name="id_produto" value="<?= $id ?>">
            </div>

            <div class="campo">
                <label>Nome: </label>
                <input type="text" name="nome" value="<?= $nome?>">
            </div>
    
            <div class="campo">
                <label>Descrição: </label>
                <input type="text" name="descricao" value="<?= $descricao?>">
            </div>

            <div class="campo">
                <label>Preço: </label>
                <input type="number" step="any" name="preco" value="R$:<?= $preco?>">
            </div>

            <div class="campo">
                <label>Imagem do produto: </label>
                <input multiple type="file" name="imagem" value="<?= $imagem ?>">
            </div>

            <div class="editar">
                <button type="submit" name="editar" >Editar Produto</button>
            </div>
        </form>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/geral.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>