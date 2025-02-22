<?php
session_start();
include '../db/connect.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Query to check user in the database using UNION
    $sql = "
    SELECT company_id AS user_id, company_name AS name, email, role, phone, address, password, 'company' AS user_type 
    FROM companies 
    WHERE email = '$email'
    UNION ALL
    SELECT user_id AS user_id, username AS name, email, role, phone, NULL AS address, password, 'user' AS user_type 
    FROM users 
    WHERE email = '$email'
    LIMIT 1
";



    // Execute the query
    $result = mysqli_query($conn, $sql);

    // Check if the user exists
    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if ($password === $user['password']) { // Use `password_verify()` if passwords are hashed
            // Start session and store user data
            // $_SESSION['user_id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['phone'] = $user['phone'];
            $_SESSION['role'] = $user['role'];
            // $_SESSION['user_id'] = $user['id'];

            // Store company-specific data for company users
            if ($user['role'] === 'admin') {
                $_SESSION['user_id'] = $user['user_id'];
            } elseif ($user['role'] === 'manager') {
                $_SESSION['user_id'] = $user['user_id'];
            } elseif ($user['role'] === 'employee') {
                $_SESSION['user_id'] = $user['user_id'];
            }

            // Redirect to home page
            if ($_SESSION['user_id']) {
                header('Location: ../sidebar/home.php');
            }
            exit;
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        echo "<script>alert('Invalid email or password');</script>";
    }
}

// Close the connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <!-- <link rel="stylesheet" href="login.css"> -->
</head>

<body>
    <div class="login-box">
        <h2>Login</h2>
        <form method="POST" action="">
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" name="email" placeholder="Email" required>
            </div>

            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>

            <div class="actions">
                <button name="submit" type="submit">Login</button>
                <div class="child-action">
                    <a href="forgotpassword.php">Forgot password?</a>
                </div>
                <div class="child-action">Don't have an account?<a href="registration.php">Sign Up</a></div>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>