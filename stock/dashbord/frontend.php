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
<<<<<<< HEAD
<link rel="stylesheet" href="style.css">
<!-- <link rel="stylesheet" href="dropdown.css"> -->
=======
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="dropdown.css">
>>>>>>> f8ba5c83a007bd28a28e30748c0e16be3e7d7dc8



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Product Dashboard</title>
</head>

<body>

<<<<<<< HEAD
  <div class="sidebar" style="cursor: pointer;">
  <!-- <div class="sidebar-options">
    <div class="sidebar-option" onclick="showSection('dashboard')"><i class="fa-solid fa-gauge"></i>Dashboard</div>
    <div class="sidebar-option" onclick="showSection('productList')"><i class="fa-solid fa-cart-shopping"></i>Product List</div>
    <div class="sidebar-option" onclick="showSection('order')"><i class="fa-solid fa-clipboard-list"></i>Order</div>
    <div class="sidebar-option" onclick="showSection('addProduct')"><i class="fa-solid fa-plus"></i>Add Product</div>
    <div class="sidebar-option" onclick="showSection('sells')"><i class="fa-solid fa-tags"></i>Sells</div>
    <div class="sidebar-option" onclick="showSection('admin')"><i class="fa-solid fa-user-tie"></i>Admin</div>
    <div class="sidebar-option" onclick="logout()"><i class="fa-solid fa-right-from-bracket"></i>Log out</div>
  </div> -->
  
</div>

=======
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
>>>>>>> f8ba5c83a007bd28a28e30748c0e16be3e7d7dc8

  <!-- Main content area -->
  <!-- <div class="content"> -->
    <!-- Dashboard Section -->
    <!-- <div id="dashboard" class="content-section active">
      <h1>Dashboard</h1>
      <p>Welcome to the Dashboard</p>
    </div> -->

<<<<<<< HEAD
   <?php
// include './productList.php';
// include '../dashbord/order.php';
// include './addProduct.php';
// include './sells.php';
//  include './admin.php';
// require './dashbord.php';
require './dashboard.php';
require './productList.php';
=======
    <?php
    include 'productList.php';
    include 'addorder.php';
    include 'addProduct.php';
    include 'sells.php';
    //  include 'admin.php';
>>>>>>> f8ba5c83a007bd28a28e30748c0e16be3e7d7dc8

    ?>

<<<<<<< HEAD
  <!-- JavaScript file -->
  <script src="frontend.js"></script>
  <script>
     function showSection(sectionId) {
    // Hide all sections
    const sections = document.querySelectorAll(".content-section");
    sections.forEach((section) => section.classList.remove("active"));

    // Show the selected section
    const targetSection = document.getElementById(sectionId);
    if (targetSection) {
      targetSection.classList.add("active");
    }
  }
  </script>
=======

    <p>hi</p>

    <!-- JavaScript file -->
    <script src="frontend.js"></script>
>>>>>>> f8ba5c83a007bd28a28e30748c0e16be3e7d7dc8
</body>

</html>