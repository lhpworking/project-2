<?php
    include("./dao/Dbconnect.php");
    session_start();
    if(isset($_POST['btn_block'])){
        $phone=$_POST['block_id'];
        $query = "UPDATE users set checkin=0 WHERE phone = $phone";
        $query_run = mysqli_query($connect,$query);
        
        if($query_run)
    {
        $_SESSION['status'] = "Your Data is block";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT block";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 

    }    
    }
    if(isset($_POST['btn_unblock'])){
        $phone=$_POST['unblock_id'];
        $query = "UPDATE users set checkin=1 WHERE phone = $phone";
        $query_run = mysqli_query($connect,$query);
        if($query_run)
        {
            $_SESSION['status'] = "Your Data is block";
            $_SESSION['status_code'] = "success";
            header('Location: index.php'); 
        }
        else
        {
            $_SESSION['status'] = "Your Data is NOT block";       
            $_SESSION['status_code'] = "error";
            header('Location: index.php'); 
    
        }    
    }

    if(isset($_POST['btn_update'])){
        $edit_user=$_POST['edit_user'];
        $phone=$_POST['edit_phone'];
        $cus_name = $_POST['edit_cus-name'];
        $email = $_POST['edit_email'];
        
        $update_user= " UPDATE users SET cus_name = '$cus_name', email = '$email', phone=$phone where phone = $edit_user";
        $query_run = mysqli_query($connect,$update_user);
        if($query_run){
            $_SESSION['status'] = "Update Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location:./index.php");
        }else{
            $_SESSION['status'] = "Update Unsuccessfully!";
            $_SESSION['status_code'] = "error";
            header("Location:./index.php");

        }
    }
    // if(isset($_POST['btn_delete'])){
    //     $del_id = $_POST['delete_id'];
    //     $delete_ticket = "DELETE  FROM tickets WHERE id = '$del_id'";
    //     if(mysqli_query($connect,$delete_ticket)){
    //         $_SESSION['status'] = "Sign up Successfully!";
    //         $_SESSION['status_code'] = "success";
    //         header("Location:./ticket.php");
    //     }
    // }

?>