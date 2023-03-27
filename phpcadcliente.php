<?php
 
    $nome = $_POST['txtnome'];
    $telefone = $_POST['txttelefone'];
    $cpf = $_POST['txtcpf'];
    $endereco = $_POST['txtendereco'];
    $data = $_POST['txtdata'];
   
    function cadastrar() 
    {
        include_once "conexao.php";
        $nome = $_POST['txtnome'];
        $telefone = $_POST['txttelefone'];
        $cpf = $_POST['txtcpf'];
        $endereco = $_POST['txtendereco'];
        $data = $_POST['txtdata'];

        $query = "insert into cliente(nome, endereco, telefone, cpf_cliente, datanasc) values ('$nome', '$endereco', '$telefone', '$cpf', '$data');";
        $SQL = mysqli_query($conn, $query);
    }

    
    if(isset($_POST['btncadastrar'])) {
        echo "
        <p>Cadastro realizado</p>
        <a href='tcadcliente.php'><button>Retornar para o cadastro</button></a>
        ";
        cadastrar();
    
    }
    function pesquisar()
    {
        $query = "select * from cliente where cpf_cliente =  '$cpf';";
        $sql = mysql_query($conn, $query);

        $linha = mysqli_fetch_array($sql);

        ?>
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
                <input type="text" name="txtnome" value="<?php $linha['nome'] ?>">
            </div>

            <div class="endereco">
                <p>Endereço:</p>
                <input type="text" name="txtendereco" value="<?php $linha['endereco']?>">
            </div>

            <div class="telefone">
                <p>Telefone:</p>
                <input type="text" name="txttelefone" value="<?php $linha['telefone']?>">
            </div>

            <div class="cpf">
                <p>cpf:</p>
                <input type="text" name="txtcpf" value="<?php $linha['cpf_cliente']?>">
            </div>
            <div class="data">
                <p>Data de nascimento:</p>
                <input type="date" name="txtdata" value="<?php $linha['datanasc']?>">
            </div>

            <input type="submit"  value="Cadastrar" name="btncadastrar">
            <input type="submit" name="btnpesquisar" value="pesquisar" >
            </form>
        
    </main>
    
</body>
</html>
    
    <?php

    }
    
    if(isset($_POST['btnpesquisar']))
    {

    }
    ?>