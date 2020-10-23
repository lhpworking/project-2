<?php
include("./template/header.php");
include("./dao/Dbconnect.php");
$service="SELECT * FROM services";
$service_run = mysqli_query($connect, $service);

// Check if image file is a actual image or fake image
if (isset($_POST['btn_submit'])) {
    $service_id = $_POST['service_id'];
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];

    $target_file = '../assets/images/' . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $service_img = basename($_FILES["imageUpload"]["name"]);
    $check = getimagesize($_FILES["imageUpload"]["tmp_name"]);
    if ($check !== false) {
        //move uploaded file for uploading file into server
        if (!move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file)) {
            echo '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        swal({
            title:"Notification"
            title: "Sorry, there was an error uploading your file.",
            icon: "error",
          });
          window.location.href="./service.php";


          </script>
        ';

        }

        $uploadOk = 1;
    } else {
        echo '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        swal({
            title:"Notification"
            text: "File is not an image.",
            icon: "error",
          });
          window.location.href="./service.php";

        </script>
        ';
        $uploadOk = 0;
    }
    $sql = "INSERT INTO services VALUES (null,'$service_id','$service_name','$description','$service_img')";
    if (mysqli_query($connect, $sql)) {
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


    } else {
        echo '
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script>
        swal({
            title: "Notification",
            text:"Failed",
            icon: "error",
          });
          window.location.href="./service.php";

          </script>
        ';

    }
}
?>
<style>
    .myTable {
    position: relative;
    height: 300px;
    overflow: auto;

}
</style>


<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Entertainment Game
            </header>
            <div class="panel-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="position-center">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Service code</label>
                            <input type="text" class="form-control check_ticket" name="service_id" placeholder="Enter ticket code" required>
                        </div>
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Service Name</label>
                            <input type="text" class="form-control check_ticket" name="service_name" placeholder="Enter ticket code" required>
                            <small class="error_code" style="color : red "></small>
                        </div>

                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Describe</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div class=" col-md-12">
                            <div class="form-group">
                                <label for="MyUpload"> </label>
                                <input type="file" name="imageUpload" required>
                                <small id="notefile" class="form-text text-mutted">Please choose image </small>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-info" name="btn_submit" style="margin:20px">Submit</button>
                        </div>

                    </div>
                </form>
            </div>
        </section>
        <section class="wrapper" style="margin-top:50px">
        
        <div class="table-agile-info">
        <div class="myTable">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Entertainment Game Management
                </div>

                <div class="myTable">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Service code</th>
                                <th>Name</th>
                                <th>description</th>
                                <th>image</th>
                                <th> Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($service_run)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo  $row['service_id']; ?>
                                </td>
                                <td>
                                    <?php echo  $row['name']; ?>
                                </td>
                                <td>
                                    <?php echo $row['description']; ?>
                                </td>
                                <td><?php echo '<img src="../assets/images/'.$row['img'].'" width="200px;" height="150px"'  ?></td>
                                <td>
                                    <form action="serviceDelete.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['service_id'];?>">
                                        <button type="submit" class="btn btn-info" name="btn_delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </section>
        </div>
        

    </section>

    <?php
    include("./template/footer.php");
    ?>