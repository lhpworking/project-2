<?php 
    include_once("./template/header.php");

?>
<style>
.res-text {
    margin-top: 150px;
    text-align: center;
}

.img-restaurant {
    width: 100%;
    height: 600px;
}

.w-100 {
    height: 800px;

    background-size: cover;
}

.carousel-text h1 {
    max-width: 100%;
    position: absolute;
    font-size: 100px;
    font-weight: 1000;
    line-height: 550px;
    text-transform: capitalize;
    margin-bottom: 12px;
    color: white;
    margin-left: 75px;


}
</style>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-interval="">
            <div class="container">
                <div class="carousel-text">
                    <h1>Merciado Restaurant</h1>
                </div>
            </div>
            <img src="./assets/images/res-1.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-interval="">
            <div class="container">
                <div class="carousel-text">
                    <h1>Merciado Restaurant</h1>
                </div>
            </div>
            <img src="./assets/images/res-3.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <div class="container">
                <div class="carousel-text">
                    <h1>Merciado Restaurant</h1>
                </div>
            </div>
            <img src="./assets/images/res-4.jpeg" class="d-block w-100" alt="...">
        </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<section class="recent-work" style="background: antiquewhite">
    <div class="jst-two-col">
        <div class="container">
            <div class="row">
                <div class=" col-xl-6 res-text">
                    <h1><strong> BOURBON BARREL CABERNET SAUVIGNON // SMOKED CHEDDAR</strong></h1>
                    <p class="content-about">This delicious wine will envelop your taste buds in intensely rich and
                        delicious flavors with hints of bourbon (thanks to being aged in bourbon barrels for 3 months)
                        and the sweet notes of vanilla and blackberry. Similarly to the regular Layer Cake Cabernet
                        Sauvignon, you’ll want to pair this wine with something nutty or smoked, such as a cheddar or
                        gouda, both of which will work especially well with the bourbon notes of the wine. </p>
                </div>
                <div class="col-xl-6 ">
                    <img src="./assets/images/res-5.jpeg" alt="product" class="img-restaurant"
                        style="box-shadow: 3px 2px 10px black;">
                </div>

            </div>
            <div class="row" style="padding-top:50px; ">
                <div class="col-xl-6 ">
                    <img src="./assets/images/res-6.jpeg" alt="product" class="img-restaurant"
                        style="box-shadow: 3px 2px 10px black;">
                </div>
                <div class=" col-xl-6 res-text">
                    <h1><strong> SHIRAZ // SMOKED GOUDA</strong></h1>
                    <p class="content-about">This is a wine that embodies all the scents and flavors of fall perfectly.
                        Think dark, spiced, cocoa aromas. So when it comes to cheese, you’ll want something that packs a
                        strong flavor punch. Goudas work well, dry and crumbly aged jacks work as well, but my favorite
                        is smoked gouda. The combo is just so smooth you’ll know without a doubt that it’s a match made
                        in heaven.
                </div>
            </div>
            <div class="row" style="padding-top:50px; ">
                <div class=" col-xl-6 res-text">
                    <h1><strong> Combo Barbecue</strong></h1>
                    <p class="content-about">View Live Map
                        Sometimes there’s nothing better than good old-fashioned barbeque. If you’re craving tender
                        meats covered in smoky sauce, fresh char-grilled vegetables, or spicy grilled shrimp, you’ve
                        come to the right place.
                </div>
                <div class="col-xl-6 ">
                    <img src="./assets/images/res-8.jpeg" alt="product" class="img-restaurant"
                        style="box-shadow: 3px 2px 10px black;">
                </div>

            </div>
            <div class="row" style="padding-top:50px; ">
                <div class="col-xl-6 ">
                    <img src="./assets/images/res-7.jpeg" alt="product" class="img-restaurant"
                        style="box-shadow: 3px 2px 10px black;">
                </div>
                <div class=" col-xl-6 res-text">
                    <h1><strong> Beef Brisket </strong></h1>
                    <p class="content-about">Our beef brisket is slowly smoked for up to 14 hours producing an extremely
                        flavour some, juicy, tender cut of meat.


                </div>
            </div>
        </div>
    </div>
</section>


<?php 
    include_once("./template/footer.php");

?>