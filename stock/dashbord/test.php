<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      min-height: 100vh;
    }
    .sidebar {
      width: 250px;
      background-color: #343a40;
      color: white;
      flex-shrink: 0;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      padding: 10px 15px;
      display: block;
    }
    .sidebar a:hover {
      background-color: #495057;
    }
    .content {
      flex-grow: 1;
      padding: 20px;
    }
  </style>
</head>
<body>

<div class="sidebar">
  <h3 class="text-center py-3">Dashboard</h3>
  <a href="#" class="menu-item" data-page="dashboard">Dashboard</a>
  <a href="#" class="menu-item" data-page="productList">Product List</a>
  <a href="#" class="menu-item" data-page="orders">Orders</a>
  <a href="#" class="menu-item" data-page="addProduct">Add Product</a>
  <a href="#" class="menu-item" data-page="sells">Sells</a>
  <a href="#" class="menu-item" data-page="admin">Admin</a>
  <a href="#" class="menu-item" data-page="logout">Logout</a>
</div>

<div class="content">
  <div id="dashboard" class="page">
    <h2>Welcome to the Dashboard</h2>
    <p>This is the main dashboard page.</p>
  </div>
  <div id="productList" class="page" style="display: none;">
    <h2>Product List</h2>
    <p>Here is the product list.</p>
  </div>
  <div id="orders" class="page" style="display: none;">
    <h2>Orders</h2>
    <p>Manage your orders here.</p>
  </div>
  <div id="addProduct" class="page" style="display: none;">
    <h2>Add Product</h2>
    <p>Use this page to add new products.</p>
  </div>
  <div id="sells" class="page" style="display: none;">
    <h2>Sells</h2>
    <p>View your sales statistics here.</p>
  </div>
  <div id="admin" class="page" style="display: none;">
    <h2>Admin Panel</h2>
    <p>Access admin functionalities here.</p>
  </div>
  <div id="logout" class="page" style="display: none;">
    <h2>Logout</h2>
    <p>You have logged out.</p>
  </div>
</div>

<script>
  const menuItems = document.querySelectorAll('.menu-item');
  const pages = document.querySelectorAll('.page');

  menuItems.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault();

      // Hide all pages
      pages.forEach(page => page.style.display = 'none');

      // Show the selected page
      const pageId = item.getAttribute('data-page');
      document.getElementById(pageId).style.display = 'block';
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
