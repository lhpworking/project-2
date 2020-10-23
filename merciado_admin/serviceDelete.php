<?php 
include("./dao/Dbconnect.php");
    if(isset($_POST['btn_delete'])){
        $del_id = $_POST['delete_id'];
        $delete_service = "DELETE  FROM services WHERE service_id = '$del_id'";
        if(mysqli_query($connect,$delete_service)){
            echo '
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <script>
            swal({
                title: "Notification",
                text:"Successfully",
                icon: "success",
              });
          window.location.href="./service.php";

              </script>
            ';

        }
    } 
?>