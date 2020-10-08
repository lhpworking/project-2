<?php 
        include_once("../project-2/template/header.php");
?>

<!-- breadcrumbs -->
<section class="inner-banner-main">
    <div class="about-inner services editContent">
        <div class="container">
            <div class="main-titles-head ">
                <h3 class="header-name editContent">
                    Log In
                </h3>
                <p class="tiltle-para editContent editContent"> Welcome to the Merciado Amusement Park </p>
            </div>
            <div class="breadcrumbs-sub">
                <ul class="breadcrumbs-custom-path">
                    <li class="right-side propClone"><a href="index.html" class="editContent">Home <span
                                class="fa fa-angle-right" aria-hidden="true"></span></a>
                        <p>
                    </li>
                    <li class="active editContent">Log In</li>
                </ul>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- breadcrumbs //-->

<!--Input information to sign up  -->
<section class="contact-info-main" id="contact">
    <div class="contact-sec	editContent">
        <div class="container">
            <div class="map-content-9">
                <div class="twice">
                    <input type="text" class="form-control" name="Email" id="Subject" placeholder="Email"
                        required="">
                </div>
                <div class="twice">
                    <input type="password" class="form-control" name="Password" id="Subject" placeholder="Password"
                        required="">
                </div>
                <button type="submit" class="btn btn-contact" style="margin-left:150px">Log In</button>
            </div>
            <div class="account" style="margin-left:150px; display:flex;">
            <h5>Don't Have An Account ? </h5> <a href="#" class="SignUp" style="padding-left: 10px">  Create An Account </a>

            </div>
        </div>
    </div>
</section>

<?php 
    include_once("../project-2/template/footer.php");
?>