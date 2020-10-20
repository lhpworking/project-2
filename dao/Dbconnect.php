<?php

      $servername = "localhost:3306";
      $username = "root";
      $password = "Hungphat1969";
      $database = "managepark";
      
      // Create connection
      $connect = mysqli_connect($servername, $username, $password,$database);
      
      // Check connection
      if (!$connect) {
        die("Connection failed: " . mysqli_connect_error());
      }

  // check login 
      function checkaccount() {
        if(!empty($_COOKIE["user"])){
          $user=$_COOKIE["user"]; 
          if(!empty($_COOKIE["pwd"])){
              $pwd=$_COOKIE["pwd"];
          }else{
              header("location:./login.php");
          }
          if(!($user=="admin" && $pwd=="123")){
              header("location:./merciado_admin/login.php");
          }else{
            header("Location:./merciado_admin/test.php");
          }
      }
      }
      ?>