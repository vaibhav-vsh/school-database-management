<footer>
    <div class="container">
        <div class="row container">
            <div class="col-xs-6">
                <p class="foot_head">Quick Links</p><br>
                <?php if (isset($_SESSION['student_roll']) or isset($_SESSION['admin_id'])) { ?>
                    <ul class="foot_body">
                        <li><a style="text-decoration: none; color: inherit" href="profile.php">Profile</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="events.php">Events</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="calendar.php">Calendar</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="exams.php">Exams</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="results.php">Results</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="about_us.php">About Us</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="logout.php">Log-Out</a></li>
                    </ul>
                <?php } else {
                    ?>
                    <ul class="foot_body">
                        <li><a style="text-decoration: none; color: inherit" href="register.php">Register</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="login.php">Log-In</a></li>
                        <li><a style="text-decoration: none; color: inherit" href="about_us.php">About Us</a></li>
                    </ul>
                <?php } ?>
            </div>
            <div class="col-xs-6">
                <p class="foot_head">Contact Us</p><br>
                <p class="foot_body">Trinity High School<br>
                    D – 46B, Near Golf Course Metro Station,<br>
                    Sector 39, Gautam Buddh Nagar,<br> 
                    Noida, Uttar Pradesh 201301.<br>
                    Contact: +91 1234567890
                </p>
            </div>
        </div>
    </div>
</footer>