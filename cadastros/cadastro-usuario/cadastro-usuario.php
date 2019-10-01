<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuários</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/geral.css">
    <link rel="stylesheet" href="../cadastro-css/usuario.css">
    <?php require_once "../../header.php"?> 
</head>
<body>

    <div class="usuarios">
        <h2>Cadastro de Usuários</h2>

        <form action="create.php" method="post" enctype="multipart/form-data">
            <div class="campo">
                <label>Nome: </label>
                <input type="text" name="nome" maxlength="15" required>
            </div>
    
            <div class="campo">
                <label>CPF: </label>
                <input type="text" name="cpf" maxlength="11"  required>
            </div>

            <div class="campo">
                <label>Login: </label>
                <input type="text" name="usuario" maxlength="" required>
            </div>

            <div class="campo">
                <label>Senha: </label>
                <input type="password" name="senha" maxlength="20" required>
            </div>

            <div class="campo">
                <label>E-mail: </label>
                <input type="email" name="email" maxlength="30" required>
            </div>

            <div class="campo">
                <label>Telefone: </label>
                <input type="tel" name="telefone" maxlength="14" required>
            </div>

            <div class="campo">
                <label>CEP: </label>
                <input type="text" name="cep" maxlength="8" required>
            </div>

            <div class="campo">
                <label>Cidade: </label>
                <input type="text" name="cidade" maxlength="50" required>
            </div>

            <div class="campo">
                <label>UF: </label>
                <input type="text" name="uf" maxlength="2" required>
            </div>

            <div class="cadastro">
                <button type="submit" name="cadastrar" >Cadastrar Usuário</button>
            </div>
        </form>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/geral.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>