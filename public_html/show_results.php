<?php
require("includes/common.php");
$group = $_POST['exam_group'];
if (isset($_SESSION['student_roll'])) {
    $id = $_SESSION['student_roll'];
    $query = "SELECT id,subject,max_marks FROM school.exams WHERE exams.exam_group='$group'";
    $result2 = mysqli_query($con, $query) or die(mysqli_error($con));
} elseif (isset($_SESSION['admin_id'])) {
    $query = "SELECT DISTINCT s_id FROM school.results";
    $result4 = mysqli_query($con, $query) or die(mysqli_error($con));
}
?>
<!DOCTYPE html>
<!--
Results page for Trinity High School
-->
<html>
    <head>
        <title>Results</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
            <?php
            include 'includes/header.php';
            if (isset($_SESSION['admin_id'])) {
                ?>
                <div class="row container-fluid" style="margin-top: 140px">
                    <div class="col-xs-4"></div>
                    <div class="col-xs-4">
                        <div class="panel panel-info">
                            <div class="panel-heading login_header">Results</div>
                            <div class="panel-body">
                                <form action="show_all_results.php?group=<?php echo $group; ?>" method="POST">
                                    <div class="form-group">
                                        <label for="students_list" class="login_body">Choose student.</label>
                                        <select class="form-control" name="students_list">
                                            <?php
                                            while ($row4 = mysqli_fetch_array($result4)) {
                                                $selected_student = $row4['s_id'];
                                                ?>
                                                <option value=<?php echo $selected_student; ?>><?php echo $selected_student; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Submit</p></button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-4"></div>
                </div>
            <?php } else {
                ?>
                <div class="container">
                    <table class="table table-hover">
                        <thead>
                            <tr class="cal_head" style="font-size: 36px">
                                <th>Subject</th>
                                <th>Maximum Marks</th>
                                <th>Marks Obtained</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row2 = mysqli_fetch_assoc($result2)) {
                                $desired_exam = $row2['id'];
                                $subject = $row2['subject'];
                                $max_marks = $row2['max_marks'];
                                $query = "SELECT marks FROM school.results WHERE results.s_id='$id' AND results.e_id='$desired_exam'";
                                $result3 = mysqli_query($con, $query)or die(mysqli_error($con));
                                $row3 = mysqli_fetch_array($result3);
                                $marks = $row3['marks'];
                                if(isset($marks)) {
                                ?>
                                <tr class="cal_body">
                                    <td><?php echo $row2['subject']; ?></td>
                                    <td><?php echo $row2['max_marks']; ?></td>
                                    <td><?php echo $row3['marks']; ?></td>
                                    <td><?php
                                        if ($row3['marks'] * 100 / $row2['max_marks'] >= 90) {
                                            echo 'A';
                                        } else if ($row3['marks'] * 100 / $row2['max_marks'] >= 80) {
                                            echo 'B';
                                        } else if ($row3['marks'] * 100 / $row2['max_marks'] >= 70) {
                                            echo 'c';
                                        } else if ($row3['marks'] * 100 / $row2['max_marks'] >= 60) {
                                            echo 'D';
                                        } else {
                                            echo 'F';
                                        }
                                        ?></td>
                                </tr>
                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            <?php } ?>
        </div>
        <?php
        include 'includes/footer.php';
        ?>  
    </body>
</html>
