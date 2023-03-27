<?php
  session_start();  
  $user = $_POST["cxlogin"];
  $senha = $_POST["cxsenha"];
  if($user == "Alex" && $senha == "123")
  {
    $_SESSION["seg"] = "rato";
    $_SESSION["perfil"] = "adm";
    echo "
   <script>
     alert('Seja bem vindo');
     document.location.href = 'tmenuadm.php';
   </script>
    "; 
  }
  else
  {
     echo "
     <script>
       alert('Tenta outra vez');
      document.location.href = 'login.php';
     </script>
     ";
  }
?>