<?php
    $servername = "localhost:3306";
    $username = "root";
    $password = "Hungphat1969";
    $db="managepark";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password,$db);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql= "SELECT * FROM users";
    $result=$conn->query($sql);

?>