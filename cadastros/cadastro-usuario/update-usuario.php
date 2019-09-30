<?php
    require "../../conn.php";
    $id = $_GET['id'];
    $select = "SELECT * FROM `usuario` WHERE `id_usuario` = $id";
    
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
        <h2>Atualizar Usuários</h2>

        <form action="update.php" method="post" enctype="multipart/form-data">

        <?php 
        
        $resultado = mysqli_query($conn, $select);

        while ($row = mysqli_fetch_array($resultado) ){ 

                $id = $row['id_usuario'];
                $nome = $row['nome'];
                $cpf = $row ['cpf'];
                $usuario = $row ['usuario'];
                $senha = $row ['senha'];
                $email = $row ['email'];
                $telefone = $row ['telefone'];
                $cep = $row ['cep'];
                $cidade = $row ['cidade'];
                $uf = $row ['uf'];
            }
        ?>

            <div class="campo">
                <input type="hidden" name="id_usuario" value="<?= $id ?>">
            </div>

            <div class="campo">
                <label>Nome: </label>
                <input type="text" name="nome" value="<?= $nome?>">
            </div>
    
            <div class="campo">
                <label>CPF: </label>
                <input type="text" name="cpf" value="<?= $cpf?>">
            </div>

            <div class="campo">
                <label>Login: </label>
                <input type="text" name="usuario" value="<?= $usuario?>">
            </div>

            <div class="campo">
                <label>Senha: </label>
                <input type="password" name="senha" value="<?= $senha?>">
            </div>

            <div class="campo">
                <label>E-mail: </label>
                <input type="text" name="email" value="<?= $email?>">
            </div>

            <div class="campo">
                <label>Telefone: </label>
                <input type="text" name="telefone" value="<?= $telefone?>">
            </div>

            <div class="campo">
                <label>CEP: </label>
                <input type="text" name="cep" value="<?= $cep?>">
            </div>

            <div class="campo">
                <label>Cidade: </label>
                <input type="text" name="cidade" value="<?= $cidade?>">
            </div>

            <div class="campo">
                <label>UF: </label>
                <input type="text" name="uf" value="<?= $uf?>">
            </div>

            <div class="editar">
                <button type="submit" name="editar" >Editar Usuário</button>
            </div>
        </form>
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>
    <script src="../../js/geral.js"></script>
    <script src="../../js/bootstrap.min.js"></script>

</body>
</html>