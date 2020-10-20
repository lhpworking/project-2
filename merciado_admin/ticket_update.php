<?php
include("./template/header.php");
include("./dao/Dbconnect.php");



?>
<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Edit Ticket
            </header>
            <div class="panel-body">
                <div class="position-center">
                    <?php
                    if (isset($_POST['btn_update'])) {
                        $id = $_POST['edit_id'];
                        $query = "SELECT * FROM tickets Where id = '$id'";
                        $query_run = mysqli_query($connect, $query);
                        foreach ($query_run as $row) {
                    ?>
                            <form action="createTicket.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']?>">
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Ticket code</label>
                                    <input type="text" class="form-control" name="ticket_id_edited" value="<?php echo $row['ticket_id'] ?>">
                                </div>
                                <div class="col-lg-6">
                                    <label for="exampleInputPassword1">Type</label>
                                    <select class="form-control input-md m-bot15" name="kind">
                                        <option><?php echo $row['kind'] ?></option>
                                    </select>
                                </div>
                                <div class="col-sm-6">
                                    <label for="exampleInputEmail1">price</label>
                                    <input type="number" class="form-control" name="price_edited" placeholder="Enter price" value="<?php echo $row['price'] ?>" min="0" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="exampleInputEmail1">Describe</label>
                                    <textarea class="form-control" name="describe_edited"><?php echo $row['description'] ?></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-info" name="update_btn" style="margin:20px">update</button>
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