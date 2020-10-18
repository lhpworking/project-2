<?php 
include_once("./dao/Dbconnect.php");
session_start();

    if(isset($_POST['btn_check_email'])){
        $Email = $_POST['email_user'];
         // check email is already registered ??
         $check_email = "SELECT * FROM users WHERE email='$Email' ";
         $check_email_run = mysqli_query($connect, $check_email);
            if(mysqli_num_rows($check_email_run)>0){
             echo"Email has already been registered .";
         }else{
             echo"It's Available";
         }
    }
    if(isset($_POST['btn_check_phone'])){
        $phone = $_POST['phone_user'];
         // check phone is already registered ??
         $check_phone = "SELECT * FROM users WHERE phone='$phone' ";
         $check_phone_run = mysqli_query($connect, $check_phone);
            if(mysqli_num_rows($check_phone_run)>0){
             echo"Phone number has already been registered .";
         }else{
             echo"It's Available";
         }
    }
    if(isset($_POST['btn_check_account'])){
        $Account = $_POST['account_user'];
         // check acconut is already registered ??
         $check_account = "SELECT * FROM users WHERE account='$Account' ";
         $check_account_run = mysqli_query($connect, $check_account);
            if(mysqli_num_rows($check_account_run)>0){
             echo"Account has already been registered .";
         }else{
             echo"It's Available";
         }
    }

    if (isset($_REQUEST["btn_signup"])) {
        $Name = $_REQUEST["name"];
        $Email = $_REQUEST["email"];
        $Account = $_REQUEST["account"];
        $phone = $_REQUEST["phone"];
        $password = $_REQUEST["psw"];
        $re_pass = $_REQUEST["psw-repeat"];
        // check captchaUser
        $captcha = $_REQUEST["captcha"];
        $captchaUser = filter_var($_REQUEST["captcha"], FILTER_SANITIZE_STRING);
       
        // ------------------------------//
        // check phone
        $check_phone = "SELECT * FROM users WHERE phone='$phone' ";
        $check_phone_run = mysqli_query($connect, $check_phone);

        // check account
        $check_account = "SELECT * FROM users WHERE account='$Account' ";
        $check_account_run = mysqli_query($connect, $check_account);

        // check email
        $check_email = "SELECT * FROM users WHERE email='$Email'";
        $check_email_run = mysqli_query($connect, $check_email);

        if (mysqli_num_rows($check_email_run)>0){
            $_SESSION['status']= "This email has been Taken . Please Try Another one.";
            $_SESSION['status_code'] = "error";
            header("Location:./login.php");

        }else if(mysqli_num_rows($check_phone_run)>0){
            $_SESSION['status']= "This Phone number has been Taken . Please Try Another one.";
            $_SESSION['status_code'] = "error";
            header("Location:./login.php");

        }else if(mysqli_num_rows($check_account_run)>0){
            $_SESSION['status']= "This account has been Taken . Please Try Another one.";
            $_SESSION['status_code'] = "error";
            header("Location:./login.php");

        }else {
            if(empty($captcha)){
                $_SESSION['status']= "Please enter the captcha";
                $_SESSION['status_code'] = "info";
                header("Location:./login.php");
                
            }else if(!($_SESSION['CAPTCHA_CODE'] == $captchaUser)) {
                $_SESSION['status']= "Your captcha is invalid";
                $_SESSION['status_code'] = "error";
                header("Location:./login.php");
            } else{
            //  check password and re_password 
            if ($password == $re_pass) {
                //================================================\\
                $sql = "INSERT INTO users(id, phone, account, pass ,cus_name ,email) VALUES (null,'$phone','$Account','".md5($re_pass)."','$Name','$Email')";
                //kiểm tra
                if (mysqli_query($connect, $sql)) {
                    //Thông báo nếu thành công
                    $_SESSION['status']= "Sign up Successfully!";
                    $_SESSION['status_code'] = "success";
                    header("Location:./login.php");

                } else {
                    //Hiện thông báo khi không thành công
                    $_SESSION['status']= "failed";
                    $_SESSION['status_code'] = "error";
                    header("Location:./login.php");
                    //ngắt kết nối
                    mysqli_close($connect);
                    }
                }
            }
        }
    }
 ?>