<?php
include("./template/header.php");
include("./dao/Dbconnect.php");

// Check if image file is a actual image or fake image
if (isset($_POST['btn_submit'])) {
    $service_id = $_POST['service_id'];
    $service_name = $_POST['service_name'];
    $description = $_POST['description'];

    $target_file = '../assets/images/' . basename($_FILES["imageUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $service_img = rand(1000, 1000000) . "." . $imageFileType;
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
          </script>
        ';
    }
}
?>

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

    </section>

    <?php
    include("./template/footer.php");
    ?>