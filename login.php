<?php
include_once("../project-2/template/header.php");
?>
<style>
.modal-content {
    background-color: #fefefe;
    margin: 10% auto 10% auto;
    width: 60%;
    border-radius: 20px;
    box-shadow: 1px 2px 3px black;
}

.form-control {
    width: 80%;
    padding: 10px;
    margin: 0 0 10px 20px;
    display: inline-block;
    border: none;
    background: #f1f1f1;

}

.modal input {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

.content-form {
    display: inline-block;
    margin: 10px 50px 50px 50px;
}
.header-sign-up {
    text-align: center;
    background: url(./assets/images/p6.jpeg);
    width: 100%;
    background-size: cover;
    border-radius: 18px;
}

.text-header {
    padding: 30px;
    color: white;
    font-family: monospace;
    font-size: large;
    font-weight: 600;
}

.cancelbtn,
.signupbtn {
    border-radius: 50px;
    width: 350px;
    padding: 10px;
    margin: 20px 50px 30px 30px;
    box-shadow: 1px 2px 3px black;
    background-color: #f1c544;
    border-color: #f1c544;
}
.btn_signUp_oustside{
    width: 100px;
    margin-left: 10px;
    border-radius: 50px;
    box-shadow: 1px 1px 1px black;
    background-color: #28a745;
    color:white;
}
.btn_signUp_oustside:hover{
    width:120px;
    cursor: pointer;
    transition: 1s all ;
}
</style>

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
                    <input type="text" class="form-control" name="Email" id="Subject" placeholder="Email" required="">
                </div>
                <div class="twice">
                    <input type="password" class="form-control" name="Password" id="Subject" placeholder="Password"
                        required="">
                </div>
                <button type="submit" class="btn btn-contact" style="margin-left:150px">Log In</button>
            </div>
            <div class="account" style="margin-left:150px; display:flex;">
                <h5>Don't Have An Account ? </h5>
                <!-- sign up form -->
                <button onclick="document.getElementById('signUp_modal').style.display='block'" class="btn_signUp_oustside" >Sign
                    Up</button>

                <!-- sign up content -->
                <div id="signUp_modal" class="modal">
                    <form class="modal-content">
                        <div class="SignUp-form">
                            <div class="header-sign-up">
                                <div class="text-header">
                                    <h1>Sign Up</h1>
                                    <p>Please fill in this form to create an account.</p>
                                </div>
                            </div>

                            <div class="content-form">
                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Enter Email" name="email" required>

                                <label for="psw"><b>Password</b></label>
                                <input type="password" placeholder="Enter Password" name="psw" required>

                                <label for="psw-repeat"><b>Repeat Password</b></label>
                                <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

                                <div class="clearfix">
                                    <button type="submit" class="signupbtn">Sign Up</button>
                                    <button type="button"
                                        onclick="document.getElementById('signUp_modal').style.display='none'"
                                        class="cancelbtn">Cancel</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <!-- end content -->
            </div>
            <!-- sign up form -->
        </div>
    </div>

</section>
<script>
// Get the modal
var modal = document.getElementById('signUp_modal');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

<?php
include_once("../project-2/template/footer.php");
?>