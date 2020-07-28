<?php
require("includes/common.php");
$group = $_GET['group'];
$student = $_POST['students_list'];
$query = "SELECT id,subject,max_marks FROM school.exams WHERE exams.exam_group='$group'";
$result2 = mysqli_query($con, $query) or die(mysqli_error($con));
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
            ?>
            <div class="container">
                <table class="table table-hover">
                    <thead>
                        <tr class="cal_head" style="font-size: 32px">
                            <th>Student ID</th>
                            <th>Student Name</th>
                            <th>Subject</th>
                            <th>Maximum Marks</th>
                            <th>Marks Obtained</th>
                            <th>Grade</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            $desired_exam = $row2['id'];
                            $subject = $row2['subject'];
                            $max_marks = $row2['max_marks'];
                            $query = "SELECT marks FROM school.results WHERE results.s_id='$student' AND results.e_id='$desired_exam'";
                            $result3 = mysqli_query($con, $query)or die(mysqli_error($con));
                            $row3 = mysqli_fetch_array($result3);
                            $marks = $row3['marks'];
                            $query5="SELECT name from school.students WHERE students.roll_number='$student'";
                            $result5 = mysqli_query($con, $query5)or die(mysqli_error($con));
                            $row5 = mysqli_fetch_array($result5);
                            $name = $row5['name'];
                            if(isset($marks)) {
                            ?>
                            <tr class="cal_body">
                                <td><?php echo $student; ?></td>
                                <td><?php echo $name; ?></td>
                                <td><?php echo $subject; ?></td>
                                <td><?php echo $max_marks; ?></td>
                                <td><?php echo $marks; ?></td>
                                <td><?php
                                    if ($row3['marks'] * 100 / $row2['max_marks'] >= 90) {
                                        echo 'A';
                                    } else if ($row3['marks'] * 100 / $row2['max_marks'] >= 80) {
                                        echo 'B';
                                    } else if ($row3['marks'] * 100 / $row2['max_marks'] >= 70) {
                                        echo 'C';
                                    } else if ($row3['marks'] * 100 / $row2['max_marks'] >= 60) {
                                        echo 'D';
                                    } else {
                                        echo 'F';
                                    }
                                    ?></td>
                                <?php if (isset($_SESSION['admin_id'])) { ?>
                                <td><a href="update_result.php?sid=<?php echo $student; ?>&eid=<?php echo $desired_exam; ?>"><span class="glyphicon glyphicon-pencil"></span></a>   <a href="result_del_submit.php?sid=<?php echo $student; ?>&eid=<?php echo $desired_exam; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                                <?php } ?>
                            </tr>
                            <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php
            if(isset($_SESSION['admin_id'])) { ?>
            <center>
                <a href="add_result.php?group=<?php echo $group; ?>&student=<?php echo $student; ?>">
                    <button class="btn btn-success" style="margin-right: 15px"><p class="cal_btn">Add a Result</p></button>
                </a>
            </center>
            <?php } ?>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>  