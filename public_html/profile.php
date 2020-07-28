<?php
require("includes/common.php");
if (isset($_SESSION['student_roll'])) {
    $roll = $_SESSION['student_roll'];
    $query = "SELECT name,email,grade,section,mobile FROM school.students WHERE students.roll_number='$roll'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $grade = $row['grade'];
    $section = $row['section'];
    $mobile = $row['mobile'];
} elseif (isset($_SESSION['admin_id'])) {
    $id = $_SESSION['admin_id'];
    $query = "SELECT name,email,mobile FROM school.admin WHERE admin.id='$id'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
    $email = $row['email'];
    $mobile = $row['mobile'];
}
?>
<!DOCTYPE html>
<!--
Profile page for Trinity High School
-->
<html>
    <head>
        <title>Profile</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
            <?php
            include 'includes/header.php';
            ?>
            <div class="back_image3">
                <img src="images/profile.jpg">
            </div>
            <div class="container">
                <div class="panel panel-default" style="margin-top: 90px">
                    <div class="panel-heading pro_head">
                        <center>
                            Profile
                        </center>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <?php if (isset($_SESSION['student_roll'])) { ?>
                                <div class="col-xs-6 pro_col">
                                    <p class="pro_name">Roll Number<br>Name<br>E-mail<br>Grade<br>Section<br>Mobile</p>
                                </div>
                                <div class="col-xs-6 pro_col">
                                    <p class="pro_val"><?php echo nl2br("$roll\n$name\n$email\n$grade\n$section\n$mobile"); ?></p>
                                </div>
                                <?php
                            } elseif (isset($_SESSION['admin_id'])) {
                                ?>
                                <div class="col-xs-6 pro_col">
                                    <p class="pro_name">Admin ID<br>Name<br>E-mail<br>Mobile</p>
                                </div>
                                <div class="col-xs-6 pro_col">
                                    <p class="pro_val"><?php echo nl2br("$id\n$name\n$email\n$mobile"); ?></p>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>
