<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Menus</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/geral.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #63B8FF;">
        <div class="container">
            <a class="navbar-brand" href="http://localhost:8080/pezinho-no-ceu/home.php"><img class="logo" src="http://localhost:8080/pezinho-no-ceu/icons/logo.png" alt="Logotipo Pézinho no Céu"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="http://localhost:8080/pezinho-no-ceu/sobre.php">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/pezinho-no-ceu/cadastros/cadastro-usuario/cadastro-usuario.php">Cadastro</a>
                </li>
                <?php
                    if (!array_key_exists('logado', $_SESSION)) {
                ?>
                <li class="nav-item">
                    <a class="nav-link" href="http://localhost:8080/pezinho-no-ceu/login.php">Login</a>
                </li>
                <?php
                    }

                    if (array_key_exists('logado', $_SESSION) && $_SESSION['logado'] === true) {
                ?>
                <li class="nav-items">
                    <a class="nav-link" href="http://localhost:8080/pezinho-no-ceu/logout.php">Logout</a>
                </li>
                <?php
                    }
                ?>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="post" action="busca.php">
                <input class="form-control mr-sm-2" type="text" name="buscar" placeholder="Pesquisa">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
            </div>
        </div>
    </nav>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>

    