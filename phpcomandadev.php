<?php
    
    include_once "conexao.php";


    $sql = "UPDATE livros SET quantidade=quantidade+1 where codlivro = 1;";

    $res = mysqli_query($conn, $sql);

    if($res){
        echo "quantidade atualizada";

    }
    else {
        echo "ocorreu um erro";
    }


  mysqli_close($conn);

  
?>