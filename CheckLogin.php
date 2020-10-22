<?php 
include_once("./dao/Dbconnect.php");
session_start();    
if(isset($_POST['btn_login'])){
    $account=$_POST['Account'];
    $password=$_POST['Password'];   
    if ($account == 'admin' && $password = '123') {
        $_SESSION['status'] = 'welcome';
        $_SESSION['status_code']='success';
        $_SESSION['username']=$account;
        header("Location:./merciado_admin/index.php");
    } else{
    $sql = "SELECT pass,checkin FROM users WHERE account = '$account'";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if (md5($password) == $row['pass']) {
                if($row['checkin']==0){
                $_SESSION['status'] = 'welcome';
                $_SESSION['status_code']='success';
                $_SESSION['username']=$account;
                header("Location:./index.php"); 
                }
                else { 
                    $_SESSION['status'] = 'Your account is block';
                    $_SESSION['status_code']='error';
                    header("Location:./login.php");}
            }else{
                $_SESSION['status'] = 'Your account or password uncorrected';
                $_SESSION['status_code']='error';
                header("Location:./login.php");
            }
        }
    }
    }
}
?>
