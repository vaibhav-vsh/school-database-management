<?php

require("includes/common.php");

$subject1=$_GET['subject1'];
$eg=$_GET['eg'];

$delete_query="DELETE FROM school.exams WHERE exams.subject='$subject1' AND exams.exam_group='$eg'";
mysqli_query($con,'SET foreign_key_checks = 0');
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
mysqli_query($con,'SET foreign_key_checks = 1');
header('location:exams.php');
?>