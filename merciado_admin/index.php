<?php
include_once("./template/header.php");
include("./dao/Dbconnect.php");
$sql = "SELECT * FROM users";
$smt = mysqli_query($connect,$sql);
$count_user = mysqli_num_rows($smt);
$sql1 = "SELECT * FROM payments";
$smt1 = mysqli_query($connect,$sql1);
$count_payment = mysqli_num_rows($smt1);


?>
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Users</h4>
                        <h3><?php echo $count_user?></h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Sales</h4>
                        <h3>12123</h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Orders</h4>
                        <h3><?php echo $count_payment?></h3>
                        <!-- <p>Other hand, we denounce</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!-- //market-->
        <div class="row">
            <div class="panel-body">
                <div class="col-md-12 w3ls-graph">
                    <!--agileinfo-grap-->
                    <div class="panel panel-default">
                        <form action="" method="post">
                            <div class="row w3-res-tb">
                                <div class="col-sm-4">
                                </div>
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="input-sm form-control" placeholder="Search">
                                        <span class="input-group-btn">
                                            <button class="btn btn-sm btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped b-t b-light">
                                    <thead>
                                        <tr>
                                            <th>Account</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th style="width:30px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                
                                            while ($row = mysqli_fetch_array($smt)) {
                                            
                                        ?>
                                        <tr>
                                            <td><?php echo $row['account'] ?></td>
                                            <td><?php echo $row['cus_name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td>
                                                <form action="user_edit.php" method="post">
                                                    <input type="hidden" name="edit_user"
                                                        value="<?php echo $row['phone']?>">
                                                    <button type="submit" class="btn btn-sm btn-default"
                                                        name='btn_edit'>Edit</button>
                                                </form>
                                            </td>
                                            <td>
                                                <form action="code.php" method="post">
                                                    <?php                                       
                                                        if($row['checkin']==1){
                                                            ?>
                                                    <input type="hidden" name="block_id"
                                                        value="<?php echo $row['phone'];?>">
                                                    <button type="submit" class="btn btn-sm btn-default"
                                                        name='btn_block'>Block</button>
                                                    <?php 
                                                        }
                                                        else {
                                                            ?>
                                                    <input type="hidden" name="unblock_id"
                                                        value="<?php echo $row['phone'];?>">
                                                    <button type="submit" class="btn btn-sm btn-default"
                                                        name='btn_unblock'>Unblock</button>
                                                    <?php
                                                    }
                                                    
                                                    ?>

                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                            }
                                    
                                        ?>
                                    </tbody>
                                </table>
                        </form>
                    </div>
                    <footer class="panel-footer">
                        <div class="row">
                            <div class="col-sm-7 text-right text-center-xs">
                                <ul class="pagination pagination-sm m-t-none m-b-none">
                                    <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                                    <?php
                                        for($i=1;$i<=(int)(mysqli_num_rows($smt)/10)+1;$i++){                                                           
                                    ?>                    
                                    <li><a href=""><?php echo $i?></a></li>
                                    <?php
                                    
                                        }
                                    ?>
                                    <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                </div>
                <!--//agileinfo-grap-->

            </div>
        </div>
        </div>

        <!-- tasks -->

        <!-- //tasks -->

    </section>
</section>
</section>

<?php
include_once("./template/footer.php");
?>