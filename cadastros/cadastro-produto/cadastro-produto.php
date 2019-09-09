<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/produto.css">
    <title>Produtos</title>
</head>
<body>

    <nav>
        <a href="" class="logotipo">Logo</a>
        <div class="busca">
            <input type="text" name="q" id="busca">
            <input type="submit" name="busca" id="busca" value="Busca">
        </div>
        <div>
            <a href="">Sobre</a>
            <a href="">Login</a>
            <a href="">Cadastro</a>
        </div>
    </nav>

    <div class="produtos">
        <h2>Cadastro de Produtos</h2>

        <form method="post" enctype="multipart/form-data">
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
                <input type="submit" name="cadastrar" value="Cadastrar Produto">
            </div>
        </form>


    </div>
</body>
</html>


