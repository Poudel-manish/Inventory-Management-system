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
  <div class="sidebar" style="cursor: pointer;">
    <div id="logo-section"> IMS </div>
    <div class="sidebar-options">
      <ul>
        <li><a href="../dashbord/dashbord.php" id="dashbord-link">Dashboard</a></li>
        <li><a href="../dashbord/productList.php" id="productlist-link">Products</a></li>
        <li><a href="../dashbord/addOrder.php" id="orders-link">Orders</a></li>
        <li><a href="../dashbord/productList.php" id="product-link">productList</a></li>
        <li><a href="../dashbord/sells.php" id="sells-link">sells</a></li>
        <li><a href="admin.php" id="admin-link">Admin</a></li>
      </ul>

    </div>
    <!-- JavaScript file -->
    <script src="frontend.js"></script>
</body>

</html>