<?php

require("includes/common.php");

$name1=mysqli_real_escape_string($con,$_GET['name1']);

$delete_query="DELETE FROM school.events WHERE events.name='$name1'";
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:calendar.php');
?>