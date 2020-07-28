<?php

require("includes/common.php");

$name1=$_GET['name1'];
$name=$_POST['name'];
$date=$_POST['date'];
$place=$_POST['place'];


$update_query="UPDATE school.events SET name='$name',place='$place',date='$date' WHERE events.name='$name1'";
$update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
header('location:calendar.php');
?>