<?php

 include("conexao.php");

 $consulta = "SELECT * FROM alug_livros";
 $cpf = "SELECT * FROM cliente";
 $con = $conn->query($consulta, $cpf) or die($conn->error);


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
                <th>CPF cliente</th>
                <th>data da retirada</th>
                <th>código do livro</th>
                <th>período</th>
                
            </tr>
            <?php while($dado = $con->fetch_array()) { ?>
            <tr>
                <td><?php echo $dado["cpf_cliente"]; ?></td>
                <td><?php echo $dado["dat_dev"]; ?></td>
                <td><?php echo $dado["cod_livro"]; ?></td>
                <td><?php echo $dado["periodo"]; ?></td>
            </tr>
            <?php } ?>
        </table>
        </div>
    </main>


</body>
</html>