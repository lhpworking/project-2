<?php 
    include_once("./template/header.php"); 
?>
    <section class="main-slider" id="home">
        <!-- main-slider -->
        <div class="companies20-content">
            <div class="owl-one owl-carousel owl-theme">
                <div class="item">
                    <li>
                        <div id="mySlides" class="slider-info banner-view bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Merciado Park take you to the new World</h5>
                                        <p> " Make Your Life Colorful " </p>
                                        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php"> Explore More <span
                                                class="fa fa-long-arrow-right" aria-hidden=" true"> </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div id="mySlides" class="slider-info banner-view banner-top1  bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Merciado Park take you to the new World</h5>
                                        <p> " Make Your Life Colorful " </p>
                                        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php"> Explore More <span
                                                class="fa fa-long-arrow-right" aria-hidden=" true"> </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
                <div class="item">
                    <li>
                        <div id="mySlides" class="slider-info  banner-view banner-top2  bg bg2" data-selector=".bg.bg2">
                            <div class="banner-info">
                                <div class="container">
                                    <div class="banner-info-bg mr-auto">
                                        <h5>Merciado Park take you to the new World</h5>
                                        <p>" Make Your Life Colorful "</p>
                                        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php"> Explore More <span
                                                class="fa fa-long-arrow-right" aria-hidden=" true"> </span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </div>
        </div>
        <script src="assets/js/owl.carousel.js"></script>
        <!-- script for -->
        <script>
        $(document).ready(function() {
            $('.owl-one').owlCarousel({
                loop: true,
                margin: 0,
                nav: false,
                responsiveClass: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplaySpeed: 2000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    480: {
                        items: 1,
                        nav: false
                    },
                    667: {
                        items: 1,
                        nav: true
                    },
                    1000: {
                        items: 1,
                        nav: true
                    }
                }
            })
        })
        </script>
        <!-- //script -->
        <!-- /main-slider -->
    </section>

    <section class="covers-18">
        <div class="covers-main editContent">
            <div class="container">
                <div class="gallery-image row">
                    <div class="column color-2 editContentc col-lg-4 ">
                        <div>
                            <h4 class=" editContent">Experience the new playground</h4>
                            <p class="para editContent">Assumenda temporibus quidem ipsam. Voluptate fuga corporis iusto
                                similique
                                voluptates sint quibu sdamAss umenda temporibus quidem ipsam. Voluptate fuga corporis
                                iusto similique
                                voluptates sint quibusdam.</p>
                            <a href="about.php" class="action-button btn mt-3">Read more</a>
                        </div>
                    </div>

                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/p4.jpeg" alt="product" class="img-responsive-1 ">
                        <h5 class="my-2"><a href="./entertainment.php"> Entertainment </a></h5>
                        <p class="para">Let's get some fun!</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/p5.jpeg" alt="product" class="img-responsive-1 ">
                        <h5 class="my-2"><a href="./ticket.php"> Ticket Box </a></h5>
                        <p class="para">Get Ticket Get Fun.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="teams-15">
        <div class="team-single-main editContent">
            <div class="container">
                <div class="row">
                    <div class="column2 image-text col-xl-6">
                        <h3 class="team-head editContent"> Merciado Restaurant</h3>
                        <div class="team-two">
                            <div class="nature-row">
                                <h5><a href="restaurant.php">
                                        BBQ</a></h5>
                                <p class="para editContent text ">Barbecue or barbeque is a cooking method, a cooking
                                    device, a style of
                                    food, and a name for a meal or gathering at which this style of food is cooked and
                                    served. A barbecue
                                    can refer to the cooking method itself, the meat cooked this way, or to a type of
                                    social event
                                    featuring this type of cooking.
                                </p>
                            </div>
                            <div class="nature-row">
                                <h5><a href="restaurant.php">
                                        Wine </a></h5>
                                <p class="para editContent text ">
                                    The wine is really the cornerstone of this celebration. It sets the tone of the
                                    gathering, it’s the
                                    basis for the food you choose to serve and it makes or breaks whether your
                                    friends/family have a good
                                    time. In other words, choose wisely.</p>
                            </div>
                        </div>
                    </div>
                    <div class="column2 image-text col-xl-6">
                        <img src="assets/images/d1.jpeg" alt="product" class="img-responsive"
                            style="height:500px; padding-left: 10px; background-size: cover;">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="call-to-action_9">
        <div class="call-w3 editContent">
            <div class="container">
                <div class="grids">
                    <div class="grids-content row text-center">
                        <div id="img-preview" class="column col-lg-4 col-md-6 col-sm-6 back-image editContent p-sm-0">

                        </div>

                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div>
                                <h3>Good Experiences</h3>

                            </div>
                        </div>
                        <div id="img-preview-1"
                            class="column col-lg-4 col-md-6 col-sm-6 back-image2 editContent p-sm-0">

                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div>
                                <h3>Good Services</h3>
                            </div>
                        </div>
                        <div id="img-preview-2" class="column col-lg-4 col-md-6 col-sm-6 back-image editContent p-sm-0">

                        </div>
                        <div class="column col-lg-4 col-md-6 col-sm-6 color-2 editContent">
                            <div>
                                <h3>Good Meals</h3>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="clients" id="client">
        <div class="main-w3">
            <div class="container">
                <!-- main-slider -->
                <div class="main-slider row">

                    <div class="slider-info col-lg-4 col-md-6">
                        <div class="d-grid hh14-text">
                            <div class="hh14-info">

                                <p class="para">Conse ctetur adipis icing Lorem ipsum dolor sit amet,elit, sed do
                                    eiusmod tempor incid idunt ut labore et dolore magna aliqua. enim
                                    minim incid idunt ut labore et dolore magna aliqu. </p>
                                <div class="client-name">
                                    <img src="assets/images/c1.jpg" alt="product" class="img-responsive ">
                                    <h5>Jack Willson</h5>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="slider-info col-lg-4 col-md-6">
                        <div class="d-grid hh14-text">
                            <div class="hh14-info">

                                <p class="para">Conse ctetur adipis icing Lorem ipsum dolor sit amet,elit, sed do
                                    eiusmod tempor incid idunt ut labore et dolore magna aliqua. enim
                                    minim incid idunt ut labore et dolore magna aliqu. </p>
                                <div class="client-name">
                                    <img src="assets/images/c2.jpg" alt="product" class="img-responsive ">
                                    <h5>Nike samson</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="slider-info col-lg-4 col-md-6">
                        <div class="d-grid hh14-text">
                            <div class="hh14-info">
                                <p class="para">Conse ctetur adipis icing Lorem ipsum dolor sit amet,elit, sed do
                                    eiusmod tempor incid idunt ut labore et dolore magna aliqua. enim
                                    minim incid idunt ut labore et dolore magna aliqu. </p>
                                <div class="client-name">
                                    <img src="assets/images/c3.jpg" alt="product" class="img-responsive ">
                                    <h5>Milky Deo</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /main-slider -->
            </div>
        </div>
    </section>

   <?php 
       include_once("./template/footer.php"); 
   ?>