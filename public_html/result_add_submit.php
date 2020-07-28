<?php

require("includes/common.php");

$group=$_GET['group'];
$student=$_GET['student'];
$subject=$_POST['subject'];
$marks=$_POST['marks'];

$select_query="SELECT id from school.exams WHERE exams.subject='$subject' AND exams.exam_group='$group'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row8= mysqli_fetch_array($select_query_result);
$e_id=$row8['id'];

$select_query5="SELECT e_id from school.results WHERE results.s_id='$student'";
$select_query_result5 = mysqli_query($con, $select_query5) or die(mysqli_error($con));
while($row5= mysqli_fetch_array($select_query_result5)) {
    if($row5['e_id']===$e_id) {
        header('location: result_error.php');
        exit();
    }
}

$insert_query2 = "INSERT INTO school.results (s_id,e_id,marks) values ('$student','$e_id','$marks')";
$insert_query_result2 = mysqli_query($con, $insert_query2) or die(mysqli_error($con));

header('location: results.php');
?>