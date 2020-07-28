<?php

require("includes/common.php");

$sid=$_GET['sid'];
$eid=$_GET['eid'];

$delete_query="DELETE FROM school.results WHERE results.e_id='$eid' AND results.s_id='$sid'";
$delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:results.php');
?>