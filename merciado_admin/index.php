<?php
include_once("./template/header.php");
include("./dao/Dbconnect.php");
?>
<section id="main-content">
    <section class="wrapper">
        <!-- //market-->
        <div class="market-updates">
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-eye"> </i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Visitors</h4>
                        <h3>13,500</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-1">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-users"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Users</h4>
                        <h3>1,250</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-3">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-usd"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Sales</h4>
                        <h3>1,500</h3>
                        <p>Other hand, we denounce</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-4">
                    <div class="col-md-4 market-update-right">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-8 market-update-left">
                        <h4>Orders</h4>
                        <h3>1,500</h3>
                        <p>Other hand, we denounce</p>
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
                                <div class="col-sm-5 m-b-xs">
                                    <button class="btn btn-sm btn-default" name='edit'>Edit</button>
                                    <button class="btn btn-sm btn-default" name='btn_delete'>Delete</button>

                                </div>
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
                                            <th style="width:20px;">
                                                <label class="i-checks m-b-none">
                                                    <input type="checkbox"><i></i>
                                                </label>
                                            </th>
                                            <th>Account</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th style="width:30px;"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM users";
                                        $smt = mysqli_query($connect,$sql);
                                            while ($row = mysqli_fetch_array($smt)) {
                                        ?>
                                                <tr>
                                                    <td><label class="i-checks m-b-none">
                                                            <input name="checkbox" type="checkbox" name="delete[]" value=" <?= $row['account']; ?>">
                                                        </label>
                                                    </td>
                                                    <td><?php echo $row['account'] ?></td>
                                                    <td><?php echo $row['cus_name'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['phone'] ?></td>

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
                                    <li><a href="">1</a></li>
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