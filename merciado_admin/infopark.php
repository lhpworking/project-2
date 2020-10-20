<?php 
    include("./template/header.php"); 
?>
<?php
    if(isset($_POST['btn_submit'])){
    $target_dir = "./merciado_admin/textPark/";
    $target_file = $target_dir .basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "txt" ) {
        echo "Sorry, only txt files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
    ?>


<div class="container" >
    <form action="" method="post">
        <textarea name="content"  col="30" rows="10" margin-top="100px"></textarea>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" id="submit" name="btn_submit" value="submit">
        </div>
    </form>


</div>
<script src="./ckeditor /ckeditor.js"></script>
<script>
CKEDITOR.replace('content');
</script>
<?php 
        include("./template/footer.php"); 
    ?>