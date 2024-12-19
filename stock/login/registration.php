<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  include '../db/connect.php';
  $cid = $_POST['cid'];
  $fullname = $_POST['fullname'];
  $user = $_POST['user'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $cpassword = $_POST['cpassword'];
  if ($password !== $cpassword) {
    echo "<script>alert('Passwords do not match.');</script>";
    header("Location: registration.php");
    exit;
  }

  $sqli = "INSERT INTO regcompany (cid, fullname, user, email, phone, password, cpassword);
             VALUES ('$cid', '$fullname','$user', '$email', '$phone', '$password', '$cpassword')";


  if ($sqli) {
    echo "<script> alert('Data was inserted'); </script>";
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
    <form method="post" action="">
      <div class="input-container">
        <i class="fas fa-user"></i>
        <input type="text" name="cid" id="cid" placeholder="Company id">
      </div>
      <div class="input-container">
        <i class="fas fa-user"></i>
        <input type="text" name="fullname" id="fullname" placeholder="Full Name">
      </div>
      <div class="input-container">
        <i class="fas fa-envelope"></i>
        <lavel> Select user:</lavel>
        <select>
        <option id="user" name="user">Admin</option>
        </select>
      </div>
      <div class="input-container">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email Address" required>
      </div>
      <div class="input-container">
        <i class="fas fa-phone"></i>
        <input type="tel" name="phone" id="phone" placeholder="Phone Number">
      </div>
      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
      </div>
      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
      </div>
      <button class="signup-button" id="signup" name="signup">Sign Up</button>
      <div class="login-link">
        Already have an account? <a href="login.php">Log In</a>
      </div>
    </form>
  </div>
</body>

</html>