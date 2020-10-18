$(document).ready(function() {
    $('.check_email').keyup(function(e){
        var email = $('.check_email').val();
        $.ajax({
            type: "POST",
            url:"signup.php",
            data:{
                "btn_check_email":1,
                "email_user":email ,
            }, 
            success: function(response){
                $('.error-email').text(response);
            }
        });
    });
    $('.check_account').keyup(function(e){
        var account = $('.check_account').val();
        $.ajax({
            type: "POST",
            url:"signup.php",
            data:{
                "btn_check_account":1,
                "account_user":account ,
            }, 
            success: function(response){
                $('.error-account').text(response);
            }
        });
    });
    $('.check_phone').keyup(function(e){
        var phone = $('.check_phone').val();
        $.ajax({
            type: "POST",
            url:"signup.php",
            data:{
                "btn_check_phone":1,
                "phone_user":phone ,
            }, 
            success: function(response){
                $('.error-phone').text(response);
            }
        });
    });
}); 