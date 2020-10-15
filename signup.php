<?php 
include_once("./dao/Dbconnect.php");

    if (isset($_REQUEST["btn_signup"])) {
        $Name = $_REQUEST["name"];
        $Email = $_REQUEST["email"];
        $Account = $_REQUEST["account"];
        $phone = $_REQUEST["phone"];
        $password = $_REQUEST["psw"];
        $re_pass = $_REQUEST["psw-repeat"];
        // ------------------------------//
        // check email is already registered ??
        $check_email = "SELECT * FROM users WHERE email='$Email";
        $check_email_run = mysqli_query($connect, $check_email);
        if (mysqli_num_rows($check_email_run > 0)) {
            $_SESSION['status'] = "Email is already registered. Please choose another email";
        } else {
            //  check password and re_password 
            if ($password == $re_pass) {
                //================================================\\
                $sql = "INSERT INTO users(id, phone, account, pass ,cus_name ,email) VALUES (null,'$phone','$Account','$re_pass','$Name','$Email')";
                //kiểm tra
                if (mysqli_query($connect, $sql)) {
                    //Thông báo nếu thành công
                    header("Location:./login.php");
                } else {
                    //Hiện thông báo khi không thành công
                    echo "Không thành công. Lỗi" . mysqli_error($connect);
                    //ngắt kết nối
                    mysqli_close($connect);
                }
            }
        }
    }
