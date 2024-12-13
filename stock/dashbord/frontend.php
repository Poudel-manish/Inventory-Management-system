<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  require($_SERVER['DOCUMENT_ROOT'] . "/stock/backend/backend.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="dropdown.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Product Dashboard</title>
</head>

<body>

  <!-- Sidebar navigation -->
  <div class="sidebar">


    <div class="sidebar" style="cursor: pointer;">
      <div id="logo-section">
        IMS

      </div>
      <div class="sidebar-options" >

        <div class="sidebar-option " onclick="showSection('dashboard')"><i class="fa-solid fa-gauge"></i>Dashboard</div>
        <div class="sidebar-option" onclick="showSection('productList')"><i class="fa-solid fa-cart-shopping"></i>Product List</div>
        <div class="sidebar-option" onclick="showSection('order')"><i class="fa-solid fa-clipboard-list"></i>Order</div>
        <div class="sidebar-option" onclick="showSection('addProduct')"><i class="fa-solid fa-plus"></i>Add Product</div>
        <div class="sidebar-option" onclick="showSection('sells')"><i class="fa-solid fa-tags"></i>sells</div>
        <div class="sidebar-option" onclick="showSection('admin')"><i class="fa-solid fa-user-tie"></i>Admin</div>
      </div>
    </div>

    <div class="sidebar-option" onclick="logout()"><i class="fa-solid fa-right-from-bracket"></i>Log out</div>

  </div>

  <!-- Main content area -->
  <div class="content">
    <!-- Dashboard Section -->
    <div id="dashboard" class="content-section active">
      <h1>Dashboard</h1>
      <p>Welcome to the Dashboard</p>
    </div>

    <?php
    include 'productList.php';
    include 'addorder.php';
    include 'addProduct.php';
    include 'sells.php';
    //  include 'admin.php';

    ?>


    <p>hi</p>

    <!-- JavaScript file -->
    <script src="frontend.js"></script>
</body>

</html>