<?php 
    include("./dao/Dbconnect.php");
    session_start();

     if(!empty($_REQUEST['Account'])){
        $Acc = $_REQUEST['Account'];
    }
     if(!empty($_REQUEST['Password'])){
        $password = $_REQUEST['Password'];
    }
    //user admin = admin ,pwd= 123
    if ($Acc == "admin" && $password == "123") {
        //save account to coockie
        setcookie("user", $Acc ,time() + 86400);
        setcookie("pwd", $password, time() + 86400);
        // go to admin form(link)
        header("Location:index.php");
    }else{

    }
?>