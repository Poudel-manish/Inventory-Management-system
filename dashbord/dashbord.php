<?php
include '../db/connect.php';

// Fetch total inventory value
$inventoryResult = mysqli_query($conn, "SELECT SUM(total_price) AS total_inventory_value FROM products");
$inventory = mysqli_fetch_assoc($inventoryResult)['total_inventory_value'];

// Fetch total orders value
$ordersResult = mysqli_query($conn, "SELECT SUM(total_price) AS total_orders_value FROM orders");
$orders = mysqli_fetch_assoc($ordersResult)['total_orders_value'];

// Fetch total sales value
$salesResult = mysqli_query($conn, "SELECT SUM(total_price) AS total_sales_value FROM sales");
$sales = mysqli_fetch_assoc($salesResult)['total_sales_value'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style/dashbord.css">
</head>

<body>
    <div class="dashboard-container">
        <h1>Dashboard Overview</h1>
        <div class="dashboard-cards">
            <div class="card inventory">
                <h3>Total Inventory Value</h3>
                <p><?php echo number_format($inventory, 2); ?></p>
            </div>
            <div class="card orders">
                <h3>Total Orders </h3>
                <p><?php echo number_format($orders, 2); ?></p>
            </div>
            <div class="card sales">
                <h3>Total Sales </h3>
                <p><?php echo number_format($sales, 2); ?></p>
            </div>
            <div class="card customer">
                <h3>Total customer </h3>
                <p><?php echo number_format($sales, 2); ?></p>
            </div>
            <div class="card exp">
                <h3>Total expenses </h3>
                <p><?php echo number_format($sales, 2); ?></p>
            </div>
        </div>
    </div>
</body>

</html>

</body>

</html>