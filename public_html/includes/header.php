<?php
if(isset($_SESSION['student_roll'])) {
    $roll=$_SESSION['student_roll'];
    $query = "SELECT name FROM school.students WHERE students.roll_number='$roll'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
}
elseif (isset($_SESSION['admin_id'])) {
    $id=$_SESSION['admin_id'];
    $query = "SELECT name FROM school.admin WHERE admin.id='$id'";
    $result = mysqli_query($con, $query)or die(mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $name = $row['name'];
}
?>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="index.php">
                <div class="brand">
                    <img class="logo"  src="images/logo.png">
                    Trinity
                </div>
            </a>
        </div>
        <?php
        if(isset($_SESSION['student_roll']) or isset($_SESSION['admin_id'])) { ?>
        <ul class="nav navbar-nav">
            <li><a class="navbar_text2" href="profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a class="navbar_text2" href="events.php"><span class="glyphicon glyphicon-play-circle"></span> Events</a></li>
            <li><a class="navbar_text2" href="calendar.php"><span class="glyphicon glyphicon-calendar"></span> Calendar</a></li>
            <li><a class="navbar_text2" href="exams.php"><span class="glyphicon glyphicon-education"></span> Exams</a></li>
            <li><a class="navbar_text2" href="results.php"><span class="glyphicon glyphicon-equalizer"></span> Results</a></li>
            <li><a class="navbar_text2" href="about_us.php"><span class="glyphicon glyphicon-comment"></span> About Us</a></li>
            <li><a class="navbar_text2" href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log-Out</a></li>
        </ul>
        <p class="welcome_tag">Welcome <?php echo $name; ?></p>
        <?php }
        else { ?>
        <ul class="nav navbar-nav">
            <li><a class="navbar_text" href="register.php"><span class="glyphicon glyphicon-user"></span> Register</a></li>
            <li><a class="navbar_text" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Log-In</a></li>
            <li><a class="navbar_text" href="about_us.php"><span class="glyphicon glyphicon-comment"></span> About Us</a></li>
        </ul>
        <?php } ?>
    </div>
</nav>