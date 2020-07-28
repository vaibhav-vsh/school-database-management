<?php

require("includes/common.php");

if($_GET['e']=='u') {
    $exam_type='unit tests';
}
else if($_GET['e']=='h') {
    $exam_type='half yearly';
}
else if($_GET['e']=='f') {
    $exam_type='finals';
}
$date1=$_POST['date'];
$subject=$_POST['subject'];
$date = date("Y-m-d", strtotime($date1));

$select_query5="SELECT subject from school.exams WHERE exams.exam_group='$exam_type'";
$select_query_result5 = mysqli_query($con, $select_query5) or die(mysqli_error($con));
while($row5= mysqli_fetch_array($select_query_result5)) {
    if($row5['subject']===$subject) {
        header('location: exam_error.php');
        exit();
    }
}

if($exam_type=='unit tests') {
$insert_query2 = "INSERT INTO school.exams (subject,max_marks,duration,date,exam_group) values ('$subject','30','1','$date','unit tests')";
}
else if($exam_type=='half yearly') {
$insert_query2 = "INSERT INTO school.exams (subject,max_marks,duration,date,exam_group) values ('$subject','50','2','$date','half yearly')";
}
else if($exam_type=='finals') {
$insert_query2 = "INSERT INTO school.exams (subject,max_marks,duration,date,exam_group) values ('$subject','100','3','$date','finals')";
}
$insert_query_result2 = mysqli_query($con, $insert_query2) or die(mysqli_error($con));

header('location: exams.php');
?>