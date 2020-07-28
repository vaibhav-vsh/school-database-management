<?php

require("includes/common.php");

if ($_POST['student_roll']) {

    $roll = $_POST['student_roll'];
    $password = mysqli_real_escape_string($con,$_POST['s_password']);

// Query checks if the id and password are present in the database.
    $query = "SELECT roll_number FROM school.students WHERE students.roll_number='$roll' AND students.password='$password'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
// If the id and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        header('location: error.php');
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['student_roll'] = $row['roll_number'];
        header('location: index.php');
    }
} else if ($_POST['admin_id']) {
    $id = $_POST['admin_id'];
    $password = mysqli_real_escape_string($con,$_POST['a_password']);

// Query checks if the id and password are present in the database.
    $query = "SELECT id, email FROM school.admin WHERE admin.id='$id' AND admin.password='$password'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $num = mysqli_num_rows($result);
// If the id and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
    if ($num == 0) {
        header('location: error.php');
    } else {
        $row = mysqli_fetch_array($result);
        $_SESSION['admin_id'] = $row['id'];
        header('location: index.php');
    }
}
?>