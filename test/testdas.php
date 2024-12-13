
<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <div class="sidebar">
            <h2>Admin Panel</h2>
            <ul>
                <li><a href="../stock/dashbord/addOrder.php" id="orders-link">Orders</a></li>
                <li><a href="productList.php" id="productlist-link">Products</a></li>
                <li><a href="admin.php" id="admin-link">Admin</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <div class="header">
                <h1>Welcome to the Dashboard</h1>
                <p>Manage orders, products, and admin settings here.</p>
            </div>
            <div class="content">
                <h2>Dashboard Content</h2>
                <p>Select a section from the sidebar to get started.</p>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>