<?php
    session_start();
    $_SESSION['logado'] = '';
    $_SESSION['id_usuario'] = '';
    session_destroy();

    header('Location: home.php');
?>