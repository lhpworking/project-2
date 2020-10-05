<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Merciado Amusement Park</title>

    <!-- Template CSS -->
    <link rel="stylesheet" href="./assets/css/UI.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Karla&display=swap" rel="stylesheet">
</head>
<style>
    /* dropdown */
    .dropdown {
      position: relative;
      display: inline-block;
  }
  
  .dropdown-content{
      display: none ;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
  }
  
  .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
  }
  
  .dropdown-content a:hover {
      background-color: #ddd;
  }
  
  .dropdown:hover .dropdown-content {
      display: block;
  }
</style>

<body id="home">
    <section class=" header-4 header-sticky">
        <header class="absolute-top">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <h1><a class="navbar-brand" href="index.php"> <span class="fa fa-pagelines" aria-hidden="true"></span>
                            Merciado Park
                        </a></h1>
                    <button class="navbar-toggler bg-gradient collapsed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa icon-expand fa-bars"></span>
                        <span class="fa icon-close fa-times"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav  ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">About Us </a>
                            </li>
                            <li class="nav-item">
                                <div class="dropdown">
                                    <a class="nav-link">Services</a>
                                    <div class="dropdown-content">
                                        <a href="#">Link 1</a>
                                        <a href="#">Link 2</a>
                                        <a href="#">Link 3</a>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                        <a href="./test.php" class="ml-lg-3 mt-lg-0 mt-3 book btn btn-style"> Log In </a>
                    </div>
            </div>
            </nav>
            </div>
        </header>
    </section>
    <script src="../merciado/assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->
    <script src="./assets/js/jquery-3.5.1.js"></script>
    <!--bootstrap working-->
    <script src="../merciado/assets/js/bootstrap.min.js"></script>
    <!-- //bootstrap working-->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });
    </script>
    <!-- disable body scroll which navbar is in active -->
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
                                        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php"> Explore More <span class="fa fa-long-arrow-right"" aria-hidden=" true"> </span></a>
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
                                        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php"> Explore More <span class="fa fa-long-arrow-right"" aria-hidden=" true"> </span></a>
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
                                        <a class="btn btn-theme2 mt-md-5 mt-4" href="contact.php"> Explore More <span class="fa fa-long-arrow-right"" aria-hidden=" true"> </span></a>
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
                        <h5 class="my-2"><a href="about.php"> Entertainment </a></h5>
                        <p class="para">Let's get some fun!</p>
                    </div>
                    <div class="img-box col-lg-4 col-md-6">
                        <img src="assets/images/p5.jpeg" alt="product" class="img-responsive-1 ">
                        <h5 class="my-2"><a href="about.php"> Ticket Box </a></h5>
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
                                <h5><a href="#page">
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
                                <h5><a href="#page">
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
                        <img src="assets/images/d1.jpeg" alt="product" class="img-responsive" style="height:500px; padding-left: 10px; background-size: cover;">
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
                        <div id="img-preview-1" class="column col-lg-4 col-md-6 col-sm-6 back-image2 editContent p-sm-0">

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

    <section class="footer-29-main">
        <div class="footer-29 py-5">
            <div class="container">
                <div class="row footer-top-29">
                    <div class="col-lg-5 col-md-5 col-sm-6 footer-list-29 footer-1">
                        <div class="left-side">
                            <h2><a href="index.php" class="footer-logo">Merciado Amusement Park</a></h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 footer-list-29 footer-2 ">
                        <ul>
                            <h6 class="footer-title-29">Useful Links</h6>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="services.php">Services</a></li>
                            <li><a href="contact.php">Contact us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 footer-list-29 footer-3">
                        <h6 class="footer-title-29">Latest from blog</h6>
                        <div class="footer-post mb-3">
                            <a href="#page">
                                <img src="assets/images/p1.jpeg" class="img-responsive" alt=""></a>
                            <div>
                                <a href="#page">How to Eat Organic Foods</a>
                                <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
                            </div>
                        </div>
                        <div class="footer-post">
                            <a href="#page">
                                <img src="assets/images/p2.jpeg" class="img-responsive" alt="">
                            </a>
                            <div>
                                <a href="#page">How to Eat Organic Foods</a>
                                <p class="small"><span class="fa fa-clock-o"></span> March 9, 2020</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="footer-29-main copyright">
        <div class="container">
            <div class=" bottom-copies text-center">
                <p class="copy-footer-29">© 2020 Merciado Amusement Park. All rights reserved | Designed by LHQ & LQV
            </div>
        </div>
    </section>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fa fa-long-arrow-up"></span>
    </button>
    <script>
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <!-- /move top -->

</body>

</html>