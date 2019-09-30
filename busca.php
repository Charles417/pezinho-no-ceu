<?php
    session_start();
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de busca</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php require_once "header.php"?>
</head>
<body>
    <?php
        if (array_key_exists('buscar', $_POST)) {
    ?>
    <div class="cards row">
        <?php
            $buscar=$_POST['buscar'];  
            $resultado = mysqli_query($conn, "SELECT * FROM produto WHERE nome LIKE '%$buscar%'");
            while ($row = $resultado->fetch_assoc()) {
        ?>
            <div class="col-md-3">
                <a href="produto.php"><div class="card">
                    <img class="card-img-top" src="cadastros/cadastro-produto/images/<?= $row['imagem'];?>" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nome'];?></h5>
                        <p class="card-text"><?= $row['descricao'];?></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">R$: <?= $row['preco'];?></li>
                    </ul>
                </div></a>
            </div>
            <?php
                }
            ?>
    </div>
    <?php
        }else{
            echo "Desculpe nenhum produto com este nome foi encontrado!";
        }
    ?>

</body>
</html>