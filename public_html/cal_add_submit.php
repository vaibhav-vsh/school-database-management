<?php

require("includes/common.php");

$date1=$_POST['date'];
$name=mysqli_real_escape_string($con,$_POST['name']);
$place=mysqli_real_escape_string($con,$_POST['place']);
$date = date("Y-m-d", strtotime($date1));

$select_query5="SELECT name from school.events";
$select_query_result5 = mysqli_query($con, $select_query5) or die(mysqli_error($con));
while($row5= mysqli_fetch_array($select_query_result5)) {
    if($row5['name']===$name) {
        header('location: event_error.php');
        exit();
    }
}

$insert_query2 = "INSERT INTO school.events (name,place,date) values ('$name','$place','$date')";
$insert_query_result2 = mysqli_query($con, $insert_query2) or die(mysqli_error($con));

header('location: calendar.php');
?>