<?php

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Inventory Management System</title>
    <link rel="stylesheet" href="login.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <script defer src="login.js"></script>
  </head>
  <body>
    <div class="whole">
      <div id="header">
        <a href="home.html" id="logo-link">
          <h1>IMS</h1>
          <p>Inventory Management System</p>
        </a>
      </div>
      <div class="login-container">
        <form class="login-form">
          <h2>Login</h2>
          <div class="input-group">
            <label for="username">Username</label>
            <input   type="text"  id="username"  placeholder="Enter your username" name="fullname"  required />
          </div>
          <div class="input-group password-group">
            <label for="password">Password</label>
            <input  type="password"  id="password" placeholder="Enter your password" required  name="password"/> <i  class="far fa-eye"  id="togglePassword"  style="cursor: pointer"  ></i>
          </div>
          <button type="submit">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
