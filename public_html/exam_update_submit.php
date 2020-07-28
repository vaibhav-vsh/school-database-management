<?php

require("includes/common.php");

$eg=$_GET['eg'];
$subject1=$_GET['subject1'];
$subject=$_POST['subject'];
$date=$_POST['date'];


$update_query="UPDATE school.exams SET subject='$subject',date='$date' WHERE exams.exam_group='$eg' AND exams.subject='$subject1'";
$update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
header('location:exams.php');
?>