<?php

require 'includes/common.php';

if ($_POST['s_email']) {

    $name = $_POST['s_name'];
    $email = mysqli_real_escape_string($con, $_POST['s_email']);
    $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    if (!preg_match($regex_email, $email)) {
        echo 'Enter a valid e-mail address!';
    }
    $password = mysqli_real_escape_string($con, $_POST['s_password']);
    $regex_pass = ".{6,}";
    if (!preg_match($regex_pass, $password)) {
        echo 'Enter a valid password!';
    }
    $grade = $_POST['s_grade'];
    $section = $_POST['s_section'];
    $mob = $_POST['s_mob'];
    $select_query = "SELECT roll_number FROM school.students WHERE students.email='$email'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows = mysqli_num_rows($select_query_result);
    if ($total_rows > 0) {
        header('location:email_error.php');
    } else {
        $insert_query = "INSERT INTO school.students (name,email,password,grade,section,mobile) values ('$name','$email','$password','$grade','$section','$mob')";
        $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        $roll = mysqli_insert_id($con);
        $t = 0;
        header('location:welcome.php?roll=' . $roll . '&t=' . $t);
    }
} else if ($_POST['a_email']) {
    $name = $_POST['a_name'];
    $email = mysqli_real_escape_string($con, $_POST['a_email']);
    $regex_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$";
    if (!preg_match($regex_email, $email)) {
        echo 'Enter a valid e-mail address!';
    }
    $password = mysqli_real_escape_string($con, $_POST['a_password']);
    $regex_pass = ".{6,}";
    if (!preg_match($regex_pass, $password)) {
        echo 'Enter a valid password!';
    }
    $mob = $_POST['a_mob'];
    $select_query = "SELECT id FROM school.admin WHERE admin.email='$email'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    $total_rows = mysqli_num_rows($select_query_result);
    if ($total_rows > 0) {
        header('location:email_error.php');
    } else {
        $insert_query = "INSERT INTO school.admin (name,email,password,mobile) values ('$name','$email','$password','$mob')";
        $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
        $id = mysqli_insert_id($con);
        $t = 1;
        header('location:welcome.php?id=' . $id . '&t=' . $t);
    }
}
?>