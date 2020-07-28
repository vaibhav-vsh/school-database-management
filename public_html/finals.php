<?php
require("includes/common.php");
$query = "SELECT subject,max_marks,duration,date FROM exams WHERE exams.exam_group='finals'";
$result1 = mysqli_query($con, $query)or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
Unit Tests Page for Trinity High School
-->
<html>
    <head>
        <title>Finals</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
            <?php
            include 'includes/header.php';
            ?>
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr class="cal_head" style="font-size: 36px">
                            <th>Subject</th>
                            <th>Maximum Marks</th>
                            <th>Duration (Hours)</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result1)) {
                            ?>
                            <tr class="cal_body">
                                <td><?php echo $row['subject']; ?></td>
                                <td><?php echo $row['max_marks']; ?></td>
                                <td><?php echo $row['duration']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <?php if (isset($_SESSION['admin_id'])) { ?>
                                    <td><a href="update_exam.php?eg=<?php echo 'finals'; ?>&subject1=<?php echo $row['subject']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>   <a href="exam_del_submit.php?eg=<?php echo 'finals'; ?>&subject1=<?php echo $row['subject']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                                <?php } ?>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            if(isset($_SESSION['admin_id'])) { ?>
            <center>
                <a href="add_exam.php?e=f">
                    <button class="btn btn-success" style="margin-right: 15px"><p class="cal_btn">Add a Test</p></button>
                </a>
            </center>
            <?php } ?>
        </div>
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>
