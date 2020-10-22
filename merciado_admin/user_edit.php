<?php
include("./template/header.php");
include("./dao/Dbconnect.php");
?>
<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Edit User
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <?php
                    if (isset($_POST['btn_edit'])) {
                        $phone = $_POST['edit_user'];
                        $query = "SELECT * FROM users Where phone = $phone";
                        $query_run = mysqli_query($connect, $query);
                        foreach ($query_run as $row) {
                    ?>
                            <form action="code.php" method="post">
                                <input type="hidden" name="edit_user" value="<?php echo $row['phone']?>">
                                <div class="col-md-12">
                                    <label for="inputAccount">Account</label>
                                    <label  class="form-control" name="edit_account"><?php echo $row['account'] ?></label>
                                </div>
                                <div class="col-lg-6">
                                    <label for="inputName">Name</label>
                                    <input type="text" class="form-control" name="edit_cus-name" value="<?php echo $row['cus_name'] ?>">

                                </div>
                                <div class="col-sm-6">
                                    <label for="inputEmail">Email</label>
                                    <input type="text" class="form-control" name="edit_email" value="<?php echo $row['email'] ?>">
                                </div>
                                <div class="col-md-12">
                                    <label for="inputPhone">Phone</label>
                                    <input type="label" class="form-control" name="edit_phone" value="<?php echo $row['phone'] ?>">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info" name="btn_update" style="margin:20px">Update</button>
                                    <!-- <button type="submit" class="btn btn-info" name="btn_cancel" style="margin:20px">Cancel</button> -->
                                </div>
                            </form>

                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </section>

    </section>
    <?php
    include("./template/footer.php");
    ?>