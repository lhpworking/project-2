<?php 
include("merciado_admin/template/myscript.php");
include("./dao/Dbconnect.php");
session_start();
    if (isset($_REQUEST['btn_submit'])) {
        $ticket_id = $_REQUEST['ticket_id'];
        $kind = $_REQUEST['kind'];
        $price = $_REQUEST['price'];
        $describe = $_REQUEST['describe'];
    
        $add_ticket = "INSERT INTO tickets VALUES (null,'$ticket_id','$kind','$price','$describe')";
        if (mysqli_query($connect, $add_ticket)) {
            $_SESSION['status'] = "Sign up Successfully!";
            $_SESSION['status_code'] = "success";
            header("location:./ticket.php");
        } else {
            $_SESSION['status'] = "Sign up Successfully!";
            $_SESSION['status_code'] = "error";
            mysqli_close($connect);
        }
    } 
    if(isset($_POST['update_btn'])){
        $id=$_POST['edit_id'];
        $ticket_id_edited = $_REQUEST['ticket_id_edited'];
        $price_edited = $_REQUEST['price_edited'];
        $describe_edited = $_REQUEST['describe_edited'];

        $update_ticket= " UPDATE tickets SET ticket_id='$ticket_id_edited',price = '$price_edited', description ='$describe_edited' where id = '$id'";
        if(mysqli_query($connect,$update_ticket)){
            $_SESSION['status'] = "Sign up Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location:./ticket.php");
        }else{
            $_SESSION['status'] = "Sign up Successfully!";
            $_SESSION['status_code'] = "error";
        }
    }
    if(isset($_POST['btn_delete'])){
        $del_id = $_POST['delete_id'];
        $delete_ticket = "DELETE  FROM tickets WHERE id = '$del_id'";
        if(mysqli_query($connect,$delete_ticket)){
            $_SESSION['status'] = "Sign up Successfully!";
            $_SESSION['status_code'] = "success";
            header("Location:./ticket.php");
        }
    }
?>