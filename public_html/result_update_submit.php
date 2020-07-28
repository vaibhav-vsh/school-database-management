<?php

require("includes/common.php");

$eid=$_GET['eid'];
$sid=$_GET['sid'];
$marks=$_POST['marks'];


$update_query="UPDATE school.results SET marks='$marks' WHERE results.e_id='$eid' AND results.s_id='$sid'";
$update_query_result= mysqli_query($con, $update_query) or die(mysqli_error($con));
header('location:results.php');
?>