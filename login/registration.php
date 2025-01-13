<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  include '../db/connect.php';
  $company_id = $_POST['company_id'];
  $company_name = $_POST['company_name']; 
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $password = $_POST['password'];
  


  $sqli = "INSERT INTO companies(company_id, company_name, email, phone, address, password)
             VALUES ('$company_id', '$company_name','$email', '$phone', '$address','$password')";
  $result = mysqli_query($conn, $sqli);
  if ($result) {
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
        <input type="text" name="company_id" id="company_id" placeholder="Company id">
      </div>
      <div class="input-container">
        <i class="fas fa-user"></i>
        <input type="text" name="company_name" id="company_name" placeholder="Company Name">
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
        <i class="fas fa-address"></i>
        <input type="text" name="address" id="address" placeholder="address" required>
      </div>
      <div class="input-container">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
      </div>
     

      <button class="signup-button" id="signup" name="signup">Sign Up</button>
      <div class="login-link">
        Already have an account? <a href="login.php">Log In</a>
      </div>
    </form>
  </div>
</body>

</html>