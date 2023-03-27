<?php

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./comdevreal.css">
    <title>Estoque dos livros</title>
</head>
<body>

    <nav>
        <div class="container">
            <div class="titulo">
                <h1>Alek Livros</h1>
            </div>
            <div class="itens">
                <a href="./tcomanda.php">Tela comanda</a>
                <a href="tmenuadm.php">Retornar para o menu ADM</a>
                
            </div>
        </div>
    </nav>
    <main>
        <form action="phpcomandadev.php" class="form">
            <div class="campo">
                <p>CPF Cliente:</p>
                <input type="text" name="txtcpf">
            </div>

            <div class="campo">
                <p>Data devolução:</p>
                <input type="date">
            </div>

            <div class="campo">
                <p>Código do livro:</p>
                <input type="number" name="txtcod">
            </div>
            
            <input type="submit" class="button" name="btncomdev" value="finalizar" >
            
        </form>

    </main>