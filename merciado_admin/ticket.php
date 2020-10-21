<?php
include("./template/header.php");
include("./dao/Dbconnect.php");

$sql = "SELECT * FROM tickets";
$smt = mysqli_query($connect, $sql);

?>
<section id="main-content">
    <section class="wrapper">
        <section class="panel">
            <header class="panel-heading">
                Create a new ticket
            </header>
            <div class="panel-body">
                <form action="createTicket.php" method="post">
                    <div class="position-center">
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Ticket code</label>
                            <input type="text" class="form-control check_ticket" name="ticket_id" placeholder="Enter ticket code" required>
                            <small class="error_code" style="color : red "></small>
                        </div>
                        <div class="col-lg-6">
                            <label for="exampleInputPassword1">Type</label>
                            <select class="form-control input-md m-bot15" name="kind" required>
                                <option>Adult</option>
                                <option>Child</option>
                                <option>Senior</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="exampleInputEmail1">price($)</label>
                            <input type="number" class="form-control" name="price" placeholder="Enter price" value="0"
                                min="0" required>
                        </div>
                        <div class="col-md-12">
                            <label for="exampleInputEmail1">Describe</label>
                            <textarea class="form-control" name="describe" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info" name="btn_submit"
                                style="margin:20px">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </section>
    <section class="wrapper" style="margin-top:50px">
        <div class="table-agile-info">
            <div class="panel panel-default">
                <div class="panel-heading">
                    The Ticket Manager
                </div>
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Ticket code</th>
                                <th>Type</th>
                                <th>Price</th>
                                <th>Describe</th>
                                <th>Edit</th>
                                <th> Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($smt)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo  $row['ticket_id']; ?>
                                </td>
                                <td>
                                    <?php echo  $row['kind']; ?>
                                </td>
                                <td>
                                    <?php echo $row['price']; ?>
                                </td>
                                <td><?php echo $row['description']; ?></td>
                                <td>
                                    <form action="ticket_update.php" method="post">
                                        <input type="hidden" name="edit_id" value="<?php echo $row['id'];?>">
                                        <button type="submit" class="btn btn-info" name="btn_update">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="createTicket.php" method="post">
                                        <input type="hidden" name="delete_id" value="<?php echo $row['id'];?>">
                                        <button type="submit" class="btn btn-info" name="btn_delete">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
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
    <?php
    include("./template/footer.php");
    ?>