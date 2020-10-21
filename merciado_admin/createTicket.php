<?php 
include("./dao/Dbconnect.php");

if(isset($_POST['btn_check_ticket'])){
     $Ticket_code = $_POST['ticket_code_used'];
     $check_ticket = "SELECT * FROM tickets WHERE ticket_id= '$Ticket_code' ";
     $check_ticket_run = mysqli_query($connect, $check_ticket);
        if(mysqli_num_rows($check_ticket_run)>0){
         echo"The ticket code has already been created.";
     }else{
         echo"It's Available";
     }
}
    if (isset($_REQUEST['btn_submit'])) {
        $ticket_id = $_REQUEST['ticket_id'];
        $kind = $_REQUEST['kind'];
        $price = $_REQUEST['price'];
        $describe = $_REQUEST['describe'];

        $check_ticket = "SELECT * FROM tickets WHERE ticket_id= '$ticket_id' ";
        $check_ticket_run = mysqli_query($connect, $check_ticket);
        if(mysqli_num_rows($check_ticket_run)>0){
            echo '
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            swal({
                title: "Notification",
                text:"Failed",
                icon: "error",
              });
              </script>
            ';
            header("location:./ticket.php");
        }else{
            $add_ticket = "INSERT INTO tickets VALUES (null,'$ticket_id','$kind','$price','$describe')";
            if (mysqli_query($connect, $add_ticket)) {
                echo '
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                swal({
                    title: "Notification",
                    text:"Successfully",
                    icon: "success",
                  });
                  </script>
                ';
                header("location:./ticket.php");
            } else {
                echo '
                <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
                <script>
                swal({
                    title: "Notification",
                    text:"Failed",
                    icon: "error",
                  });
                  </script>
                ';
                mysqli_close($connect);
            }
        }
   
    } 
    if(isset($_POST['update_btn'])){
        $id=$_POST['edit_id'];
        $ticket_id_edited = $_REQUEST['ticket_id_edited'];
        $price_edited = $_REQUEST['price_edited'];
        $describe_edited = $_REQUEST['describe_edited'];

        $update_ticket= " UPDATE tickets SET ticket_id='$ticket_id_edited',price = '$price_edited', description ='$describe_edited' where id = '$id'";
        if(mysqli_query($connect,$update_ticket)){
            echo '
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            swal({
                title: "Notification",
                text:"Successfully",
                icon: "success",
              });
              </script>
            ';
            header("Location:./ticket.php");
        }else{
            echo '
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            swal({
                title: "Notification",
                text:"Failed",
                icon: "error",
              });
              </script>
            ';
        }
    }
    if(isset($_POST['btn_delete'])){
        $del_id = $_POST['delete_id'];
        $delete_ticket = "DELETE  FROM tickets WHERE id = '$del_id'";
        if(mysqli_query($connect,$delete_ticket)){
            echo '
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            swal({
                title: "Notification",
                text:"Successfully",
                icon: "success",
              });
              </script>
            ';
            header("Location:./ticket.php");
        }
    }
?>