<?php
include('./dao/Dbconnect.php');
include_once("./template/header.php");
$status="";
// info ticket
$sql = "SELECT * FROM tickets";
$smt = mysqli_query($connect, $sql);


if (isset($_GET['ticketId']) && $_GET['ticketId']!=""){
    // $qty = $_GET['qty'];
    $ticketId = $_GET['ticketId'];
    $result = mysqli_query(
    $connect,
    "SELECT * FROM tickets WHERE `ticket_id`='$ticketId'"
    );
    $row = mysqli_fetch_assoc($result);
    $ticketId = $row['ticket_id'];
    $type = $row['type'];
    $price = $row['price'];
    $describe = $row['describe'];
     
    $cartArray = array(
        $ticketId=>array(
        'type'=>$type,
        'ticketId'=>$ticketId,
        'price'=>$price,
        'quantity'=>1,
        'describe'=>$describe)
       );
     
    if(empty($_SESSION["shopping_cart"])) {
        $_SESSION["shopping_cart"] = $cartArray;
        $status = "<div class='box'>Product is added to your cart!</div>";
    }else{
        $array_keys = array_keys($_SESSION["shopping_cart"]);
        if(in_array($ticketId,$array_keys)) {
     $status = "<div class='box' style='color:red;'>
     Product is already added to your cart!</div>"; 
        } else {
        $_SESSION["shopping_cart"] = array_merge(
        $_SESSION["shopping_cart"],
        $cartArray
        );
        $status = "<div class='box'>Product is added to your cart!</div>";
     }
     
     }
    }

?>
<style>
    .btn_add{

    border-radius: 50px;
    background-color: #f1c544;
    border-color: #f1c544;
    box-shadow: 2px 2px 1px gray;
    text-decoration: none;
    color: white;
  padding: 10px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
    }
.title {
    text-align: center;
    padding: 40px;
}

.cart_div a {
    width: 5%;
    background-size: cover;
    position: absolute;
    padding: 350px 0px 0 0;
    margin-left: 1300px
}
</style>
<?php
if(!empty($_SESSION["shopping_cart"])) {
$cart_count = count(array_keys($_SESSION["shopping_cart"]));
?>
<div class="cart_div">
    <a href="cart.php"><img src="./assets/images/cart.gif">
        <!-- <span style="position:absolute"><?php echo $cart_count; ?> </span> -->
    </a>
</div>
<?php
}
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
<section class="container" style="padding:50px 0 50px; text-align: center">
    <div class="title">
        <h1>The Ticket Service</h1>
        <?php 
            echo $status; 
        ?>

    </div>

    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">Ticket code</th>
                <th scope="col">Type</th>
                <th scope="col">price</th>
                <th scope="col">status</th>
                <th scope="col">action</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while ($row = mysqli_fetch_array($smt)) {
                    
                ?>
            <tr>
                <td>
                    <?php echo  $row['ticket_id'];?>
                </td>
                <td>
                    <?php echo  $row['type'];?>
                </td>
                <td>
                    <?php echo $row['price']; ?>
                </td>
                <td><?php echo $row['describe']; ?></td>
                <td>
                    <a class="btn_add" href="ticket.php?ticketId=<?php echo $row['ticket_id'] ?>">add
                        to cart</a>
                </td>
            </tr>
            <?php
                }
                ?>
        </tbody>
    </table>



</section>

<?php
include_once("./template/footer.php");
?>