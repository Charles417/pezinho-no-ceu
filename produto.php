<?php session_start(); 
    require('conn.php');
?>

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
    <?php
            $id = $_GET['id'];
            $sql = "SELECT * FROM produto WHERE id_produto = $id";
            $resultado = $conn->query($sql);
            while ($row = $resultado->fetch_assoc()) {
        ?>
        <div class="container">
            <div class="corpo row">
                <section class="col-md-8">
                    <article class="artigo">
                        <img class="imagem_produto" src="cadastros/cadastro-produto/images/<?= $row['imagem'];?>" alt="">
                    </article>
                </section>
                <aside class="nome col-md-4">
                    <div class="descricao-produto">
                        <p class="nome"><?= $row['nome']; ?></p>
                        <p class="preco">R$:<?= $row['preco']  ?></p> 
                        <button type="button" class="btn btn-primary">Comprar</button>
                        <button type="button" class="btn btn-primary">Adicionar ao Carrinho</button>
                    </div>

                </aside>
            </div><hr><div class="descricao"><?= $row['descricao']; ?></div><hr>

            <?php } ?>
        </div>
    </div>
    <?php
        require 'footer.php';
    ?>
</body>
</html>