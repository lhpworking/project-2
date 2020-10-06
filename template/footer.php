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