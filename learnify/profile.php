<?php
session_start(); // Start the session if not already started
include("connect.php");
// Check if the user is logged in
if(!isset($_SESSION['email'])) {
    // If not logged in, redirect to the login page
    header("Location: signin.php");
    exit();
}
// Retrieve user details from the database based on the email stored in the session
$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email='$email'";
$result = $conn->query($sql);

if($result->num_rows > 0) {
    // Fetch user details
    $row = $result->fetch_assoc();
    $name = $row['firstName'] . ' ' . $row['lastName'];
    $email = $row['email'];
    $job = $row['job'];
    $place = $row['company'];
} else {
    // If user not found in the database, display an error message
    echo "Error: User not found.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="profile.css">
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
                <li><a href="whishlist.html">
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
        <div class="profile-section">
            <div class="container">
                <div class="profile-info">
                    <div class="profile-avatar">
                        <img src="images/profile.jpg" alt="Profile Picture">
                    </div>
                    <div class="profile-details">
                        <?php 
                        echo"<h1>$name</h1>";
                        echo"<p>$email</p>";
                        echo"<p>$job</p>";
                        echo"<p>$place</p>";
                        ?>
                    </div>
                </div>
                
                <div class="settings-section">
                    <h2>Account Settings</h2>
                    <div class="setting">
                        <h3>Account Information</h3>
                        <p>Update your profile information, such as name, email, and password.</p>
                        <button class="edit-setting-btn">Edit</button>
                    </div>
                    <div id="edit-form" style="display:none;">
                        <form method="post" action="update_profile.php">
                            <input type="text" name="new_name" placeholder="New Name" required>
                            <input type="email" name="new_email" placeholder="New Email" required>
                            <button type="submit">Save</button>
                        </form>
                    </div>
                    
                    <div class="setting">
                        <h3>Notification Preferences</h3>
                        <p>Customize your notification settings for emails, alerts, or updates.</p>
                        <button class="edit-setting-btn">Edit</button>
                    </div>
                    
                    <div class="setting">
                        <h3>Privacy Settings</h3>
                        <p>Control the visibility of your profile and activities to others.</p>
                        <button class="edit-setting-btn">Edit</button>
                    </div>
                    
                    <div class="setting">
                        <h3>Language Preferences</h3>
                        <p>Choose your preferred language for the platform.</p>
                        <button class="edit-setting-btn">Edit</button>
                    </div>
                
                    <div class="setting">
                        <h3>Security Settings</h3>
                        <p>Enable two-factor authentication or manage trusted devices for added security.</p>
                        <button class="edit-setting-btn">Edit</button>
                    </div>
                    
                    <div class="setting">
                        <h3>Help & Support</h3>
                        <p>Access FAQs, support articles, or contact options for assistance.</p>
                        <button class="edit-setting-btn">Edit</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script src="script.js"></script>

</body>
</html>