<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Farmácia</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/geral.css">
    
    <?php
    require 'conn.php';
    require 'logado.php'; 
    require 'header.php';
    ?>


</head>
<body>
     
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleIndicators" class="carousel slide col-12" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                    <?php 
                    
                    if (!array_key_exists('logado', $_SESSION))
                    {
                        session_destroy(); 
                    }
                    else
                    {
                        echo "Seja bem vindo " . $_SESSION['nome'];
                    }
                    ?>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="slider-imagens/r1.jpg" class="d-block w-100" alt="Nome do remédio">
                    </div>
                    <div class="carousel-item">
                        <img src="slider-imagens/r2.jpg" class="d-block w-100" alt="Nome do remédio">
                    </div>
                    <div class="carousel-item">
                        <img src="slider-imagens/r3.jpg" class="d-block w-100" alt="Nome do remédio">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>

        <div class="cards row">
        <?php
            
            $sql = "SELECT * FROM produto ORDER BY RAND() LIMIT 0,8";
            $resultado = $conn->query($sql);
            while ($row = $resultado->fetch_assoc()) {
        ?>
            <div class="col-md-3">
                <a href="produto.php?id=<?php echo $row['id_produto']?>"><div class="card">
                    <img class="card-img-top" src="cadastros/cadastro-produto/images/<?= $row['imagem'];?>" alt="Imagem de capa do card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $row['nome'];?></h5>
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
         
    </div>
    <?php            
        require 'footer.php';
    ?>     
</body>
</html>