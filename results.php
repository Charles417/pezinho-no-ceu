<?php
    include "conn.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resultado de Pesquisa</title>
</head>
<body>
    <?php
        $buscar=$_POST['buscar'];  
        $sql = mysqli_query($connection, "SELECT * FROM cursos WHERE nome LIKE '%$buscar%'");
        $row = mysqli_num_rows($sql);
        if($row > 0){
            while($linha = mysqli_fetch_array($sql)){
                $nome = $linha['nome'];
                $categoria_id = $linha['categoria_id'];
                echo "<strong>Nome: </strong> $nome";
                echo "<br />";
                echo "<strong>Categoria_id: </strong> $categoria_id";
                echo "<br /><br />";
            }
        }else{
            echo "Desculpe nenhum usuario com este nome foi encontrado!";
        }
    ?>
</body> 
</html>