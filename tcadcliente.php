

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./tcadcliente.css">
    <title>Cadastro Clientes</title>
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
        <form action="phpcadcliente.php" method="POST" class="form">
        <h1>Cadastro de cliente</h1>
        
        
            <div class="nome">
                <p>Nome:</p>
                <input type="text" name="txtnome">
            </div>

            <div class="endereco">
                <p>Endereço:</p>
                <input type="text" name="txtendereco">
            </div>

            <div class="telefone">
                <p>Telefone:</p>
                <input type="text" name="txttelefone">
            </div>

            <div class="cpf">
                <p>cpf:</p>
                <input type="text" name="txtcpf">
            </div>
            <div class="data">
                <p>Data de nascimento:</p>
                <input type="date" name="txtdata">
            </div>

            <input type="submit"  value="Cadastrar" name="btncadastrar">
            <input type="submit" name="btnpesquisar" value="pesquisar" >
            </form>
        
    </main>
    
</body>
</html>