<?php
include('./dao/Dbconnect.php');
include_once("./template/header.php");
// info ticket
$sql = "SELECT * FROM tickets";
$smt = mysqli_query($connect, $sql);
// ===========//




?>
<style>
.AddCart {

    width: 100px;
    border-radius: 50px;
    background-color: #f1c544;
    border-color: #f1c544;
    box-shadow: 2px 2px 1px gray;
    color: white;
}

.AddCart:hover {
    background-color: yellowgreen;
    transition: 1s all;
}
</style>
<!-- breadcrumbs -->
<section class="inner-banner-main">
    <div class="about-inner services editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
                    Ticket Service
                </h3>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.php" class="editContent">Home <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                    </li>
                    <li class="active editContent">Ticket</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs //-->
<section class="container" style="padding:50px 0 50px">
    <div class="title">
        <h1>The Ticket Service</h1>
    </div>
    <form action="addCart.php" method="post">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">Type</th>
                    <th scope="col">price</th>
                    <th scope="col">status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_array($smt)) {
                    $_SESSION['type'] = $row['type'];
                    $_SESSION['price'] = $row['price'];
                    $_SESSION['describe'] = $row['describe'];
                    
                ?>
                <tr>
                    <td>
                        <?php echo $_SESSION['type']?>
                    </td>
                    <td>
                        <?php echo $_SESSION['price'] ?>
                    </td>
                    <td><?php echo $_SESSION['describe'] ?></td>

                    <td>
                        <div class="form-group">
                            <div class="total">
                                <input type="submit" class="AddCart" value="Add to cart" name="btn_add_cart">
                            </div>
                        </div>
                    </td>
                </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </form>

    <!-- <input class="quantity" name="qty" type="number" min="0" value="0">

    <input type="datetime-local" name="created" placeholder="Created" value="" required=""> -->


</section>


<?php
include_once("./template/footer.php");
?>