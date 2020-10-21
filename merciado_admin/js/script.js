<script>
        $(document).ready(function() {
    $('.check_ticket').keyup(function() {
        var check_code = $('.check_ticket').val();
        $.ajax({
            type:'POST',
            url: 'createTicket.php',
            data:{
                'btn_check_ticket':1 ,
                'ticket_code_used':check_code,
            },
            success: function(response){
                $('.error_code').text(response);
            }
        })
    })
   
})
    </script>