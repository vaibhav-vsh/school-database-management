<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
Exams page for Trinity High School
-->
<html>
    <head>
        <title>Exams</title>
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
                <div class="row container" style="padding-top: 80px">
                    <a href="unit_tests.php">
                        <div class="col-xs-4 panel panel-default" style="padding: 0px">
                            <div class="panel-heading event_head" style="text-align: center">Unit Tests</div>
                            <div class="panel-body">
                                <div class="event_img">
                                    <center>
                                    <img src="images/ut.jpg">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="half_yearly.php">
                        <div class="col-xs-4 panel panel-default" style="padding: 0px">
                            <div class="panel-heading event_head" style="text-align: center; font-size: 50px;line-height: 50px;">Half Yearly Examinations</div>
                            <div class="panel-body">
                                <div class="event_img">
                                    <center>
                                    <img src="images/half_year.jpg">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="finals.php">
                        <div class="col-xs-4 panel panel-default" style="padding: 0px">
                            <div class="panel-heading event_head" style="text-align: center; font-size: 50px;line-height: 50px;">Final Examinations</div>
                            <div class="panel-body">
                                <div class="event_img">
                                    <center>
                                    <img src="images/final.jpg">
                                    </center>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>
