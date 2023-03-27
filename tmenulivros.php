<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tmenulivros.css">
    <title>Cadastro Clientes</title>
</head>
<body>

    <nav>
        <div class="container">
            <div class="titulo">
                <h1>Alek Livros</h1>
            </div>
            <div class="itens">
                <a href="tmenuadm.php"> Retornar para o menu ADM</a>
                
            </div>
        </div>
    </nav>

    <main>

        <form action="phpmenulivros.php" method="POST" class="form">
        <h1>Cadastro de Livros</h1>
        
        
        <div class="livro">
            <p>Nome do livro:</p>
            <input type="text" name="txtnomelivro">
        </div>

        <div class="genero">
            <p>Gênero do livro:</p>
            <input type="text" name="txtgenero">
        </div>

        <div class="editora">
            <p>Editora:</p>
            <input type="text" name="txteditora">
        </div>

   
        <div class="Autor">
            <p>Autor:</p>
            <input type="text" name="txtautor">
        </div>

        <div class="quantidade">
            <p>Quantidade:</p>
            <input type="number" name="txtqntd">
        </div>

            <input type="submit" value="Cadastrar" name="btncad">

            </form>
        
    </main>
    
</body>
</html>