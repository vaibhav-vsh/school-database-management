<?php
require("includes/common.php");
$group=$_GET['group'];
$student=$_GET['student'];
$select_query2="SELECT subject from school.exams WHERE exams.exam_group='$group'";
$select_query_result2 = mysqli_query($con, $select_query2) or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
Add a Result page for Trinity High School
-->
<html>
    <head>
        <title>Add a Result</title>
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
                        <div class="panel-heading login_header">Add Result</div>
                        <div class="panel-body">
                            <form action="result_add_submit.php?group=<?php echo $group; ?>&student=<?php echo $student; ?>" method="POST">
                                <div class="form-group">
                                    <label for="subject" class="login_body">Choose Subject</label>
                                    <select class="form-control" name="subject">
                                        <?php 
                                        while($row7 = mysqli_fetch_array($select_query_result2)) { ?>
                                <option value="<?php echo $row7['subject']; ?>"><?php echo $row7['subject']; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="marks" class="login_body">Enter Marks Obtained</label>
                                    <input class="form-control" type="text" name="marks">
                                </div>
                                <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Add</p></button>
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
