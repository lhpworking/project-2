<?php
include_once("./template/header.php");
?>

<style>
    .services-two .service-info {
        height: 350px;
        padding: 30px 20px;
        border-width: 0px 1px 1px;
        border: 1px solid #eee;
        background-color: var(--back-color);
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
    }

    .img-fluid {
        max-width: 100%;
        height: 300px;
    }

    .services-two .service-single-page {
        padding: 70px 0 70px;
    }

    .slideshow {
        max-width: 100%;
        position: relative;
        margin: 0;
    }

    .slide-content {
        display: flex;
        padding: 10px 0 80px;
    }

    .slides {
        position: relative;
        width: 100%;
    }

    .img {
        width: 100%;
        height: 350px;
        /* border-radius: 0% !important; */
        padding: 4px;
        box-shadow: 3px 3px 4px black;
    }

    .text {
        color: white;
        font-size: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        text-align: center;
    }

    .overlay {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: #008CBA;
        overflow: hidden;
        width: 100%;
        height: 0;
        transition: .3s ease;
        border-radius: 5px;
    }

    .slides:hover .overlay {
        height: 20%;
    }
</style>
<!-- breadcrumbs -->
<section class="inner-banner-main">
    <div class="about-inner services editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
                    Our Entertainment
                </h3>
                <p class="tiltle-para editContent editContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.php" class="editContent">Home <span class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Services</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumbs //-->

<section class="services-two" id="services">
    <div class="service-single-page editContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 column mt-lg-0 mt-sm-5 mt-4">
                    <div class="zoom">
                        <img src="./assets/images/game1.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="service-info"><span class="zoom">
                            <h4 class="course">4D Projection Room</h4>
                            <p class="para">4D movie is an entertainment system combining 3D movies with real effects
                                right inside the Projection Room such as rain, wind, snow, light, smoke, tough movements
                                of shaking, falling, earthquake, heat/warmth or even water flush, air flow or smell.</p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 column mt-lg-0 mt-sm-5 mt-4">
                    <div class="zoom">
                        <img src="./assets/images/game2.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="service-info"><span class="zoom">
                            <h4 class="course"> Bumper cars</h4>
                            <p class="para">Let’s show your driving talents on lovely bumper cars. Driving your cars
                                bumping others will absolutely cheer you up.</p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 column mt-lg-0 mt-sm-5 mt-4">
                    <div class="zoom">
                        <img src="./assets/images/game3.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="service-info"><span class="zoom">
                            <h4 class="course">Game Supermarket</h4>
                            <p class="para">With attractive electronic games such as horse racing, hammer beating, motor
                                racing, gun shooting, audition dancing, Vinpearl Land Game supermarket will be an ideal
                                place for family members and friends to bunch together to relax. An Entrance Card to
                                Vinpearl Land Amusement Park will entitle you unlimited access to any games at Game
                                Supermarket to meet your taste.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="slideshow">
    <div class="myslides">
        <div class="slide-content">
            <div class="slides">
                <img src="./assets/images/e1.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Bumper cars</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e9.jpeg" class="img">
                <div class="overlay">
                    <div class="text">SKY DISCOVERY</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e3.jpeg" class="img">
                <div class="overlay">
                    <div class="text">PEACE BOAT</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e4.jpeg" class="img">
                <div class="overlay">
                    <div class="text">SPINNING COASTER</div>
                </div>
            </div>
        </div>
    </div>
    <div class="myslides">
        <div class="slide-content">
            <div class="slides">
                <img src="./assets/images/e5.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Carousel Elephant</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e10.jpeg" class="img">
                <div class="overlay">
                    <div class="text"> Pirate Ship</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e7.jpeg" class="img">
                <div class="overlay">
                    <div class="text">UNIVERSE WHEEL</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e8.jpeg" class="img">
                <div class="overlay">
                    <div class="text">SPINNING WHEEL</div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="services-two" id="services">
    <div class="service-single-page editContent">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 column mt-lg-0 mt-sm-5 mt-4">
                    <div class="zoom">
                        <img src="./assets/images/game4.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="service-info"><span class="zoom">
                            <h4 class="course">Swing Carousel</h4>
                            <p class="para">Being span or beveled from 3 meter high, Swing Carousel brings you the
                                experience of flying, freely falling and throwing yourselves in the air.
                            </p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 column mt-lg-0 mt-sm-5 mt-4">
                    <div class="zoom">
                        <img src="./assets/images/game5.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="service-info"><span class="zoom">
                            <h4 class="course">Merry-go-round</h4>
                            <p class="para">With hilarious spins, this game not only brings kid much amusement but also
                                reminds adults of their intensively beautiful childhood.
                            </p>
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 column mt-lg-0 mt-sm-5 mt-4">
                    <div class="zoom">
                        <img src="./assets/images/game6.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="service-info"><span class="zoom">
                            <h4 class="course">Roller Coaster</h4>
                            <p class="para">Being true to its name, roller Coaster is a game with sudden changes of
                                speed and direction. On curved railway, the Roller Coasters will strongly impress you
                                with powerful swaying and thrilling moments.</p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("myslides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 3000); // Change image every 2 seconds
    }
</script>
<?php
include_once("./template/footer.php");
?>