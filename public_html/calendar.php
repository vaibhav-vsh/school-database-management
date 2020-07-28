<?php
require("includes/common.php");
$query = "SELECT name,place,date FROM events";
$result1 = mysqli_query($con, $query)or die(mysqli_error($con));
?>
<!DOCTYPE html>
<!--
Calendar Page for Trinity High School
-->
<html>
    <head>
        <title>Events Calendar</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>
    <body>
        <div class="content">
            <?php
            include 'includes/header.php';
            ?>
            <div class="container" style="margin-bottom: 80px">
                <table class="table table-hover">
                    <thead>
                        <tr class="cal_head">
                            <th>Date</th>
                            <th>Event</th>
                            <th>Place</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_assoc($result1)) {
                            ?>
                            <tr class="cal_body">
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['place']; ?></td>
                                <?php if (isset($_SESSION['admin_id'])) { ?>
                                    <td><a href="update_cal.php?name1=<?php echo $row['name']; ?>"><span class="glyphicon glyphicon-pencil"></span></a>   <a href="cal_del_submit.php?name1=<?php echo $row['name']; ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                                <?php } ?>    
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <?php if (isset($_SESSION['admin_id'])) { ?>
                <center>
                    <a href="add_cal.php">
                        <button class="btn btn-success" style="margin-right: 15px"><p class="cal_btn">Add an event</p></button>
                    </a>
                </center>
            <?php } ?>
        </div>
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>