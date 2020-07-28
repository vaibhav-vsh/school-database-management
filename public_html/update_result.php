<?php
require("includes/common.php");
$eid=$_GET['eid'];
$sid=$_GET['sid'];
?>
<!DOCTYPE html>
<!--
Update a Result page for Trinity High School
-->
<html>
    <head>
        <title>Update a Result</title>
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
                        <div class="panel-heading login_header">Update Result</div>
                        <div class="panel-body">
                            <form action="result_update_submit.php?eid=<?php echo $eid; ?>&sid=<?php echo $sid; ?>" method="POST">
                                <div class="form-group">
                                    <label for="marks" class="login_body">Enter Marks Obtained</label>
                                    <input class="form-control" type="text" name="marks">
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
