<?php
session_start();
include("connect.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Dashboard Panel</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="images/logo.png" alt="">
            </div>

            <span class="logo_name">Learnify</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="main.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="learning.html">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">My learning</span>
                </a></li>
                <li><a href="wishlist.html">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Wishlist</span>
                </a></li>
                <li><a href="completed.html">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Completed</span>
                </a></li>
                <li><a href="profile.php">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Profile</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <img src="images/profile.jpg" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <span class="text">Most Popular Certificates</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <img src="images/course.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification: cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box2">
                        <img src="images/course2.jpg" alt="course">
                        <span class="text">IBM Full Stack Software Developer</span>
                   
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course3.jpg" alt="course">
                        <span class="text">Architecting with Google Compute Engine</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course4.jpg" alt="course">
                        <span class="text">Architecting with Google Compute Engine</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                </div>
            </div>

            <div class="overview">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="boxes">
                    <div class="box box1">
                        <img src="images/course5.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box2">
                        <img src="images/course6.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course7.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course8.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                </div>

            </div>
            <div class="overview">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="boxes">
                    <div class="box box3">
                        <img src="images/course9.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course4.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course10.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course11.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                </div>
                
            </div>

            <div class="overview">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="boxes">
                    <div class="box box3">
                        <img src="images/course12.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course5.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                    <div class="box box3">
                        <img src="images/course9.jpg" alt="course">
                        <span class="text">Preparing for google cloud certification:<br>cloud devops engineer</span>
                        <div class="course-details">
                            <span><b>Skill Level:</b> Beginner</span>
                            <span><b>Type:</b> certificate</span>
                        </div>
                          <a href="#" class="btn">Enroll Now</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <footer>
        <hr style="margin:20px;">
        <p>© 2024 Yosser Ghrairi. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>