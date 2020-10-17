<?php 
include_once("./dao/Dbconnect.php");

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
        header("Location:./merciado_admin/test.php");

    }  

    $sql = "SELECT pass FROM users WHERE account = '$Acc'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (md5($password) == $row['pass']) {
                header("Location:./logged_in.php");
                
            } 
        }
    }
?>