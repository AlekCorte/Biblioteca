<?php

   
    function cadastrar() {
        include_once "conexao.php";
        $nome = $_POST['txtnomelivro'];
        $genero = $_POST['txtgenero'];
        $editora = $_POST['txteditora'];
        $autor = $_POST['txtautor'];
        $quantidade = $_POST['txtqntd'];


        $query = "insert into livros(nome_liv, genero, autor, editora, quantidade) values('$nome','$genero','$autor','$editora', '$quantidade');";
        $sql = mysqli_query($conn, $query);
 
    }

    if(isset($_POST['btncad'])) {
        echo "
        <!DOCTYPE html>
<html lang='pt-BR'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
</head>
<body>

<p>Cadastro realizado </p>
<a href='tmenulivros.php'><button>Retornar para o cadastro</button></a>

</body>
</html>
        ";
        cadastrar();
    }


?>