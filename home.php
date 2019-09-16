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
    <?php require_once "header.php"?>
</head>
<body>  

    <div class="container-fluid">
        <div class="row">
            <div class="col-1"></div>
            <div id="carouselExampleIndicators" class="carousel slide col-10" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
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
            <div class="col-1"></div>
        </div>
    </div>

    <footer>
        <div class="contato">
            <section><a class="conteudo"><img src="icons/tel.png" alt="">(16)996588569 / 996588569</a></section>
            <section><a class="conteudo"><img src="icons/mail.png" alt="">texeira.mariafumaça@gmail.com</a></section>
            <section><a class="conteudo"><img src="icons/face.png" alt=""></a>José Teixeira Junior</section>
            <section><a class="conteudo"><img src="icons/insta.png" alt=""></a>Texeirinhafazfumaça</section>
            <section><a class="conteudo"><img src="" alt=""></a></section>
        </div>
    </footer>
    
</body>
</html>