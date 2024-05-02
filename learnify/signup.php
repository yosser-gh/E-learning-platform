<?php
session_start(); 
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : null;
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sign up</title>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
  <main>
    <section id="signup" class="container">
      <h1 class="form-title">Welcome</h1>
      <form id="signUp" method="post" action="register.php">
      <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           <label for="fname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            <label for="lName">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
       <?php 
            if(isset($error_message)) {
                echo "<p class='error-message'>$error_message</p>"; // Display error message if exists
            }
        ?>
      </form>
      <div class="links">
      <p>Already have an account ?</p>
      <a href="signin.php">Sign in</a>
      </div>
    </section>
  </main>
  <script>
    // Get the sign-up form
    const signinForm = document.getElementById('signup-form');
    
    // Add submit event listener to the form
    signinForm.addEventListener('submit', function(event) {
      event.preventDefault();
      window.location.href = "main.html";
    
    });
  </script>
</body>
</html>