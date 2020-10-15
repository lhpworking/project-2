<?php
include_once("./template/header.php");
?>
<style>
.form-modal {
    width: 100%;
    min-height: 1200px;
    border: 1px solid black;
    background-color: bisque;
    border-radius: 10px;
}

strong {
    margin-left: 35%;
    font-size: 50px;
    font-family: none;
    color: cornflowerblue;
}

.form-ticket {
    width: 100%;
    min-height: 350px;
    border: 1px solid black;
    display: inline-block;
}

.info-ticket {
    min-height: 300px;
    border: 1px solid black;
    width: 100%;
    display: flex;
    /* background: url(./assets/images/p5.jpeg); */
    background-size: cover;
    max-width: 100%;
}

.text {
    width: 100%;
    margin-left: 30px;
    font-size: 25px;
    border: 1px solid black;
}

.kind {
    border: 1px solid black;
    display: flex;
    width: 20%;
}

.row-total {
    display: flex;
    flex-wrap: wrap;
    margin-left: 320px;
    padding: 0 0 33px;
    border: 1px solid red;
}

.title-pack {
    background-color: #A4E4FF;
    color: #008;
    border: 1px solid #88C;
    border-radius: 5px;
    padding: 0.1em 0.5em;
    font-weight: normal;
    text-shadow: 1px 1px 0 #DDD;
    display: flex;
    font-size: 25px;
}

.row-total input {
    margin-top: 10px;
    width: 120px;
    border-radius: 8px;
    text-align: center;
    font-size: 20px;
    /* border: 1px solid black; */
}

.quantity {
    margin-left: 450px;
}

.price {
    margin-left: 130px;
}

.value-price {
    margin-left: 120px;
    margin-top: 10px;
    font-size: 25px;
    font-weight: 600;
}

.text-ticket {
    display: flex;

}
.total{
    margin-left:500px;
    padding: 5px;

}
.total span {
    margin-left: 50px;
}
.AddCart{
    margin-left: 100px;
    width:150px;
    border-radius: 50px;
    background-color:#f1c544;
    border-color:#f1c544 ;
    box-shadow: 2px 2px 1px gray;
    color:white;
}
.AddCart:hover{
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
    <div class="form-modal">
        <div class="title">
            <strong> Select Ticket </strong>
        </div>
        <div class="form-ticket">
            <div class="ticket">
                <div class="title-pack">Single Pack
                    <div class="quantity">
                        Quantity
                    </div>
                    <div class="price">
                        Price
                    </div>
                </div>
                <div class="info-ticket">
                    <div class="text">
                        <div class="text-ticket">
                            <div class="kind">
                                General <br> (Age: 8-64)
                            </div>
                            <div class="row-total">
                                <input type="number" min="0" value="0">
                                <div class="value-price"> $30</div>
                            </div>
                        </div>
                        <div class="text-ticket">
                            <div class="kind">
                                Child <br> (Age: 3-7)
                            </div>
                            <div class="row-total">
                                <input type="number" min="0" value="0">
                                <div class="value-price"> $30</div>
                            </div>
                        </div>
                        <div class="text-ticket">
                            <div class="kind">
                                Senior <br> (Age: 65+)
                            </div>
                            <div class="row-total">
                                <input type="number" min="0" value="0">
                                <div class="value-price"> $30</div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="total">
                                <input type="submit" class="AddCart" value="Add to cart" >
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="form-ticket">
            <div class="ticket">
                <h2> Weekend Pack</h2>
            </div>
        </div>
        <div class="form-ticket">
            <div class="ticket">
                <h2>Family Pack</h2>
            </div>
        </div>
    </div>


</section>


<?php
include_once("./template/footer.php");
?>