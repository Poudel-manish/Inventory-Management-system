 
    
 <?php
    include '../../db/connect.php';
    session_start();

    // Check if the company ID is set in the session
    if (isset($_SESSION['company_id'])) {
        $company_id = $_SESSION['company_id'];  // Retrieve the company ID from the session
    } else {
        // If the session is not set, you can redirect or show an error message
        die("Company ID is not set.");
    }

    if (isset($_POST['signup'])) {
        $company_id = $_POST['company_id'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $password = $_POST['password']; // Hash the password
        $role = $_POST['role'];



       

            // Insert into the users table
            $sql = "INSERT INTO users (company_id, username, email, phone, password, role)
                VALUES ('$company_id', '$username', '$email', '$phone', '$password', '$role')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Data was inserted');</script>";
            } else {
                die("Error: " . mysqli_error($conn));
            }
        } else {
            echo "<script>alert('Invalid role selected');</script>";
        }
    ?>

 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Create Account</title>
     <link rel="stylesheet" href="account.css">
     <!-- Add Font Awesome for icons -->
     <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
 </head>

 <body>
     <div class="signup-box">
         <h2>Create account</h2>
         <form method="post" action="">
             <div class="input-container">
                 <i class="fas fa-user"></i>
                 <input type="text" name="company_id" id="company_id" placeholder="Company id" required>
             </div>
             <div class="input-container">
                 <i class="fas fa-user"></i>
                 <input type="text" name="username" id="username" placeholder="User Name" required>
             </div>
             <div class="input-container">
                 <i class="fas fa-envelope"></i>
                 <input type="email" name="email" id="email" placeholder="Email Address" required>
             </div>
             <div class="input-container">
                 <i class="fas fa-phone"></i>
                 <input type="tel" name="phone" id="phone" placeholder="Phone Number" required>
             </div>
             <div class="input-container">
                 <i class="fas fa-lock"></i>
                 <input type="password" name="password" id="password" placeholder="Password" required>
             </div>
             <div class="input-container">
                 <i class="fas fa-user-tag"></i>
                 <select name="role" id="role" required>
                     <option value="manager">Manager</option>
                     <option value="employee">Employee</option>
                 </select>
             </div>
             <button class="signup-button" id="signup" name="signup">Create Account</button>
         </form>
     </div>
 </body>

 