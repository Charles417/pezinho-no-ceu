<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <?php require_once "header.php"?>
</head>
    <body>
    <div class="login">
        <h2>
            Efetue o Login
        </h2>
        <form>
            <input type="text" name="login" placeholder="Login..." require>
            <input type="passaword" name="senha" placeholder="Senha..." require>
            <input type="submit" name="acao" value="Logar">
        </form>
    </div>
</body>
</html>