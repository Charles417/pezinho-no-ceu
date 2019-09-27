<?php
    session_start();
    require "../../conn.php";
    if($_SESSION['id_usuario'] > 0)
    {
        $sql = "SELECT * FROM usuario WHERE id_usuario = $_SESSION[id_usuario]";
        $resultado = $conn->query($sql);
        $linha = $resultado->fetch_assoc();
    }    
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
                <input type="text" name="nome" value="<?= isset($linha) ? $linha["nome"] : '' ?>">
            </div>
    
            <div class="campo">
                <label>CPF: </label>
                <input type="text" name="cpf" value="<?= isset($linha) ? $linha["cpf"] : '' ?>">
            </div>

            <div class="campo">
                <label>Login: </label>
                <input type="text" name="login" value="<?= isset($linha) ? $linha["login"] : '' ?>">
            </div>

            <div class="campo">
                <label>Senha: </label>
                <input type="text" name="senha" value="<?= isset($linha) ? $linha["senha"] : '' ?>">
            </div>

            <div class="campo">
                <label>E-mail: </label>
                <input type="text" name="email" value="<?= isset($linha) ? $linha["email"] : '' ?>">
            </div>

            <div class="campo">
                <label>Telefone: </label>
                <input type="tel" name="telefone" value="<?= isset($linha) ? $linha["telefone"] : '' ?>">
            </div>

            <div class="campo">
                <label>CEP: </label>
                <input type="text" name="cep" value="<?= isset($linha) ? $linha["cep"] : '' ?>">
            </div>

            <div class="campo">
                <label>Cidade: </label>
                <input type="text" name="cidade" value="<?= isset($linha) ? $linha["cidade"] : '' ?>">
            </div>

            <div class="campo">
                <label>UF: </label>
                <input type="text" name="uf" value="<?= isset($linha) ? $linha["uf"] : '' ?>">
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