<?php
include("./template/header.php");
include("./dao/Dbconnect.php");
?>
<style> 
.myTable {
    position: relative;
    height: 700px;
    overflow: auto;

}
</style>
<section id="main-content">
    <section class="wrapper">
        <div class="panel panel-default">
        <div class="panel-heading">
                    View Payment Details
                </div>
            <div class="table-responsive">
            <div class="myTable">

                <table class="table table-striped b-t b-light">
                    <thead>
                        <tr>
                            <th>Account</th>
                            <th>ticket code</th>
                            <th>Date</th>
                            <th>quantity</th>
                            <th>total</th>

                            <th style="width:30px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT account,`date` FROM payments";
                        $sql_run = mysqli_query($connect, $sql);
                        $mysqli = "SELECT payment_id,ticket_id ,quantity,total From paymentdetails";
                        $mysqli_run = mysqli_query($connect, $mysqli);
                        
                        while ($row = mysqli_fetch_array($sql_run)) {
                            while ($roww = mysqli_fetch_array($mysqli_run)) { {

                        ?>
                                    <tr>
                                        <td><?php echo $row['account'] ?></td>
                                        <td><?php echo $roww['ticket_id']?></td>
                                        <td><?php echo $row['date'] ?></td>
                                        <td><?php echo $roww['quantity']?></td>
                                        <td><?php echo $roww['total']?></td>

                                    </tr>
                        <?php
                                }
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </section>
</section>
<?php
include("./template/footer.php");
?>