if(isset($_POST['submit']))
{
    $sqli="insert into login" where 
}


<!DOCTYPE html>
<html>

<head>
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
        <div class="input-container">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Username">
        </div>

        <div class="input-container">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password">
        </div>
        <div class="user">
            <label for="category">Select Role:</label>
            <select id="user" name="user">
                <option value="default">Employee </option>
                <option value="admin">Admin</option>
                <option value="maager">manager </option>
            </select>
        </div>
        <br>
        <div class="actions">
            <div class="login-btn">

                <button class="login-button" name ="submit" id="subit" class="submit">Login</button>
            </div>
            <div class="actions-reg">
                <a href="forgotpassword.php" class="forgot-password">Forgot password?</a>
                <div class="sign-up">
                    Don't have an account? <a href="registration.php">Sign Up</a>
                </div>
            </div>
        </div>

    </div>

    <!-- Add Font Awesome for icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>

</html>