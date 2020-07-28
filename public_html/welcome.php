<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
Welcome Page for Trinity High School
-->
<html>
    <head>
        <title>Welcome</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
        <?php
        include 'includes/header.php';
        ?>
        <div class="row">
            <div class="col-xs-3"></div>
            <div class="col-xs-6 panel panel-default">
                <div class="panel-heading">
                    <center><img src="images/success.jpg"></center>
                </div>
                <div class="panel-body">
                    <?php if ($_GET['t']==0) { ?>
                    <center><h3 class="welcome_head">Success!</h3>
                    <p class="welcome_body">You have successfully registered as a student.<br>
                            Your Student ID is <?php echo $_GET['roll']; ?>.<br>
                            Use it to log-in to your account.<br>
                            Click <a href=login.php>here</a> to go to log-in page.
                    </p></center>    
                        <?php
                    } else if ($_GET['t']==1) {
                        ?>
                    <center><h3 class="welcome_head">Success!</h3>
                        <p class="welcome_body">You have successfully registered as an administrator.<br>
                            Your Admin ID is <?php echo $_GET['id']; ?>.<br>
                            Use it to log-in to your account.<br>
                            Click <a href="login.php">here</a> to go to log-in page.
                        </p></center>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xs-3"></div>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>
