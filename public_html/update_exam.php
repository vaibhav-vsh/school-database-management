<?php
require("includes/common.php");
$eg=$_GET['eg'];
$subject1=$_GET['subject1'];
?>
<!DOCTYPE html>
<!--
Update calendar event page for Trinity High School
-->
<html>
    <head>
        <title>Update an Exam</title>
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
                        <div class="panel-heading login_header">Update Exam</div>
                        <div class="panel-body">
                            <form action="exam_update_submit.php?eg=<?php echo $eg; ?>&subject1=<?php echo $subject1; ?>" method="POST">
                                <div class="form-group">
                                    <label for="date" class="login_body">Enter Date</label>
                                    <input class="form-control" type="date" name="date">
                                </div>
                                <div class="form-group">
                                    <label for="subject" class="login_body">Enter Subject</label>
                                    <input class="form-control" type="text" name="subject">
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
