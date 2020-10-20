<?php 
include_once("./dao/Dbconnect.php");
session_start();

    
    $sql = "SELECT pass FROM users WHERE account = '$Acc'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (md5($password) == $row['pass']) {
                $_SESSION['status'] = 'welcome';
                $_SESSION['status_code']='success';
                header("Location:./index.php");
            } else{
                $_SESSION['status'] = 'Your account or password uncorrected';
                $_SESSION['status_code']='error';
                header("Location:./login.php");
            }
        }
    }
?>