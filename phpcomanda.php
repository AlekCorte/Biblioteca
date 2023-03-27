<?php
    
    include_once "conexao.php";

    $codlivro = $_POST['txtcodlivro'];
    $sql = "UPDATE livros SET quantidade=quantidade-1 where codlivro = '$codlivro';";

    $res = mysqli_query($conn, $sql);

    if($res){
        echo "quantidade atualizada";

    }
    else {
        echo "ocorreu um erro";
    }


  mysqli_close($conn);

  
?>