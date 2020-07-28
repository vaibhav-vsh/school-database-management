<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
Log-In page for the Trinity High School
-->
<html>
    <head>
        <title>Log-In</title>
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
                <img src="images/login.jpg">
            </div>
            <div class="row container-fluid" style="margin-top: 140px">
                <div class="col-xs-1"></div>
                <div class="col-xs-4">
                    <div class="panel panel-info">
                        <div class="panel-heading login_header">Student Log-In</div>
                        <div class="panel-body">
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <label for="student_roll" class="login_body">Student ID</label>
                                    <input class="form-control" type="text" name="student_roll">
                                </div>
                                <div class="form-group">
                                    <label for="s_password" class="login_body">Password</label>
                                    <input class="form-control" type="password" name="s_password">
                                </div>
                                <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Log-In</p></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1 divider"></div>
                <div class="col-xs-1"></div>
                <div class="col-xs-4">
                    <div class="panel panel-success">
                        <div class="panel-heading login_header">Admin Log-In</div>
                        <div class="panel-body">
                            <form action="login_submit.php" method="POST">
                                <div class="form-group">
                                    <label for="admin_id" class="login_body">Admin ID</label>
                                    <input class="form-control" type="text" name="admin_id">
                                </div>
                                <div class="form-group">
                                    <label for="a_password" class="login_body">Password</label>
                                    <input class="form-control" type="password" name="a_password">
                                </div>
                                <button class="btn btn-success" type="submit" name="submit"><p class="log_btn">Log-In</p></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-xs-1"></div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>
