	<?php 
		include("./template/header.php"); 
	?>
	<style>
.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -20px;
    margin-left: -20px;
}

.content-about {
    font-size: 25px;
    font-weight: 100;
}

.video {
    width: 100%;
    height: 85%;
    position: absolute;
    object-fit: cover;
}

.counter-width {
    width: 100%;
    padding: 0 0 750px 0;
}

.nature-bars h3 {
    font-size: 55px;
    color: #ffffff;
    vertical-align: top;
    line-height: 60px;
}

.link-list-menu p {
    font-size: 22px;
    color: #ffffff;
    line-height: 30px;
    font-weight: 500;
    padding-top: 25px;
}

.link-list-menu {
    max-width: 556px;
    margin: 0px auto;
}

@media (max-width: 991px) {
    .about .nature-bars h3 {
        font-size: 50px;
        line-height: 60px;
    }

    .about .counter-width {
        padding: 4em 0em;
    }
}

@media (max-width: 767px) {
    .about .nature-bars h3 {
        font-size: 40px;
        line-height: 50px;
    }

    .about .counter-width {
        padding: 3em 0em;
    }
}

@media (max-width: 568px) {
    .about .link-list-menu p {
        font-size: 19px;
        line-height: 29px;
    }
}

@media (max-width: 375px) {
    .about .nature-bars h3 {
        font-size: 35px;
        line-height: 45px;
    }
}
	</style>
	<!-- breadcrumbs -->
	<section class="inner-banner-main">
	    <div class="about-inner about editContent">
	        <div class="container">
	            <div class="main-titles-head ">
	                <h3 class="header-name editContent">
	                    About Us
	                </h3>
	                <p class="tiltle-para editContent ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic
	                    fuga sit illo modi aut aspernatur tempore laboriosam saepe dolores eveniet.</p>
	            </div>
	            <div class="breadcrumbs-sub">
	                <ul class="breadcrumbs-custom-path">
	                    <li class="right-side propClone"><a href="index.php" class="editContent">Home <span
	                                class="fa fa-angle-right" aria-hidden="true"></span></a>
	                        <p>
	                    </li>
	                    <li class="active editContent">About</li>
	                </ul>
	            </div>
	        </div>

	    </div>

	    </div>
	</section>
	<!-- breadcrumbs //-->
	<section class="content-with-photo-4" id="about">
	    <div class="content-with-photo4-block editContent">
	        <div class="container">
	            <div class="cwp4-two row">
	                <div class="cwp4-image col-xl-6">
	                    <img src="assets/images/p8.jpeg" alt="Park" class="img-responsive about-me"
	                        style="box-shadow:2px 5px 10px black ">
	                </div>
	                <div class="cwp4-text col-xl-6 ">
	                    <div class="posivtion-grid">
	                        <h6 class="sub-title">About Us</h6>
	                        <h3 class="editContent">We Are Best For Your Entertainment </h3>
	                        <p class="para editContent">A Merciado Amusement Park is a unique multi-faceted district of
	                            sporting, entertainment, and retail attractions sitting alongside growing residential
	                            communities. It is already home to a number of exciting attractions welcoming millions of
	                            visitors every year: - Cultural entertainment at Global Village - Motor racing action at
	                            MotorCity - World-class sporting events and sporting academies at Dubai - Shopping at
	                            Marciado Amusement Park Outlet Mall The destination will continue to draw and host diverse
	                            attractions scheduled to open in the coming years reinforcing Marciado Amusement Park
	                            position as an international hub for family tourism. Future plans for Marciado Amusement
	                            Park feature developments such as City of world, Palmarosa and Marciado Amusement Park
	                            Lifestyle City.
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	</section>
	<section class="about">
	    <div class="skills-bars editContent ">
	        <div class="counter-width">
	            <video muted autoplay loop class="video">
	                <source src="./assets/videos/about.mp4" type="video/mp4">
	            </video>
	        </div>
	    </div>
	</section>
	<section class="recent-work">
	    <div class="jst-two-col">
	        <div class="container">
	            <div class="row">
	                <div class="my-bio col-xl-6">
	                    <h1><strong> Rides & Attractions</strong></h1>
	                    <p class="content-about">Merciado park features acres of fun and excitement, making it by far the
	                        best
	                        theme park in Riverside.<strong> <a href="./entertainment.php">With unique rides and
	                                attractions.</a></strong> </p>
	                </div>
	                <div class="col-xl-6 ">
	                    <img src="./assets/images/about-2.jpeg" alt="product" class="img-responsive about-me" style="box-shadow: 3px 2px 10px black;">
	                </div>

	            </div>
	            <div class="row" style="padding-top:50px; ">
	                <div class="col-xl-6 ">
	                    <img src="./assets/images/about-1.jpeg" alt="product" class="img-responsive about-me" style="box-shadow: 3px 2px 10px black;">
	                </div>
	                <div class="my-bio col-xl-6">
	                    <h1><strong> Great Food</strong></h1>
	                    <p class="content-about">Castle Park is one of the best theme parks in California for great food!
	                        Whether you're looking for a casual meal at The Big Top Restaurant or Plaza Cafe, quick bite
	                        from the Snack Bar, or a sweet treat from The Fry Factory, there is something for
	                        everyone.
	                </div>


	            </div>
	        </div>
	    </div>
	</section>

	<?php 
		include_once("./template/footer.php");
	?>