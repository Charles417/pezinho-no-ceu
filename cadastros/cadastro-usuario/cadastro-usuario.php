<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/usuario.css">
    <title>Usuários</title>
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

    <div class="usuarios">
        <h2>Cadastro de Usuários</h2>

        <form action="" method="post" enctype="multipart/form-data">
            <div class="campo">
                <label>Nome: </label>
                <input type="text" name="nome">
            </div>
    
            <div class="campo">
                <label>CPF: </label>
                <input type="text" name="cpf">
            </div>

            <div class="campo">
                <label>Login: </label>
                <input type="text" name="login">
            </div>

            <div class="campo">
                <label>Senha: </label>
                <input type="text" name="senha">
            </div>

            <div class="campo">
                <label>Confirmar senha: </label>
                <input type="text" name="confirmar-senha">
            </div>

            <div class="campo">
                <label>E-mail: </label>
                <input type="text" name="email">
            </div>

            <div class="campo">
                <label>Telefone: </label>
                <input type="text" name="telefone">
            </div>

            <div class="campo">
                <label>CEP: </label>
                <input type="text" name="cep">
            </div>

            <div class="campo">
                <label>Cidade: </label>
                <input type="text" name="cidade">
            </div>

            <div class="campo">
                <label>UF: </label>
                <input type="text" name="uf">
            </div>

            <div class="cadastro">
                <input type="submit" name="cadastrar" value="Cadastrar Usuário">
            </div>
        </form>
    </div>  
</body>
</html>