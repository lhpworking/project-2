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

?>