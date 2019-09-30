<?php
    
    session_start();
    if(isset ($_POST['acao']))
    {   
        include ('conn.php');
        $login = $conn->real_escape_string($_POST['login']);
        $senha = $conn->real_escape_string($_POST['senha']);

        if(empty($login) || empty($senha))
        {
            echo 'Campos vazios';
        }else
        {
            $sql = "SELECT * FROM `usuario` WHERE usuario = '$login' AND senha = md5('$senha')";
            $consulta_bd = $conn->query($sql);

            if($consulta_bd->num_rows  == 1)
            {
                $linha = $consulta_bd->fetch_assoc(); 

                $_SESSION['id_usuario'] = $linha['id_usuario'];
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['logado'] = true;

                echo $_SESSION['nome'];
                header ('Location: home.php');
                
                exit();
            }
            else
            {
                echo "Resultado não encontrado";
            }
        }
    }

?>