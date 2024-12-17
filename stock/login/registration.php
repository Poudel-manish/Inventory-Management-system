<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // include 'connect.php';
  include '../db/connect.php';
  $fullname = $_POST['fullname'];
  $email = $_POST['email'];
  $phoneNumber = $_POST['phoneNumber'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  if ($password !== $cpassword) {
    die("Passwords do not match.");
  }
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql = "insert into `user` where fullname='$fullname'";

  $sqli = "INSERT INTO `user` (fullname, email, phoneNumber, password, cpassword) 
         VALUES ('$fullname', '$email', '$phoneNumber', '$password', '$cpassword')";


  if ($result) {
    echo "Data was inserted";
  } else {
    die(mysqli_error($conn));
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Page</title>
  <link rel="stylesheet" href="reg.css">
  <!-- Add Font Awesome for icons -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
  <div class="signup-box">
    <h2>Sign Up</h2>
    <div class="input-container">
      <i class="fas fa-user"></i>
      <input type="text" placeholder="Full Name" required>
    </div>
    <div class="input-container">
      <i class="fas fa-envelope"></i>
      <input type="email" placeholder="Email Address" required>
    </div>
    <div class="input-container">
      <i class="fas fa-phone"></i>
      <input type="tel" placeholder="Phone Number" required>
    </div>
    <div class="input-container">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Password" required>
    </div>
    <div class="input-container">
      <i class="fas fa-lock"></i>
      <input type="password" placeholder="Confirm Password" required>
    </div>
    <button class="signup-button">Sign Up</button>
    <div class="login-link">
      Already have an account? <a href="login.php">Log In</a>
    </div>
  </div>
</body>

</html>