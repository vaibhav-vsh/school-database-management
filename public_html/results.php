<?php
require("includes/common.php");
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
            <div class="row container-fluid" style="margin-top: 140px">
            <div class="col-xs-4"></div>
            <div class="col-xs-4">
                <div class="panel panel-info">
                    <div class="panel-heading login_header">Results</div>
                    <div class="panel-body">
                        <form action="show_results.php" method="POST">
                        <div class="form-group">
                            <label for="exam_group" class="login_body">Choose the exam group.</label>
                            <select class="form-control" name="exam_group">
                                <option value="unit tests">Unit Tests</option>
                                <option value="half yearly">Half Yearly</option>
                                <option value="finals">Finals</option>
                            </select>
                        </div>
                        <button class="btn btn-info" type="submit" name="submit"><p class="log_btn">Submit</p></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-4"></div>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>  
    </body>
</html>
