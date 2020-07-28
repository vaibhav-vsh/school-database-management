<?php
require("includes/common.php");
$group=$_GET['group'];
$student=$_GET['student'];
$query6="SELECT subject from school.exams WHERE exams.exam_group='$group'";
$result6 = mysqli_query($con, $query6)or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
Delete Result page for Trinity High School
-->
<html>
    <head>
        <title>Delete a Result</title>
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
                        <div class="panel-heading login_header">Delete Result</div>
                        <div class="panel-body">
                            <form action="result_del_submit.php?group=<?php echo $group; ?>&student=<?php echo $student; ?>" method="POST">
                                <div class="form-group">
                                    <label for="subject" class="login_body">Select Subject</label>
                                    <select class="form-control" name="subject">
                                        <?php 
                                        while($row6 = mysqli_fetch_array($result6)) { ?>
                                <option value="<?php echo $row6['subject']; ?>"><?php echo $row6['subject']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Delete</p></button>
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
