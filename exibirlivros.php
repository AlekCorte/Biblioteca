<?php

 include("conexao.php");

 $consulta = "SELECT * FROM livros";
 $con = $conn->query($consulta) or die($conn->error);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./exibirlivros.css">
    <title>Exibir livros</title>
</head>
<body>

    <nav>
        <div class="container">
            <div class="titulo">
                <h1>Alek Livros</h1>
            </div>
            <div class="itens">
                <a href="tmenuadm.php">Retornar para o menu ADM</a>
                
            </div>
        </div>
    </nav>

    <main>
        <div class="table">
        <table class="bordered striped centered highlight">
            <tr>
                <td><strong>Código</strong</td>
                <td><strong>Nome</strong</td>
                <td><strong>Gênero</strong</td>
                <td><strong>Editora</strong</td>
                <td><strong>Autor</strong</td>
                <td><strong>Quantidade</strong</td>
            </tr>
            <?php while($dado = $con->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["codlivro"]; ?></td>
                <td><?php echo $dado["nome_liv"]; ?></td>
                <td><?php echo $dado["genero"]; ?></td>
                <td><?php echo $dado["editora"]; ?></td>
                <td><?php echo $dado["autor"]; ?></td>
                <td><?php echo $dado["quantidade"]; ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </main>


</body>
</html>