<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<!--
Index page for Trinity High School
-->
<html>
    <head>
        <title>Welcome To Trinity High School</title>
        <?php
        require 'includes/external.php';
        ?>
    </head>

    <body>
        <div class="content">
        <?php
        include 'includes/header.php';
        ?>
        <div class="back_image">
            <img src="images/school_kids.jpg">
        </div>
        <div class="back_image2">
            <img src="images/school_building.jpg">
        </div>
        <div class="container">
            <div class="jumbotron">
                <center><p class="jumbo_con">Welcome to</p>
                <h1 class="school_name">Trinity High School</h1></center> 
            </div>
            <div class="jumbotron">
                <h1 class="jumbo_head">We strive to achieve.</h1> 
                <p class="jumbo_con">With world-class facilities at your disposal, there can't possibly be a better institution for
                    your young one.</p> 
            </div>
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading index_panel_h"><p class="p_heading_text" style="float: left">Infrastructure</p>
                        <img class="side_image_1" src="images/infrastructure.jpg">
                    </div>
                    <div class="panel-body">
                        <p class="p_body_text">
                            The <b>Trinity</b> campus is divided into six blocks to accommodate Pre Primary, Primary, Middle 
                            and Senior wing. 
                            The blocks contain suitable amenities according to the age group they cater for. <br>
                            All blocks are equipped with firefighting solutions, controlled PA system and emergency staircases.<br> 
                            All classrooms and utility areas are provided with power backup.
                            School offers spacious well lit and ventilated classrooms.<br> 
                            Each class room also has soft boards at the back to serve as the platform to show 
                            the artistic inclination of the students.
                            Each classroom is also equipped with centralized PA system 
                            to provide all students first hand information regarding any change in schedule, 
                            important announcements, Morning Prayer and daily news.
                        </p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading index_panel_h"><p class="p_heading_text" style="float: right">Sports</p>
                        <img class="side_image_2" src="images/sports.jpg">
                    </div>
                    <div class="panel-body">
                        <p class="p_body_text">
                            <b>Trinity High School</b> recognizes the need and importance of games and sports activities 
                            in a student's life. 
                            School provides a variety of games and sports facilities to develop a sound mind and a fit body
                            for all its students.<br>
                            We have lush green grounds for cricket, hockey, football, basket ball , two lawn tennis clay courts, 
                            standard size skating rink and standard size horse riding area, one standard size badminton court, 
                            10 mtr shooting range, chess room , table tennis room and MP hall for Karate.<br> 
                            In addition we have a fully equipped gymnasium and an olympic sized athletic track.
                        </p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading index_panel_h"><p class="p_heading_text" style="float: left">Curriculum</p>
                        <img class="side_image_1" src="images/curriculum.jpg">
                    </div>
                    <div class="panel-body">
                        <p class="p_body_text">
                            <b>Trinity</b> believes in holistic learning approach by giving equal importance to scholastics and 
                            co-scholastic areas. 
                            Our curriculum in scholastic areas is based on core subjects focuses not on providing just knowledge, 
                            but also on the development of concepts, skills and ideas.<br>
                            Students are encouraged to excel in the Music, Dance, Drama, Art, Technology, 
                            Physical Education and Personal, Social and Health Education for an all round holistic development.<br>
                            Smart classes convert an ordinary classroom into an interactive learning experience, 
                            using latest state of the art techniques like Smart Board and digital learning. 
                            We make use of the smart board in all the subjects. With the use of smart classes we allow 
                            our students to question, evaluate, create, communicate and discover.
                        </p>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading index_panel_h"><p class="p_heading_text" style="float: right">Transport</p>
                        <img src="images/transport.jpg">
                    </div>
                    <div class="panel-body">
                        <p class="p_body_text">
                            Keeping in mind the convenience of our parents <b>Trinity</b> provides school transport to selected areas 
                            and sectors.<br>
                            We operate across 47 routes with 30 buses being provided by a leading vendor who has been supplying 
                            the buses since the school began. We also have 17 buses as part of the <b>Trinity</b> fleet and are in the 
                            process of continuing to acquire several more every year. Our routes are planned for main arterial roads 
                            and we do not go into narrower colony roads.<br> 
                            All the buses are air conditioned and the highest levels of safety and security are maintained. 
                            Each bus has staff that includes a driver and helper, a security guard and a teacher till the last stop. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>    
    </body>
</html>
