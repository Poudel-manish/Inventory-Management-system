<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="forgot-password.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="forgot-password-box">
        <h2>Forgot Password</h2>
        <p> <h4> Your Email.</h4></p>

        <form action="reset_password.php" method="POST">
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Enter your email address" required>
            </div>
            <button type="submit" class="reset-button">Submit</button>
        </form>

        <div class="back-to-login-link">
            Remembered your password? <a href="login.php">Log In</a>
        </div>
    </div>
</body>

</html>