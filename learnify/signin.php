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
  <title> Sign In</title>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  <main>
    <section id="signin" class="container">
      <h1 class="form-title">Welcome back</h1>
      <form id="signIn" method="post" action="register.php">
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
      
        <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>
      <?php 
            if(isset($error_message)) {
                echo "<p class='error-message'>$error_message</p>"; // Display error message if exists
            }
        ?>
      <div class="links">
        <p>don't have an account?</p>
        <a href="signup.php">Sign up</a>
        </div>
    </section>
  </main>

</body>
</html>
