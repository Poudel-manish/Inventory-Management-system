<?php
session_start();
include '../db/connect.php';

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare the query
    $sql = "SELECT * FROM (
                SELECT company_id AS id, email, password, 'admin' as role FROM companies
                UNION
                SELECT user_id AS id, email, password, role FROM users
            ) as all_users WHERE email = ?";

    // Prepare and bind parameters
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("s", $email); // "s" means string type
        $stmt->execute();
        $result = $stmt->get_result();

        // Check if email exists
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify the password
            if ($password === $user['password']) { // Plain text password comparison
                // Password is correct, start session and store user data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                if (isset($user['company_id'])) {
                    $_SESSION['company_id'] = $user['company_id'];
                } else {
                    $_SESSION['company_id'] = $user['id']; // For admin users
                }

                // Redirect to dashboard or home page
                header('Location: ../dashbord/website.php');
                exit;
            } else {
                echo "<script>alert('Invalid email or password');</script>";
            }
        } else {
            echo "<script>alert('Invalid email or password');</script>";
        }
    } else {
        die("Error preparing statement: " . $conn->error);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .actions {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }
    </style>
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

            <br>
            <div class="actions">
                <div class="login-btn">
                    <button class="login-button" name="submit" type="submit">Login</button>
                </div>
                <div class="actions-reg">
                    <a href="forgotpassword.php" class="forgot-password">Forgot password?</a>
                    <div class="sign-up">
                        Don't have an account? <a href="registration.php">Sign Up</a>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <!-- Add Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>