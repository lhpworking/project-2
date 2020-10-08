<?php
include_once("./template/header.php");
?>

<style>
    .slideshow {
        max-width: 100%;
        position: relative;
        margin: 0;
    }

    .slide-content {
        display: flex;
        padding: 10px 0 80px;
    }
    .slides{
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
        border-radius:5px;
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
                    Our Service
                </h3>
                <p class="tiltle-para editContent editContent">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
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

<div class="slideshow">
    <div class="myslides">
        <div class="slide-content">
            <div class="slides">
                <img src="./assets/images/e1.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e2.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e3.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e4.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
        </div>
    </div>
    <div class="myslides">
        <div class="slide-content">
            <div class="slides">
                <img src="./assets/images/e5.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e6.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e7.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
            <div class="slides">
                <img src="./assets/images/e8.jpeg" class="img">
                <div class="overlay">
                    <div class="text">Hello World</div>
                </div>
            </div>
        </div>
    </div>
</div>


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