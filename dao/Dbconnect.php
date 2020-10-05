<?php 
    function getConnection(){
    //declare host
    $hostName = 'localhost:3306';
    // declare username
    $userName = 'root';
    //declare password
    $passWord = 'Hungphat1969';
    // declare databaseName
    $databaseName = '';  
    $connect = mysqli_connect($hostName,$userName,$passWord,$databaseName);
    //check connect
    if (!$connect) {
        exit('successfully!!!');
    }
    echo 'failed!!!';
    }
?>