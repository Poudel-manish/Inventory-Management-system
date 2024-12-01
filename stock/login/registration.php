<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include 'connect.php';
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];

    $sql="insert into `user` where fullname='$fullname'";

    // Use the correct variable name and handle errors properly
    $sqli= "INSERT INTO `user` (fullname, password) VALUES ('$fullname', '$password')";
    $result = mysqli_query($conn, $sqli);

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
    <title>Registration Form</title>
    <link rel="stylesheet" href="registration.css">
</head>
<body>

<section class="vh-100">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-9 col-lg-7 col-xl-6">
        <div class="card" style="border-radius: 15px;">
          <div class="card-body p-5">
            <h2 class="text-uppercase text-center mb-5">Create an account</h2>
            <form action="registration.php" method="post">
              <div class="form-outline mb-4">
                <input type="text" id="name" class="form-control form-control-lg" name="fullname" placeholder="Enter your User Name" />
              </div>
        
              <div class="form-outline mb-4">
                <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Password" />
              </div>
             
 
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success btn-lg gradient-custom-4 text-body">Register</button>
              </div>
              <p class="text-center text-muted mt-4 mb-0">Already have an account? <a href="login.php" class="text-body"><u>Login here</u></a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>
