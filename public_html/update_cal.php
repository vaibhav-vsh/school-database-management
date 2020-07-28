<?php
require("includes/common.php");
$name1=$_GET['name1'];
?>
<!DOCTYPE html>
<!--
Update calendar event page for Trinity High School
-->
<html>
    <head>
        <title>Update an Event</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
            <?php
            include 'includes/header.php';
            ?>
            <div class="container" style="margin-top: 140px">
                <div class="panel panel-info">
                        <div class="panel-heading login_header">Update Event</div>
                        <div class="panel-body">
                            <form action="cal_update_submit.php?name1=<?php echo $name1; ?>" method="POST">
                                <div class="form-group">
                                    <label for="date" class="login_body">Enter Date</label>
                                    <input class="form-control" type="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="name" class="login_body">Enter Name</label>
                                    <input class="form-control" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <label for="place" class="login_body">Enter Place</label>
                                    <input class="form-control" type="text" name="place">
                                </div>
                                <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Update</p></button>
                            </form>
                        </div>
                    </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>  
    </body>
</html>
