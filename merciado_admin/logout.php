<?php 
      setcookie("user", $Acc ,time() - 86400);
      setcookie("pwd", $password, time() - 86400); 
      header("Location:./login.php")
?>