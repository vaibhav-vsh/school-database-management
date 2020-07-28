<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
Registration page for Trinity High School
-->
<html>
    <head>
        <title>Register</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
        <?php
        include 'includes/header.php';
        ?>
        <div class="back_image">
            <img src="images/register.jpg">
        </div>
        <div class="row container-fluid" style="margin-top: 140px">
            <div class="col-xs-1"></div>
            <div class="col-xs-4">
                <div class="panel panel-info">
                    <div class="panel-heading login_header">Student Register</div>
                    <div class="panel-body">
                        <form action="register_submit.php" method="POST">
                        <div class="form-group">
                            <label for="s_name" class="login_body">Name</label>
                            <input class="form-control" type="text" name="s_name">
                        </div>
                        <div class="form-group">
                            <label for="s_email" class="login_body">E-mail</label>
                            <input class="form-control" type="text" name="s_email" title="Please enter a valid e-mail address." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <label for="s_password" class="login_body">Password</label>
                            <input class="form-control" type="password" name="s_password" title="Password must be 6 or more characters in length." pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <label for="s_grade" class="login_body">Grade</label>
                            <select class="form-control" name="s_grade">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="s_section" class="login_body">Section</label>
                            <select class="form-control" name="s_section">
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="s_mob" class="login_body">Mobile</label>
                            <input class="form-control" type="text" name="s_mob">
                        </div>
                        <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Register</p></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-1 divider"></div>
            <div class="col-xs-1"></div>
            <div class="col-xs-4">
                <div class="panel panel-success">
                    <div class="panel-heading login_header">Admin Register</div>
                    <div class="panel-body">
                        <form action="register_submit.php" method="POST">
                        <div class="form-group">
                            <label for="a_name" class="login_body">Name</label>
                            <input class="form-control" type="text" name="a_name">
                        </div>
                        <div class="form-group">
                            <label for="a_email" class="login_body">E-mail</label>
                            <input class="form-control" type="text" name="a_email" title="Please enter a valid e-mail address." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
                        </div>
                        <div class="form-group">
                            <label for="a_password" class="login_body">Password</label>
                            <input class="form-control" type="password" name="a_password" title="Password must be 6 or more characters in length." pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <label for="a_mob" class="login_body">Mobile</label>
                            <input class="form-control" type="text" name="a_mob">
                        </div>
                        <button class="btn btn-success" type="submit" name="submit"><p class="log_btn">Register</p></button>
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
